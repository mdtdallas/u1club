   <!-- latest winner section start  -->
   <section class="latest-winner-section position-relative pt-120 pb-120">
    <div class="el-1"><img src="{{asset('assets/images/elements/w-el-1.png')}}" alt="image"></div>
    <div class="el-2"><img src="{{asset('assets/images/elements/w-el-2.png')}}" alt="image"></div>
    <div class="el-3"><img src="{{asset('assets/images/elements/w-el-3.png')}}" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Meet the latest winners from your favorite raffles</span>
                    <h2 class="section-title">Latest Winners</h2>
                    <p>Check your ticket number's to see if you are a Winner in the Raffle.</p>
                </div>
            </div>
        </div><!-- row end -->

        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="col-lg-12">
                <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="dream-tab" data-toggle="tab" href="#dream"
                            role="tab" aria-controls="dream" aria-selected="true">
                            <div class="icon-thumb"><img src="{{asset('assets/images/icon/winner-tab/1.png')}}"
                                    alt="image"></div>
                            <span>Electronics</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bike-tab" data-toggle="tab" href="#bike" role="tab"
                            aria-controls="bike" aria-selected="false">
                            <div class="icon-thumb"><img src="{{asset('assets/images/icon/winner-tab/2.png')}}"
                                    alt="image"></div>
                            <span>Adventure</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="watch-tab" data-toggle="tab" href="#watch" role="tab"
                            aria-controls="watch" aria-selected="false">
                            <div class="icon-thumb"><img src="{{asset('assets/images/icon/winner-tab/3.png')}}"
                                    alt="image"></div>
                            <span>Luxury</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="laptop-tab" data-toggle="tab" href="#laptop" role="tab"
                            aria-controls="laptop" aria-selected="false">
                            <div class="icon-thumb"><img src="{{asset('assets/images/icon/winner-tab/4.png')}}"
                                    alt="image"></div>
                            <span>leasure</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="money-tab" data-toggle="tab" href="#money" role="tab"
                            aria-controls="money" aria-selected="false">
                            <div class="icon-thumb"><img src="{{asset('assets/images/icon/winner-tab/5.png')}}"
                                    alt="image"></div>
                            <span>sport</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content mt-50" id="myTabContent">

                    <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">
                        <div class="row mb-none-30">

                            <x-check-my-numbers />

                            <div class="col-lg-8 mb-30">

                                @foreach ($electronicsRafflesWinners as $raffle)
                                    <x-home-winners-card :raffle="$raffle" />
                                @endforeach
                                        
                             
                                <div class="btn-grp">
                                    <a href="{{route('winners.index')}}" class="btn-border">browse more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
                        <div class="row mb-none-30">

                            <x-check-my-numbers />

                            <div class="col-lg-8 mb-30">

                                @foreach ($adventureRafflesWinners as $raffle)
                                    <x-home-winners-card :raffle="$raffle" />
                                @endforeach

                             
                                <div class="btn-grp">
                                    <a href="{{route('winners.index')}}" class="btn-border">browse more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                        <div class="row mb-none-30">

                            <x-check-my-numbers />

                            <div class="col-lg-8 mb-30">

                                @foreach ($luxuryRafflesWinners as $raffle)
                                    <x-home-winners-card :raffle="$raffle" />
                                @endforeach

                             
                                <div class="btn-grp">
                                    <a href="{{route('winners.index')}}" class="btn-border">browse more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                        <div class="row mb-none-30">

                            <x-check-my-numbers />

                            <div class="col-lg-8 mb-30">

                                @foreach ($leasureRafflesWinners as $raffle)
                                    <x-home-winners-card :raffle="$raffle" />
                                @endforeach

                             
                                <div class="btn-grp">
                                    <a href="{{route('winners.index')}}" class="btn-border">browse more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
                        <div class="row mb-none-30">

                            <x-check-my-numbers />

                            <div class="col-lg-8 mb-30">

                                @foreach ($sportRafflesWinners as $raffle)
                                    <x-home-winners-card :raffle="$raffle" />
                                @endforeach

                             
                                <div class="btn-grp">
                                    <a href="{{route('winners.index')}}" class="btn-border">browse more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- tab-content end -->
            </div>
        </div><!-- row end -->

    </div>
</section>
<!-- latest winner section end  -->