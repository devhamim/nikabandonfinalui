@extends('frontend.loginreg.app')
@section('content')

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <style type="text/css">
                        .page-content p {
                            font-size: 15px;
                            font-weight: 300 !important;
                            line-height: 27px !important;
                        }

                        .menu-bg {
                            background-color: #f2f1f1;
                        }

                        ul.ul-menuTab {
                            list-style-type: none;
                        }

                        .menu-font {
                            font-family: "Roboto", "sans-serif";
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

                        .check-square li {
                            line-height: 27px !important;
                        }

                        li.selected {
                            border-bottom: 2px solid #df292f;
                        }

                    </style>

                    <link href="{{ asset('frontend') }}/css/Index/css/index.css" rel="stylesheet" />
                    <link href="{{ asset('frontend') }}/css/Index/css/font-awesome.min.css" rel="stylesheet" />

                    <div class="bg-white terms-conditions shadow mv-no-shadow m-v-p0" style="padding: 20px; color: #000; padding-bottom:25px;">

                        <section class="sec-padding-30-40 terms-con" style="padding-top:10px;">
                            <div class="container">
                                <h2 class="mb-3 md-br-remove center"> <span class="main-color">Privacy</span> Policy</h2>
                                {!! $privacypolicy->description !!}
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

