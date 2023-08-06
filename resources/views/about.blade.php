<x-dark-layout>
     <!-- inner-hero-section start -->
     <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="{{asset('assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="{{url('/')}}">Home</a></li>
                {{-- <li><a href="#0">Pages</a></li> --}}
                <li class="active">About Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->
  
      <!-- about section start -->
      <section class="mt-minus-150">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="about-wrapper pt-120">
                <div class="about-wrapper__header">
                  <div class="about-wrapper__title-top">A few words about us</div>
                  <h2 class="about-wrapper__title">We dream big so you can win big</h2>
                </div>
                <div class="about-wrapper__content text-center">
                    <p>Welcome to U1 Raffles Club, your exclusive destination for unforgettable experiences and exciting draws, specially crafted for our Australian members.</p>

                    <p>At U1 Raffles Club, we are proud to serve the Australian community with a vision to become the country's premier online platform for exclusive draws and exceptional rewards.</p>
                    
                    <p>Our team of dedicated professionals, including creative enthusiasts and marketing experts, is committed to bringing joy and excitement to our Australian members through unique draws that offer remarkable prizes.</p>
                    
                    <p>As an Australian club member, you will have access to a diverse range of exclusive draws, presenting captivating opportunities to win dream prizes from all corners of the globe.</p>
                    
                    <p>We take immense pride in offering unparalleled variety and top-tier quality in our draws, striving to exceed your expectations with every event we organize. Each happy winner and satisfied Australian member reinforces our passion for what we do, driving us to create memorable experiences for you.</p>
                    
                    <p>Join U1 Raffles Club today and become part of a vibrant community of like-minded Australians. Your dreams are our priority, and we are honored to be part of your journey.</p>
                    
                    <p>Experience the excitement, anticipation, and thrill that come with being a part of U1 Raffles Club, exclusively designed for Australians like you!</p>
                    
                </div>
              </div><!-- about-wrapper-->
              <div class="row counter-wrapper style--two mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center mb-30">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span>23{{$winnerCount}}</span>
                      <p>Winners For Last Month</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-lg-4 col-sm-6 text-center mb-30">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span>{{$ticketCount}}+</span>
                      <p>Tickets Sold</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-lg-4 col-sm-6 text-center mb-30">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span id="totalPrizeValueContainer">$10000000</span>
                      <div ></div>
                      <p>Worth of Prizes</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about section end -->
  
      <!-- features section start -->
      <section class="pt-120 pb-120 position-relative">
        <div class="feature-car">
          <img src="{{asset('assets/images/elements/feature-car.png')}}" alt="image">
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="section-header text-center">
                <span class="section-sub-title">An Exhaustive list of amazing prizes</span>
                <h2 class="section-title style--two">What makes U1 different?</h2>
                <p>These are the key drivers that make us different: Safe, Social, Reliable and Fun. U1 is dedicated to trust and safety.</p>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-xl-9">
              <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/5.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>Winners Announced Daily</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/6.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3> Safe and Secure Playing</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/7.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>Best Prizes</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/8.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>Stripe Payments</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/9.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>Dedicated Support</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{asset('assets/images/icon/feature/10.png')}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>Multiple Raffles</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- row end -->
        </div>
      </section>
      <!-- features section end -->
</x-dark-layout>

<script>
    // Get the total prize value from the backend (replace this with the actual value)
    const totalPrizeValue = {{$totalPrizeValue}}; // Replace with your backend variable
  
    // Function to format the prize value
    function formatPrizeValue(value) {
        if (value >= 1000000000) {
      // If the value is greater than or equal to 1 billion, format it as $X.XB (e.g., $1.5B)
      return `$${(value / 1000000000).toFixed(1)}B`;
    } else if (value >= 1000000) {
      // If the value is greater than or equal to 1 million, format it as $X.XM (e.g., $1.5M)
      return `$${(value / 1000000).toFixed(1)}M`;
    } else if (value >= 1000) {
      // If the value is greater than or equal to 1000, format it as $X.Xk (e.g., $1.5k)
      return `$${(value / 1000).toFixed(1)}k`;
    } else {
      // If the value is less than 1000, format it as $999
      return `$${value}`;
    }
    }
  
    // Display the formatted prize value in the container
    document.getElementById('totalPrizeValueContainer').innerHTML = formatPrizeValue(totalPrizeValue);
  </script>