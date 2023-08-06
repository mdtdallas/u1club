<x-modal name="enter-draw-modal" :show="true">
    <form method="post" action="{{ route('raffles.updateTracking', $raffle) }}" class="p-6">
       
        @csrf
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add Tracking Number') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="prize_tracking_number" value="{{ __('Tracking Number') }}" class="sr-only" />

            <x-text-input id="prize_tracking_number" name="prize_tracking_number" class="mt-1 block w-full p-2"
                placeholder="{{ __('Tracking Number') }}" required />

            <x-input-error :messages="$errors->get('prize_tracking_number')" class="mt-2" />
        </div>

        {{-- Raffle id as hidden input --}}
        <input hidden name="raffle_id" value="{{ $raffle->id }}">

        <div class="mt-6 flex justify-around">
            <x-secondary-button x-on:click="window.location.href = '{{ route('admin.index') }}'">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button type="submit" class="ml-3">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
