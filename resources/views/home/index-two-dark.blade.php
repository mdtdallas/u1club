<x-dark-layout>
    <!-- hero start -->
    <section class="hero style--two bg_img" data-background="assets/images/elements/hero-2-bg.jpg">
        <div class="hero__shape"><img src="assets/images/elements/round-shape-3.png" alt="image"></div>
        <div class="hero-e1"><img src="assets/images/elements/hero-2-e1.png" alt="image"></div>
        <div class="hero-e2"><img src="assets/images/elements/hero-2-e2.png" alt="image"></div>
        <div class="hero-e3"><img src="assets/images/elements/hero-2-e3.png" alt="image"></div>
        <div class="hero-e4"><img src="assets/images/elements/hero-2-e4.png" alt="image"></div>
        <div class="hero-e5"><img src="assets/images/elements/hero-2-e5.png" alt="image"></div>

        <div class="hero-car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            {{-- <div class="el-car"><img src="assets/images/elements/hero-2-car.png" alt="image"></div>
            <div class="el-girl"><img src="assets/images/elements/hero-2-girl.png" alt="image"></div> --}}

            <div cl1ass="el-car"><img src="assets/images/prizes/ninebot.png" alt="image"></div>
            {{-- <div class="el-girl"><img src="assets/images/prizes/hero-2-girl.png" alt="image"></div> --}}

            <div class="el-star"><img src="assets/images/elements/hero-2-star.png" alt="image"></div>
            <div class="el-star-2"><img src="assets/images/elements/hero-2-star.png" alt="image"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-9 col-md-10">
                    <div class="hero__content">
                        <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                            play anytime, any where</div>
                        <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Dream
                            Big Play Small</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Don't miss your
                            chance. Will you be our next lucky winner?</p>
                        <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            <a href="{{ url('/buy-tickets') }}" class="cmn-btn">Get your tickets!!</a>
                            <a class="video-btn" href="https://www.youtube.com/embed/d6xn5uflUjg"
                                data-rel="lightcase:myCollection"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__thumb">
                        <img src="assets/images/elements/car-main.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero start -->

    <!-- contest slider section start -->
    <section class="contest-slider-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contest-slider">
                        @foreach ($raffles as $raffle)
                            <x-raffle-card :raffle="$raffle" />
                        @endforeach
                    </div><!-- contest-slider end -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- contest slider section end  -->

    <!-- latest winner section start  -->
    <section class="latest-winner-section position-relative pt-120 pb-120">
        <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
        {{-- <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div> --}}
        <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Meet the latest winners from your favorite raffles</span>
                        <h2 class="section-title">Latest Winners</h2>
                        <p>Check your ticket number's to see if you are a Winner in the raffles.</p>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="dream-tab" data-toggle="tab" href="#dream" role="tab"
                                aria-controls="dream" aria-selected="true">
                                <div class="icon-thumb"><img src="assets/images/icon/winner-tab/1.png" alt="image">
                                </div>
                                <span>Electronics</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="bike-tab" data-toggle="tab" href="#bike" role="tab"
                                aria-controls="bike" aria-selected="false">
                                <div class="icon-thumb"><img src="assets/images/icon/winner-tab/2.png"
                                        alt="image"></div>
                                <span>Adventure</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="watch-tab" data-toggle="tab" href="#watch" role="tab"
                                aria-controls="watch" aria-selected="false">
                                <div class="icon-thumb"><img src="assets/images/icon/winner-tab/3.png"
                                        alt="image"></div>
                                <span>Leasure</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="laptop-tab" data-toggle="tab" href="#laptop" role="tab"
                                aria-controls="laptop" aria-selected="false">
                                <div class="icon-thumb"><img src="assets/images/icon/winner-tab/4.png"
                                        alt="image"></div>
                                <span>Luxury</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="money-tab" data-toggle="tab" href="#money" role="tab"
                                aria-controls="money" aria-selected="false">
                                <div class="icon-thumb"><img src="assets/images/icon/winner-tab/5.png"
                                        alt="image"></div>
                                <span>Sport</span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content mt-50" id="myTabContent">

                        <div class="tab-pane fade show active" id="dream" role="tabpanel"
                            aria-labelledby="dream-tab">
                            <div class="row mb-none-30 mt-50">
                                @foreach ($electronicsRaffles as $raffle)
                                    <x-raffle-card :raffle="$raffle" />
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
                            <div class="row mb-none-30 mt-50">
                                @foreach ($adventureRaffles as $raffle)
                                    <x-raffle-card :raffle="$raffle" />
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                            <div class="row mb-none-30 mt-50">
                                @foreach ($leasureRaffles as $raffle)
                                    <x-raffle-card :raffle="$raffle" />
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                            <div class="row mb-none-30 mt-50">
                                @foreach ($luxuryRaffles as $raffle)
                                    <x-raffle-card :raffle="$raffle" />
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
                            <div class="row mb-none-30 mt-50">
                                @foreach ($sportRaffles as $raffle)
                                    <x-raffle-card :raffle="$raffle" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->

        </div>
    </section>
    <!-- latest winner section end  -->

    <!-- overview section start -->
    <section class="overview-section pt-120">
        <div class="map-el"><img src="assets/images/elements/map.png" alt="image"></div>
        <div class="obj-1"><img src="assets/images/elements/overview-obj-1.png" alt="image"></div>
        <div class="obj-2"><img src="assets/images/elements/overview-obj-2.png" alt="image"></div>
        <div class="obj-3"><img src="assets/images/elements/overview-obj-3.png" alt="image"></div>
        <div class="obj-4"><img src="assets/images/elements/overview-obj-4.png" alt="image"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Our Users Around Australia</span>
                        <h2 class="section-title">Let the number speak for us</h2>
                        <p>Over the years we have provided millions of players with tickets to raffles across Oz and
                            enjoyed having more winners</p>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
        <div class="map-pointer">
            <div class="pointer num-1"></div>
            <div class="pointer num-2"></div>
            <div class="pointer num-3"></div>
            <div class="pointer num-4"></div>
            <div class="pointer num-5"></div>
            <div class="pointer num-6"></div>
            <div class="pointer num-7"></div>
            <div class="pointer num-8"></div>
            <div class="pointer num-9"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="assets/images/icon/overview/1.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            @if ($userCount < 100)
                                <span class="number">100+</span>
                            @else
                                <span class="number">{{ $userCount }}</span>
                            @endif
                            <p>Verified Users</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="assets/images/icon/overview/2.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">{{ $raffleCount }}</span>
                            <p>Drawn raffles</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="assets/images/icon/overview/3.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">99%</span>
                            <p>Customer Satisfaction</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
            </div>
        </div><!-- container end -->
    </section>
    <!-- overview section end -->

    <!-- features section start -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="row mb-none-30">
                        <div class="col-lg-6 mb-30">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="assets/images/icon/feature/1.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Great Prizes</h3>
                                            <p>All of our prizes are top quality!</p>
                                            </p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="assets/images/icon/feature/3.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Express Shipping</h3>
                                            <p>All prizes are shipped using AusPost Express Shipping!
                                            </p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30 mt-lg-5">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="assets/images/icon/feature/2.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Security</h3>
                                            <p>We use stripe to ensure all payments are secure!
                                            </p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s"
                                    data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="assets/images/icon/feature/4.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Support</h3>
                                            <p>We have support available 24/7!
                                            </p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-lg-left text-center wow fadeInRight"
                    data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="section-header">
                        <span class="section-sub-title">An Exhaustive range of</span>
                        <h2 class="section-title">Our Prizes</h2>
                        <p>We post a large amount of prizes that people have asked for and those iconic products so
                            everyone has
                            a chance to win something they want!
                        </p>
                        <a href="#0"
                            class="d-flex align-items-center mt-3 justify-content-lg-start justify-content-center">Show
                            all raffles<i class="las la-angle-double-right text-danger"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features section end -->

    <!-- testimonial section start -->
    <section class="has-bg--shape pt-120 pb-120">
        <div class="bg-shape">
            <div class="round-shape d-sm-block d-none"><img src="assets/images/elements/round-shape.png"
                    alt="image"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
            <div class="shape-4"></div>
            <div class="shape-5"></div>
            <div class="shape-6"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Testimonial</span>
                        <h2 class="section-title">Happy Winners All Around Australia</h2>
                        <p>With over 500+ raffles up and coming keep checking in to see if you could win for just $1
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-area bg_img"
                        data-background="assets/images/elements/testimonial-single.jpg">
                        <div class="testimonial-slider">

                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-single">
                                    <div class="testimonial-single__thumb">
                                        @if ($testimonial->user->image_path)
                                            <img src="{{ asset('storage/' . $testimonial->user->image_path) }}"
                                                alt="{{ $testimonial->user->name }}">
                                        @else
                                            <img src="{{ asset('path_to_default_image') }}" alt="Default Image">
                                        @endif
                                    </div>

                                    <div class="testimonial-single__content">
                                        <h4 class="client-name">{{ $testimonial->user->name }}</h4>
                                        <p>{{ $testimonial->content }} </p>

                                        <div class="ratings">
                                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                            {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonial-single end -->
                            @endforeach

                            {{-- <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="assets/images/winner/1.png" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Dave Ford</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own
                                        a car like this” </p>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div> --}}



                        </div><!-- testimonial-slider end -->
                    </div><!-- testimonial-area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- support section start  -->
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Get in touch with our friendly support</span>
                        <h2 class="section-title">Customer Support</h2>
                        <p>Have a question or need help? Contact our friendly support team.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="support-card">
                        <div class="support-card__thumb">
                            <img src="assets/images/icon/support/1.png" alt="image">
                        </div>
                        <div class="support-card__content">
                            <h3 class="support-card__title">Talk to our support team</h3>
                            <p>Got a question about Raffles? Get in touch with our friendly staff.</p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="tel:0478799463" class="btn-border btn-sm text-capitalize">Call us <i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="mailto:mdtdallas@hotmail.com" class="cmn-btn btn-sm text-capitalize">Email us
                                    <i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div><!-- support-card end -->
                </div>
                <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="support-card">
                        <div class="support-card__thumb">
                            <img src="assets/images/icon/support/2.png" alt="image">
                        </div>
                        <div class="support-card__content">
                            <h3 class="support-card__title">Our guide to our raffles</h3>
                            <p>Check out our FAQs to see if we can help you out. </p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="faq.html" class="btn-border btn-sm text-capitalize">FAQs & Help</a>
                            </div>
                        </div>
                    </div><!-- support-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- support section end  -->
</x-dark-layout>
