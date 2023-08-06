<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Section') }}
        </h2>
    </x-slot>

    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <x-create-raffle-form />

        <div class="mt-8">
                @foreach ($raffles as $raffle)
                    <div class="bg-white shadow-sm rounded-lg p-6 m-6 flex justify-between" style="margin: 20px;">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">{{ $raffle->title }}</h2>
                        </div>
                        <div>
                            <x-input-label for="prize_value" :value="__('Prize Value')" />
                            <p class="text-sm text-gray-500">${{ $raffle->prize_value }}</p>
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
                            <x-input-label for="winner_address" :value="__('Winner Address')" />
                            <p class="text-sm text-gray-500">
                                @if ($raffle->winner)
                                    {{ $raffle->winner_address }}
                                @else
                                    {{ __('Undrawn') }}
                                @endif
                            </p>
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
                                <x-primary-button class="w-full">
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
                @endforeach
           
        </div>
    </div>


</x-admin-layout>
