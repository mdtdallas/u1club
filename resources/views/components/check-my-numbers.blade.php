<div class="col-lg-4 mb-30">
    <div class="number-check-wrapper">
        <h3 class="title">Check Raffle Results</h3>
        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>

        <form class="check-number-form" method="POST" action="{{ route('raffles.checkNumbers') }}">
            @csrf
            <input type="tel" class="form-control mt-30 mb-30" name="raffle_id" id="check-number2"
                placeholder="Enter Raffle No">
            @if (isset($message))
                <h3>{!! nl2br($message) !!}</h3>
                <?php unset($message); ?>
            @endif
            <div class="number-list-wrapper">
                <div class="text-center mt-50">
                    <button type="submit" class="cmn-btn">See Raffle Results</button>
                </div>
            </div>
        </form>
    </div>
</div>
