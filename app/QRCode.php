<?php

/**
 * https://dev.to/maxart2501/series/13444.
 */

namespace App;

class QRCode
{
    // One day, we'll compute these values. But not today!
    protected int $codeword_count = 44;

    protected int $data_codeword_count = 28;

    protected string $error_correction_level = 'L'; // low error correction

    protected readonly int $mode;

    public static array $EXP;

    public static array $LOG;

    public function __construct(
        public readonly string $text,
        public readonly int $version = 2,
        public readonly string $size = '200x200',
        public readonly string $color = 'black',
        public readonly string $backgroundColor = 'white',
    ) {
        if (!isset(self::$LOG)) {
            self::$LOG = \array_fill(0, 256, null);
            self::$EXP = \array_fill(0, 256, null);

            for ($exponent = 1, $value = 1; $exponent < 256; ++$exponent) {
                $value = $value > 127 ? (($value << 1) ^ 285) : $value << 1;
                self::$LOG[$value] = $exponent % 255;
                self::$EXP[$exponent % 255] = $value;
            }
        }
    }

    private static function _div($a, $b): int
    {
        return self::$EXP[(self::$LOG[$a] + self::$LOG[$b] * 254) % 255];
    }

    private static function _emptyArray(int $size): array
    {
        return \array_fill(0, $size, 0);
    }

    private static function _getLinePenalty(array $line)
    {
        $count = 0;
        $counting = 0; // To keep trick of which modules we're counting
        $penalty = 0;

        foreach ($line as $cell) {
            if ($cell !== $counting) {
                $counting = $cell;
                $count = 1;
            } else {
                ++$count;

                if ($count === 5) {
                    $penalty += 3;
                } elseif ($count > 5) {
                    ++$penalty;
                }
            }
        }
        return $penalty;
    }

    private static function _mask(int $index, int $row, int $column): bool
    {
        return match ($index) {
            -1 => false,
            0 => (($row + $column) & 1) === 0, // checkerboard
            1 => ($row & 1) === 0, // horizontal stripes
            2 => $column % 3 === 0, // vertical stripes
            3 => ($row + $column) % 3 === 0, // diagonal stripes
            4 => ((($row >> 1) + \floor($column / 3)) & 1) === 0, // "X" pattern
            5 => (($row * $column) & 1) + (($row * $column) % 3) === 0,
            6 => (((($row * $column) & 1) + (($row * $column) % 3)) & 1) === 0,
            7 => (((($row + $column) & 1) + (($row * $column) % 3)) & 1) === 0
        };
    }

    private static function _mul($a, $b)
    {
        return $a && $b ? self::$EXP[(self::$LOG[$a] + self::$LOG[$b]) % 255] : 0;
    }

    private static function _overlay(array &$target, array $incoming, int $start = 0): array
    {
        foreach ($incoming as $index => $value) {
            $target[$index + $start] = $value;
        }
        return $target;
    }

    private static function _placeFixedPatterns(array &$matrix): void
    {
        $size = \count($matrix);

        // Placing the fixed patterns
        // Finder patterns
        foreach ([[0, 0], [$size - 7, 0], [0, $size - 7]] as $pos) {
            self::fillArea($matrix, $pos[0], $pos[1], 7, 7);
            self::fillArea($matrix, $pos[0] + 1, $pos[1] + 1, 5, 5, 0);
            self::fillArea($matrix, $pos[0] + 2, $pos[1] + 2, 3, 3);
        }
        // Separators
        self::fillArea($matrix, 7, 0, 8, 1, 0);
        self::fillArea($matrix, 0, 7, 1, 7, 0);
        self::fillArea($matrix, $size - 8, 0, 8, 1, 0);
        self::fillArea($matrix, 0, $size - 8, 1, 7, 0);
        self::fillArea($matrix, 7, $size - 8, 8, 1, 0);
        self::fillArea($matrix, $size - 7, 7, 1, 7, 0);
        // Alignment pattern
        self::fillArea($matrix, $size - 9, $size - 9, 5, 5);
        self::fillArea($matrix, $size - 8, $size - 8, 3, 3, 0);
        $matrix[$size - 7][$size - 7] = 1;

        // Timing patterns
        for ($pos = 8; $pos < $size - 9; $pos += 2) {
            $matrix[6][$pos] = 1;
            $matrix[6][$pos + 1] = 0;
            $matrix[$pos][6] = 1;
            $matrix[$pos + 1][6] = 0;
        }
        $matrix[6][$size - 7] = 1;
        $matrix[$size - 7][6] = 1;
        // Dark module
        $matrix[$size - 8][8] = 1;
    }

