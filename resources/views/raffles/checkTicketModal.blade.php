<x-modal-layout>
    <div class="modal" id="loginModal" tabindex="1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="account-form-area">
                        <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                        <h3 class="title">Raffle Results</h3>
                        
                        @if (isset($message))
                            <h3>{!! nl2br($message) !!}</h3>
                            <?php unset($message); ?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-modal-layout>


