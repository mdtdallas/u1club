<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-body">
            <div class="account-form-area">
                <button type="button" class="close-btn" onclick="goBack()" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
                <h3 class="title">Claim Your Prize</h3>
                <div class="account-form-wrapper">
                    <form method="POST" action="{{ route('raffle.claimRafflePrize', ['raffle' => $raffle]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="full_name">Full Name <sup>*</sup></label>
                            <input type="text" name="full_name" id="full_name" placeholder="Enter your Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number<sup> *</sup></label>
                            <input type="text" name="phone_number" id="phone_number" placeholder="Enter your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="winner_address">Postal Address <sup>*</sup></label>
                            <input type="text" name="winner_address" id="winner_address" placeholder="Enter Your Address" required>
                        </div>
                       
                        <div class="form-group text-center mt-5">
                            <button type="submit" class="cmn-btn">Claim Prize</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>