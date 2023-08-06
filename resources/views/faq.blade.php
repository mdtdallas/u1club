<x-dark-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="{{ asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="">Pages</a></li>
                        <li class="active">Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- faq section start -->
    <section class="pb-120 mt-minus-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-top-wrapper pt-120">
                        <div class="section-header text-center">
                            <span class="section-sub-title">You Have Questions</span>
                            <h2 class="section-title">WE HAVE ANSWERS</h2>
                            <p>Do not hesitate to send us an email if you can't find what you're looking for.</p>
                        </div>
                        <ul class="nav nav-tabs cmn-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab"
                                    aria-controls="ticket" aria-selected="false">U1 tickets</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="banking-tab" data-toggle="tab" href="#banking"
                                    role="tab" aria-controls="banking" aria-selected="true">Payments</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="winning-tab" data-toggle="tab" href="#winning" role="tab"
                                    aria-controls="winning" aria-selected="false">winning</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab"
                                    aria-controls="result" aria-selected="false">results & alerts</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab"
                                    aria-controls="about" aria-selected="false">about U1</a>
                            </li>
                        </ul>
                    </div><!-- faq-top-wrapper end -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-body-wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-one">
                                    <div class="card">
                                        <div class="card-header" id="h-1">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">
                                                How do I become a member of the U1 club?
                                            </button>
                                        </div>
                                        <div id="collapse1" class="collapse show" aria-labelledby="h-1"
                                            data-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>To become a member of the U1 club and participate in our exclusive
                                                    draws, simply click on the "Register" button at the top right corner
                                                    of the website. Follow the prompts to create your account and start
                                                    playing!</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="h-2">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                                aria-controls="collapse2">
                                                How can I participate in the exclusive draws?
                                            </button>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="h-2"
                                            data-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>To participate in our exclusive draws, make sure you are a registered
                                                    member of the U1 club. Once you have registered, simply visit the
                                                    "Raffles" section on our website, choose the draw you wish to enter,
                                                    and purchase your ticket. Good luck!</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="h-3">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                                aria-controls="collapse3">
                                                How are winners notified about their prizes?
                                            </button>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="h-3"
                                            data-parent="#faqAcc-one">
                                            <div class="card-body">
                                                <p>Winners will be notified via email and phone call about their prizes.
                                                    Additionally, the list of winners will be published on our website
                                                    after each draw. If you're a lucky winner, don't forget to check
                                                    your email and keep an eye on our announcements!</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="banking" role="tabpanel"
                                aria-labelledby="banking-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-two">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                How do I purchase tickets for U1 Raffles?
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>To purchase tickets for U1 Raffles, log in to your U1 account and
                                                    navigate to the "Raffles" section. Browse the available raffles and
                                                    select the one you want to participate in. Choose the number of
                                                    tickets you wish to buy and proceed to checkout. Payments are
                                                    securely processed through Stripe payment services.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How are winners selected for U1 Raffles?
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Winners for U1 Raffles are selected through a random draw process.
                                                    Once the raffle entry period ends, our system will randomly select
                                                    the winning ticket number. The participant holding the winning
                                                    ticket will be declared the winner. The winner will need to claim
                                                    their prize by providing their shipping address and contact
                                                    information.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Can I participate in U1 Raffles from outside Australia?
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Yes, U1 Raffles welcomes participants from around the world. You can
                                                    participate in our raffles regardless of your location. However,
                                                    please check your local laws and regulations regarding online raffle
                                                    participation to ensure compliance.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How can I view my purchased tickets and raffle entries?
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Once you've purchased tickets for U1 Raffles, you can view your
                                                    purchased tickets and raffle entries in your U1 account dashboard.
                                                    Simply log in to your account and navigate to the "My Tickets" or
                                                    "My Entries" section. Here, you will find a detailed list of the
                                                    raffles you've entered and the corresponding ticket numbers.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                How do I claim my prize if I win a U1 Raffle?
                                            </button>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#faqAcc-two">
                                            <div class="card-body">
                                                <p>Congratulations on winning a U1 Raffle! To claim your prize, log in
                                                    to your U1 account and navigate to the "My Winnings" or "My Prizes"
                                                    section. Provide your shipping address and contact information to
                                                    claim the prize. Our team will then arrange for the shipment of the
                                                    prize to your provided address.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="winning" role="tabpanel" aria-labelledby="winning-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-three">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How do I purchase tickets for U1 Raffles?
                                          </button>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAcc-two">
                                          <div class="card-body">
                                            <p>To purchase tickets for U1 Raffles, log in to your U1 account and navigate to the "Raffles" section. Browse the available raffles and select the one you want to participate in. Choose the number of tickets you wish to buy and proceed to checkout. Payments are securely processed through Stripe payment services.</p>
                                          </div>
                                        </div>
                                      </div><!-- card end -->
                                      
                                      <div class="card">
                                        <div class="card-header" id="headingTwo">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How are winners selected for U1 Raffles?
                                          </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAcc-two">
                                          <div class="card-body">
                                            <p>Winners for U1 Raffles are selected through a random draw process. Once the raffle entry period ends, our system will randomly select the winning ticket number. The participant holding the winning ticket will be declared the winner. The winner will need to claim their prize by providing their shipping address and contact information.</p>
                                          </div>
                                        </div>
                                      </div><!-- card end -->
                                      
                                      <div class="card">
                                        <div class="card-header" id="headingThree">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Can I participate in U1 Raffles from outside Australia?
                                          </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAcc-two">
                                          <div class="card-body">
                                            <p>Yes, U1 Raffles welcomes participants from around the world. You can participate in our raffles regardless of your location. However, please check your local laws and regulations regarding online raffle participation to ensure compliance.</p>
                                          </div>
                                        </div>
                                      </div><!-- card end -->
                                      
                                      <div class="card">
                                        <div class="card-header" id="headingFour">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How can I view my purchased tickets and raffle entries?
                                          </button>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAcc-two">
                                          <div class="card-body">
                                            <p>Once you've purchased tickets for U1 Raffles, you can view your purchased tickets and raffle entries in your U1 account dashboard. Simply log in to your account and navigate to the "My Tickets" or "My Entries" section. Here, you will find a detailed list of the raffles you've entered and the corresponding ticket numbers.</p>
                                          </div>
                                        </div>
                                      </div><!-- card end -->
                                      
                                      <div class="card">
                                        <div class="card-header" id="headingFive">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            How do I claim my prize if I win a U1 Raffle?
                                          </button>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAcc-two">
                                          <div class="card-body">
                                            <p>Congratulations on winning a U1 Raffle! To claim your prize, log in to your U1 account and navigate to the "My Winnings" or "My Prizes" section. Provide your shipping address and contact information to claim the prize. Our team will then arrange for the shipment of the prize to your provided address.</p>
                                          </div>
                                        </div>
                                      </div><!-- card end -->                                      
                                </div>
                            </div>
                            <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-four">
                                    <div class="card">
                                        <div class="card-header" id="h-7">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
                                                aria-controls="collapse7">
                                                How do I claim my prize if I win a U1 raffle?
                                            </button>
                                        </div>
                                        <div id="collapse7" class="collapse show" aria-labelledby="h-7" data-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>Congratulations on winning a U1 raffle! To claim your prize, log in to your U1 account and navigate to the "My Winnings" or "My Prizes" section. Provide your shipping address and contact information to claim the prize. Our team will then arrange for the shipment of the prize to your provided address.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    
                                    <div class="card">
                                        <div class="card-header" id="h-8">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false"
                                                aria-controls="collapse8">
                                                How long will it take to receive my prize after claiming it?
                                            </button>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="h-8" data-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>The time it takes to receive your prize after claiming it may vary depending on your location and the shipping method used. We strive to process prize shipments as quickly as possible. You will receive an email notification with the shipment tracking details once your prize is dispatched.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    
                                    <div class="card">
                                        <div class="card-header" id="h-9">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false"
                                                aria-controls="collapse9">
                                                Can I exchange my prize for cash or other items?
                                            </button>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="h-9" data-parent="#faqAcc-four">
                                            <div class="card-body">
                                                <p>We apologize, but prizes won in U1 raffles cannot be exchanged for cash or other items. The prizes offered in our raffles are as stated and cannot be altered. However, we ensure that the prizes are of high value and exciting, giving you a chance to win premium items and experiences.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="accordion cmn-accordion" id="faqAcc-five">
                                    <div class="card">
                                        <div class="card-header" id="h-10">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapse10" aria-expanded="true"
                                                aria-controls="collapse10">
                                                How do I deposit funds into my U1 account?
                                            </button>
                                        </div>
                                        <div id="collapse10" class="collapse show" aria-labelledby="h-10"
                                            data-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                                    ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                                    accumsan lacus vel facilisis. </p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-11">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse11"
                                                aria-expanded="false" aria-controls="collapse11">
                                                What will the payment reflect as on my credit card statement?
                                            </button>
                                        </div>
                                        <div id="collapse11" class="collapse" aria-labelledby="h-11"
                                            data-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                                    ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                                    accumsan lacus vel facilisis.</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                    <div class="card">
                                        <div class="card-header" id="h-12">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse12"
                                                aria-expanded="false" aria-controls="collapse12">
                                                Why am I unable to deposit funds via credit card on your website?
                                            </button>
                                        </div>
                                        <div id="collapse12" class="collapse" aria-labelledby="h-12"
                                            data-parent="#faqAcc-five">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
                                                    dignissimos consectetur aspernatur expedita aut reiciendis magni
                                                    tempore ullam libero, voluptate nam accusamus est a debitis,
                                                    obcaecati beatae possimus veniam distinctio?</p>
                                            </div>
                                        </div>
                                    </div><!-- card end -->
                                </div>
                            </div>
                        </div><!-- tab-content end -->
                    </div><!-- faq-body-wrapper end -->
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->
</x-dark-layout>
