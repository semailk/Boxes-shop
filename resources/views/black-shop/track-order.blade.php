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
                                <li class="breadcrumb-item active" aria-current="page">Track Order</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="card flex-grow-1 mb-0 mt-5">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h1>Track Order</h1>
                                    </div>
                                    <p class="mb-4 pt-2">
                                        Vestibulum sem odio, ullamcorper a imperdiet tincidunt sed magna felis, consequat a erat ut,
                                        rutrum finibus odio.
                                    </p>
                                    <form>
                                        <div class="form-group">
                                            <label for="track-order-id">Order ID</label>
                                            <input id="track-order-id" type="text" class="form-control" placeholder="Order ID">
                                        </div>
                                        <div class="form-group">
                                            <label for="track-email">Email address</label>
                                            <input id="track-email" type="email" class="form-control" placeholder="Email address">
                                        </div>
                                        <div class="pt-3">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Track</button>
                                        </div>
                                    </form>
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
