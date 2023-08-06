<x-dark-layout>
    <!-- inner-hero-section start -->
    <section class="inner-hero-section style--four">
        <div class="bg-shape"><img src="assets/images/elements/inner-hero-shape-2.png" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="inner-page-content">
                        <h2 class="title">Never miss a raffle!</h2>
                        <p>Easy way to buy tickets and win your dream prize</p>
                        <p>many others anytime, anywhere</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-hero-section end -->

    <!-- winner details section start -->
    <section class="mt-minus-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="winner-details-wrapper bg_img"
                        data-background="assets/images/elements/winner-details.jpg">
                        <div class="left"><img src="assets/images/contest/1.png" alt="image"></div>
                        <div class="body">
                            <p class="contest-number">Contest No: {{ $latestWinner->id }}</p>
                            <p class="contest-date"><span>Draw took place on :</span>
                                {{ date('jS M Y', strtotime($latestWinner->drawn_at)) }}</p>
                            <div class="line"></div>
                            <h4 class="title">Latest Raffle Winning Number:</h4>
                            <ul class="numbers">
                                <li>{{ $latestWinner->winning_ticket_number }}</li>
                            </ul>
                            <div class="btn-grp">
                                <a href="#0" class="btn-border">Alerts</a>
                                <a href="#0" class="btn-border">How to Claim</a>
                            </div>
                        </div>
                        <div class="right"><img src="assets/images/contest/7.png" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- winner details section end -->
    
    <x-latest-winners />

    <x-testimonials />

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
                            <p>Got a question about Lotteries? Get in touch with our friendly staff.</p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="tel:6564545" class="btn-border btn-sm text-capitalize">Call us <i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="mailto:dhdj@gmail.com" class="cmn-btn btn-sm text-capitalize">Email us <i
                                        class="far fa-envelope"></i></a>
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
                            <h3 class="support-card__title">Our Guide to Rifa</h3>
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
