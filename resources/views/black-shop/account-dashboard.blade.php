@extends('layouts.main')
@section('content')
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.blade.php">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="">Breadcrumb</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>My Account</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        @include('layouts.account-navigation')
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar">
                                            <img src="{{ asset('storage/' . $userAvatar) }}" alt="">
                                        </div>
                                        <div class="profile-card__name">{{Auth::user()->name}}</div>
                                        <div class="profile-card__email">{{Auth::user()->email}}</div>
                                        <div class="profile-card__edit">
                                            <form action="{{ route('account.avatar.upload') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <label for="avatar">Avatar</label>
                                                <input id="avatar" name="avatar" type="file" class="form-control">
                                                <button type="submit" class="btn btn-secondary btn-sm mt-2">Edit Image</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/' . $userAvatar->avatar)}} }}" alt="">
{{--                                <div class="dashboard__address card address-card address-card--featured">--}}
{{--                                    <div class="address-card__badge">Default Address</div>--}}
{{--                                    <div class="address-card__body">--}}
{{--                                        <div class="address-card__name">Helena Garcia</div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            Random Federation<br>--}}
{{--                                            115302, Moscow<br>--}}
{{--                                            ul. Varshavskaya, 15-2-178--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            <div class="address-card__row-title">Phone Number</div>--}}
{{--                                            <div class="address-card__row-content">38 972 588-42-36</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            <div class="address-card__row-title">Email Address</div>--}}
{{--                                            <div class="address-card__row-content">stroyka@example.com</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__footer">--}}
{{--                                            <a href="account-edit-address.html">Edit Address</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5>Recent Orders</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <div class="card-table">
                                        <div class="table-responsive-sm">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">#8132</a></td>
                                                        <td>02 April, 2019</td>
                                                        <td>Pending</td>
                                                        <td>{{$userAvatar->orders}}</td>
                                                    </tr>
{{--                                                    <tr>--}}
{{--                                                        <td><a href="">#7592</a></td>--}}
{{--                                                        <td>28 March, 2019</td>--}}
{{--                                                        <td>Pending</td>--}}
{{--                                                        <td>$374.00 for 3 item(s)</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><a href="">#7192</a></td>--}}
{{--                                                        <td>15 March, 2019</td>--}}
{{--                                                        <td>Shipped</td>--}}
{{--                                                        <td>$791.00 for 4 item(s)</td>--}}
{{--                                                    </tr>--}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
@endsection
