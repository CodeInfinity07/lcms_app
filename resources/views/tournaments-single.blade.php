@extends('layouts.master')
@section('content')
    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')

    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner tournaments">
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
        <div class="container">
            <div class="headign-info">
                <div class="top-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                            <img src="images/character_01.png" alt="image">
                        </div>
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-sm justify-content-center">
                            <div class="mid-area text-center">
                                <img src="images/text-img.png" alt="image">
                                <h5>Fortnite Weekly Nano</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 zindex">
                            <img src="images/character_02.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="bottom-area">
                    <div class="bottom">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-8 col-md-8 justify-content-sm-center d-grid">
                                <h3>Head 2 Head - Weekly - Nano</h3>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="images/waitng-icon.png" alt="image">
                                        <span>Starts in</span>
                                        <span class="time">10d 2H 18M</span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">Apr 21, 5:00 AM EDT</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 text-center">
                                <h2 class="dollar">$739</h2>
                                <a href="/register" class="cmn-btn">Join Now!</a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bracket-tab" data-toggle="tab" href="#bracket" role="tab"
                                    aria-controls="bracket" aria-selected="false">bracket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="matches-tab" data-toggle="tab" href="#matches" role="tab"
                                    aria-controls="matches" aria-selected="false">matches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="participants-tab" data-toggle="tab" href="#participants"
                                    role="tab" aria-controls="participants" aria-selected="false">participants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="prizes-tab" data-toggle="tab" href="#prizes" role="tab"
                                    aria-controls="prizes" aria-selected="false">prizes</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Testimonials Content Start -->
    <section id="tournaments-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="container pb-120">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h4 class="head-area">Format</h4>
                            <div class="row wrapper">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-1.png" alt="image">
                                        <h6>Game</h6>
                                        <p class="text-sm">CS:GO</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-2.png" alt="image">
                                        <h6>Check-in period</h6>
                                        <p class="text-sm">45 minutes before start</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-3.png" alt="image">
                                        <h6>Team Size</h6>
                                        <p class="text-sm">1VS1</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-4.png" alt="image">
                                        <h6>Entry Fee</h6>
                                        <p class="text-sm">Free to enter</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-5.png" alt="image">
                                        <h6>Prize Pool</h6>
                                        <p class="text-sm">$100</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="images/format-icon-6.png" alt="image">
                                        <h6>Tournament Format</h6>
                                        <p class="text-sm">Single Elimination</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-area">
                                <h4>Information</h4>
                                <div class="single-info">
                                    <h5>Format</h5>
                                    <ul>
                                        <li>Map pool: Selected Aim Maps</li>
                                        <li>All kind of cheating will result in a permanent suspension from LT.</li>
                                        <li>Playing with a cheater will result in a 3 month suspension from LT.</li>
                                        <li>Toxic behaviour will cause warnings and in severe cases both disqualifications
                                            and
                                            suspensions.</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <h5>Prize Claim</h5>
                                    <p>Prize claims must be completed within 24 hours of the end of the tournament
                                        otherwise risk penalty of the prize. Claims can take up to 72 hours to be processed.
                                    </p>
                                </div>
                                <div class="single-info">
                                    <h5>Rules</h5>
                                    <ul>
                                        <li>Please be respectful to your host and other participants. If any malicious
                                            behavior
                                            is reported, you will be removed from the tournament.</li>
                                        <li>Please be on time for your registration and for the actual tournament. You
                                            (and your team) will be disqualified on no-show.</li>
                                        <li>You and all of your teammates must be registered to qualify for the event.</li>
                                        <li>You can play in this tournament only if your registered and in-game names match,
                                            otherwise you will be disqualified.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="magnific-area">
                                <img src="images/magnific-bg.png" alt="image">
                                <a href="https://www.youtube.com/watch?v=MJ0zpsWQ_XM" class="mfp-iframe popupvideo">
                                    <img src="images/play-icon-2.png" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sidebar">
                                <div class="single-side">
                                    <h5>Participants</h5>
                                    <div class="participants">
                                        <ul>
                                            <li><span>Registered</span><span>17</span></li>
                                            <li><span>Confirmed</span><span>15</span></li>
                                            <li><span>Available slots</span><span>16</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-side">
                                    <div class="part-people d-flex align-items-center justify-content-between">
                                        <ul class="d-flex">
                                            <li><a href="#"><img src="images/participants-1.png"
                                                        alt="images"></a></li>
                                            <li><a href="#"><img src="images/participants-2.png"
                                                        alt="images"></a></li>
                                            <li><a href="#"><img src="images/participants-3.png"
                                                        alt="images"></a></li>
                                            <li><a href="#"><img src="images/participants-4.png"
                                                        alt="images"></a></li>
                                            <li><a href="#"><img src="images/participants-5.png"
                                                        alt="images"></a></li>
                                        </ul>
                                        <a href="#" class="right-area">12+</a>
                                    </div>
                                </div>
                                <div class="single-side">
                                    <div class="head-area d-flex justify-content-between align-items-center">
                                        <h5>Results</h5>
                                        <a href="#" class="viewall text-sm">View all</a>
                                    </div>
                                    <div class="result-single">
                                        <img src="images/result-img-1.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>1st</span>
                                            <h4>$60.0</h4>
                                        </div>
                                    </div>
                                    <div class="result-single">
                                        <img src="images/result-img-2.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>2nd</span>
                                            <h4>$25.0</h4>
                                        </div>
                                    </div>
                                    <div class="result-single">
                                        <img src="images/result-img-3.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>3rd</span>
                                            <h4>$15.0</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-side">
                                    <h5>Game</h5>
                                    <div class="game-area d-flex align-items-center">
                                        <img src="images/game-left.png" alt="images">
                                        <div class="right-side">
                                            <h6>Game</h6>
                                            <p>Counter-Strike:
                                                Global Offensive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-side">
                                    <h5>Admins (3)</h5>
                                    <div class="admins-area">
                                        <div class="admins-single">
                                            <div class="left-area d-flex align-items-center">
                                                <img src="images/admin-img-1.png" alt="images">
                                                <div class="right-side">
                                                    <h6>Davis Rosser</h6>
                                                    <p class="text-sm">OLT Support</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="nice-select"><span class="current single-item share">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                    <ul class="list">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a>
                                                        </li>
                                                        <li><a href="profile"><i class="fas fa-share-alt"></i>View
                                                                Profile</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="admins-single">
                                            <div class="left-area d-flex align-items-center">
                                                <img src="images/admin-img-1.png" alt="images">
                                                <div class="right-side">
                                                    <h6>Davis Rosser</h6>
                                                    <p class="text-sm">OLT Support</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="nice-select"><span class="current single-item share">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                    <ul class="list">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a>
                                                        </li>
                                                        <li><a href="profile"><i class="fas fa-share-alt"></i>View
                                                                Profile</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="admins-single">
                                            <div class="left-area d-flex align-items-center">
                                                <img src="images/admin-img-1.png" alt="images">
                                                <div class="right-side">
                                                    <h6>Davis Rosser</h6>
                                                    <p class="text-sm">OLT Support</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="nice-select"><span class="current single-item share">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                    <ul class="list">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a>
                                                        </li>
                                                        <li><a href="profile"><i class="fas fa-share-alt"></i>View
                                                                Profile</a></li>
                                                    </ul>
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
            <div class="tab-pane fade pb-120" id="bracket" role="tabpanel" aria-labelledby="bracket-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="bracket-menu">
                                <div class="single-item text-center">
                                    <h5>Round 1</h5>
                                    <p>8 matches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="bracket-menu">
                                <div class="single-item text-center">
                                    <h5>Quarter Finals</h5>
                                    <p>4 matches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="bracket-menu">
                                <div class="single-item text-center">
                                    <h5>Semi Finals</h5>
                                    <p>2 matches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="bracket-menu">
                                <div class="single-item text-center">
                                    <h5>Finals</h5>
                                    <p>1 matches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bracket-area">
                        <div class="row w-cus">
                            <div class="col-lg-4 col-4 col">
                                <div class="group-bracket mb-30">
                                    <div class="bracket-single">
                                        <div class="single-bracket">
                                            <ul>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-1.png" alt="image">
                                                        <p>Abdul Dowdy</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-2.png" alt="image">
                                                        <p>Alva Allred</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-bracket">
                                            <ul class="two">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-3.png" alt="image">
                                                        <p>Bill Lackey</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-4.png" alt="image">
                                                        <p>Sue Plante</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-bracket">
                                    <div class="bracket-single">
                                        <div class="single-bracket">
                                            <ul class="three">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-5.png" alt="image">
                                                        <p>Abdul Dowdy</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-6.png" alt="image">
                                                        <p>Mittie Abrams</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-bracket">
                                            <ul class="four">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-7.png" alt="image">
                                                        <p>Adela Peters</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-1.png" alt="image">
                                                        <p>Owen Boone</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4 col d-grid align-items-center">
                                <div class="group-bracket">
                                    <div class="bracket-single second">
                                        <div class="single-bracket mb-155">
                                            <ul class="five">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-1.png" alt="image">
                                                        <p>Abdul Dowdy</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-2.png" alt="image">
                                                        <p>Alva Allred</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-bracket">
                                            <ul class="six">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-1.png" alt="image">
                                                        <p>Abdul Dowdy</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-2.png" alt="image">
                                                        <p>Alva Allred</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4 col d-grid align-items-center">
                                <div class="group-bracket before-none">
                                    <div class="bracket-single">
                                        <div class="single-bracket">
                                            <ul class="seven">
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-1.png" alt="image">
                                                        <p>Abdul Dowdy</p>
                                                    </div>
                                                    <div class="right">
                                                        <span>01</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left d-flex align-items-center">
                                                        <img src="images/team-img-2.png" alt="image">
                                                        <p>Alva Allred</p>
                                                    </div>
                                                    <div class="right green">
                                                        <span>03</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">
                <div class="matches pb-120">
                    <div class="container overlay-cus">
                        <div class="row w-cus">
                            <div class="col-lg-12">
                                <div class="unscheduled">
                                    <h4>Unscheduled Matches</h4>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-1.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-2.png" alt="image">
                                                <p>Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="yesterday">
                                    <h4>Yesterday</h4>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-1.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-2.png" alt="image">
                                                <p>Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-3.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-4.png" alt="image">
                                                <p class="eliminated">Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-5.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-6.png" alt="image">
                                                <p>Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-7.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-2.png" alt="image">
                                                <p class="eliminated">Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-3.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-5.png" alt="image">
                                                <p>Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-2.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-8.png" alt="image">
                                                <p class="eliminated">Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-6.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-1.png" alt="image">
                                                <p class="eliminated">Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="single-matches d-flex align-items-center justify-content-between">
                                        <div class="left">
                                            <p>14:23</p>
                                        </div>
                                        <div class="mid d-flex align-items-center justify-content-between">
                                            <div class="player left-player d-flex align-items-center">
                                                <p>Angila Hazel</p>
                                                <span class="tier victory">Tier VII</span>
                                                <img src="images/participant-4.png" alt="image">
                                            </div>
                                            <h5 class="vs">
                                                <span>1</span>
                                                <span>:</span>
                                                <span>0</span>
                                            </h5>
                                            <div class="player right-player d-flex align-items-center">
                                                <img src="images/participant-3.png" alt="image">
                                                <p>Anisa Greiner</p>
                                                <span class="tier second">Tier VII</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="images/right-arrows.png" alt="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="participants" role="tabpanel" aria-labelledby="participants-tab">
                <div class="participants">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area pb-120">
                                    <h4>Confirmed</h4>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-1.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-2.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-3.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-4.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-5.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-6.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-7.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-8.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-9.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="images/participant-10.png" alt="images">
                                            <div class="right-side">
                                                <h6>Miracle Rosser</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                                    <li><a href="profile"><i class="fas fa-share-alt"></i>View Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="prizes" role="tabpanel" aria-labelledby="prizes-tab">
                <div class="prizes pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Placement</th>
                                                <th scope="col">Current Prize</th>
                                                <th scope="col">Potential Prize</th>
                                                <th scope="col">Team</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="first" scope="row">1st</th>
                                                <td>$100.00</td>
                                                <td>$100.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th class="second" scope="row">2nd</th>
                                                <td>$60.00</td>
                                                <td>$60.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th class="third" scope="row">3rd</th>
                                                <td>$40.00</td>
                                                <td>$40.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4th</th>
                                                <td>$25.00</td>
                                                <td>$25.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5th - 6th</th>
                                                <td>$20.00</td>
                                                <td>$20.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7th - 8th</th>
                                                <td>$15.00</td>
                                                <td>$15.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9th - 11th</th>
                                                <td>$10.00</td>
                                                <td>$10.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">12th - 15th</th>
                                                <td>$5.00</td>
                                                <td>$5.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">16th - 19th</th>
                                                <td>$4.00</td>
                                                <td>$4.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">20th - 26th</th>
                                                <td>$3.00</td>
                                                <td>$3.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">27th - 34th</th>
                                                <td>$2.00</td>
                                                <td>$2.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">35th - 44th</th>
                                                <td>$1.00</td>
                                                <td>$1.00</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">45th - 75th</th>
                                                <td>$0.75</td>
                                                <td>$0.75</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">76th - 115th</th>
                                                <td>$0.50</td>
                                                <td>$0.50</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">116th - 180th</th>
                                                <td>$0.25</td>
                                                <td>$0.25</td>
                                                <td><i class="fas fa-users"></i>To be decided</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Testimonials Content End -->

    @includes('partials.footer')
@endsection