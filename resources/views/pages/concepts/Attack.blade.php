<x-pages.concept-page slug="Attack">

<h2>Examples of Attack Cards</h2>

@for($i = 1; $i <= 5; $i++)
<x-card-image :link="true" cardNumber="A-A-{{sprintf('%02d',$i)}}" size="125" />
    @endfor
{{--
<x-card-image cardNumber="AQ-01" size="125" />
<x-card-image cardNumber="MAS-01" size="125" />
<x-card-image cardNumber="MAS-02" size="125" />
<x-card-image cardNumber="MAS-03" size="125" />
<x-card-image cardNumber="MAS-04" size="125" />
<x-card-image cardNumber="MAS-17" size="125" />
<x-card-image cardNumber="MAS-18" size="125" />
<x-card-image cardNumber="PY-01" size="125" />
<x-card-image cardNumber="PY-12" size="125" />
<x-card-image cardNumber="PY-13" size="125" />
<x-card-image cardNumber="PY-14" size="125" />
<x-card-image cardNumber="PY-16" size="125" />
--}}

</x-pages.concept-page>
