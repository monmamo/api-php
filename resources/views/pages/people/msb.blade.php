
<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}
?>

<x-guest-layout>

    <div class="container">
        <div class="d-flex flex-row">
          <div class="p-2"><x-card :link="true" cardNumber="A-M-05" width="200"/></div>
          <div class="p-2"><x-card :link="true" cardNumber="A-M-07" width="200"/></div>
          <div class="p-2"><x-card :link="true" cardNumber="A-M-09" width="200"/></div>
          <div class="p-2"><x-card :link="true" cardNumber="A-M-11" width="200"/></div>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2"><x-card :link="true" cardNumber="A-M-12" width="200"/></div>
          <div class="p-2"><x-card :link="true" cardNumber="A-M-17" width="200"/></div>
        <div class="p-2"><x-card :link="true" cardNumber="A-A-05" width="200"/></div>
    </div>
  </div>

</x-guest-layout>

    