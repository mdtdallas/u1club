<form id="payment-form" method="POST" action="{{ route('user.addTickets') }}" class="p-6">
    @csrf

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display error message -->
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <!-- Add the payment intent client secret field -->
    <input type="hidden" name="payment_intent_client_secret" value="{{ $paymentIntent->client_secret }}">

    <!-- Rest of the form fields -->
    <div class="mb-6">
        <label for="card-holder-name" class="block mb-2 text-sm text-gray-700 font-bold">
            {{ __('Card Holder Name') }}
        </label>

        <input id="card-holder-name" type="text" name="card_holder_name" cl1ass="form-input w-full"
            value="{{ old('card_holder_name') }}" required autofocus>
        <input type="text" name="name" id="">
    </div>

    <div class="mb-6">
        <label for="card-element" class="block mb-2 text-sm text-gray-700 font-bold">
            {{ __('Credit or debit card') }}
        </label>

        <div id="card-element" class="form-input w-full">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>

    <div class="mb-6">
        <label for="ticket-quantity" class="block mb-2 text-sm text-gray-700 font-bold">
            {{ __('Ticket Quantity') }}
        </label>

        <input id="ticket-quantity" type="number" name="ticket_quantity" class="form-input w-full"
            value="{{ old('ticket_quantity') }}" required autofocus>
    </div>

    <div class="mt-6 flex justify-around">
        <x-secondary-button x-on:click="$dispatch('close')">
            {{ __('Cancel') }}
        </x-secondary-button>

        <button id="card-button" class="px-4 py-2 bg-blue-600 text-white rounded-md" type="submit">
            {{ __('Purchase') }}
        </button>
    </div>
</form>
