@props(['width','height','color' => 'black'])
<?php
    $height = $height ?? 500;
    $width = $width ?? $height * (870 / 570);
    ?>
<svg width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 870 570" xmlns="http://www.w3.org/2000/svg">


  <!--rect x="0" y="0" width="900" height="570" fill="#cccccc" /--> 
  <symbol id="pillar">
    <path d="M 0 0  L 15 15 L 15 155 L 0 170 L 50 170 L 35 155 L 35 15 L 50 0 Z" />
  </symbol>
  <symbol id="foot">
    <path d="M 0 170 L 50 170 L 25 145 Z" />
  </symbol>
  <symbol id="tooth">
    <path d="M 0 0 L 30 0 L 15 40 Z" />
  </symbol>
  <symbol id="rafter">
    <rect width="10" height="15" />
  </symbol>
  <symbol id="beam">
    <rect width="20" height="10" />
  </symbol>

  <symbol id="m" >
    <use href="#pillar" x="0" y="0" />
    <use href="#pillar" x="120" y="0" />
    <path d="M 0 0  L 35 15 L 85 125 L 135 15 L 170 0 L 85 150 Z" />
  </symbol>


  <symbol id="o" fill-rule="evenodd">
    <path d="M 50 0  Q 100 0 100 85 Q 100 170 50 170 Q 0 170 0 85 Q 0 0 50 0 Z
             M 50 15 Q 80 15 80 85 Q 80 155 50 155 Q 20 155 20 85 Q 20 15 50 15 Z" />
  </symbol>

  <symbol id="t">
    <use href="#tooth" x="0" y="0" />
    <use href="#tooth" x="70" y="0" />
    <use href="#pillar" x="25" y="0" />
    <rect x="15" y="0" width="70" height="15" />

  </symbol>

  <symbol id="e">
    <use href="#pillar" x="0" y="0" />
    <path d="M 15 0 h 70 v 15 h -70 Z 
    M 15 78.5 h 45 l 10 -15 v 50 l -10 -15 h -45 Z
    M 15 155 h 130 v 15 h -130 Z
    " />
    <use href="#tooth" x="0" y="0" />
    <use href="#tooth" x="70" y="0" />
  </symbol>

  <symbol id="s">
    <path d="
  M 50 170
  C 105 170 105 78.5 50 78.5
  C 20 78.5 20 15 50 15
  Q 80 15  80 46.75
  Q 105 0 50 0
  C -5 0  -5 93.5 50 93.5 
  C 80 93.5  80 155 50 155
  v 15
  Z " />
  </symbol>

  <symbol id="rs">
    <path fill-rule="evenodd" d="M 0 0  L 15 15 L 15 155 L 0 170 L 50 170 L 35 155 
      L 35 93.5 L 65 93.5 Q 100 93.5 100 46.75 Q 100 0 65 0      Z
      M 35 78.5 L 65 78.5 Q 80 78.5 80 46.75 Q 80 15 65 15 L 35 15 Z" />
    <use href="#s" x="105" y="0" />
    <path d="M 155 170 Q 60 170 60 85 L 80 85 Q 80 155 155 155 Z" />
  </symbol>



  <symbol id="monsters"  >

    <use href="#m"  />
    <use href="#o" x="165" />

    <use href="#pillar" x="260" />
    <use href="#pillar" x="320" />

    <use href="#s" x="360"  />
      <path d="M 410 170 Q 355 170  275 15  L 295 15  Q 355 155 410 155 Z" />


    <!-- These letters must be aligned with the same letters in MASTERS. -->
    <use id="monsters-t" href="#t" x="450" />
    <use id="monsters-e" href="#e" x="560" />
    <use id="monsters-rs" href="#rs" x="670" />
  </symbol>


  <symbol id="masters"  >

    <use href="#m"  />

    <g id="masters-a" transform="translate(180,0)">
      <path d="M 30 0  L 45 15 L 95 155 L 115 155 L 65 15 L 80 0 Z" />
      <path d="M 30 0  L 45 15 L 15 155  L 0 170 L 50 170 L 35 155 L 65 15 Z" />
    </g>

    <use href="#s" x="270" y="0" />
    <path d="M 320 170 Q 178 170 178 40 L 178 15 Q 178 155 320 155 Z" />

    <use id="masters-t" href="#t" x="365" />
    <use id="masters-e" href="#e" x="475" />
    <use id="masters-rs" href="#rs" x="590" />


    <!-- Ampersand box is 120 high, 75 wide-->
    <!-- <g transform="translate(790,30)" scale="(0.90,0.70)">
<path d="
  M 50 170
  C 20 170 20 78.5 50 78.5
  C 20 78.5 20 15 50 15
  Q 80 15  80 46.75
  Q 105 0 50 0
  C -5 0  -5 93.5 50 93.5 
  C 80 93.5  80 155 50 155
  v 15
  Z " />
</g> -->

<!-- <path d="M 25 50  l 40 50 h 20 l -40 -50 Z" />
<path d="M 25 90  l 40 -50 h 20 l -40 50 Z" />  -->


<g transform="translate(800,50) scale(0.75,0.75)" >
<path  d="M 60 0 
C 0 0 0 60 30 60 C 0 60 0 120 45 120 
v -15
C 10 105 10 65 70 65
v -10
C 10 55 10 15 60 15
Q 75 15 75 15 Q 75 0 60 0
Z
" />
<path d="M 45 120 L 90 120 L 75 105 L 75 50 L 85 40 L 55 40 L 65 50 L 65 105 L 45 105 Z" />
</g>
  </symbol>


  <symbol id="mobsters"  >

    <use href="#m"  />
    <use href="#o" x="165" />

    <g id="mobsters-bs" fill-rule="evenodd" transform="translate(260,0)">
      <path d="M 0 0  L 15 15 L 15 155 L 0 170 L 50 170 L 35 155 
      L 35 93.5 L 65 93.5 Q 100 93.5 100 46.75 Q 100 0 65 0      Z
      M 35 78.5 L 65 78.5 Q 80 78.5 80 46.75  Q 80 15 65 15 L 35 15 Z" />
      <path d="M 35 78.5 L 65 78.5 Q 110 78.5 110 124.25 Q 110 170 65 170 L 35 170 Z
      M 35 93.5 L 65 93.5 Q 85 93.5 85 124.25 Q 85 155 65 155 L 35 155 Z  " />
      <use href="#s" x="100" y="0" />
      <path d="M 150 170 Q 100 170 100 120 L 100 85 Q 100 155 150 155 Z" />
    </g>

    <!-- These letters must be aligned with the same letters in MONSTERS. -->
    <use  href="#t" x="450" />
    <use  href="#e" x="560" />
    <use  href="#rs" x="670" />
  </symbol>

<g fill="<?= $color ?>" fill-opacity="1.0">  
  <use href="#monsters" x="0" y="0" />
  <use href="#masters" x="0" y="200"/>
  <use href="#mobsters" x="0" y="400" />
</g>

</svg>
