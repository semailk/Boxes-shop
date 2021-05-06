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
                                    <h5>Change Password</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-7 col-xl-6">
                                            <form action="{{route('account.password.reset')}}" method="POST">
                                                @csrf
                                            <div class="form-group">
                                                <label for="password-current">Current Password</label>
                                                <input name="password" type="password" required class="form-control" id="password-current" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-new">New Password</label>
                                                <input name="password_new" type="password" required class="form-control" id="password-new" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-confirm">Reenter New Password</label>
                                                <input name="password_new_confirmation" type="password" required class="form-control" id="password-confirm" placeholder="Reenter New Password">
                                            </div>
                                            <div class="form-group mt-5 mb-0">
                                                <button class="btn btn-primary">Change</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <div class="mt-2 alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                        <div class="mt-2 alert-danger">
                                            {{ $error }}
                                        </div>
                                        @endforeach
                                     @endif
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
