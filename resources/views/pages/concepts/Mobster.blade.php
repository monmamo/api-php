<x-concept-page slug="Mobster">

<h2>Examples of Mobster Cards</h2>

@for($i = 1; $i <= 10; $i++)
<x-card-image :link="true" cardNumber="A-MO-{{sprintf('%02d',$i)}}" size="125" />
    @endfor

</x-concept-page>
