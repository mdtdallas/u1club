   <!-- contest section start  -->
   <section class="pb-120 mt-minus-100">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="contest-wrapper">
                       <div class="contest-wrapper__header pt-120">
                           <h2 class="contest-wrapper__title">Latest Raffles</h2>
                           <h3 class="text-center mb-5">By Category</h3>
                           <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">
                               <li class="nav-item" role="presentation">
                                   <a class="nav-link active" id="dream-tab" data-toggle="tab" href="#dream"
                                       role="tab" aria-controls="dream" aria-selected="true">
                                       <div class="icon-thumb"><img
                                               src={{ asset('assets/images/icon/winner-tab/1.png') }} alt="image">
                                       </div>
                                       <span>Electronics</span>
                                   </a>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <a class="nav-link" id="bike-tab" data-toggle="tab" href="#bike" role="tab"
                                       aria-controls="bike" aria-selected="false">
                                       <div class="icon-thumb"><img
                                               src={{ asset('assets/images/icon/winner-tab/2.png') }} alt="image">
                                       </div>
                                       <span>Adventure</span>
                                   </a>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <a class="nav-link" id="watch-tab" data-toggle="tab" href="#watch" role="tab"
                                       aria-controls="watch" aria-selected="false">
                                       <div class="icon-thumb"><img
                                               src={{ asset('assets/images/icon/winner-tab/3.png') }} alt="image">
                                       </div>
                                       <span>Leasure</span>
                                   </a>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <a class="nav-link" id="laptop-tab" data-toggle="tab" href="#laptop" role="tab"
                                       aria-controls="laptop" aria-selected="false">
                                       <div class="icon-thumb"><img
                                               src={{ asset('assets/images/icon/winner-tab/4.png') }} alt="image">
                                       </div>
                                       <span>Luxury</span>
                                   </a>
                               </li>
                               <li class="nav-item" role="presentation">
                                   <a class="nav-link" id="money-tab" data-toggle="tab" href="#money" role="tab"
                                       aria-controls="money" aria-selected="false">
                                       <div class="icon-thumb"><img
                                               src={{ asset('assets/images/icon/winner-tab/5.png') }} alt="image">
                                       </div>
                                       <span>Sport</span>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <div class="contest-wrapper__body">

                           {{-- <div class="row contest-filter-wrapper justify-content-center mt-30 mb-none-30">
                            <div class="col-lg-2 col-sm-6 mb-30">
                                <select>
                                    <option>SORT BY</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-sm-6 mb-30">
                                <select>
                                    <option>ALL MAKES</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                    <option>Filter option</option>
                                </select>
                            </div>
                            <div class="col-lg-3 mb-30">
                                <div class="rang-slider">
                                    <span class="caption">Ticket Price</span>
                                    <div id="slider-range-min-one" class="invest-range-slider" data-value="8"
                                        data-maxValue="16"></div>
                                    <div class="amount-wrapper">
                                        <span class="min-amount">0</span>
                                        <div class="main-amount">
                                            <input type="text" class="calculator-invest" id="basic-amount"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 mb-30">
                                <div class="action-btn-wrapper">
                                    <button type="button" class="action-btn"><i class="lar la-heart"></i></button>
                                    <button type="button" class="action-btn"><i
                                            class="las la-redo-alt"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-8 mb-30">
                                <form class="contest-search-form">
                                    <input type="text" placeholder="SEARCH HERE">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div><!-- row end --> --}}

                           <div class="tab-content mt-50" id="myTabContent">

                               <div class="tab-pane fade show active" id="dream" role="tabpanel"
                                   aria-labelledby="dream-tab">
                                   <div class="row mb-none-30 mt-50">
                                       @foreach ($raffles as $raffle)
                                           @if ($raffle->type == 'electronics')
                                               <x-raffle-card :raffle="$raffle" />
                                           @endif
                                       @endforeach
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
                                   <div class="row mb-none-30 mt-50">
                                       @foreach ($raffles as $raffle)
                                           @if ($raffle->type == 'adventure')
                                               <x-raffle-card :raffle="$raffle" />
                                           @endif
                                       @endforeach
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                                   <div class="row mb-none-30 mt-50">
                                       @foreach ($raffles as $raffle)
                                           @if ($raffle->type == 'leasure')
                                               <x-raffle-card :raffle="$raffle" />
                                           @endif
                                       @endforeach
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                                   <div class="row mb-none-30 mt-50">
                                       @foreach ($raffles as $raffle)
                                           @if ($raffle->type == 'luxury')
                                               <x-raffle-card :raffle="$raffle" />
                                           @endif
                                       @endforeach
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
                                   <div class="row mb-none-30 mt-50">
                                       @foreach ($raffles as $raffle)
                                           @if ($raffle->type == 'sport')
                                               <x-raffle-card :raffle="$raffle" />
                                           @endif
                                       @endforeach
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div><!-- contest-wrapper end -->
               </div>
           </div>
       </div>
   </section>
   <!-- contest section end -->
