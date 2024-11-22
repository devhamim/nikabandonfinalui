@extends('frontend.loginreg.app')
@section('content')
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

                        li.selected {
                            border-bottom: 2px solid #df292f;
                        }

                    </style>

                    <link href="{{ asset('frontend') }}/css/Index/css/index.css" rel="stylesheet" />
                    <link href="{{ asset('frontend') }}/css/Index/css/font-awesome.min.css" rel="stylesheet" />

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="bg-white hide-mobile" style="padding: 40px; margin-bottom: 0px;">

                                <div class="row">
                                    <div class="col-md-4 center" style="border-right: 1px solid #dcdcdc; min-height: 80px;">
                                        <div>
                                            <i class="icon-globe-2" style="color: yellowgreen; font-size: 30px;"></i>
                                        </div>
                                        <div style="padding-top: 5px; text-align: center; font-size: 15px;">
                                            www.nikahbandhan.com
                                        </div>
                                    </div>
                                    <div class="col-md-4 center" style="border-right: 1px solid #dcdcdc; min-height: 80px;">
                                        <i class="icon-phone" style="color: yellowgreen; font-size: 30px;"></i>
                                        <div style="padding-top: 5px; font-size: 15px;">
                                            <div>+88 01876674794</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 center">
                                        <i class="icon-mail" style="color: yellowgreen; font-size: 30px;"></i>
                                        <div style="padding-top: 5px; font-size: 15px;">
                                            info@nikahbandhan.com
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white back-leaf-white shadow mv-no-shadow" style="padding: 20px; margin: 0px auto; margin-bottom: 30px;">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="message center" style="font-weight: 600; padding: 5px;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Subject:</h6>
                                        <div class="col-sm-8">
                                            <input id="subject" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Your Email / Mobile:</h6>
                                        <div class="col-sm-8">
                                            <input id="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Message:</h6>
                                        <div class="col-sm-8">
                                            <textarea id="description" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <h3 class="col-sm-3 control-label"></h3>
                                        <div class="col-sm-8">
                                            <button id="btnSend" type="submit" class="btn-square btn-square-medium text-capitalize">Submit</button>
                                            <span class="status-msg" style="display:none;">Sending Message...</span>
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
</div>

@endsection
