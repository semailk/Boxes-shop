<div class="col-12 col-lg-3 d-flex">
    <div class="account-nav flex-grow-1">
        <h4 class="account-nav__title">Navigation</h4>
        <ul>
            <li class="account-nav__item  account-nav__item--active ">
                <a href="{{route('account.dashboard')}}">Dashboard</a>
            </li>
            <li class="account-nav__item ">
                <a href="{{route('account.profile')}}">Edit Profile</a>
            </li>
            <li class="account-nav__item ">
                <a href="{{route('account.order.history')}}">Order History</a>
            </li>
            <li class="account-nav__item ">
{{--                <a href="{{route('account.order.details')}}">Order Details</a>--}}
            </li>
            <li class="account-nav__item ">
                <a href="{{route('account.edit.address')}}">Edit Address</a>
            </li>
            <li class="account-nav__item ">
                <a href="{{route('account.addresses')}}">Addresses</a>
            </li>

            <li class="account-nav__item ">
                <a href="{{route('account.password')}}">Password</a>
            </li>
            <li class="account-nav__item ">
                <a href="{{route('account.logout')}}">Logout</a>
            </li>
        </ul>
    </div>
</div>
