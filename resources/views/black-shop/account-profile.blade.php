@extends('layouts.main')
@section('content')
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('index')}}">Home</a>
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
                                    <h5>Edit Profile</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-7 col-xl-6">
                                            @if(!empty($user))
                                            <form action="{{route('user.profile.store')}}" method="POST">
                                                @csrf
                                            <div class="form-group">
                                                <label for="profile-first-name">First Name</label>
                                                <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="profile-first-name" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-last-name">Last Name</label>
                                                <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" id="profile-last-name" placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-email">Email Address</label>
                                                <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="profile-email" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-phone">Phone Number</label>
                                                <input value="{{ $user->phone }}" name="phone" type="text" class="form-control" id="profile-phone" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group mt-5 mb-0">
                                                <button class="btn btn-primary">Save</button>
                                            </div>
                                            </form>
                                            @endif
                                            @if(session('success'))
                                            <div class="alert-success mt-2">
                                                {{ session('success') }}
                                            </div>
                                                @endif
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
