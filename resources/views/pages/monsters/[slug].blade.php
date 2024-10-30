<?php
use Illuminate\Support\Str;

$base_path = resource_path("monsters/$slug");
if (!is_dir($base_path)) abort(404);

?>
<x-guest-layout>
<p>HERO IMAGE</p>

<table class="table">
    <tbody>
      <tr>
        <th scope="row"><?=  \App\Strings\html(
            'svg',
            [
                'id' => 'Male-staticon',
                'width' => \config('card-design.concept.icon-size') ,
                'height' => \config('card-design.concept.box-height'),
                'viewBox' => \App\Strings\viewBox(x: 0, y: 0, width: 512, height: 640),
                'xmlns' => 'http://www.w3.org/2000/svg',
            ],
            \App\Strings\html(
                'g',
                ['class' => 'stat'],
                view('Male.icon')
            ),
        )->toHtml()?></th>
        <td>Male</td>
      </tr>
      <tr>
        <th scope="row"><?=  \App\Strings\html(
            'svg',
            [
                'id' => 'DamageCapacity-staticon',
                'width' => \config('card-design.concept.icon-size') ,
                'height' => \config('card-design.concept.box-height'),
                'viewBox' => \App\Strings\viewBox(x: 0, y: 0, width: 512, height: 640),
                'xmlns' => 'http://www.w3.org/2000/svg',
            ],
            \App\Strings\html(
                'g',
                ['class' => 'stat'],
                view('DamageCapacity.icon')
            ),
        )->toHtml()?></th>
        <td>Damage Capacity</td>
        <td>70</td>
      </tr>
      <tr>
        <th scope="row"><?=  \App\Strings\html(
            'svg',
            [
                'id' => 'Level-staticon',
                'width' => \config('card-design.concept.icon-size') ,
                'height' => \config('card-design.concept.box-height'),
                'viewBox' => \App\Strings\viewBox(x: 0, y: 0, width: 512, height: 640),
                'xmlns' => 'http://www.w3.org/2000/svg',
            ],
            \App\Strings\html(
                'g',
                ['class' => 'stat'],
                view('Level.icon')
            ),
        )->toHtml()?></th>
        <td>Level</td>
        <td>30</td>
      </tr>
    </table>


</x-guest-layout>
