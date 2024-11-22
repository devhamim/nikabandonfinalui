@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">


                    <form action="{{ route('member.register') }}" method="POST">
                        @csrf
                        <div ng-controller="RegisterAccountCtrl" class="register-form back-leaf-white shadow">
                            <div class="row" style="margin-left:0; margin-right:0;">
                                <div class="col-sm-12">
                                    <div class="login-padding-ma" style="padding: 30px; padding-top:0; padding-bottom:0; max-width: 400px; margin: 0px auto;">
                                        <div class="center">
                                            <img style="height:80px;" src="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" />
                                        </div>
                                        <div style="margin-top:10px; text-align: center;">
                                            <h3 class="col-sm-12 control-label" style="text-align:center; padding:10px;">Register Account</h3>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="message"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Name</div>
                                                    <input  name="name" placeholder="Enter Name" style="height:40px;" type="text" class="form-control" required>
                                                    @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Your Email</div>
                                                    <input name="email" placeholder="Enter Your Email" style="height:40px;" type="text" class="form-control" required>
                                                    @error('email')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Password</div>
                                                    <input name="password" placeholder="Enter Password" style="height: 40px;" type="password" class="form-control" required>
                                                    @error('password')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div>Profile Created By</div>
                                                    <select name="profile_created_by" class="form-control form-group-margin form-select" required>
                                                        <option value="Self">Self</option>
                                                        <option value="Parents">Parents</option>
                                                        <option value="Brother">Brother</option>
                                                        <option value="Sister">Sister</option>
                                                        <option value="Relative">Relative</option>
                                                    </select>
                                                    @error('profile_created_by')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12" style="text-align:center; margin-top:5px;">
                                                    <button style="width: 100%; margin-bottom:10px;" ng-click="RegisterAccount()" type="submit" class="btn-square btn-square-medium text-capitalize">Continue</button>
                                                    <div class="verifying" style="padding: 10px; font-weight: 600; color: green; display: none;"><img src="../images/ajax-loader.gif" style="width: 22px;" />&nbsp;&nbsp;Please Wait. Its Verifying...</div>
                                                </div>
                                                <div>
                                                    <span>
                                                        By clicking on 'Register Me', you confirm
                                                        that you accept the <a target="_blank" href="#">Terms of Use</a> and <a target="_blank" href="#">Privacy Policy</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="border-top: 1px solid #dcdcdc; margin-left: 0; margin-right: 0;">
                                <div class="col-sm-12">
                                    <div style="padding: 50px; padding-top:20px; padding-bottom:30px; text-align:center;">
                                        <span style="font-size:15px; padding-bottom:5px;">Already a member?</span> &nbsp; <a href="{{ route('member.login') }}" style="font-weight:500;">Login Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
