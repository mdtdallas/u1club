<!-- contest section start -->
<section class="position-relative pt-120 pb-120">
    <div class="bg-el"><img src="{{asset('assets/images/bg/contest-bg-2.jpg')}}" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Try your chance at winning</span>
                    <h2 class="section-title">Current Raffles</h2>
                    <p>Buy tickets and enter the raffles</p>
                    <p>Winners will be notified by phone or email.</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="col-lg-12">
                <div class="contest-slider style--two">


                    @foreach ($raffles as $raffle)
                        <x-raffle-card :raffle="$raffle" />
                    @endforeach


                </div><!-- contest-slider end -->
            </div>
        </div><!-- row end -->
        <div class="row mt-30">
            <div class="col-lg-12">
                <div class="btn-grp">
                    <a href="{{ route('raffles.index') }}" class="btn-border">browse more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contest section end -->