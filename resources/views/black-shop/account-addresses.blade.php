@extends('layouts.main')
@section('content')
        <!-- site__body -->
        <div class="site__body">
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
{{--                            <div class="addresses-list">--}}
{{--                                <a href="" class="addresses-list__item addresses-list__item--new">--}}
{{--                                    <div class="addresses-list__plus"></div>--}}
{{--                                    <div class="btn btn-secondary btn-sm">Add New</div>--}}
{{--                                </a>--}}
                                <div class="addresses-list__divider"></div>
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__badge">Default</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ $userInfo->name }}</div>
                                        <div class="address-card__row">
                                            {{ $userInfo->region }}<br>
                                            {{ $userInfo->city }}<br>
                                            {{$userInfo->street}} № {{$userInfo->street_number}}
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Phone Number</div>
                                            <div class="address-card__row-content">{{$userInfo->phone}}</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Email Address</div>
                                            <div class="address-card__row-content">{{$userInfo->email}}</div>
                                        </div>
                                        <div class="address-card__footer">
                                            <a href="{{route('account.edit.address')}}">Edit</a>&nbsp;&nbsp;
                                            <a href="{{route('account.address.destroy')}}" onclick="return confirm('Accurately remove?');">Remove</a>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="addresses-list__divider"></div>--}}
{{--                                <div class="addresses-list__item card address-card">--}}
{{--                                    <div class="address-card__body">--}}
{{--                                        <div class="address-card__name">Jupiter Saturnov</div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            RandomLand<br>--}}
{{--                                            4b4f53, MarsGrad<br>--}}
{{--                                            Sun Orbit, 43.3241-85.239--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            <div class="address-card__row-title">Phone Number</div>--}}
{{--                                            <div class="address-card__row-content">ZX 971 972-57-26</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__row">--}}
{{--                                            <div class="address-card__row-title">Email Address</div>--}}
{{--                                            <div class="address-card__row-content">stroyka@example.com</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="address-card__footer">--}}
{{--                                            <a href="account-edit-address.html">Edit</a>&nbsp;&nbsp;--}}
{{--                                            <a href="">Remove</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="addresses-list__divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
    @endsection
