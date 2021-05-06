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
                    <div class="card">
                        <div class="order-header">
                            <div class="order-header__actions">
                                <a href="{{ route('account.order') }}" class="btn btn-xs btn-secondary">Back to list</a>
                            </div>
                            <h5 class="order-header__title">{{$orderDetails->uuid}}</h5>

                            <div class="order-header__subtitle">
                                Was placed on
                                <mark class="order-header__date">{{$orderDetails->created_at}}</mark>
                                and is currently
                                <mark class="order-header__status">On hold</mark>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-table">
                            <div class="table-responsive-sm">
                                <table>
                                    <thead>

                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody class="card-table__body card-table__body--merge-rows">
                                    @foreach($orderDetails->products as $order)
                                    <tr>
                                        <td>{{ $order->name }}</td>
                                        <td>{{$order->pivot->price . ' X ' . $order->pivot->quantity}}</td>
                                        <?php $total[] = $order->pivot->price * $order->pivot->quantity; ?>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tbody class="card-table__body card-table__body--merge-rows">
{{--                                    <tr>--}}
{{--                                        <th>Subtotal</th>--}}
{{--                                        <td>$5,877.00</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <th>Store Credit</th>--}}
{{--                                        <td>$-20.00</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <th>Shipping</th>--}}
{{--                                        <td>$25.00</td>--}}
{{--                                    </tr>--}}
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <td>{{array_sum($total)}}</td>
                                    </tr>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

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
                        </div>
                    </div>
{{--                        <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">--}}
{{--                            <div class="card address-card address-card--featured">--}}
{{--                                <div class="address-card__body">--}}
{{--                                    <div class="address-card__badge address-card__badge--muted">Billing Address</div>--}}
{{--                                    <div class="address-card__name">Helena Garcia</div>--}}
{{--                                    <div class="address-card__row">--}}
{{--                                        Random Federation<br>--}}
{{--                                        115302, Moscow<br>--}}
{{--                                        ul. Varshavskaya, 15-2-178--}}
{{--                                    </div>--}}
{{--                                    <div class="address-card__row">--}}
{{--                                        <div class="address-card__row-title">Phone Number</div>--}}
{{--                                        <div class="address-card__row-content">38 972 588-42-36</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="address-card__row">--}}
{{--                                        <div class="address-card__row-title">Email Address</div>--}}
{{--                                        <div class="address-card__row-content">stroyka@example.com</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- site__body / end -->
    <!-- site__footer -->
@endsection
