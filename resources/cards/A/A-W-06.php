<?php

// The gladius was a short sword used by ancient Roman foot soldiers from the 3rd century BC until the 3rd century AD. It featured a double-edged blade designed for both cutting and thrusting, making it highly effective in close-quarters combat. Typically, the blade measured between 60 to 70 centimeters (24 to 28 inches) in length and about 5 centimeters (2 inches) in width. 

// The Romans adopted the gladius from the Celtiberians of Hispania during the Punic Wars, referring to it as the *gladius Hispaniensis*, or "Hispanic-type sword." Over time, several variations of the gladius emerged, including:

// - **Gladius Hispaniensis**: The earliest form, featuring a pronounced leaf-shaped blade.

// - **Mainz Gladius**: Introduced in the early empire, it had a shorter, broader blade with a triangular point and retained a slight waist curvature.

// - **Fulham Gladius**: A transitional form between the Mainz and Pompeii types, it featured straight edges and a long point.

// - **Pompeii Gladius**: The most popular version, it had parallel cutting edges and a triangular tip, representing a shift towards a more standardized and utilitarian design.

// The gladius was typically wielded alongside a large rectangular shield known as a *scutum*. Legionaries would throw javelins (*pila*) to disrupt enemy formations before engaging in close combat with the gladius. This combination allowed for effective thrusting attacks, which were often fatal even with shallow wounds. 

// By the 3rd century AD, the Roman military began transitioning to the longer *spatha*, which offered greater reach in combat. Despite this shift, the gladius remains an iconic symbol of Roman military prowess and engineering.       
     

return new
    #[\App\GeneralAttributes\Title("Gladius")]
    #[\App\Concept('Item')]
    #[\App\Concept("Weapon")]
    #[\App\CardAttributes\ImageCredit("Icon by Skoll on Game-Icons.net")]
    #[\App\CardAttributes\FlavorText([])]
    #[\App\CardAttributes\Prerequisites([])]
    class(__FILE__) implements \App\Contracts\Card\CardComponents {
        use \App\CardAttributes\DefaultCardAttributes;
        public function content(): \Traversable
        {
            yield <<<HTML
<x-card.hero-svg><path d="M124.812 388.907a60.718 60.718 0 0 0 16.564 11.588L107.28 435.07a48.756 48.756 0 0 0-28.35-28.006l34.16-34.576a61.093 61.093 0 0 0 11.722 16.42zm209.598-276.44c-32.754 33.14-57.813 79.127-103.008 124.853-9.13 9.245-40.292 37.355-58.303 53.555l49.223 48.64c15.98-18.24 43.727-49.744 52.858-58.978 45.154-45.726 90.828-71.39 123.57-104.477C452.683 121.485 481 28.492 481 28.492s-92.67 29.4-146.59 83.976zM83.656 430.594a30.92 30.92 0 1 0 .26 43.727 30.817 30.817 0 0 0-.26-43.727zm91.13-40.603c11.16 0 20.822-2.81 24.497-6.56l20.885-21.103-69.88-69.047-20.823 21.135c-7.964 8.068-11.233 43.06 7.85 61.905 10.12 10.026 24.79 13.66 37.47 13.66z" fill="#fff" fill-opacity="1"></path></x-card.hero-svg>
     
<x-card.phaserule type="Attack" height="130">
<text >
<x-card.normalrule>Choose one Character with HP.</x-card.normalrule>
<x-card.normalrule>Does 2+1d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
