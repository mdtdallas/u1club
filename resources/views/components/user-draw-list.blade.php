<div class="m-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($enteredRaffles as $raffle)
        <div class="p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">{{ $raffle->title }}</h2>
                </div>
                <div>
                    <x-input-label for="required_tickets" :value="__('Required Tickets')" />
                    <p class="text-sm text-gray-500">{{ $raffle->required_tickets }}</p>
                </div>
                <div>
                    <x-input-label for="sold_tickets" :value="__('Sold Tickets')" />
                    <p class="text-sm text-gray-500">{{ $raffle->sold_tickets }}</p>
                </div>
                
                <div>
                    <x-input-label for="raffle_drawn" :value="__('Raffle Drawn')" />
                    <p class="text-sm text-gray-500">{{ $raffle->is_drawn ? 'Yes' : 'No' }}</p>
                </div>
                
                <div>
                    <x-secondary-button>
                        {{ __('Claim Prize') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    @endforeach
</div>
