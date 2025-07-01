
<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}
?>

<x-guest-layout>

    <div class="container">
        <div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-A-05" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-05" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-07" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-09" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-M-11" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-12" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-13" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-15" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-M-17" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-21" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-032" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-059" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-066" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-103" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-110" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-T-01" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-T-07" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-T-22" width="200"/></div>
    </div>
  </div>

</x-guest-layout>

    