    private static function _polyMul(array $poly1, array $poly2)
    {
        // This is going to be the product polynomial, that we pre-allocate.
        // We know it's going to be `poly1.length + poly2.length - 1` long.
        $coeffs_count = \count($poly1) + \count($poly2) - 1;
        $coeffs = \array_fill(0, $coeffs_count, 0);

        // Instead of executing all the steps in the example, we can jump to
        // computing the coefficients of the result
        for ($index = 0; $index < $coeffs_count; ++$index) {
            $coeff = 0;

            for ($p1index = 0; $p1index <= $index; ++$p1index) {
                $p2index = $index - $p1index;
                // We *should* do better here, as `p1index` and `p2index` could
                // be out of range, but `mul` defined above will handle that case.
                // Just beware of that when implementing in other languages.
                $coeff ^= self::_mul($poly1[$p1index] ?? 0, $poly2[$p2index] ?? 0);
            }
            $coeffs[$index] = $coeff;
        }
        return $coeffs;
    }

    private static function _polyRest(array $dividend, array $divisor)
    {
        $quotientLength = \count($dividend) - \count($divisor) + 1;
        // Let's just say that the dividend is the rest right away
        $rest = $dividend;

        for ($count = 0; $count < $quotientLength; ++$count) {
            // If the first term is 0, we can just skip this iteration
            if ($rest[0]) {
                $factor = self::_div($rest[0], $divisor[0]);
                $subtr = self::_emptyArray(\count($rest));
                self::_overlay($subtr, self::_polyMul($divisor, [$factor]));
                $rest = \array_slice(self::_xor($rest, $subtr), 1);
            } else {
                $rest = \array_slice($rest, 1);
            }
        }
        return $rest;
    }

    private function _textToCodewords(): array
    {
        $codewords = \array_fill(0, $this->codeword_count, null);
        $byteData = $this->getByteData();

        foreach ($byteData as $index => $value) {
            $codewords[$index] = $value;
        }

        foreach ($this->getEDC($byteData, $this->codeword_count) as $index => $value) {
            $codewords[$index + $this->data_codeword_count] = $value;
        }
        return $codewords;
    }

    private static function _xor(array $a, array $b): array
    {
        return \array_map(fn ($a, $b) => $a ^ $b, $a, $b);
    }

    // This is the generator polynomial for the given degree
    // Normally, you'd want to pre-compute or cache these polynomials instead of generating them each time.
    public static function _getGeneratorPoly(int $degree)
    {
        $lastPoly = [1];

        for ($index = 0; $index < $degree; ++$index) {
            $lastPoly = self::_polyMul($lastPoly, [1, self::$EXP[$index]]);
        }
        return $lastPoly;
    }

    public static function fillArea(array &$matrix, int $row, int $column, int $width, int $height, int $fill = 1): void
    {
        $fillRow = \array_fill(0, $width, $fill);

        for ($index = $row; $index < $row + $height; ++$index) {
            // YES, this mutates the matrix. Watch out!
            //   matrix[index].set(fillRow, column);
            foreach (\range(0, $width - 1) as $i) {
                $matrix[$index][$column + $i] = $fill;
            }
        }
    }

    public static function generateSVGFrom(array $matrix): string
    {
        $result = <<<'SVG'
        <svg width="296" height="296" viewBox="0 0 296 296"
		 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events">
<rect x="0" y="0" width="296" height="296" fill="#ffffff"/>
<defs>
<rect id="p" width="8" height="8"/>
</defs>
<g fill="#000000">
SVG;

        foreach ($matrix as $y => $row) {
            foreach ($row as $x => $value) {
                if ($value) {
                    $result .= \sprintf('<use xlink:href="#p" x="%d" y="%d"/>', 32 + $x * 8, 32 + $y * 8);
                }
            }
        }
        $result .= '</g></svg>';
        return $result;
    }

    public function getBestQRCode(): array
    {
        $bestPenalty = \INF;
        $bestMask = -1;
        $bestMatrix = null;

        for ($mask = 0; $mask < 8; ++$mask) {
            $matrix = $this->getQRCode($mask);
            $penalty = self::getPenalty($matrix);

            if ($penalty < $bestPenalty) {
                $bestPenalty = $penalty;
                $bestMask = $mask;
                $bestMatrix = $matrix;
            }
        }
        return $bestMatrix;
    }

