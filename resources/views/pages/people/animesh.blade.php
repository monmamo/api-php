
<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}
?>

<x-guest-layout>

    <div class="container">
        <div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-M-01" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-02" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-03" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-04" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-M-06" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-16" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-18" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-19" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-20" width="200"/></div>
<div class="p-2"><x-card :link="true" cardNumber="A-M-14" width="200"/></div>
</div>
<div class="d-flex flex-row">
<div class="p-2"><x-card :link="true" cardNumber="A-T-03" width="200"/></div>
    </div>
  </div>

</x-guest-layout>

    