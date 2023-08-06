<x-light-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Lottery</a></li>
                        <li class="active">Contest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contest section start  -->
    <section class="pb-120 mt-minus-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contest-wrapper">
                        <div class="contest-wrapper__header pt-120">
                            <h2 class="contest-wrapper__title">Latest Raffles</h2>
                            <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="dream-tab" data-toggle="tab" href="#dream"
                                        role="tab" aria-controls="dream" aria-selected="true">
                                        <div class="icon-thumb"><img src="assets/images/icon/winner-tab/1.png"
                                                alt="image"></div>
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
                        </div>
                        <div class="contest-wrapper__body">

                            <div class="row contest-filter-wrapper justify-content-center mt-30 mb-none-30">
                                <div class="col-lg-2 col-sm-6 mb-30">
                                    <select>
                                        <option>SORT BY</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-6 mb-30">
                                    <select>
                                        <option>ALL MAKES</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 mb-30">
                                    <div class="rang-slider">
                                        <span class="caption">Ticket Price</span>
                                        <div id="slider-range-min-one" class="invest-range-slider" data-value="8"
                                            data-maxValue="16"></div>
                                        <div class="amount-wrapper">
                                            <span class="min-amount">0</span>
                                            <div class="main-amount">
                                                <input type="text" class="calculator-invest" id="basic-amount"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-4 mb-30">
                                    <div class="action-btn-wrapper">
                                        <button type="button" class="action-btn"><i class="lar la-heart"></i></button>
                                        <button type="button" class="action-btn"><i
                                                class="las la-redo-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-8 mb-30">
                                    <form class="contest-search-form">
                                        <input type="text" placeholder="SEARCH HERE">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div><!-- row end -->

                            <div class="tab-content mt-50" id="myTabContent">

                                <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">
                                    <div class="row mb-none-30 mt-50">
                                        @foreach($electronicsRaffles as $raffle)
                                            <x-raffle-card :raffle="$raffle" />
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
                                    <div class="row mb-none-30 mt-50">
                                        @foreach($adventureRaffles as $raffle)
                                            <x-raffle-card :raffle="$raffle" />
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                                    <div class="row mb-none-30 mt-50">
                                        @foreach($leasureRaffles as $raffle)
                                            <x-raffle-card :raffle="$raffle" />
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                                    <div class="row mb-none-30 mt-50">
                                        @foreach($luxuryRaffles as $raffle)
                                            <x-raffle-card :raffle="$raffle" />
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
                                    <div class="row mb-none-30 mt-50">
                                        @foreach($sportRaffles as $raffle)
                                            <x-raffle-card :raffle="$raffle" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- contest-wrapper end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest section end -->

    <!-- contest feature section start -->
    <section class="pb-120">
        <div class="container">
            <div class="row mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="assets/images/icon/contest-feature/1.png" alt="image">
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
                            <img src="assets/images/icon/contest-feature/2.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Great Value</h3>
                            <p>We offer competitive prices for every lottery tickets</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="assets/images/icon/contest-feature/3.png" alt="image">
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
</x-light-layout>
