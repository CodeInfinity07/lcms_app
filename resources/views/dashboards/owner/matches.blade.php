@extends('admin.layouts.master')

@section('title')
    Owner Dashboard
@endsection

@section('content')
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
        <div class="row w-cus" style="padding-bottom: 50px; overflow-y: hidden; overflow-x: scroll">
            <div class="col-lg-4 col-4 col">
                <div class="group-bracket mb-30">
                    <div class="bracket-single">
                        <div class="single-bracket">
                            <ul>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-1.png" alt="image">
                                        <p>Abdul Dowdy</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-2.png" alt="image">
                                        <p>Alva Allred</p>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="single-bracket">
                            <ul class="two">
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-3.png" alt="image">
                                        <p>Bill Lackey</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-4.png" alt="image">
                                        <p>Sue Plante</p>
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
                                        <img src="/images/team-img-5.png" alt="image">
                                        <p>Abdul Dowdy</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-6.png" alt="image">
                                        <p>Mittie Abrams</p>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="single-bracket">
                            <ul class="four">
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-7.png" alt="image">
                                        <p>Adela Peters</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-1.png" alt="image">
                                        <p>Owen Boone</p>
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
                                        <img src="/images/team-img-1.png" alt="image">
                                        <p>Abdul Dowdy</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-2.png" alt="image">
                                        <p>Alva Allred</p>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="single-bracket">
                            <ul class="six">
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-1.png" alt="image">
                                        <p>Abdul Dowdy</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-2.png" alt="image">
                                        <p>Alva Allred</p>
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
                                        <img src="/images/team-img-1.png" alt="image">
                                        <p>Abdul Dowdy</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="left d-flex align-items-center">
                                        <img src="/images/team-img-2.png" alt="image">
                                        <p>Alva Allred</p>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
