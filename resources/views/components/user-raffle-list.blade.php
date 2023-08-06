<div class="m-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($raffles as $raffle)
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
                @if ($raffle->winner_id)
                <div>
                    <x-input-label for="winner" :value="__('Winner')" />
                    <p class="text-sm text-gray-500">{{ $raffle->winner->name}}</p>
                </div>
                @endif
                @if ($raffle->winner_id == auth()->id() && $raffle->prize_claimed)
                <div>
                    <x-input-label for="prize_tracking_number" :value="__('Prize Tracking Number')" />
                    <p class="text-sm text-gray-500">{{ $raffle->prize_tracking_number ?? 'N/A' }}</p>
                </div>
                @endif
                
                <div>
                    <x-input-label for="ticket_number" :value="__('My Tickets')" />
                    <p class="text-sm text-gray-500">{{ $raffle->ticket_count }}</p>
                </div>
                <div>
                    <x-input-label for="raffle_drawn" :value="__('Raffle Drawn')" />
                    <p class="text-sm text-gray-500">{{ $raffle->is_drawn ? 'Yes' : 'No' }}</p>
                </div>


                <div>
                    @if ($raffle->is_drawn)
                    <a href="{{ route('raffles.index') }}" class="ml-3">
                        <x-primary-button>
                            {{ __('Complete') }}
                        </x-primary-button>
                    </a>                    
                    @else
                        <a href="{{ route('raffles.enterRaffleModal', $raffle) }}" rel="noopener noreferrer">
                            <x-primary-button class="ml-3">
                                {{ __('Enter Again') }}
                            </x-primary-button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

