<x-app-layout>
    <x-modal name="purchase-tickets-modal" :show="true" focusable>
        <div class="container p-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Checkout') }}
            </h2>
    
            <form action="{{ route('user.update', ['user' => Auth::user()]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-6">
                    <p>Payment Amount: ${{ $intent->amount / 100 }}</p>
                </div>

                <!-- hidden input number of tickets -->
                <input type="hidden" name="number_of_tickets" value="{{ $validated['number_of_tickets'] }}">


                <!-- Stripe name input -->
                <div class="mt-6">
                    <x-input-label for="name" value="{{ __('Name') }}" class="sr-only" />

                    <x-text-input id="name" name="name" class="mt-1 block w-full p-2"
                        placeholder="{{ __('Name') }}" required />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div id="card-element" class="mt-6">
                    <!-- Stripe card element will be rendered here -->
                </div>

                <div class="mt-6">
                    <x-secondary-button x-on:click="goBack">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button id="card-button" type="submit" data-secret="{{ $intent->client_secret }}" class="ml-3">
                        {{ __('Pay Now') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>

<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('sk_test_51NTgguB0RnmXNKCa9EGTTt5YKRm7jRtew3W0DgvZ9E87Gl4MDDNAoyjPG5Uf08Vdfono5dgKz3MOUrLBmwzGPnbd00O7tlWICV');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardButton.addEventListener('click', async (e) => {
        const {
            setupIntent,
            error
        } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: '{{ Auth::user()->name }}'
                    }
                }
            }
        );

        if (error) {
            // Display "error.message" to the user...
        } else {
            // The card has been verified successfully...
            console.log(setupIntent);
        }
    });

    function goBack() {
        window.history.back();
    }
</script>
