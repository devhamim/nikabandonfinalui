@extends('frontend.loginreg.app')
@section('content')
<!DOCTYPE html>

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <style type="text/css">
                        .menu-bg {
                            background-color: #f2f1f1;
                        }

                        ul.ul-menuTab {
                            list-style-type: none;
                        }

                        .menu-font {
                            font-weight: 300;
                        }

                        .menu-item-color {
                            color: #34495e;
                        }

                        ul.ul-menuTab li {
                            float: left;
                            text-align: center;
                            border-right: 1px solid #bbb;
                        }

                        li.selected {
                            border-bottom: 2px solid #df292f;
                        }

                    </style>

                    <link href="{{ asset('frontend') }}/css/Index/css/index.css" rel="stylesheet" />
                    <link href="{{ asset('frontend') }}/css/Index/css/font-awesome.min.css" rel="stylesheet" />

                    <div class="bg-white shadow mv-no-shadow">

                        <section class="pad-l-20 pad-r-20 sec-padding-30-40 ">
                            <div class="container">
                                <div class="text-left-sm text-center mb-3">
                                    <h2 class="mb-3 md-br-remove"> <span class="main-color">Mission</span> and Vision</h2>
                                    <p>We're providing a halal and user friendly digital platform for Bangladeshi to find his/her life partner in a safe & secure way from the whole world.</p>
                                    <p>nikahbandhan.com is not just another wedding or dating site. We came to serve genuine bangladeshi single brothers and sisters to find their perfect life partner. We build this digital matrimony platform to help you find the best life partner following your noble desire, attire, & dream followed by muslim sharia. We're people's trusted matrimony website in Bangladesh. Find your preferred life partner safely.</p>
                                    <br />
                                    <h2>Core Values</h2>
                                    <p>We are humble, focused, fun loving, caring and definitely collaborative.</p>
                                </div>
                            </div>
                        </section>
                        <section class="area-bg-one m-v-p0" style="padding: 10px;">
                            <div class="area-bg-right">
                                <div class="container no-back">
                                    <div class="row align-items-center py-3">
                                        <div class="col-lg-6  py-5 ">
                                            <h2 class="mb-4">Why choose <span class="main-color">Nikah Bandhan</span></h2>
                                            <ul class="check-square">
                                                <li>Register for Free!</li>
                                                <li>100% human verified profiles</li>
                                                <li>Chat, Voice & Video calling</li>
                                                <li>Designed with sharia values</li>
                                                <li>Halal, safe and secured Matrimony site in Bangladesh</li>
                                                <li>Private, personalized, and highly confidential service</li>
                                                <li>Trusted service for more than 16 years</li>
                                            </ul>
                                            <a class="btn-square mt-3 text-center w-60 text-capitalize" href="{{ route('member.registration') }}">Find your Partner</a>
                                        </div>
                                        <div class="col-lg-6 d-block">
                                            <div class="video-box image-box">
                                                <img class="lazyloaded" src="{{ asset('frontend') }}/images/why.jpg" alt="Why Choose Video">
                                                <a href="https://youtube.com/shorts/Q9jeMGDjsIE?si=hBx6WSwQm7cgi7Z5" class="video-btn"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <script type="text/javascript">
                        var app = angular.module('app', []);

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

