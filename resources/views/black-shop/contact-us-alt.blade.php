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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="card mb-0 contact-us">
                        <div class="contact-us__map">
                            <iframe src='https://www.google.com.ua/maps/place/Киев,+Украина,+02000/@50.4021702,30.3926089,11z/data=!3m1!4b1!4m5!3m4!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4501!4d30.5234' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
                        </div>
                        <div class="card-body">
                            <div class="contact-us__container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <h4 class="contact-us__header card-title">Our Address</h4>
                                        <div class="contact-us__address">
                                            <p>
                                                715 Fake Ave, Apt. 34, New York, NY 10021 USA<br>
                                                Email: stroyka@example.com<br>
                                                Phone Number: +1 754 000-00-00
                                            </p>
                                            <p>
                                                <strong>Opening Hours</strong><br>
                                                Monday to Friday: 8am-8pm<br>
                                                Saturday: 8am-6pm<br>
                                                Sunday: 10am-4pm
                                            </p>
                                            <p>
                                                <strong>Comment</strong><br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                                tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h4 class="contact-us__header card-title">Leave us a Message</h4>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="form-name">Your Name</label>
                                                    <input type="text" id="form-name" class="form-control" placeholder="Your Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="form-email">Email</label>
                                                    <input type="email" id="form-email" class="form-control" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="form-subject">Subject</label>
                                                <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <label for="form-message">Message</label>
                                                <textarea id="form-message" class="form-control" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </form>
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
