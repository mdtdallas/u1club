<!-- payment.blade.php -->

<x-modal-layout>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="account-form-area">
                        <button type="button" class="close-btn" onclick="goBack()" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                        <h3 class="title">Buy Tickets</h3>
                        <div class="account-form-wrapper">
                            <form id="payment-form" method="POST" action="{{ route('user.addTickets') }}">
                                @csrf
    
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
    
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
    
                                <input type="hidden" id="payment-method" name="payment_method">
    
                                <div class="mb-6">
                                    <label for="card-holder-name" class="block mb-2 text-sm text-gray-700 font-bold">
                                        {{ __('Card Holder Name') }}
                                    </label>
                                    <input id="card-holder-name" type="text" name="card_holder_name"
                                        value="{{ Auth::user()->name }}" class="form-input w-full" required autofocus>
                                </div>
    
                                <div class="mb-6">
                                    <label for="card-element" class="block mb-2 text-sm text-gray-700 font-bold">
                                        {{ __('Credit or debit card') }}
                                    </label>
                                    <div id="card-element" class="form-input w-full rounded p-2">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <div id="card-errors" role="alert"></div>
                                </div>
    
                                <div class="mb-6">
                                    <label for="number_of_tickets" class="block mb-2 text-sm text-gray-700 font-bold">
                                        {{ __('Number of Tickets') }}
                                    </label>
                                    <input id="number_of_tickets" type="number" name="number_of_tickets"
                                        class="form-input w-full" min="1" max="1000" required>
                                </div>
                                <div class="form-group text-center mt-5">
                                    <button type="submit" class="cmn-btn">Purchase</button>
                                </div>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </x-modal-layout>
    
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripePublicKey = 'pk_test_51NTgguB0RnmXNKCaawRnVODgxpzkNdbO1ZalpUFEmq7nbR5cRRt7ED48OHIxFN3LarS2MEjlHgWda2DTpe6yUWBN00UD4ydMKq'; 
        const stripe = Stripe(stripePublicKey);
        const elements = stripe.elements();
        const cardElement = elements.create('card');
    
        cardElement.mount('#card-element');
    
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
    
            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = true;
    
            // Create a payment method using the card element
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: document.getElementById('card-holder-name').value,
                },
            });
    
            // Handle errors
            const errorElement = document.getElementById('card-errors');
            if (error) {
                errorElement.textContent = error.message;
                submitButton.disabled = false;
            } else {
                // Add the payment method id to the form and submit the form
                document.getElementById('payment-method').value = paymentMethod.id;
                form.submit();
            }
        });
    </script>
    