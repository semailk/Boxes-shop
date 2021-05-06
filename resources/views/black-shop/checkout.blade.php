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
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Checkout</h1>
            </div>
        </div>
    </div>
    <div class="checkout block">
        <form class="container" method="post" action="{{route('order.store')}}">
            @csrf

                <div class="row">
                    @if(!Auth::check())
                    <div class="col-12 mb-3">
                        <div class="alert alert-lg alert-primary">Returning customer? <a href="">Click here to login</a>
                        </div>
                    </div>
                    @endif
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title">Billing details</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-first-name">First Name</label>
                                        <input value="{{ old('first_name') }}" name="first_name" type="text"
                                               class="form-control" id="checkout-first-name"
                                               placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-last-name">Last Name</label>
                                        <input value="{{ old('last_name') }}" name="last_name" type="text"
                                               class="form-control" id="checkout-last-name"
                                               placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="checkout-country">Country</label>
                                    <input value="{{ old('country') }}" type="text" name="country" id="checkout-country"
                                           class="form-control form-control-select2">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-city">City</label>
                                    <input value="{{ old('city') }}" name="city" type="text" class="form-control"
                                           id="checkout-city">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-street-address">Street Address</label>
                                    <input value="{{ old('address') }}" name="address" type="text" class="form-control"
                                           id="checkout-street-address"
                                           placeholder="Street Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Comment</label>
                                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1"
                                              rows="3">{{ old('comment') }}</textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-email">Email address</label>
                                        <input value="{{ old('email') }}" name="email" type="email" class="form-control"
                                               id="checkout-email"
                                               placeholder="Email address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-phone">Phone</label>
                                        <input value="{{ old('phone') }}" name="phone" type="text" class="form-control"
                                               id="checkout-phone"
                                               placeholder="Phone">
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <div class="form-check">--}}
{{--                                            <span class="form-check-input input-check">--}}
{{--                                                <span class="input-check__body">--}}
{{--                                                    <input class="input-check__input" type="checkbox"--}}
{{--                                                           id="checkout-create-account">--}}
{{--                                                    <span class="input-check__box"></span>--}}
{{--                                                    <svg class="input-check__icon" width="9px" height="7px">--}}
{{--                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>--}}
{{--                                                    </svg>--}}
{{--                                                </span>--}}
{{--                                            </span>--}}
{{--                                        <label class="form-check-label" for="checkout-create-account">Create an--}}
{{--                                            account?</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body">
                                <h3 class="card-title">Shipping Details</h3>
                                <div class="form-group">
                                    <div class="form-check">
                                            <span class="form-check-input input-check">
{{--                                                <span class="input-check__body">--}}
                                                    <input class="input-check__input" type="checkbox"
                                                           id="checkout-different-address">
{{--                                                    <span class="input-check__box"></span>--}}
                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                        {{--                                            </span>--}}
                                        {{--                                    <label class="form-check-label" for="checkout-different-address">Ship to a different--}}
                                        {{--                                        address?</label>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="checkout-comment">Order notes <span
                                            class="text-muted">(Optional)</span></label>
                                    <textarea name="delivery_option" id="checkout-comment" class="form-control"
                                              rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                            <div class="card-body">
                                <h3 class="card-title">Your Order</h3>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody class="checkout__totals-products">
                                    @foreach($cart as $value)
                                        <?php
                                        $productName = \App\Models\Product::where('id', $value->id)->first(); ?>
                                        <tr>
                                            <td>{{$productName->name}}</td>
                                            <td>{{$value->price}} x {{$value->quantity}}</td>
                                        </tr>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                    {{--                                <tbody class="checkout__totals-subtotals">--}}
                                    {{--                                <tr>--}}
                                    {{--                                    <th>Subtotal</th>--}}
                                    {{--                                    <td>$5,877.00</td>--}}
                                    {{--                                </tr>--}}
                                    {{--                                <tr>--}}
                                    {{--                                    <th>Store Credit</th>--}}
                                    {{--                                    <td>$-20.00</td>--}}
                                    {{--                                </tr>--}}
                                    {{--                                <tr>--}}
                                    {{--                                    <th>Shipping</th>--}}
                                    {{--                                    <td>$25.00</td>--}}
                                    {{--                                </tr>--}}
                                    {{--                                </tbody>--}}
                                    <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>{{\Cart::session($_COOKIE['cart_id'])->getTotal()}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active">
                                            <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="payment_type"
                                                                   name="payment_type" value="0" type="radio"
                                                                   checked>
{{--                                                            <span class="input-radio__circle"></span>--}}
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">Наложенный платеж</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    Наложенный платеж — сумма, которую адресат должен оплатить при
                                                    получении
                                                    письма или посылки с объявленной ценностью в почтовом отделении.
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item payment-methods__item--active">
                                            <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="payment_type" value="1" type="radio"
                                                                   checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">LiqPay</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    LiqPay – это электронный кошелек от Приватбанка. Он разрабатывался
                                                    для
                                                    платежей и переводов денег друг другу с банковских карт Visa и
                                                    MasterCard через Интернет и мобильный телефон.
                                                </div>
                                            </div>
                                        </li>
                                        {{--                                    <li class="payment-methods__item payment-methods__item--active">--}}
                                        {{--                                        <label class="payment-methods__item-header">--}}
                                        {{--                                                    <span class="payment-methods__item-radio input-radio">--}}
                                        {{--                                                        <span class="input-radio__body">--}}
                                        {{--                                                            <input class="input-radio__input"--}}
                                        {{--                                                                   name="checkout_payment_method" value="0" type="radio" checked>--}}
                                        {{--                                                            <span class="input-radio__circle"></span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                            <span class="payment-methods__item-title">Direct bank transfer</span>--}}
                                        {{--                                        </label>--}}
                                        {{--                                        <div class="payment-methods__item-container">--}}
                                        {{--                                            <div class="payment-methods__item-description text-muted">--}}
                                        {{--                                                Make your payment directly into our bank account. Please use your Order--}}
                                        {{--                                                ID as the payment--}}
                                        {{--                                                reference. Your order will not be shipped until the funds have cleared--}}
                                        {{--                                                in our account.--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </li>--}}
                                        {{--                                    <li class="payment-methods__item">--}}
                                        {{--                                        <label class="payment-methods__item-header">--}}
                                        {{--                                                    <span class="payment-methods__item-radio input-radio">--}}
                                        {{--                                                        <span class="input-radio__body">--}}
                                        {{--                                                            <input class="input-radio__input"--}}
                                        {{--                                                                   value="1"   name="checkout_payment_method" type="radio">--}}
                                        {{--                                                            <span class="input-radio__circle"></span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                            <span class="payment-methods__item-title">Check payments</span>--}}
                                        {{--                                        </label>--}}
                                        {{--                                        <div class="payment-methods__item-container">--}}
                                        {{--                                            <div class="payment-methods__item-description text-muted">--}}
                                        {{--                                                Please send a check to Store Name, Store Street, Store Town, Store State--}}
                                        {{--                                                / County, Store Postcode.--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </li>--}}
                                        {{--                                    <li class="payment-methods__item">--}}
                                        {{--                                        <label class="payment-methods__item-header">--}}
                                        {{--                                                    <span class="payment-methods__item-radio input-radio">--}}
                                        {{--                                                        <span class="input-radio__body">--}}
                                        {{--                                                            <input class="input-radio__input"--}}
                                        {{--                                                                   value="2"   name="checkout_payment_method" type="radio">--}}
                                        {{--                                                            <span class="input-radio__circle"></span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                            <span class="payment-methods__item-title">Cash on delivery</span>--}}
                                        {{--                                        </label>--}}
                                        {{--                                        <div class="payment-methods__item-container">--}}
                                        {{--                                            <div class="payment-methods__item-description text-muted">--}}
                                        {{--                                                Pay with cash upon delivery.--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </li>--}}
                                        {{--                                    <li class="payment-methods__item">--}}
                                        {{--                                        <label class="payment-methods__item-header">--}}
                                        {{--                                                    <span class="payment-methods__item-radio input-radio">--}}
                                        {{--                                                        <span class="input-radio__body">--}}
                                        {{--                                                            <input class="input-radio__input"--}}
                                        {{--                                                                   value="3"   name="checkout_payment_method" type="radio">--}}
                                        {{--                                                            <span class="input-radio__circle"></span>--}}
                                        {{--                                                        </span>--}}
                                        {{--                                                    </span>--}}
                                        {{--                                            <span class="payment-methods__item-title">PayPal</span>--}}
                                        {{--                                        </label>--}}
                                        {{--                                        <div class="payment-methods__item-container">--}}
                                        {{--                                            <div class="payment-methods__item-description text-muted">--}}
                                        {{--                                                Pay via PayPal; you can pay with your credit card if you don’t have a--}}
                                        {{--                                                PayPal account.--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </li>--}}
                                    </ul>
                                </div>
                                <div class="checkout__agree form-group">
                                    <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox"
                                                           id="checkout-terms">
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                        <label class="form-check-label" for="checkout-terms">
                                            I have read and agree to the website <a target="_blank"
                                                                                    href="terms-and-conditions.blade.php">terms
                                                and conditions</a>*
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                            </div>
                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert-danger">
                                    {{ __($error) }}
                                </div>
                            @endforeach
                        @endif
                        @if(session('success'))
                            <div class="alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                    </div>
                </div>
        </form>
    </div>
    </div>
    </div>
    <!-- site__body / end -->
    <!-- site__footer -->
@endsection
