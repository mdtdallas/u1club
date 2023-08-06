<div class="max-w-4xl mx-auto py-6 px-4">
    <div class="mt-6 bg-white shadow-sm rounded-lg w-full mx-auto">
        <div class="p-6">
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center">
                    <div class="w-full">
                        <x-input-label for="title" :value="__('Prize')" class="mt-3" />
                        <x-text-input class="block mt-1 w-full mx-auto" type="text" name="title" id="title" required />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="prize_value" :value="__('Prize Value')" class="mt-3" />
                        <x-text-input class="block mt-1 w-full mx-auto" type="text" name="prize_value" id="prize_value"
                            required />
                        <x-input-error :messages="$errors->get('prize_value')" class="mt-2" />
                    </div>

                    {{-- raffle type select --}}
                    <div class="w-full">
                        <x-input-label for="type" :value="__('Raffle Type')" class="mt-3" />
                        <select name="type" id="type" required
                            class="block border-grey-300 mt-1 w-full mx-auto rounded-md">
                            <option value="adventure">Adventure</option>
                                <option value="electronics">Electrical</option>
                                <option value="leasure">Leasure</option>
                                <option value="luxury">Luxury</option>
                                <option value="sport">Sport</option>
                        </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="image" :value="__('Image')" class="mt-3" />
                        <input type="file" name="image" id="image" required>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>                    

                    <x-primary-button class="mt-3">
                        {{ __('Create Raffle') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
