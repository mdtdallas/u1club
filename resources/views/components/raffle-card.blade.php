<!-- contest-card start -->
<div class="contest-card">
    <a href="{{ route('raffles.show', ['raffle' => $raffle->id]) }}" class="item-link"></a>
    <div class="contest-card__thumb">
        <img src="{{ asset('storage/' . $raffle->image_path) }}" alt="{{ $raffle->title }}">
        {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a> --}}
        {{-- <div class="action-icon text-white pt-1"><i class="far fa-heart"></i></div> --}}

        <div class="contest-num">
            <h5 clas1s="number">Raffle: </h5>
            <h4 class="number">{{ $raffle->id }}</h4>
        </div>
    </div>
    <div class="contest-card__content">
        <div class="left">
            <h5 class="contest-card__name">{{ $raffle->title }}</h5>
        </div>
        <div class="right">
            <span class="contest-card__price">$1.00</span>
            <p>ticket price</p>
        </div>
    </div>
    <div class="contest-card__footer">
        <ul class="contest-card__meta">
            <li>
                @if ($raffle->is_drawn == 1)
                    <i class="las la-check-circle"></i>
                    <span>Drawn</span>
                @else
                    @php
                        $totalTickets = $raffle->required_tickets;
                        $soldTickets = $raffle->sold_tickets;
                        $percentageSold = number_format(($soldTickets / $totalTickets) * 100, 0);
                    @endphp
                    <i class="las la-ticket-alt"></i>
                    <span>{{ $percentageSold }}%</span>
                    <p>Sold</p>
                @endif
            </li>
            <li>
                @if ($raffle->is_drawn == 1)
                    <!-- winner -->
                    <i class="las la-trophy"></i>
                    {{-- <span>Winner</span> --}}
                    <span>{{ $raffle->winner->name }}</span>
                @else
                    @php
                        $remainingTickets = $raffle->required_tickets - $raffle->sold_tickets;
                        $totalTickets = $raffle->required_tickets;
                        $percentageRemaining = ($remainingTickets / $totalTickets) * 100;
                        $formattedPercentage = number_format($percentageRemaining, 0);
                        $formattedPercentage = max(1, $formattedPercentage); // Set to 1% if less than 1
                    @endphp
                    <i class="las la-ticket-alt"></i>
                    <span>{{ $formattedPercentage }}%</span>
                    <p>Remaining</p>
                @endif
            </li>
        </ul>
    </div>
</div>

<!-- contest-card end -->
