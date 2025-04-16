{{--
DERECATED
  use \App\CardAttributes\CardTools;
   yield $this->localHeroImage('FILE.jpg');
--}}

<image x="{{config("card-design.hero.x")}}" y="{{config("card-design.hero.y")}}" class="hero" href="{{\App\Card\localHeroUri($slot)}}" />