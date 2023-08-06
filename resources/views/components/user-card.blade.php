<div class="user-card">
    <div class="avatar-upload">
        <div class="obj-el"><img 
                src="{{ asset('storage/' . Auth::user()->image_path) }}"
                alt="{{ Auth::user()->name }}">
        </div>
        <div class="avatar-edit">
            {{-- <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label> --}}
        </div>
        <div class="avatar-preview">
            {{-- <div id="imagePreview" style="background-image: url(assets/images/user/pp.png);">
            </div> --}}
        </div>
    </div>
    <h3 class="user-card__name">{{ Auth::user()->name }}</h3>
    <span class="user-card__id">ID : {{ Auth::user()->id }}</span>
</div><!-- user-card end -->