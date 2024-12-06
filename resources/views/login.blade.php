@extends('layouts.master')
@section('content')
    <!-- Login Reg In start -->
    <section id="login-reg">
        <div class="overlay pb-120">
            <div class="container">
                <div class="top-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-5 col">
                            <a class="back-home" href="/">
                                <img src="images/left-icon.png" alt="image">
                                Back To LT
                            </a>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="#">
                                <img src="images/logo.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row pt-120 d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-reg-main text-center">
                            <h4>Welcome To LT</h4>
                            <div class="form-area">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input placeholder="Enter your Email" name="email" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input placeholder="Enter your password" name="password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="cmn-btn">Sign In</button>
                                    </div>
                                </form>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="sign-in">
                                    <p>Sign in with your</p>
                                </div>
                                <div class="reg-with">
                                    <div class="social-area d-flex justify-content-center">
                                        <a href="javascript:void(0)"><img src="images/social-icon-1.png" alt="image"></a>
                                        <a class="twitch" href="javascript:void(0)"><img src="images/social-icon-2.png"
                                                alt="image"></a>
                                        <a class="google" href="javascript:void(0)"><img src="images/social-icon-3.png"
                                                alt="image"></a>
                                    </div>
                                </div>
                                <div class="account">
                                    <p>Don't have an account? <a href="/register">Sign Up Here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Reg In end -->
@endsection
