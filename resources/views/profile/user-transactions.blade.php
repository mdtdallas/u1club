<x-dark-layout>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <x-user-card />

                    <x-user-action-card />


                </div>
                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="transaction-balance-wrapper">
                        <div class="left">
                            <div class="transaction-balance">
                                <h4 class="balance">{{Auth::user()->number_of_tickets}}</h4>
                                <span>Tickets Available</span>
                            </div>
                        </div>
                        <div class="right">
                            <a href="{{route('purchaseTickets')}}" class="transaction-action-btn">
                                <img src="{{asset('assets/images/icon/transaction/1.png')}}" alt="image">
                                <span>Buy Tickets</span>
                            </a>
                            {{-- <a href="#0" class="transaction-action-btn ml-4">
                                <img src="assets/images/icon/transaction/2.png" alt="image">
                                <span>Withdraw</span>
                            </a> --}}
                        </div>
                    </div><!-- transaction-balance-wrapper end -->
                    <div class="all-transaction">
                        <div class="all-transaction__header">
                            <h3 class="title">All Transactions</h3>
                            <div class="date-range">
                                {{-- <input type="text" data-range="true" data-multiple-dates-separator=" - "
                                    data-language="en" class="datepicker-here form-control" data-position='top left'
                                    placeholder="min - max date">
                                <i class="las la-calendar-alt"></i> --}}
                            </div>
                        </div>
                        <div class="table-responsive-xl">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Pay. method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <div class="date">
                                                <span>{{date('d', strtotime($transaction->created_at))}}</span>
                                                <span>{{date('M', strtotime($transaction->created_at))}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Ticket Purchase</p>
                                            {{-- <span>Withdraw to Bank account</span> --}}
                                        </td>
                                        <td>
                                            <p>Card</p>
                                        </td>
                                        <td>
                                            <span class="amount">${{$transaction->amount}}</span>
                                        </td>
                                        <td>
                                            <div class="status-success"><i class="fas fa-check-circle"></i></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more text-center">
                            <a  href="{{route('raffles.index')}}"><button type="button" hidden>Show More Raffles </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
</x-dark-layout>
