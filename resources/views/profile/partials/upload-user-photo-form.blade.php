<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Upload Photo') }}
        </h2>
    </header>

    <form method="POST" action="{{ route('profile.uploadImage') }}" enctype="multipart/form-data" class="p-6">
        @csrf
        <div>
            <x-input-label for="image" :value="__('User Image')" />
    
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" required/>
            <x-input-error :messages="$errors->uploadImage->get('image')" />
        </div>
    
        <x-primary-button class="mt-4">
            {{ __('Upload Image') }}
        </x-primary-button>
    </form>
</section>

