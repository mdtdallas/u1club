<x-dark-layout>

    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{ asset('assets/images/elements/inner-hero-shape.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="{{route('raffles.index')}}">Raffle</a></li>
                        <li class="active">Raffle No: {{ $raffle->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contest-details-section start -->
    <section class="pb-120 mt-minus-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="clock-wrapper">
                        @if ($raffle->is_drawn == 0)
                            <p class="mb-2">Only</p>
                            <div class="clock" id="clock">
                                <div class="mb-2">
                                    <span id="tickets-remaining">{{ $percentRemaining }}%</span>
                                    Tickets Remaining

                                </div>
                            </div>
                        @else
                            <div class="clock" id="clock">
                                <div class="mb-2">
                                    <span id="tickets-remaining">Raffle Drawn</span>
                                </div>
                            </div>
                        @endif
                    </div><!-- clock-wrapper end -->
                </div>
                <div class="col-lg-12">
                    <div class="contest-cart">
                        <div class="contest-cart__left">
                            <div class="contest-cart__slider-area">
                                <div class="contest-cart__thumb-slider">
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                </div><!-- contest-cart__thumb-slider end -->
                                <div class="contest-cart__nav-slider">
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                    <div class="single-slide"><img src="{{ asset('storage/' . $raffle->image_path) }}"
                                            alt="{{ $raffle->title }}">
                                    </div>
                                </div><!-- contest-cart__nav-slider end -->
                            </div>
                        </div><!-- contest-cart__left end -->
                        <div class="contest-cart__right">
                            <h4 class="subtitle">Enter now for a chance to win</h4>
                            <h3 class="contest-name">{{ $raffle->title }}</h3>
                            <p>{{ $raffle->description }}</p>
                            <div class="contest-num">Contest no: <span>{{ $raffle->id }}</span></div>
                            <h4>Tickets Sold</h4>
                            <div class="ticket-amount">
                                <span class="left">0%</span>
                                <span class="right">100%</span>
                                <div class="progressbar"
                                    data-perc="{{ ($raffle->sold_tickets / $raffle->required_tickets) * 100 }}%">
                                    <div class="bar"></div>
                                </div>
                                <p>Only
                                    {{ number_format((1 - $raffle->sold_tickets / $raffle->required_tickets) * 100, 0) }}%
                                    remaining!</p>
                            </div>
                            <div class="ticket-price">
                                <span class="amount">$1.00</span>
                                <small>Per ticket</small>
                            </div>

                            @if ($raffle->is_drawn == 1)
                                <div class="ticket-price">

                                    @if ($raffle->winner_id == Auth::user()->id)
                                        <span class="amount">You are the winner</span>
                                        <a href="{{ route('raffle.claimRafflePrize', $raffle) }}"
                                            class="btn btn-primary">Claim Prize</a>
                                    @else
                                        @if($raffle->prize_claimed == 1)
                                        <a href="" class="btn btn-primary" disabled>Prize Claimed</a>
                                        @else
                                        <span class="amount">Winner: {{ $raffle->winner->name }}</span>
                                        @endif
                                    @endif

                                </div>
                            @else
                                <form method="POST" action="{{ route('tickets.store', $raffle) }}">
                                    <div class="d-flex flex-wrap align-items-center mb-30">
                                        @csrf
                                        <div class="select-quantity">
                                            <span class="caption">Quantity</span>
                                            <div class="quantity">
                                                <input type="number" name="number_of_tickets" min="0"
                                                    max="100" step="1" value="1" required>
                                            </div>
                                        </div><!-- select-quantity end -->
                                        <div class="mt-sm-0 mt-3">
                                            <input type="hidden" name="raffle_id" value="{{ $raffle->id }}">
                                            @if ($raffle->is_drawn == 1)
                                                <button type="submit" class="cmn-btn style--three"
                                                    disabled>Drawn!!</button>
                                            @else
                                                <button type="submit" class="cmn-btn style--three">Enter Now</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            @endif

                            <ul class="social-links align-items-center">
                                <li>Share :</li>
                                <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://linkedIn.com"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- contest-cart__right end -->
                    </div><!-- contest-cart end -->
                </div><!-- col-lg-12 end -->
                <div class="col-lg-10">
                    <div class="contest-description">
                        <ul class="nav nav-tabs justify-content-center mb-30 pb-4 border-0" id="myTab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="cmn-btn active" id="description-tab" data-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="cmn-btn" id="details-tab" data-toggle="tab" href="#details"
                                    role="tab" aria-controls="details" aria-selected="false">competition
                                    details</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="content-block">
                                    <h3 class="title">Prize Overview</h3>
                                    <p>{{ $raffle->description }}
                                    </p>
                                </div><!-- content-block end -->

                                {{-- <div class="content-block">
                                    <h3 class="title">Specifications</h3>
                                    <div class="row mb-none-30">

                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/1.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>0-62mph</p>
                                                    <span>4.0 secs</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/2.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>Top Speed</p>
                                                    <span>181 mph</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/3.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>Power</p>
                                                    <span>542 bhp</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/4.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>Displacement</p>
                                                    <span>4.0ltr</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/5.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>bhp</p>
                                                    <span>691</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>
                                        <div class="col-lg-4 col-sm-6 mb-30">
                                            <div class="icon-item">
                                                <div class="icon-item__thumb"><img
                                                        src="assets/images/icon/specification/6.png" alt="image">
                                                </div>
                                                <div class="icon-item__content">
                                                    <p>Year</p>
                                                    <span>2019</span>
                                                </div>
                                            </div><!-- icon-item end -->
                                        </div>
                                    </div>
                                </div><!-- content-block end --> --}}

                            </div>
                            <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                                <div class="content-block">
                                    <h3 class="title">Competition Details</h3>
                                    <p>
                                        <strong>Raffle Draw Rules:</strong>
                                    </p>
                                    <ul>
                                        <li>The raffle draw will occur automatically when the last ticket is sold or at
                                            the closing date and time,
                                            whichever comes first.</li>
                                        <li>Participants must be 18 years or older to enter the raffle draw.</li>
                                        <li>Winners will be required to provide proof of age.</li>
                                        <li>The winner(s) will be selected at random by a computerised system.</li>
                                        <li>The raffle is open to residents of Australia.</li>
                                        <li>Ticket sales will close when all tickets are sold or on
                                            {{ $raffle->created_at->addMonths(3)->format('jS M Y') }}.</li>
                                        <li>The total number of available tickets is {{ $raffle->required_tickets }}.
                                        </li>
                                        <li>The price of each raffle ticket is $1. Participants can
                                            purchase multiple tickets for a single
                                            draw.</li>
                                    </ul>
                                    <p>
                                        <strong>Prize Collection and Delivery:</strong>
                                    </p>
                                    <ul>
                                        <li>All prizes are as described and non-exchangeable for cash or other items.
                                        </li>
                                        <li>The winner(s) will be notified via Notification / Email / Phone within
                                            24 hours of the draw.</li>
                                        <li>The winning ticket number(s) will be published on the Website and Social
                                            Media Page following the draw.</li>
                                        <li>The winner(s) must claim their prize within 90 days from the
                                            draw date.</li>
                                        <li>Prizes will be shipped via AusPost Express or delivered via Delivery Methods
                                            from supplier within 2 business days of the draw.</li>
                                    </ul>
                                </div><!-- content-block end -->
                            </div>
                        </div><!-- tab-content end -->
                    </div><!-- contest-description end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest-details-section end  -->
    {{-- <script>
        // Function to update the tickets remaining countdown
        function updateTicketsRemaining() {
            var ticketsRemaining = parseInt(document.getElementById('tickets-remaining').innerText);
            if (ticketsRemaining > 0) {
                // Decrease the ticketsRemaining by 5 (or any other value you desire)
                ticketsRemaining -= 1;
                // Limit the ticketsRemaining to a minimum of 0
                ticketsRemaining = Math.max(ticketsRemaining, 10);
                document.getElementById('tickets-remaining').innerText = ticketsRemaining . '%';
            }
        }

        // Update the countdown every 10 seconds (10000 milliseconds)
        setInterval(updateTicketsRemaining, 10000);
    </script> --}}
</x-dark-layout>
