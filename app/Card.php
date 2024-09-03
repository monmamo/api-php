<?php

namespace App;



use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Card extends \Illuminate\View\Component
{
    use \App\Concerns\Properties\Name;

    private string $card_type_facade;

    public function cardType(): object
    {
        return $this->card_type_facade ??=  value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes();

            foreach ($attributes as $attribute) {
                if ($attribute->getName() === \App\CardAttributes\CardType::class) {
                    return new class($attribute->getArguments()[0]) {
                        public function __construct(
                            public readonly string $fqn,
                        ) {}
                        public function __call($method, $args)
                        {
                            return call_user_func_array([$this->fqn, $method], $args);
                        }
                    };
                }
            }

            throw new \LogicException();
        });
    }

    /**
     * @group unary
     */
    public static function byCardNumber($card_id): static
    {
        $pieces = explode('-', $card_id);

        return config("cards.{$pieces[0]}.{$card_id}");
    }

    public function image(){return null;}


    /**
     * @group nonary
     */
    public function flavorText(): \Traversable{return new \EmptyIterator;}


    /**
     * @group unary
     */
    public static function path(?string $card_number=null,?string $set=null): string
    {
        $set ??=     explode('-', $card_number)[0];

        return resource_path("cards/{$set}/{$card_number}.blade.php");
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        ob_start();

        $name = $attibutes['name'] ?? 'UNKNOWN';

        $image = $this->image();
        
        $image_uri = isset($image->filename) ? match (true) {
            \str_starts_with($image->filename, 'http') => $image->filename,
            \file_exists("images/{$image->filename}") => 'data:image/jpg;base64,' . \base64_encode(\file_get_contents("images/{$image->filename}")),
            default => null
        } : null;
        
        $image_svg = isset($image->svg) ? match (true) {
            \is_string($image->svg) => $image->svg,
            \is_array($image->svg) => \implode($image->svg),
        } : null;
        
        $image_credit = match (true) {
            $this instanceof \App\Contracts\Card\ImageIsGenerated => 'Generated image',
            !isset($image->credit) => null,
            default => 'Image by ' . $image->credit,
        };
        
        $fullsize = $this instanceof \App\Contracts\Card\FullsizeImage;
        
        $colors = match (true) {
            !isset($colors) => new \stdClass(),
            \is_object($colors) => $colors,
            \is_array($colors) => (object) $colors,
            \is_string($colors) => (object) ['credits' => $colors, 'flavor_text' => $colors],
            \is_null($colors) => new \stdClass(),
        };
        
        \header('Content-Type: image/svg+xml');
        ?>
        
        <svg width="750" height="1050" viewBox="0 0 750 1050" xmlns="http://www.w3.org/2000/svg">
        
            <title><?php echo $name; ?></title>
        
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Roboto");
                @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed");
        
                text {
                    font-family: 'Roboto', sans-serif;
                }
        
                .credit {
                    font-style: normal;
                    font-size: 20px;
                    fill: <?php echo $colors->credits ?? 'white'; ?>;
                }
        
                .flavor {
                    font-style: italic;
                    font-size: 25px;
                    white-space: normal;
                    fill: <?php echo $colors->flavor_text ?? 'white'; ?>;
                }
        
                tspan.bodytext {
                    font-style: normal;
                    font-size: 30px;
                    font-weight: 400;
                    font-style: normal;
                    text-align: center;
                    text-anchor: middle;
                    white-space: normal;
                    fill: black;
                    margin: 5px;
                }
        
                tspan.smallrule {
                    font-style: normal;
                    font-size: 20px;
                    font-weight: 400;
                    font-style: normal;
                    white-space: normal;
                    text-align: center;
                    text-anchor: middle;
                    fill: black;
                }
        
                .cardtype {
                    font-style: normal;
                    font-size: 30px;
                    font-weight: 500;
                    font-style: normal;
                    fill: black;
                }
        
                .cardname {
                    font-family: 'Roboto Condensed';
                    font-style: normal;
                    font-size: 50px;
                    font-weight: 500;
                    font-style: normal;
                    fill: black;
                }
        
                image.hero {
                    position: relative;
                    display: block;
                    text-align: center;
                    height: 450px;
                }
        
                g.svg-hero {
                    position: absolute;
                    transform: translate(121px, 0);
                    margin: 0;
                    scale: 0.87890625;
                    fill: #ffffff;
                    fill-opacity: 1;
                }
            </style>
        
            <defs>
                <filter x="-5%" y="-5%" width="110%" height="110%" id="solid">
                    <feFlood flood-color="white" flood-opacity="85%" result="bg" />
                    <feMerge>
                        <feMergeNode in="bg" />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
            </defs>
        
            <rect x="0" y="0" width="750" height="1050" fill="#000000" />
        
            <?php
            $default_background = <<<'SVG'
        <text id="MON-MA-MO" xml:space="preserve">
        <tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MON</tspan>
        <tspan x="50%" y="657.7" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MA</tspan>
        <tspan x="50%" y="875.4" font-family="Roboto"  text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MO</tspan>
        </text>
        SVG;
        
            echo $fullsize ??  $card_type_fqn::background() ?? $default_background;
        ?>
        
            <text x="375" y="45" class="credit" text-anchor="middle" alignment-baseline="bottom"><?php echo $image_credit; ?></text>
        
            <svg id="main" x="50" y="50" width="650" height="950" viewBox="0 0 650 950">
        
                <?php
            if (!$fullsize) {
                echo $image_svg ?? "<image width=\"650\" height=\"450\" href=\"{$image_uri}\" />";
            }
        
        $stats_recognized = [
            'integrity' => \App\CardStats\Integrity::class,
            'damage_capacity' => \App\CardStats\DamageCapacity::class,
            'level' => \App\CardStats\Level::class,
            'size' => \App\CardStats\Size::class,
            'speed' => \App\CardStats\Speed::class,
        ];
        
        $stats_found = [];
        
        foreach ($stats_recognized as $slug => $fqn) {
            if (isset($$slug)) {
                $stats_found[] = [$$slug, $fqn];
            }
        }
        
        foreach ($subtypes ?? [] as $subtype_name) {
            $stats_found[] = [$subtype_name, "\\Stats\\{$subtype_name}"];
        }
        
        \define('STAT_ICON_HEIGHT', 54);
        ?>
                <rect width="200" height="<?php echo STAT_ICON_HEIGHT * \count($stats_found); ?>" fill="#FFFFFF" fill-opacity="85%" />
                <?php
        
        foreach ($stats_found as $index => $data) {
            [$value, $fqn] = $data;
            ?>
                    <g transform="translate(2,<?php echo STAT_ICON_HEIGHT * $index + 2; ?>) scale(0.09375)" fill="#000000" fill-opacity="1"><?php echo $fqn::icon(); ?></g>
                    <text x="55" y="<?php echo STAT_ICON_HEIGHT * $index + 2; ?>" dy="27" font-size="40px" text-anchor="left" alignment-baseline="middle"><?php echo $value; ?></text>
        
                <?php
        }
        
        $y = 475;
        ?>
        
                <g>
        
                    <text x="50%" y="475" width="100%" height="auto" text-anchor="middle">
                        <?php foreach ( explode('|',$flavor_text??'') as $line) { ?>
                            <tspan x="50%" y="<?php echo $y; ?>" class="flavor" alignment-baseline="top"><?php echo $line ?? null; ?></tspan>
                        <?php
                    $y += 25;
                        }
        ?>
                    </text>
        
                    <text x="50%" y="<?php echo $y; ?>" width="100%" height="auto" filter="url(#solid)">
                        <?php
        $stats ??= [];
        
        if (\count($stats) > 0) {
            echo '<tspan x="50%"  dy="35" width="100%"  class="smallrule">' . \implode(' ・ ', $stats) . '</tspan>';
        }
        ?>
        
        
                        <?php
        
        foreach ($card_type_fqn::standardRule() as $line) {
            echo "<tspan x=\"50%\" dy=\"25\" width=\"100%\" class=\"smallrule\">{$line}</tspan>";
        }
        
        if (\is_string($body_text) && !empty($body_text)) {
            echo "<tspan x=\"50%\"  dy=\"35\" width=\"100%\"  class=\"bodytext\">{$body_text}</tspan>";
        }
        
        if (\is_array($body_text)) {
            foreach ($body_text as $line) {
                echo "<tspan x=\"50%\"  dy=\"35\" width=\"100%\"  class=\"bodytext\">{$line}</tspan>";
            }
        }
        ?>
                    </text>
        
                    <?php if (!isset($transparent_name_background) || !$transparent_name_background) { ?>
                        <rect y="810" width="650" height="140" fill="#FFFFFF" />
                    <?php }
        
                    $icon = $card_type_fqn::icon();
        $text_x = \is_string($icon) ? 395 : 325;
        
        if (\is_string($icon)) {
            ?>
                        <svg id="card-type-icon" x="6" y="816" width="128" height="128" viewBox="0 0 128 128">
                            <g transform="scale(0.25)" fill="#000000" fill-opacity="1">
                                <?php echo $card_type_fqn::icon(); ?>
                            </g>
                        </svg>
                    <?php
        }
        ?>
        
                    <text x="<?php echo $text_x; ?>" y="850" text-anchor="middle" class="cardtype" alignment-baseline="middle"><?php echo \strtoupper($card_type); ?></text>
                    <text x="<?php echo $text_x; ?>" y="920" text-anchor="middle" class="cardname" alignment-baseline="bottom"><?php echo $name; ?></text>
        
                </g>
            </svg>
        
            <text x="2.5%" y="97.5%" class="credit" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
            <text x="70%" y="97.5%" class="credit" text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
            <text x="97.5%" y="97.5%" class="credit" text-anchor="end" alignment-baseline="top"><?php echo $id; ?></text>
        </svg>
        <?php
        $result = ob_get_clean();
        return $result;
    }

    public static function byPath(string $path ): \Illuminate\View\View
    {
        return  app(\Illuminate\Contracts\View\Factory::class)->file($path);
    }

}
