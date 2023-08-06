<x-modal name="enter-draw-modal" :show="true">
    <form method="POST" action="{{ route('raffle.claimRafflePrize', ['raffle' => $raffle]) }}" class="p-6">

        @csrf
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Claim Your Prize') }}
        </h2>

        @error('winner')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        {{-- Users full name input --}}
        <div class="mt-6">
            <x-input-label for="full_name" value="{{ __('Full Name') }}" class="sr-only" />

            <x-text-input id="full_name" name="full_name" class="mt-1 block w-full p-2"
                placeholder="{{ __('Full Name') }}" required />

            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
        </div>

        {{-- user phone number input --}}
        <div class="mt-6">
            <x-input-label for="phone_number" value="{{ __('Phone Number') }}" class="sr-only" />

            <x-text-input id="phone_number" name="phone_number" class="mt-1 block w-full p-2"
                placeholder="{{ __('Phone Number') }}" required />

            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        {{-- winner_address address --}}
        <div class="mt-6">
            <x-input-label for="winner_address" value="{{ __('Address') }}" class="sr-only" />

            <x-text-input id="winner_address" name="winner_address" class="mt-1 block w-full p-2"
                placeholder="{{ __('Address') }}" required />

            <x-input-error :messages="$errors->get('winner_address')" class="mt-2" />
        </div>

        {{-- Raffle id as hidden input --}}
        <input type="hidden" name="raffle_id" value="{{ $raffle->id }}">

    
        <div class="mt-6 flex justify-around">
            <x-secondary-button x-on:click="window.location.href = '{{ route('raffles.index') }}'">
                {{ __('Cancel') }}
            </x-secondary-button>           
    
            <x-primary-button type="submit" class="ml-3">
                {{ __('Claim Prize') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>