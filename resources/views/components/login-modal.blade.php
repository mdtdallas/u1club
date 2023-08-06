   <!-- login modal -->
   <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                    <h3 class="title">Welcome Back</h3>
                    <div class="account-form-wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="login_email">Email <sup>*</sup></label>
                                <input type="email" name="email" id="login_email" placeholder="Enter your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="login_password">Password <sup>*</sup></label>
                                <input type="password" name="password" id="login_password" placeholder="Password" required>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between mt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember Password</label>
                                    <span class="checkbox"></span>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link">Forgot
                                    Password?</a>
                                @endif
                            </div>
                            <div class="form-group text-center mt-5">
                                <button type="submit" class="cmn-btn">Log In</button>
                            </div>
                        </form>
                        <p class="text-center mt-4">Don’t have an account? <a href="{{route('register')}}"> Sign Up Now</a></p>
                        {{-- <div class="divider">
                            <span>or</span>
                        </div>
                        <ul class="social-link-list">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>