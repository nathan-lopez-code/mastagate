<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="d-flex justify-content-center align-content-center h100">
        <h5> {{ __("Vous n'etes pas authoriser ") }} </h5>
    </div> 
</x-guest-layout>
