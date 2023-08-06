<x-dark-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    
                    <x-user-card />
                    
                    <x-user-action-card />

                </div>
                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="upcoming-draw-wrapper">
                        <h3 class="title">Upcoming Draw</h3>
                        <div class="draw-ticket-slider">
                            @foreach ($upcomingRaffles as $raffle)
                            
                                <div class="draw-single-ticket">
                                    <div class="draw-single-ticket__header">
                                        <div class="left">Raffle #{{ $raffle['raffle_id'] }}</div>
                                        <div class="right">Prize </div>
                                    </div>
                                    <div class="circle-divider"><img
                                            src="{{ asset('assets/images/elements/circle-border.png') }}"
                                            alt="image"></div>
                                    <ul class="ticket-numbers-list">

                                       
                                        @foreach ($raffle['ticket_numbers'] as $ticketNumber)
                                            <li>{{ $ticketNumber }}</li>
                                        @endforeach

                                    </ul>
                                </div><!-- draw-single-ticket end -->
                            @endforeach

                        </div><!-- draw-ticket-slider end -->
                    </div><!-- upcoming-draw-wrapper end -->
                    <div class="past-draw-wrapper">
                        <h3 class="title">Past Draws</h3>
                        <div class="table-responsive-lg">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Drawn</th>
                                        <th>Contest No</th>
                                        <th>Result</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pastRaffles as $raffle)
                                    
                                    <tr>
                                        <td><span class="date">{{ date('jS M Y', strtotime($raffle['raffle_info']->drawn_at)) }}</span></td>
                                        <td><span class="contest-no">{{$raffle['raffle_id']}}</span></td>
                                        <td>
                                            <ul class="number-list">
                                                <li>{{$raffle['raffle_info']->winning_ticket_number}}</li>
                                                
                                            </ul>
                                        </td>
                                        <td>
                                            <span class="fail">
                                                @if (Auth::user() && Auth::user()->id === $raffle['raffle_info']->winner_id)
                                                    Winner
                                                    <a href="{{ route('raffle.claimRafflePrize', $raffle['raffle_info']) }}" class="btn btn-primary">Claim Prize</a>
                                                @else
                                                    No Win
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more">
                            <button type="button">Show More Raffles <i class="las la-angle-down ml-2"></i></button>
                        </div>
                    </div><!-- past-draw-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
</x-dark-layout>
