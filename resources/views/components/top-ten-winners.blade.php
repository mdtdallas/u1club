<!-- winner section start -->
<section class="position-relative pt-120 pb-120">
    <div class="bg-el"><img src="{{ asset('assets/images/bg/winner-2.jpg') }}" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">The biggest raffles winners of the month</span>
                    <h2 class="section-title">Top Ten winners</h2>
                    <p>There have been numerous winnings, but some winners were luckier than others</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="winner-wrapper">
                    <div class="left">
                        <div class="winner-prize-thumb wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/elements/car.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="right">
                        <div class="winner-slider">
                            @foreach ($winners as $winner)
                                <!-- winner-slide-item start -->
                                <div class="winner-slide-item">
                                    <div class="winner-thumb">
                                        @if ($winner->image_path)
                                            <img src="{{ asset('storage/' . $winner->winner->image_path) }}"
                                                alt="image">
                                        @else
                                            <img src="{{ asset('assets/images/winner/w-1.png') }}" alt="image">
                                        @endif
                                    </div>
                                    <div class="winner-content bg_img"
                                        data-background="{{ asset('assets/images/elements/winner-content-bg.jpg') }}">
                                        <h6 class="winner-name">{{ $winner->title }}</h6>
                                        <p>Draw took place on</p>
                                        <span
                                            class="draw-date">{{ date('jS M Y', strtotime($winner->drawn_at)) }}</span>
                                    </div>
                                </div>
                                <!-- winner-slide-item end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
<!-- winner section end -->
