<div class="m-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($raffles as $raffle)
        <div class="p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">{{ $raffle->title }}</h2>
                </div>
                
                <div>
                    <x-input-label for="winner" :value="__('Winner')" />
                    <p class="text-sm text-gray-500">{{ $raffle->winner ? $raffle->winner->name : 'Undrawn' }}</p>
                </div>
                <div>
                    <x-input-label for="prize_claimed" :value="__('Prize Claimed')" />
                    <p class="text-sm text-gray-500">{{ $raffle->prize_claimed ? 'Yes' : 'No' }}</p>
                </div>
                @if ($raffle->winner_id == auth()->id() && $raffle->prize_claimed)
                <div>
                    <x-input-label for="prize_tracking_number" :value="__('Prize Tracking Number')" />
                    <p class="text-sm text-gray-500">{{ $raffle->prize_tracking_number ?? 'N/A' }}</p>
                </div>
                @endif
                <div>
                    @if ($raffle->winner_id == auth()->id() && !$raffle->prize_claimed)
                    <a href="{{ route('raffles.claimModal', $raffle) }}" rel="noopener noreferrer">
                        <x-primary-button class="ml-3">
                            {{ __('Claim') }}
                        </x-primary-button>
                    </a>
                    @elseif ($raffle->winner_id == auth()->id() && $raffle->prize_claimed)
                    <x-primary-button disabled class="ml-3">
                        {{ __('Track your prize!') }}
                    </x-primary-button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
