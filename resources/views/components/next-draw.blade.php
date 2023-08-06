<!-- next-draw-section start -->
<div class="pt-120 pb-120">
    <div class="container">
        <h3 class="section-title text-center">Get In Quick!!</h3>
        <div class="row">
            <div class="col-lg-12">
                <div class="next-draw-area">
                    <div class="left">
                        <p>NEXT RAFFLE</p>
                        <h3 class="title">{{ $latestRaffle->title ?? '' }}</h3>
                        <span>ID: {{$latestRaffle->id ?? ''}}</span>
                    </div>
                    <div class="middle">
                        <p>Tickets Left:</p>
                        @if ($percentRemaining < 2)
                            <h3 class="text-center">{{ $ticketsRemaining }}</h3>
                        @else
                            <h3 class="text-center">{{ $percentRemaining }}%</h3>
                        @endif
                    </div>
                    <div class="right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- next-draw-section end -->