@extends('layouts.main')
@section('content')
        <div class="site__body">
            <div class="block order-success">
                <div class="container">
                    <div class="order-success__body">
                        <div class="order-success__header">
                            <svg class="order-success__icon" width="100" height="100">
                                <use xlink:href="{{asset('../images/sprite.svg#check-100')}}"></use>
                            </svg>
                            <h1 class="order-success__title">Thank you</h1>
                            <div class="order-success__subtitle">Your order has been received</div>
                            <div class="order-success__actions">
                                <a href="" class="btn btn-xs btn-secondary">Go To Homepage</a>
                            </div>
                        </div>
                        <div class="order-success__meta">
                            <ul class="order-success__meta-list">
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Order number:</span>
                                    <span class="order-success__meta-value">#3487</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Created at:</span>
                                    <span class="order-success__meta-value">October 19, 2020</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Total:</span>
                                    <span class="order-success__meta-value">$5,882.00</span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Payment method:</span>
                                    <span class="order-success__meta-value">PayPal</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="order-list">
                                <table>
                                    <thead class="order-list__header">
                                        <tr>
                                            <th class="order-list__column-label" colspan="2">Product</th>
                                            <th class="order-list__column-quantity">Qty</th>
                                            <th class="order-list__column-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-list__products">
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="{{asset('../images/products/product-1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href="">Electric Planer Brandix KL370090G 300 Watts</a>
                                                <div class="order-list__options">
                                                    <ul class="order-list__options-list">
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">Color:</span>
                                                            <span class="order-list__options-value">Yellow</span>
                                                        </li>
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">Material:</span>
                                                            <span class="order-list__options-value">Aluminium</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Qty:">2</td>
                                            <td class="order-list__column-total">$1,398.00</td>
                                        </tr>
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="{{asset('../images/products/product-2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href="">Undefined Tool IRadix DPS3000SY 2700 watts</a>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Qty:">1</td>
                                            <td class="order-list__column-total">$849.00</td>
                                        </tr>
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="{{asset('../images/products/product-5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href="">Brandix Router Power Tool 2017ERXPK</a>
                                                <div class="order-list__options">
                                                    <ul class="order-list__options-list">
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">Color:</span>
                                                            <span class="order-list__options-value">True Red</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Qty:">3</td>
                                            <td class="order-list__column-total">$3,630.00</td>
                                        </tr>
                                    </tbody>
                                    <tbody class="order-list__subtotals">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Subtotal</th>
                                            <td class="order-list__column-total">$5,877.00</td>
                                        </tr>
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Shipping</th>
                                            <td class="order-list__column-total">$25.00</td>
                                        </tr>
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Tax</th>
                                            <td class="order-list__column-total">$0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="order-list__footer">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Total</th>
                                            <td class="order-list__column-total">$5,902.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 no-gutters mx-n2">
                            <div class="col-sm-6 col-12 px-2">
                                <div class="card address-card">
                                    <div class="address-card__body">
                                        <div class="address-card__badge address-card__badge--muted">Shipping Address</div>
                                        <div class="address-card__name">Helena Garcia</div>
                                        <div class="address-card__row">
                                            Random Federation<br>
                                            115302, Moscow<br>
                                            ul. Varshavskaya, 15-2-178
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Phone Number</div>
                                            <div class="address-card__row-content">38 972 588-42-36</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Email Address</div>
                                            <div class="address-card__row-content">stroyka@example.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                                <div class="card address-card">
                                    <div class="address-card__body">
                                        <div class="address-card__badge address-card__badge--muted">Billing Address</div>
                                        <div class="address-card__name">Helena Garcia</div>
                                        <div class="address-card__row">
                                            Random Federation<br>
                                            115302, Moscow<br>
                                            ul. Varshavskaya, 15-2-178
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Phone Number</div>
                                            <div class="address-card__row-content">38 972 588-42-36</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Email Address</div>
                                            <div class="address-card__row-content">stroyka@example.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
