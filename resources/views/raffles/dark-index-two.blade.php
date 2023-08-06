<x-dark-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--two pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('raffles.index')}}">Raffles</a></li>
                        <li class="active">All Raffles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->
    <x-home-all-raffles-two class="mx-10"/>

    <x-home-all-raffles class="mx-10"/>
 
    <x-raffle-types />

    <!-- contest feature section start -->
    <section class="pb-120">
        <div class="container">
            <div class="row mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{ asset('assets/images/icon/contest-feature/1.png') }}" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Secure Checkout</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('assets/images/icon/contest-feature/2.png')}}" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Great Value</h3>
                            <p>We offer competitive prices for every raffle tickets</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('assets/images/icon/contest-feature/3.png')}}" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Free Worldwide Delivery</h3>
                            <p>We are available for providing our services in major countries</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest feature section end -->
</x-dark-layout>
