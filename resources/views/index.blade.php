@extends('layouts.master')
@section('content')
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')

    <!-- banner-section start -->
    <section id="banner-section">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="top-area justify-content-center text-center">
                                <h3>Play Unlimited</h3>
                                <h1>Tournaments</h1>
                                <p>Compete in Free Tournaments. Transform your
                                    gaming skills to real money.</p>
                                <div class="btn-play d-flex justify-content-center align-items-center">
                                    <a href="/register" class="cmn-btn">Get Started</a>
                                    <a href="https://www.youtube.com" class="mfp-iframe popupvideo">
                                        <img src="images/play-icon.png" alt="play">
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="bottom-area text-center">
                                                <img src="images/versus.png" alt="banner-vs">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ani-illu">
                    <img class="left-1 wow fadeInUp" src="images/left-banner.png" alt="image">
                    <img class="right-2 wow fadeInUp" src="images/right-banner.png" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- How Works start -->
    <section id="how-works-section" class="border-area">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="title">How It Works</h2>
                            <p>It's easier than you think. Follow 3 simple easy steps</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-top">
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>1</span>
                                <img src="images/how-icon-1.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Signup</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center obj-alt">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>3</span>
                                <img src="images/how-icon-3.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Compete</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center obj-rel">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>3</span>
                                <img src="images/how-icon-4.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Get Paid</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How Works end -->

    <!-- Browse Tournaments start -->
    <section id="tournaments-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title">Browse Tournaments</h2>
                            <p>Find the perfect tournaments for you. Head to head matches
                                where you pick the game, rules and prize.</p>
                        </div>
                    </div>
                </div>
                @foreach ($tournaments as $tournament)
                    <div class="single-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 d-flex align-items-center">
                                <img class="top-img" src="images/ludo_tournament.jpeg" alt="image">
                            </div>
                            <div class="col-lg-6 col-md-9 d-flex align-items-center">
                                <div class="mid-area">
                                    <h4>Ludo Star - Tournament {{ $tournament->id }}</h4>
                                    <div class="title-bottom d-flex">
                                        <div class="time-area bg">
                                            <img src="images/waitng-icon.png" alt="image">
                                            <span>
                                                @if ($tournament->status == 0)
                                                    UPCOMING
                                                @elseif($tournament->status == 1)
                                                    COMPLETED
                                                @else
                                                    CANCELLED
                                                @endif
                                            </span>
                                        </div>
                                        <div class="date-area bg">
                                            <span class="date">START DATE: {{ $tournament->starting_date }}</span>
                                        </div>
                                    </div>
                                    <div class="single-box d-flex">
                                        <div class="box-item">
                                            <span class="head">ENTRY</span>
                                            <span class="sub">{{ $tournament->fee }}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Mode</span>
                                            <span class="sub">
                                                @if ($tournament->mode == 1)
                                                    1 v 1
                                                @else
                                                    Team Up
                                                @endif
                                            </span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Max Teams</span>
                                            <span class="sub">{{ $tournament->participants }}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Enrolled</span>
                                            <span class="sub">0</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">FORMAT</span>
                                            <span class="sub">
                                                @if ($tournament->format == 1)
                                                    Single Elimination
                                                @else
                                                    Double Elimination
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center">
                                <div class="prize-area text-center">
                                    <div class="contain-area">
                                        <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                        <h4 class="dollar">$350</h4>
                                        @if ($tournament->status == 0)
                                            <a href="/tournaments-single" class="cmn-btn">View Tournament</a>
                                            <p>Winner will win a Cash Prize</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->

    <!-- Counter In start -->
    <section id="counter-section">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row mp-none">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/counter-icon-1.png" alt="image">
                            </div>
                            <h3><span class="counter">120</span></h3>
                            <p>Matches Played</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/counter-icon-2.png" alt="image">
                            </div>
                            <h3>$<span class="counter">350</span></h3>
                            <p>Winnings Paid</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/counter-icon-3.png" alt="image">
                            </div>
                            <h3><span class="counter">0</span></h3>
                            <p>Active Matches</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/counter-icon-4.png" alt="image">
                            </div>
                            <h3><span class="counter">1</span></h3>
                            <p>Completed Tournaments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter In end -->

    <!-- Players of the Week In start -->
    <section id="players-week-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-7 mb-30">
                        <div class="section-header text-center">
                            <h2 class="title">Previous Winners</h2>
                            <p>Standings of our most recently concluded tournament</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-none">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="images/player-1.png" alt="image">
                                </div>
                            </div>
                            <a href="profile">
                                <h5>JUTT DON'T CARE</h5>
                            </a>
                            <p class="date">
                                <span class="text-sm">21/11 - 28/11</span>
                            </p>
                            <a href="profile" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item mid-area text-center">
                            <div class="top-level">
                                <img src="images/star.png" alt="image">
                            </div>
                            <div class="img-area" style="content: '01' !important;">
                                <div class="img-wrapper">
                                    <img src="images/player-2.png" alt="image">
                                </div>
                            </div>
                            <a href="profile">
                                <h5>INSOMNIAC</h5>
                            </a>
                            <p class="date">
                                <span class="text-sm">21/11 - 28/11</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="images/credit-icon.png" alt="image"> $350</span>
                            </p>
                            <a href="profile" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="images/player-3.png" alt="image">
                                </div>
                            </div>
                            <a href="profile">
                                <h5>ROLLERS</h5>
                            </a>
                            <p class="date">
                                <span class="text-sm">21/11 - 28/11</span>
                            </p>
                            <a href="profile" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Players of the Week In end -->

    <!-- Call to Action In start -->
    <section id="call-to-action">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="main-content">
                    <div class="row d-sm-flex justify-content-sm-end">
                        <div class="col-lg-4 col-md-1">
                            <img class="left" src="images/call-to-action-left.png" alt="image">
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5 d-flex align-items-center">
                            <div class="section-item">
                                <h4>Invite Friends and Win Rewards.Join LT Games today</h4>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                            <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                                <a href="/register" class="cmn-btn">Join Now</a>
                            </div>
                            <img src="images/call-to-action-right.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action In end -->

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

    <!-- Call Action In start -->
    <section id="call-action" class="pb-120">
        <div class="overlay">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="left-area">
                            <h2 class="title">Latest Champion Owner</h2>
                            <p>Owner of the club that has won our most recent Tournament.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="right-area">
                            <img src="images/profile-info.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Action In end -->

    @include('partials.footer')
@endsection
