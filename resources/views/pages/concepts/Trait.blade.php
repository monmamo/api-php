<x-pages.concept-page slug="Trait">

    <h2>Examples of Trait Cards</h2>

    @for($i = 1; $i < 58; $i++)
<x-card-image :link="true" cardNumber="A-T-{{sprintf('%02d',$i)}}" size="125" />
    @endfor

</x-pages.concept-page>