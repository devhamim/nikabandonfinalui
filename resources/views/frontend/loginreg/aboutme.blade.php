@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <form action="{{ route('aboutme.store') }}" method="POST" id="formCreateProfile" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div class="form-horizontal create-profile-form-container">
                            <div class="row back-leaf-white">
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-user"></span>
                                        <span class="register-title-left">About Yourself</span>
                                        <span class="register-title-right"><b>100%</b> Complete</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Write About Yourself<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-8">
                                            <div style="border: 1px solid #dcdcdc; border-bottom: 0; background-color:whitesmoke; padding: 5px; font-size: 14px;">
                                                <span>
                                                    Introduce yourself. It will help you make a good impression on your potential partner.
                                                    <br />Please write more about yourself, your partner choices & your family. Don't write any mobile number or email here.'
                                                </span>
                                                <div style="padding-top: 5px; font-size: 14px; font-weight: 400;">
                                                    <a id="linkOpenMyselfHelper" ng-click="myselfHelper()"> <i class="icon-down-circled"></i> Help me to write this</a>
                                                </div>
                                            </div>
                                            
                                            <textarea id="aboutMe" style="border:1px solid #bbb; border-top: 1px solid #dcdcdc; margin-top: 0px;" placeholder="Please write here" name="write_about_yourself" rows="10" maxlength="1999" class="form-control" required></textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Check the grammatical syntax in your description. You can correct by right click red underline and choose right word</span>
                                            </div>
                                            @error('write_about_yourself')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9 create-profile-btn-container" style="padding-bottom:30px; margin-top:10px;">
                                            <button type="submit" ng-click="Back()" class="btn-square btn-square-3 btn-square-medium text-capitalize">Back</button>
                                            <button id="btnCreateProfile" ng-disabled="form.$invalid" type="submit" ng-click="CreateProfile()" class="btn-square btn-square-medium text-capitalize f-15">Complete My Registration</button>
                                            &nbsp;<span class="create-profile-loading" style="display:none;">&nbsp;<img src="/Images/ajax_loader_blue_32.gif" />&nbsp;<label class="loading-text">Saving Your Profile...</label></span>
                                        </div>
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

