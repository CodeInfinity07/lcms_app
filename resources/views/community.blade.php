@extends('layouts.master')
@section('content')

    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')
 
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner profile">
        <div class="ani-img">
            <img class="img-1" src="images/banner-circle-1.png" alt="icon" />
            <img class="img-2" src="images/banner-circle-2.png" alt="icon" />
            <img class="img-3" src="images/banner-circle-2.png" alt="icon" />
        </div>
        <div class="container">
            <div class="heading-area">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="profile-area d-flex align-items-center">
                            <div class="photo">
                                <img src="images/profile-logo.png" alt="Image" />
                            </div>
                            <div class="name-area">
                                <h4>Ludo Community</h4>
                                <span>536K followers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                        <div class="right d-flex align-items-center">
                            <a href="#" class="cmn-btn">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Trophies Content Start -->
    <section id="all-trophies" class="pb-120">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-1.png" alt="image" />
                                </div>
                                <div class="right">
                                    <p class="text-sm">Elite Trophies</p>
                                    <h4>0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-2.png" alt="image" />
                                </div>
                                <div class="right">
                                    <p class="text-sm">gold-trophy</p>
                                    <h4>6</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-3.png" alt="image" />
                                </div>
                                <div class="right">
                                    <p class="text-sm">silver trophy</p>
                                    <h4>2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-4.png" alt="image" />
                                </div>
                                <div class="right">
                                    <p class="text-sm">Bronze Trophies</p>
                                    <h4>5</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="statistics-area">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="total-area">
                                    <div class="head-area d-flex justify-content-between">
                                        <div class="left">
                                            <h5>Game Statistics</h5>
                                            <p class="text-sm">
                                                Player's game specific statistics
                                            </p>
                                        </div>
                                        <div class="right">
                                            <p class="text-sm">
                                                Last Update: <span>Just now</span>
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                                role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="announcement-tab" data-toggle="tab" href="#announcement"
                                                role="tab" aria-controls="announcement" aria-selected="false">announcement</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="events-tab" data-toggle="tab" href="#events"
                                                role="tab" aria-controls="events" aria-selected="false">events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="people-tab" data-toggle="tab" href="#people"
                                                role="tab" aria-controls="people" aria-selected="false">people</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContents">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                            aria-labelledby="overview-tab">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-1.png" alt="image" />
                                                        <p>Tournaments Entered</p>
                                                        <h4>10</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-2.png" alt="image" />
                                                        <p>
                                                            Kills Per Game (Average)
                                                        </p>
                                                        <h4>20</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-3.png" alt="image" />
                                                        <p>
                                                            Total Games Played
                                                        </p>
                                                        <h4>50</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-4.png" alt="image" />
                                                        <p>
                                                            Earnings (Per
                                                            tournament)
                                                        </p>
                                                        <h4>0</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="announcement" role="tabpanel"
                                            aria-labelledby="announcement-tab">
                                            <div class="row">

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="events" role="tabpanel"
                                            aria-labelledby="events-tab">
                                            <div class="row">

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="people" role="tabpanel"
                                            aria-labelledby="people-tab">
                                            <div class="row">
 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tournaments-slider">
                                    <div class="top-area">
                                        <h5>Active Tournaments</h5>
                                        <p class="text-sm">
                                        </p>
                                    </div>
                      
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="sidebar-area">
                                    <div class="title-area">
                                        <h5>My Statistics</h5>
                                        <p class="text-sm">My Current progress</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span><img src="images/my-statistics-icon-1.png" alt="image" />Avg. Finish
                                                Rank</span>
                                            <span>313</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-2.png" alt="image" />Total Games
                                                Played</span>
                                            <span>1193</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-3.png" alt="image" />Tournaments
                                                Played</span>
                                            <span>24</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-4.png" alt="image" />Times
                                                Paid</span>
                                            <span>10</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-5.png" alt="image" />Tournaments
                                                Won</span>
                                            <span>02</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-area">
                                    <div class="title-area">
                                        <h5>Winnings</h5>
                                        <p class="text-sm">Current Winnings</p>
                                    </div>
                                    <div class="parents-area">
                                        <div class="single-area d-flex align-items-center">
                                            <div class="img-area last d-flex align-items-center justify-content-center">
                                                <img src="images/earnings-icon-3.png" alt="image" />
                                            </div>
                                            <div class="right-area">
                                                <span><img src="images/coin-icon.png" alt="image" />$473.00</span>
                                                <p class="text-sm">
                                                    Total Winnings
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trophies Content End -->

    @includes('partials.footer')
@endsection