    public function getByteData(): array
    {
        $length_bits = $this->getLengthBits();

        $data = \array_fill(0, $this->data_codeword_count, null); // needs to be array of bytes
        $rightShift = (4 + $length_bits) & 7;
        $leftShift = 8 - $rightShift;
        $andMask = (1 << $rightShift) - 1;
        $dataIndexStart = $length_bits > 12 ? 2 : 1;
        $content_length = \strlen($this->text);

        $data[0] = 64 /* byte mode */ + ($content_length >> ($length_bits - 4));

        if ($length_bits > 12) {
            $data[1] = ($content_length >> $rightShift) & 255;
        }
        $data[$dataIndexStart] = ($content_length & $andMask) << $leftShift;

        for ($index = 0; $index < $content_length; ++$index) {
            $byte = \ord($this->text[$index]);
            $data[$index + $dataIndexStart] |= $byte >> $rightShift;
            $data[$index + $dataIndexStart + 1] = ($byte & $andMask) << $leftShift;
        }
        $remaining = $this->data_codeword_count - $content_length - $dataIndexStart - 1;

        for ($index = 0; $index < $remaining; ++$index) {
            $byte = $index & 1 ? 17 : 236;
            $data[$index + $content_length + 2] = $byte;
        }
        return $data;
    }

    /**
     * data: data generated by self::getByteData.
     */
    public static function getEDC(array $data, int $codewords)
    {
        $degree = $codewords - \count($data);
        $messagePoly = self::_emptyArray($codewords);

        foreach ($data as $index => $value) {
            $messagePoly[$index] = $value;
        }
        return self::_polyRest($messagePoly, self::_getGeneratorPoly($degree));
    }

    public function getFormatModules(int $mask_index)
    {
        $errorLevelIndex = \array_search($this->error_correction_level, ['M', 'L', 'H', 'Q'], true);

        $formatPoly = \array_fill(0, 15, 0);
        $formatPoly[0] = $errorLevelIndex >> 1;
        $formatPoly[1] = $errorLevelIndex & 1;
        $formatPoly[2] = $mask_index >> 2;
        $formatPoly[3] = ($mask_index >> 1) & 1;
        $formatPoly[4] = $mask_index & 1;

        $FORMAT_DIVISOR = [1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 1];

        self::_overlay($formatPoly, self::_polyRest($formatPoly, $FORMAT_DIVISOR), 5);

        return self::_xor($formatPoly, [1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0]);
    }

    /**
     * ECI mode folds into byte mode.
     *
     * @group nonary
     */
    public function getLengthBits(): int
    {
        foreach (\config('qr') as $key => $spec) {
            $match = \preg_match($spec['pattern'], $this->text);
            \assert($match !== false, 'invalid pattern: ' . \json_encode($spec['pattern']));

            if ($match) {
                return $spec['length-bits']($this->version);
            }
        }
        \dd($this->text);
    }

    public function getMatrix(int $mask_index = -1)
    {
        $codewords = $this->_textToCodewords();
        $matrix = $this->getNewMatrix();

        // NOTE This generates something that looks like a QR code but is not a valid one.

        $module_sequence_generator = $this->getModuleSequence();
        $index = 0;

        foreach ($codewords as $codeword) {
            // Counting down from the leftmost bit.
            for ($shift = 7; $shift >= 0; --$shift) {
                $bit = ($codeword >> $shift) & 1;
                [$row, $column] = $module_sequence_generator->current();
                $matrix[$row][$column] = $bit ^ (self::_mask($mask_index, $row, $column) ? 1 : 0);
                ++$index;
                [$row, $column] = $module_sequence_generator->next();
            }
        }

        // foreach ($this->getModuleSequence() as $index => [$row, $column]) {
        //         // Each codeword contains 8 modules, so shifting the index to the right by 3 gives the codeword's index.
        //         $codeword = $codewords[$index >> 3] ?? 0;
        //         $bitShift = 7 - ($index & 7);
        //         $moduleBit = ($codeword >> $bitShift) & 1;
        //         $matrix[$row][$column] = $moduleBit; //;
        //     }
        return $matrix;
    }

    public function getModuleSequence(): \Traversable
    {
        $matrix = $this->getNewMatrix();
        $size = $this->getSize();

        // Finder patterns + divisors
        self::fillArea($matrix, 0, 0, 9, 9);
        self::fillArea($matrix, 0, $size - 8, 8, 9);
        self::fillArea($matrix, $size - 8, 0, 9, 8);
        // Alignment pattern - yes, we just place one. For the general
        // implementation, wait for the next parts in the series!
        self::fillArea($matrix, $size - 9, $size - 9, 5, 5);
        // Timing patterns
        self::fillArea($matrix, 6, 9, $this->version * 4, 1);
        self::fillArea($matrix, 9, 6, 1, $this->version * 4);
        // Dark module
        $matrix[$size - 8][8] = 1;

        $rowStep = -1;
        $row = $size - 1;
        $column = $size - 1;
        $index = 0;

        while ($column >= 0) {
            if ($matrix[$row][$column] === 0) {
                yield $index => [$row, $column];
            }

            // Checking the parity of the index of the current module
            if ($index & 1) {
                $row += $rowStep;

                if ($row === -1 || $row === $size) {
                    $rowStep = -$rowStep;
                    $row += $rowStep;
                    $column -= $column === 7 ? 2 : 1;
                } else {
                    ++$column;
                }
            } else {
                --$column;
            }
            ++$index;
        }
    }

