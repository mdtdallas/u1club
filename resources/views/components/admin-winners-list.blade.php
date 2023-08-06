<div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
    @foreach ($drawnRaffles as $raffle)
        <div class="p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-900">{{ $winner->id }}</h2>
                <div>
                    <h3 class="text-md font-semibold text-gray-900">Name</h3>
                    <p class="text-sm text-gray-500">{{ $winner->name }}</p>
                </div>
                <div>
                    <h3 class="text-md font-semibold text-gray-900">Email</h3>
                    <p class="text-sm text-gray-500">{{ $winner->email }}</p>
                </div>

                <div>
                    <x-secondary-button>
                        {{ __('Edit') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    @endforeach
</div>
