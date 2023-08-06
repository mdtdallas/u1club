<div class="user-action-card">
    <ul class="user-action-list">
        <li><a href="{{route('profile.show')}}">My Tickets <span class="badge">{{$ticketCount ?? 0}}</span></a></li>
        <li><a href="{{route('profile.userInfo')}}">Personal Information</a></li>
        <li><a href="{{route('profile.userTransactions')}}">Transactions</a></li>
        {{-- <li><a href="user-referral.html">Referral Program</a></li>
        <li><a href="user-lottery.html">Favorite Lotteries</a></li> --}}
        <li><a href="{{route('contact')}}">Help Center</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </li>
    </ul>
</div><!-- user-action-card end -->