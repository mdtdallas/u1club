<div class="m-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($raffles as $raffle)
        <div class="p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">{{ $raffle->title }}</h2>
                    <p class="text-sm text-gray-500">{{ $raffle->prize_value }}</p>
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
                    <x-input-label for="winner" :value="__('Winner')" />
                    <p class="text-sm text-gray-500">{{ $raffle->winner->name ?? 'Undrawn' }}</p>
                </div>
                <div>
                    <x-input-label for="winner_address" :value="__('Winners Address')" />
                    <p class="text-sm text-gray-500">{{ $raffle->winner_address ?? 'Undrawn' }}</p>
                </div>
                <div>
                    <x-input-label for="prize_claimed" :value="__('Prize Claimed')" />
                    <p class="text-sm text-gray-500">{{ $raffle->prize_claimed ? 'Yes' : 'No' }}</p>
                </div>
                <div>
                    <x-input-label for="prize_tracking_number" :value="__('Prize Tracking Number')" />
                    <p class="text-sm text-gray-500">{{ $raffle->prize_tracking_number ?? 'N/A' }}</p>
                </div>
                <div>
                    <a href="{{ route('raffles.editRaffle', $raffle) }}" rel="noopener noreferrer">
                        <x-primary-button class="ml-3">
                            @if ($raffle->is_drawn && $raffle->prize_claimed)
                                {{ __('Add Tracking') }}
                            @elseif ($raffle->is_drawn && !$raffle->prize_claimed)
                                {{ __('Prize Unclaimed') }}

                            @else
                                {{ __('Undrawn') }}
                            @endif
                        </x-primary-button>
                    </a>
                </div>                
            </div>
        </div>
    @endforeach
</div>
