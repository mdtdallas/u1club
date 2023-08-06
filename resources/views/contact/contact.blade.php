<x-dark-layout>
    <!-- contact section start -->
    <section class="mt-120 pb-120" style="margin-top: 200px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Contact</h2>
                        <p>We’d love to talk about how we can work together.  Send us a message
                            below and we’ll respond as soon as possible. You can even suggest a prize
                            that you would like to see on our site.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-wrapper">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-wrapper">
                                    <h3 class="title">Drop us a message</h3>
                                    <form class="contact-form" method="POST"
                                        action="{{ route('contact.submitForm') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name <sup>*</sup></label>
                                            <input type="text" name="name" id="name"
                                                placeholder="Enter Your FullName" value="{{ Auth::user()->name ?? '' }}"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email"
                                                placeholder="Enter Your Email" value="{{ Auth::user()->email ?? '' }}"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label>Subject <sup>*</sup></label>
                                            <input type="text" name="subject" id="subject"
                                                placeholder="Enter Your Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Message <sup>*</sup></label>
                                            <textarea name="message" id="message" placeholder="Write Your Message" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="cmn-btn w-100">send message</button>
                                        </div>
                                    </form>
                                </div><!-- contact-form-wrapper end -->
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info-wrapper">
                                    <div class="d-flex flex-wrap justify-content-between w-100">
                                        <div class="contact-info">
                                            <div class="contact-info__icon"><img src="{{asset('assets/images/icon/contact/1.png')}}"
                                                    alt="image"></div>
                                            <div class="contact-info__content">
                                                <p>Phone Number</p>
                                                <span>+61478799463</span>
                                            </div>
                                        </div><!-- contact-info end -->
                                        <div class="contact-info">
                                            <div class="contact-info__icon"><img src="{{asset('assets/images/icon/contact/2.png')}}"
                                                    alt="image"></div>
                                            <div class="contact-info__content">
                                                <p>Email</p>
                                                <span>info@u1club.com.au</span>
                                            </div>
                                        </div><!-- contact-info end -->
                                    </div>
                                    <div class="contact-thumb"><img src="{{asset('assets/images/elements/contact.png')}}"
                                            alt="image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-120 mb-none-30">
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>> 1k</h3>
                            <span>Followers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>{{$membersCount}}</h3>
                            <span>Members</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>> 1k</h3>
                            <span>Followers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="social-card">
                        <div class="social-card__icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="social-card__content">
                            <h3>{{$subscriberCount}}</h3>
                            <span>Subscribers</span>
                        </div>
                    </div><!-- social-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
</x-dark-layout>
