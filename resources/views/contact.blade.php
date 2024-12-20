@extends('layouts.master')
@section('content')
    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')

    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner profile features shop">
        <div class="ani-img">
            <img class="img-1" src="images/banner-circle-1.png" alt="icon">
            <img class="img-2" src="images/banner-circle-2.png" alt="icon">
            <img class="img-3" src="images/banner-circle-2.png" alt="icon">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="main-content">
                            <h1>Contact</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Contact Start -->
    <section id="contact-section" class="pt-120 pb-120">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h5>CONTACT US</h5>
                            <h2 class="title">Get in touch today!</h2>
                            <p>We're here to support your dreams. We're here to help</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form action="#" method="post">
                            <h5>Leave your message</h5>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="email">Message</label>
                                <textarea rows="6" placeholder="Enter your message"></textarea>
                            </div>
                            <button class="cmn-btn" type="submit">Submit Now</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="right-sidebar">
                            <h6 class="head-area">More Information</h6>
                            <div class="single-area d-flex align-items-center">
                                <div class="img-area">
                                    <img src="images/email-icon.png" alt="image">
                                </div>
                                <div class="right-area">
                                    <h6>Email</h6>
                                    <p class="text-sm">LT@gmail.com</p>
                                </div>
                            </div>
                            <div class="single-area d-flex align-items-center">
                                <div class="img-area">
                                    <img src="images/phone-icon.png" alt="image">
                                </div>
                                <div class="right-area">
                                    <h6>Phone</h6>
                                    <p class="text-sm">(123) 456 - 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    @includes('partials.footer')
@endsection