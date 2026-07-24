<?php
\Laravel\Folio\middleware(function (\Illuminate\Http\Request $request, \Closure $next)
    {
        $accept = $request->headers->get('Accept');

        if (str_contains($accept, 'text/markdown')) {
            $markdown = <<<MARKDOWN
# The Great Agreement

The Great Agreement is a pivotal moment in the history of the Monsters Masters & Mobsters universe, marking the end of the Five Centuries of War and the establishment of the great states of the world.

(Note that the Great Agreement itself did not end the Five Centuries of War. Some conflicts considered part of the Five Centuries of War stretched as long as four decades after the ratification.)
MARKDOWN;

            return new \Illuminate\Http\Response(
                content: $markdown,
                headers: ['Content-Type' => 'text/markdown']
            );
        }

                if (str_contains($accept, 'text/html')) {
            return $next($request);
        }


        throw new \LogicException('Unsupported Accept header: ' . $accept);
    });
?>


            <x-guest-layout>

    <x-slot:page-title>The Great Agreement</x-slot>

    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/lore">Lore</x-breadcrumbs.crumb>
        <x-breadcrumbs.crumb url="/lore/history">History</x-breadcrumbs.crumb>
    </x-breadcrumbs>


    <div class="text-center">
        <div class="container">
            <img src="@publicimage(GreatAgreement.png)" class="img-fluid border rounded-3 shadow-lg mb-4" alt="MonMaMo Billboard" loading="lazy">
          </div>
        </div>


    <p>The Great Agreement is a pivotal moment in the history of the Monsters Masters & Mobsters universe, marking the end of the <a href="/lore/five-centuries-of-war">Five Centuries of War</a> and the establishment of the great states of the world.</p>

<p>(Note that the Great Agreement itself did not end the Five Centuries of War. Some conflicts considered part of the Five Centuries of War stretched as long as four decades after the ratification.)</p>

    </x-guest-layout>
