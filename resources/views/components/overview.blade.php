  <!-- overview section start -->
  <section class="overview-section pt-120">
      <div class="map-el"><img src="{{asset('assets/images/elements/map.png')}}" alt="image"></div>
      <div class="obj-1"><img src="{{asset('assets/images/elements/overview-obj-1.png')}}" alt="image"></div>
      <div class="obj-2"><img src="{{asset('assets/images/elements/overview-obj-2.png')}}" alt="image"></div>
      <div class="obj-3"><img src="{{asset('assets/images/elements/overview-obj-3.png')}}" alt="image"></div>
      <div class="obj-4"><img src="{{asset('assets/images/elements/overview-obj-4.png')}}" alt="image"></div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <div class="section-header text-center">
                      <span class="section-sub-title">Our Users Around Australia</span>
                      <h2 class="section-title">Let the number speak for us</h2>
                      <p>Over the years we have provided players with tickets to raffles across Oz and
                          enjoyed having more winners</p>
                  </div>
              </div>
          </div><!-- row end -->
      </div><!-- container end -->
      <div class="map-pointer">
          <div class="pointer num-1"></div>
          <div class="pointer num-2"></div>
          <div class="pointer num-3"></div>
          <div class="pointer num-4"></div>
          <div class="pointer num-5"></div>
          <div class="pointer num-6"></div>
          <div class="pointer num-7"></div>
          <div class="pointer num-8"></div>
          <div class="pointer num-9"></div>
      </div>

      <div class="container">
          <div class="row justify-between mb-none-30">
              <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <div class="overview-card hover--effect-1">
                      <div class="overview-card__icon">
                          <img src="{{asset('assets/images/icon/overview/1.png')}}" alt="">
                      </div>
                      <div class="overview-card__content">
                          @if ($userCount < 100)
                              <span class="number">100+</span>
                          @else
                              <span class="number">{{ $userCount }}+</span>
                          @endif
                          <p>Verified Users</p>
                      </div>
                  </div><!-- overview-card end -->
              </div>
              <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="overview-card hover--effect-1">
                      <div class="overview-card__icon">
                          <img src="{{asset('assets/images/icon/overview/2.png')}}" alt="">
                      </div>
                      <div class="overview-card__content">
                          @if ($raffleCount < 100)
                              <span class="number">100+</span>
                          @else
                              <span class="number">{{ $raffleCount }}+</span>
                          @endif
                          <p>Drawn raffles</p>
                      </div>
                  </div><!-- overview-card end -->
              </div>
              <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="overview-card hover--effect-1">
                      <div class="overview-card__icon">
                          <img src="{{asset('assets/images/icon/overview/2.png')}}" alt="">
                      </div>
                      <div class="overview-card__content">
                          @if ($ticketCount < 100)
                              <span class="number">100+</span>
                          @else
                              <span class="number">{{ $ticketCount }}+</span>
                          @endif
                          <p>Tickets Sold</p>
                      </div>
                  </div><!-- overview-card end -->
              </div>
              {{-- <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                <div class="overview-card hover--effect-1">
                    <div class="overview-card__icon">
                        <img src="assets/images/icon/overview/3.png" alt="">
                    </div>
                    <div class="overview-card__content">
                        <span class="number">99%</span>
                        <p>Customer Satisfaction</p>
                    </div>
                </div><
            </div> --}}
          </div>
      </div><!-- container end -->
  </section>
  <!-- overview section end -->
