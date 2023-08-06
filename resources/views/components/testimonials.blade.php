<!-- testimonial section start -->
<section class="has-bg--shape pt-120 pb-120">
    <div class="bg-shape">
        <div class="round-shape d-sm-block d-none"><img src="{{asset('assets/images/elements/round-shape.png')}}" alt="image">
        </div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
        <div class="shape-4"></div>
        <div class="shape-5"></div>
        <div class="shape-6"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Testimonial</span>
                    <h2 class="section-title">Happy Winners All Around Australia</h2>
                    <p>With over 500+ raffles up and coming keep checking in to see if you could win for just $1
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-area bg_img"
                    data-background="{{asset('assets/images/elements/testimonial-single.jpg')}}">
                    <div class="testimonial-slider">

                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    @if ($testimonial->user->image_path)
                                        <img src="{{ asset('storage/' . $testimonial->user->image_path) }}"
                                            alt="{{ $testimonial->user->name }}">
                                    @else
                                        <img src="{{ asset('path_to_default_image') }}" alt="Default Image">
                                    @endif
                                </div>

                                <div class="testimonial-single__content">
                                    <h4 class="client-name">{{ $testimonial->user->name }}</h4>
                                    <p>{{ $testimonial->content }} </p>

                                    <div class="ratings">
                                        @for ($i = 0; $i < $testimonial->rating; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor

                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-single end -->
                        @endforeach

                    </div><!-- testimonial-slider end -->
                </div><!-- testimonial-area end -->
            </div>
        </div>
    </div>
</section>
<!-- testimonial section end -->