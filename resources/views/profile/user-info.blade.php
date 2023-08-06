<x-dark-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <x-user-card />

                    <x-user-action-card />

                </div>
                <div class="col-lg-8 mt-lg-0 mt-5">
                    <div class="user-info-card">
                        <div class="user-info-card__header">
                            <h3 class="user-info-card__title">Personal Details</h3>
                            <a href="{{ route('profile.userUpdateForm', ['user' => Auth::user()]) }}">
                                <button type="button"><i class="far fa-edit"></i> Edit</button>
                            </a>
                        </div>
                        <ul class="user-info-card__list">
                            <li>
                                <span class="caption">Name</span>
                                <span class="value">{{ $user->name }}</span>
                            </li>
                            <li>
                                <span class="caption">Date of Birth</span>
                                <span class="value">{{ $user->dob }}</span>
                            </li>
                            <li>
                                <span class="caption">Email</span>
                                <span class="value">{{ $user->email }}</span>
                            </li>
                            <li>
                                <span class="caption">Mobile</span>
                                <span class="value">{{ $user->phone_number }}</span>
                            </li>
                            {{-- <li>
                  <span class="caption">Address</span>
                  <span class="value">8198 Fieldstone Dr.La Crosse, WI 54601</span>
                </li> --}}
                        </ul>
                    </div><!-- user-info-card end -->

                    <div class="user-info-card">
                        <div class="user-info-card__header">
                            <h3 class="user-info-card__title">Security</h3>
                            {{-- <button type="button"><i class="far fa-edit"></i> Edit</button> --}}
                        </div>
                        <ul class="user-info-card__list">
                            <li>
                                <span class="caption">Password</span>
                                <span class="value user-password">***************</span>
                            </li>
                        </ul>
                    </div><!-- user-info-card end -->
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
</x-dark-layout>