    public function getNewMatrix()
    {
        $length = $this->getSize();
        return \array_fill(0, $length, \array_fill(0, $length, 0));
    }

    public static function getPenalty(array $matrix)
    {
        $matrix_flipped = \array_map(null, ...$matrix);

        $penalty = 0;

        foreach ($matrix as $line) {
            $penalty += self::_getLinePenalty($line);
        }

        foreach ($matrix_flipped as $line) {
            $penalty += self::_getLinePenalty($line);
        }

        // 2x2 region penalty
        $size = \count($matrix);

        for ($row = 0; $row < $size - 1; ++$row) {
            for ($column = 0; $column < $size - 1; ++$column) {
                $module = $matrix[$row][$column];

                if (
                    $matrix[$row][$column + 1] === $module
                    && $matrix[$row + 1][$column] === $module
                    && $matrix[$row + 1][$column + 1] === $module
                ) {
                    $penalty += 3;
                }
            }
        }

        // 1011101 penalty
        $RULE_3_PATTERN = [1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0];
        $RULE_3_REVERSED_PATTERN = \array_reverse($RULE_3_PATTERN);

        $pattern_matches_every = function ($sample, $pattern): bool {
            \assert(\count($sample) === \count($pattern));

            foreach ($sample as $index => $value) {
                if ($value !== $pattern[$index]) {
                    return false;
                }
            }
            return true;
        };

        for ($index = 0; $index < $size; ++$index) {
            // Checking the rows...
            $row = $matrix[$index];

            for ($columnIndex = 0; $columnIndex < $size - 11; ++$columnIndex) {
                $slice = \array_slice($row, $columnIndex, 11);

                if ($pattern_matches_every($slice, $RULE_3_PATTERN)) {
                    $penalty += 40;
                }

                if ($pattern_matches_every($slice, $RULE_3_REVERSED_PATTERN)) {
                    $penalty += 40;
                }
            }

            // Checking the columns...
            $column = $matrix_flipped[$index];

            for ($rowIndex = 0; $rowIndex < $size - 11; ++$rowIndex) {
                $slice = \array_slice($column, $rowIndex, 11);

                if ($pattern_matches_every($slice, $RULE_3_PATTERN)) {
                    $penalty += 40;
                }

                if ($pattern_matches_every($slice, $RULE_3_REVERSED_PATTERN)) {
                    $penalty += 40;
                }
            }
        }

        // Balance penalty
        $totalModules = $size * $size;
        $darkModules = \array_reduce(
            $matrix,
            fn ($sum, $line) => $sum + \array_sum($line),
        );
        $percentage = $darkModules * 100 / $totalModules;

        $penalty += \floor(\abs($percentage / 5 - 10) * 10);

        return $penalty;
    }

    public function getQRCode(int $mask_index = -1)
    {
        $matrix = $this->getMatrix($mask_index);
        $this->placeFormatModules($matrix, $mask_index);
        self::_placeFixedPatterns($matrix);
        return $matrix;
    }

    public function getSize()
    {
        return $this->version * 4 + 17;
    }

    // WARNING: this function *mutates* the given matrix!
    public function placeFormatModules(array &$matrix, int $mask_index = -1): void
    {
        if ($mask_index === -1) {
            return;
        }

        $matrix_length = \count($matrix);
        $formatModules = $this->getFormatModules($mask_index);

        self::_overlay($matrix[8], \array_slice($formatModules, 0, 6), 0);
        self::_overlay($matrix[8], \array_slice($formatModules, 6, 8), 7);
        self::_overlay($matrix[8], \array_slice($formatModules, 7), $matrix_length - 8);
        $matrix[7][8] = $formatModules[8];

        // formatModules.subarray(0, 7).forEach(
        //   (cell, index) => ()
        // );
        foreach (\array_slice($formatModules, 0, 7) as $index => $cell) {
            $matrix[$matrix_length - $index - 1][8] = $cell;
        }

        // formatModules.subarray(9).forEach(
        //     (cell, index) => (matrix[5 - index][8] = cell)
        //   );
        foreach (\array_slice($formatModules, 9) as $index => $cell) {
            $matrix[5 - $index][8] = $cell;
        }
    }
}
