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
                        <div class="card-header">
                            <h5>Order History</h5>
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
                                    @foreach($userOrders as $userOrder)
                                        <tr>
                                            <td>
                                                <a href="{{ route('account.order.details', $userOrder->id) }}">{{ $userOrder->uuid }}</a>
                                            </td>
                                            <td>{{ $userOrder->created_at }}</td>
                                            <td>{{\App\Enums\OrderStatus::fromValue($userOrder->status)->description }}</td>
                                            <td>{{ count($userOrder->products)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-footer">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true"
                                             width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                        </svg>
                                    </a>
                                </li>
                                {{ $userOrders->links() }}
                                <li class="page-item">
                                    <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                        <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true"
                                             width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
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
