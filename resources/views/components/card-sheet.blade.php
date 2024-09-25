@props(['cards'])
<?php
    $dx = 0;
    $dy = 0;
    $omitCommon = true;

//TODO Chunk the cards into pages.
//TODO Iterate over the pages.
?>

<x-svg  :width="config('card-design.width')*3" :height="config('card-design.height')*3" >

    <x-card.common />

    <?php
    foreach($cards as $cardNumber)   {
        echo view("$cardNumber",compact('cardNumber','dy','dx','omitCommon'));
        $dx++;
        if ($dx === 3) {
            $dx = 0;
            $dy++;
        }
        if ($dy === 3) {
            //TODO insert page break
            
        }
    }
?>

</x-svg>
