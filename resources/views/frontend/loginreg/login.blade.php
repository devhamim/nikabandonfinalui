@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <div class="login-form back-leaf-white shadow">
                        <div class="row" style="margin-left:0; margin-right:0;">
                            <div class="col-sm-12">
                                <form action="{{ route('member.login.post') }}" method="post">
                                    @csrf
                                    <div class="login-padding-ma" style="padding: 30px; padding-top:0; padding-bottom:0; max-width: 400px; margin: 0px auto;">

                                        <div class="center">
                                            <img style="height:80px;" src="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" />
                                        </div>

                                        <div style="text-align: center;">
                                            <h3 class="col-sm-12 control-label" style="text-align:center; padding:10px;">Member Login</h3>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Mobile Or Email</div>
                                                    <input name="email" placeholder="Enter Mobile Or Email" style="height:45px;" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Password</div>
                                                    <input name="password" placeholder="Enter Password" style="height: 45px;" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12 control-label">
                                                    <span style="float:left;"><input id="rememberMe" type="checkbox" class="form-check-input" checked="checked"><span style="padding-left: 5px;" class="checkbox-label">Remember me</span></span>
                                                    <a href="forgotpassword.html" style="float: right; font-weight:500;">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12" style="text-align:center;">
                                                    <button style="width: 100%; margin-bottom:10px;" type="submit" class="login btn-square btn-square-medium text-capitalize">LOGIN</button>
                                                    <span class="logging" style="font-weight:400; display: none;"><img src="{{ asset('frontend') }}/images/ajax-loader.gif" style="width:22px;" />&nbsp;Please Wait. Its logging...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row" style="border-top: 1px solid #dcdcdc; margin-left: 0; margin-right: 0;">
                            <div class="col-sm-12">
                                <div style="padding-top:20px; padding-bottom:30px; text-align:center;">
                                    <span style="font-size:15px; padding-bottom:5px;">New to nikahbandhan?</span> &nbsp; <a href="{{ route('member.registration') }}" style="font-weight:500;">Register Now</a>
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
        