@extends('layouts.main')
@section('content')
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
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
                        <div class="card-header">
                            <h5>Edit Address</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="form-row">
                                    </div>
                                    <form action="{{ route('account.address.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="checkout-country">Country</label>
                                            <select name="region" id="checkout-country"
                                                    class="form-control form-control-select2">
                                                <option>{{$userAddress->region}}</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Italy">Italy</option>
                                                <option value="France">France</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Australia">Australia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout-city">City</label>
                                            <input value="{{$userAddress->city}}" name="city" type="text"
                                                   class="form-control" id="checkout-city">
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout-street-address">Street</label>
                                            <input value="{{$userAddress->street}}" name="street" type="text"
                                                   class="form-control" id="checkout-street-address"
                                                   placeholder="Street">
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout-street-address">Street Number</label>
                                            <input value="{{$userAddress->street_number}}" name="street_number" type="text"
                                                   class="form-control" id="checkout-street-address"
                                                   placeholder="Street number">
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout-street-address">Phone</label>
                                            <input value="{{$userAddress->phone}}" name="phone" type="text"
                                                   class="form-control" id="checkout-street-address"
                                                   placeholder="Street number">
                                        </div>
                                        <div class="form-group mt-3 mb-0">
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
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
