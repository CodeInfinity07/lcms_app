@extends('layouts.master')
@section('content')
    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

    @include('partials.header')



     <section id="team-section" class="pb-120 pt-150">
        <div class="overlay">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Discover Communities</h2>
                        </div>
                    </div>
                </div>
                <div class="row wrapper">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-1.png" alt="image">
                            </div>
                            <div class="bottom-area">
                                <a href="/community">
                                    <h5>Community 1</h5>
                                </a>
                                <p>50 FOLLOWERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-2.png" alt="image">
                            </div>
                            <div class="bottom-area">
                                <a href="/community">
                                    <h5>Community 2</h5>
                                </a>
                                <p>72k FOLLOWERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-3.png" alt="image">
                            </div>
                            <div class="bottom-area">
                                <a href="/community">
                                    <h5>Community 3</h5>
                                </a>
                                <p>96K FOLLOWERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="top-item text-center">
                                <img src="images/team-1.png" alt="image">
                            </div>
                            <div class="bottom-area">
                                <a href="/community">
                                    <h5>Community 4</h5>
                                </a>
                                <p>100K FOLLOWERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @includes('partials.footer')
@endsection
