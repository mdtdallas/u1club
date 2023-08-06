@if ($raffle->is_drawn == 1)
    <div class="winner-card mb-30">
        <div class="winner-card__thumb">
            <img src="{{ asset('storage/' . $raffle->image_path) }}" alt="{{ $raffle->title }}">
            <div class="text-center mx-auto">
                <h5><i class="las la-crown"></i></h5>
                <h5>{{ $raffle->winner->name }}</h5>
            </div>
        </div>
        <div class="winner-card__content">
            @if ($raffle->winner->image_path)
                <div class="winner-thumb">
                    <img src="{{ asset('storage/' . $raffle->winner->image_path) }}" alt="{{ $raffle->title }}">
                </div>
            @endif
            <div class="content-top">
                <div class="left">
                    <p>Prize</p>
                    <h5>{{ $raffle->title }}</h5>
                </div>
                <div class="right">


                    @if (date('Y-m-d', strtotime($raffle->drawn_at)) === date('Y-m-d'))
                        <span>Draw took place</span>
                        <p>{{ __('Today') }} | {{ date('H:i A', strtotime($raffle->drawn_at)) }}</p>
                    @else
                        <span>Draw took place on</span>
                        <p>{{ date('jS M Y | H:i A', strtotime($raffle->drawn_at)) }}</p>
                    @endif


                </div>
            </div>
            <div class="content-bottom">
                <div class="number-list-wrapper">
                    <p>Winning Number:</p>
                    <ul class="number-list mt-2">
                        <li>{{ $raffle->winning_ticket_number }}</li>
                    </ul>
                </div>
                <div class="right">
                    <p>Contest No:</p>
                    <span class="contest-num">{{ $raffle->id }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- winner-card end -->
@endif
