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
                            <h1>Tournaments</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
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

    <!-- Browse Tournaments start -->
    <section id="tournaments-section" class="pt-120 tournaments">
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
                <div class="row mb-40 mp-none">
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Status</span>
                            <select>
                                <option>Status</option>
                                <option value="1">Upcoming 1</option>
                                <option value="2">Upcoming 2</option>
                                <option value="3">Upcoming 3</option>
                                <option value="5">Upcoming 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Search</span>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Team Size</span>
                            <select>
                                <option>Select Team Size</option>
                                <option value="1">Size 1</option>
                                <option value="2">Size 2</option>
                                <option value="3">Size 3</option>
                                <option value="4">Size 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Entry Fee</span>
                            <select>
                                <option>Select Entry Fee</option>
                                <option value="1">50</option>
                                <option value="2">60</option>
                                <option value="3">70</option>
                                <option value="4">80</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="images/ludo_tournament.jpeg" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Ludo Star - Tournament 1</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="images/waitng-icon.png" alt="image">
                                        <span>COMPLETED</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Nov 21, 10:00 PM PST</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY</span>
                                        <span class="sub">Free</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">FORMAT</span>
                                        <span class="sub">1 VS 1</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">32</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">32</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                    <h4 class="dollar">$350</h4>
                                    <a href="/tournaments-single" class="cmn-btn">View Tournament</a>
                                    <p>Winner will win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item mp-none">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <img class="top-img" src="images/ludo_tournament.jpeg" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-9 d-flex align-items-center">
                            <div class="mid-area">
                                <h4>Ludo Star - Tournament 2</h4>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="images/waitng-icon.png" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">6d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Dec 6, 10:00 PM PST</span>
                                    </div>
                                </div>
                                <div class="single-box d-flex">
                                    <div class="box-item">
                                        <span class="head">ENTRY</span>
                                        <span class="sub">Free</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">FORMAT</span>
                                        <span class="sub">1 VS 1</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Max Teams</span>
                                        <span class="sub">128</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">Enrolled</span>
                                        <span class="sub">128</span>
                                    </div>
                                    <div class="box-item">
                                        <span class="head">skill Level</span>
                                        <span class="sub">All</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="prize-area text-center">
                                <div class="contain-area">
                                    <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                    <h4 class="dollar">$350</h4>
                                    <a href="/tournaments-single" class="cmn-btn">View Tournament</a>
                                    <p>Winner will win a Cash Prize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->

    @include('partials.footer')
@endsection
