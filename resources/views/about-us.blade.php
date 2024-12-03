@extends('layouts.master')
@section('content')
    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')

    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner">
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
                            <h1>About Us</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

    <!-- About Us In start -->
    <section id="about-us-section">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="main-container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-header text-center">
                                <h2 class="title">ABOUT LT</h2>
                                <p>Dive into the ultimate Ludo experience with our dynamic tournament platform. Compete with players from around the globe, showcase your skills, and claim the top spot in thrilling matches. Whether you're a seasoned pro or a casual player, our website offers exciting challenges, live leaderboards, and amazing rewards. Roll the dice, strategize, and let the fun begin!</p>
                                <a href="/" class="cmn-btn">BACK HOME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us In end -->


    <!-- Testimonials In start -->
    <section id="testimonials-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Our Gamers Review</h2>
                            <p>Thousands of Happy Gamers All Around the World</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-none">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="images/testimonials-user-1.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Iqbal</h6>
                                        <span>FSD, PK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>When I hang out with my friends, we play Tournament, its so much fun</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="images/testimonials-user-1.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Usama</h6>
                                        <span>ISB, PK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <p>I joined for the community but ended up winning cash, amazing.</p>
                            <div class="bottom-area d-flex justify-content-between">
                                <div class="left-area d-flex">
                                    <div class="img">
                                        <div class="img-area">
                                            <img src="images/testimonials-user-1.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="title-area">
                                        <h6>Vikram</h6>
                                        <span>DEL, IND</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials In end -->
    <!-- Team In start -->
    <section id="team-section" class="pb-120">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">our management team</h2>
                            <p>Meet the solid base of quality experts in their field with 15+ years of experience</p>
                        </div>
                    </div>
                </div>
                <div class="row wrapper">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-1.png" alt="image">
                                <div class="social-area">
                                    <ul class="d-flex justify-content-center">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="border-area"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <a href="#">
                                    <h5>Tarah Landry</h5>
                                </a>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-2.png" alt="image">
                                <div class="social-area">
                                    <ul class="d-flex justify-content-center">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="border-area"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <a href="#">
                                    <h5>Abe Gordon</h5>
                                </a>
                                <p>Chief Financial Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-3.png" alt="image">
                                <div class="social-area">
                                    <ul class="d-flex justify-content-center">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="border-area"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <a href="#">
                                    <h5>Neville Saylor</h5>
                                </a>
                                <p>Chief Technology Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-1.png" alt="image">
                                <div class="social-area">
                                    <ul class="d-flex justify-content-center">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="border-area"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <a href="#">
                                    <h5>Russel Laughlin</h5>
                                </a>
                                <p>Technology Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials In end -->
    @include('partials.footer')
@endsection
