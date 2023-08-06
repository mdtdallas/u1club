<!-- Sign Up modal -->
<div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                    <h3 class="title">Open Free Account</h3>
                    <div class="account-form-wrapper">
                        <form method="POST" action="{{ route('register') }}" id="registration-form">
                            @csrf
                            <div class="form-group">
                                <label for="signup_email">Email <sup>*</sup></label>
                                <input type="email" name="email" id="signup_email" placeholder="Enter your Email" required>
                            </div>
                            {{-- name input --}}
                            <div class="form-group">
                                <label for="name">Name <sup>*</sup></label>
                                <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                            </div>
                            {{-- dob input --}}
                            <div class="form-group">
                                <label for="dob">Date of Birth <sup>*</sup></label>
                                <input type="date" name="dob" id="dob" placeholder="Must be 18+" required>
                            </div>                            
                            {{-- phone number input --}}
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="tel" name="phone_number" id="phone_number" placeholder="To be contacted for prize winners">
                            </div>  
                            <div class="form-group">
                                <label for="signup_password">Password <sup>*</sup></label>
                                <input type="password" name="password" id="signup_password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="signup_confirm_password">Confirm Password <sup>*</sup></label>
                                <input type="password" name="password_confirmation" id="signup_confirm_password" placeholder="Confirm Password" required>
                            </div>
                            <div class="d-flex flex-wrap mt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="agree_terms" id="agree_terms" checked>
                                    <label for="agree_terms">I agree to the</label>
                                    <span class="checkbox"></span>
                                </div>
                                <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                            </div>
                            <div class="d-flex flex-wrap mt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="age_agree" id="age_agree" checked>
                                    <label for="age_agree">I am over the age of 18</label>
                                    <span class="checkbox"></span>
                                </div>
                            </div>
                            <div class="form-group text-center mt-5">
                                <button type="submit" class="cmn-btn">Sign Up</button>
                            </div>
                        </form>
                        <p class="text-center mt-4">Already have an account? <a href="{{route('register')}}" class="user__btn" >Login</a></p>
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
<script>
    // Function to check the user's age
    function checkAge() {
        // Get the date of birth value from the input field
        const dobInput = document.getElementById('dob');
        const dobValue = new Date(dobInput.value);

        // Calculate the user's age
        const today = new Date();
        const age = today.getFullYear() - dobValue.getFullYear();

        // Compare the age with the minimum age requirement (18 years)
        const minAge = 18;
        if (age < minAge) {
            alert('You must be 18 years or older to sign up.');
            dobInput.value = ''; // Clear the date of birth input
            dobInput.focus(); // Set focus back to the input field
            return false;
        }

        return true; // Age check passed, continue with form submission
    }

    // Add an event listener to the form submit event
    const form = document.getElementById('registration-form'); // Replace 'registration-form' with the actual form ID
    form.addEventListener('submit', function(event) {
        // Prevent the form from submitting immediately
        event.preventDefault();

        // Check the user's age before submitting the form
        if (checkAge()) {
            // If age check passes, submit the form
            form.submit();
        }
    });
</script>
