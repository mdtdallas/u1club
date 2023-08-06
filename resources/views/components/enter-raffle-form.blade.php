<x-modal name="enter-draw-modal" :show="true">
    <form method="POST" action="{{ route('tickets.store', $raffle) }}" class="p-6">
        @csrf
        <div class="flex justify-between">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Enter Draw') }}
            </h2>
    
            {{-- Show Users tickets remaining --}}
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Tickets Remaining:') }}
                {{ Auth::user()->number_of_tickets }}
            </h2>
        </div>
    
        <div class="mt-6">
            <x-input-label for="number_of_tickets" value="{{ __('Number of Tickets') }}" class="sr-only" />
    
            <x-text-input id="number_of_tickets" name="number_of_tickets" class="mt-1 block w-full p-2"
                placeholder="{{ __('Number of Tickets') }}" required />
    
            <x-input-error :messages="$errors->get('number_of_tickets')" class="mt-2" />
        </div>
    
        {{-- Raffle id as hidden input --}}
        <input hidden  name="raffle_id" value="{{ $raffle->id }}">
    
        <div class="mt-6 flex justify-around">
            <x-secondary-button x-on:click="window.location.href = '{{ route('raffles.index') }}'">
                {{ __('Cancel') }}
            </x-secondary-button>           
    
            <x-primary-button type="submit" class="ml-3">
                {{ __('Enter Draw') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>