<!-- contest section start -->
<section class="position-relative pt-120 pb-120">
    <div class="bg-el"><img src="{{ asset('assets/images/elements/contest-bg.png') }}" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Try your chance at winning</span>
                    <h2 class="section-title">All Raffles</h2>
                    <p>Buy Tickets to enter Raffles</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="col-lg-12">
                <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="contestTab" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <a class="cmn-btn style--two d-flex align-items-center" id="lifestyle-tab" data-toggle="tab"
                            href="#lifestyle" role="tab" aria-controls="lifestyle" aria-selected="false"><span
                                class="mr-3"><img src="{{ asset('assets/images/icon/btn/box.png') }}" alt="icon"></span>All
                            lifestyle</a>
                    </li>
                </ul>
                <div class="tab-content" id="contestTabContent">
                    <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">
                        <div class="row mb-none-30">

                            @foreach ($raffles as $raffle)
                                <x-raffle-card :raffle="$raffle" />
                            @endforeach
                           
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
                        <div class="row mb-none-30">

                            @foreach ($raffles as $raffle)
                                <x-raffle-card :raffle="$raffle" />
                            @endforeach

                        </div>
                    </div>
                </div><!-- table content end -->
            </div>
        </div><!-- row end-->
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
