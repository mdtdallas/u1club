<style>
  .progress-bar {
  width: 100%;
  height: 20px;
  background-color: #fff;
  border: 1px solid #000;
  position: relative;
  overflow: hidden;
}

.progress {
  height: 100%;
  background-color: #0f0;
}

.stars {
  position: absolute;
  top: -20px;
  left: 0;
  width: 100%;
  height: 20px;
  background-image: url('path/to/stars.png');
  background-repeat: repeat-x;
  background-position: 0 0;
  animation: starsAnimation 1s steps(5) infinite;
}

.message {
  margin-top: 10px;
}

@keyframes starsAnimation {
  0% { background-position: 0 0; }
  100% { background-position: -100% 0; }
}
  
</style>

<div class="m-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($raffles as $raffle)
        <div class="p-6">
            <div class="flex justify-between items-center">
                <div>
                    {{-- <x-input-label for="raffle_image" :value="__('Raffle Image')" /> --}}
                    <img src="{{ asset('storage/' . $raffle->image_path) }}" alt="{{ $raffle->title }}" class="w-20 h-20">
                </div>
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
                    <x-input-label for="Percent Complete" :value="__('Percent Complete')" />
                    <p class="text-sm text-gret-500">{{ ($raffle->sold_tickets / $raffle->required_tickets) * 100 }}%</p>
                </div>

                <div>
                    <x-input-label for="raffle_drawn" :value="__('Raffle Drawn')" />
                    <p class="text-sm text-gray-500">{{ $raffle->is_drawn ? 'Yes' : 'No' }}</p>
                </div>

                <div>
                    @if ($raffle->is_drawn)
                        <x-primary-button disabled class="ml-3">
                            {{ __('Complete') }}
                        </x-primary-button>
                    @else
                        <a href="{{ route('raffles.enterRaffleModal', $raffle) }}" rel="noopener noreferrer">
                            <x-primary-button class="ml-3">
                                {{ __('Enter Draw') }}
                            </x-primary-button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
