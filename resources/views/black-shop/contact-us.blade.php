@extends('layouts.main')
@section('content')
    <div class="block-map block">
        <div class="block-map__body">
            {{--                    <iframe src='https://www.google.com.ua/maps/place/Киев,+Украина,+02000/@50.4021702,30.3926089,11z/data=!3m1!4b1!4m5!3m4!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4501!4d30.5234' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>--}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162757.72582764487!2d30.392608871592163!3d50.40217023833888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce59e3ab65a7%3A0x694b8565cab02eaf!2z0JfQvtC70L7RgtGWINCy0L7RgNC-0YLQsA!5e0!3m2!1sru!2s!4v1616174933763!5m2!1sru!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('index')}}">Ana səhifə</a>
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
                        <li class="breadcrumb-item active" aria-current="page">Bizimlə əlaqə saxlayın</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Bizimlə əlaqə saxlayın</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Ünvan</h4>
                                <div class="contact-us__address">
                                    <p>
                                        Avtomobil zavodu, terminal avtobus 20. Bina 11 mənzil 7<br>
                                        Email: my.house.of.skill@gmail.com<br>
                                        Nömrə: +994 55 243 57 87
                                    </p>
                                    <p>
                                        <strong>İş günləri</strong><br>
                                        Bazar ertəsi, çərşənbə axşamı, çərşənbə, cümə axşamı, cümə, şənbə<br>
                                        Vaxt:: 17:00 - 19:00
                                    </p>
                                    <p>
                                        <strong>Comment</strong><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit
                                        suscipit mi, non
                                        tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">Leave us a Message</h4>
                                <form method="POST" action="{{route('feedback.store')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">Your Name</label>
                                            <input name="name" type="text" id="form-name" class="form-control"
                                                   placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">Email</label>
                                            <input name="email" type="email" id="form-email" class="form-control"
                                                   placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">Subject</label>
                                        <input name="subject" type="text" id="form-subject" class="form-control"
                                               placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">Message</label>
                                        <textarea name="message" id="form-message" class="form-control"
                                                  rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert-danger">
                        {{$error}}
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
    <!-- site__body / end -->
    <!-- site__footer -->
@endsection
