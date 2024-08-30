<?php

namespace App\Concerns;

/**
 * Properties and function associated with the value of an input field.
 */
trait FieldValue
{
    /**
     * self::resolveName sets this value.
     */
    private string $_name_resolved;

    /**
     * 🔒 Don't assign this to string. Resolve the name in accessor properties. (We can't make this private because that would mess up the input component.).
     */
    public $name;

    public mixed $value;

    /**
     * Resolves the given field name and value to the actual field value.
     *
     * 1. The old value from the request.
     * 2. The direct value.
     * 3. The value from the entity.
     *
     * Since we are returning an option and there are no side effects, we can make the calculation lazy.
     *
     * @implements \App\Contracts\Inputable::fieldValue
     * @group extensible
     * @group nonary
     *
     * @uses \App\Concerns\FieldValue::resolveName
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Options\fieldValue
     * @uses \App\Strings\isPlainString
     * @uses \App\Strings\trim
     * @uses \App\Strings\unwrap
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @throws \AssertionError
     */
    public function fieldValue(): string
    {
        $key = $this->resolveName();

        $normal_value = \App\Options\fieldValue(
            field_or_value: $this->value,
            key: $key,
        );

        $result_string = (string) match ($normal_value) {
            null => '',
            true => '1',
            false => '0',
            default => \App\Strings\trim(\App\Strings\unwrap($normal_value))
        };

        try {
            // Make sure that no JSON came out.
            \assert(\App\Strings\isPlainString($result_string));
        } catch (\Throwable $exception) {
            \App\Dumping\dumpLabeled([
                'value' => $this->value,
                'key' => $key,
                'normal_value' => $normal_value,
                'result' => $result_string,
            ]);
            throw $exception;
        }

        return $result_string;
    }

    /**
     * @group nonary
     * @group resolving
     *
     * @uses \App\Casts\FieldValue::resolveName
     */
    public function resolveName(): string
    {
        return $this->_name_resolved ??= \App\Casts\FieldValue::resolveName($this->name);
    }
}
