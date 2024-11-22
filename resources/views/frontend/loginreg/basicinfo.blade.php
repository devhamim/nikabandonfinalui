@extends('frontend.loginreg.app')
@section('content')

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">
                    
                    <form action="{{ route('member.basic.info.store') }}" method="POST" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div class="form-horizontal create-profile-form-container">
                            <div class="row back-leaf-white">
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <span class="section-header-icon icon-info-circled-1"></span>
                                        <span class="register-title-left">Basic Info</span>
                                        <span class="register-title-right"><b>20%</b> Complete</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Gender<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-5">
                                            <label>
                                                <i class="icon-male" style="color: green; font-size: 20px;"></i>
                                                <input type="radio" name="gender" class="form-check-input" id="male" value="male" style="position: relative; left: -6px; top: 2px;" required>
                                                Male
                                            </label>
                                            <label class="padd-left-10" style="padding-left: 20px;">
                                                <i class="icon-female" style="color: deeppink; font-size: 20px;"></i>
                                                <input type="radio" name="gender" class="form-check-input" id="female" value="female" style="position: relative; left: -6px; top: 2px;" required>
                                                Female
                                            </label>
                                            @error('gender')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Candidate Name<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="candidate_name" class="form-control" required>
                                            @error('candidate_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Contact Number<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="number" name="number" class="form-control" required>
                                            @error('number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Candidate Date of Birth</label>
                                        <div class="col-sm-5">
                                            <input type="date" name="date_of_birth" class="form-control" required>
                                            @error('date_of_birth')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Marital Status<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="marital_status" class="form-control form-group-margin form-select" required>
                                                {{-- <option value="">--- Please Select ---</option> --}}
                                                <option value="UnMarried">UnMarried</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Separated">Separated</option>
                                                <option value="Married">Widow(er)</option>
                                            </select>
                                            @error('marital_status')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="NoOfChildrenContainer" class="row form-group" style="display:none;">
                                        <label class="col-sm-3 control-label">No. of Children<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-3">
                                            <select name="no_of_chlidren" class="form-control form-group-margin form-select form-select">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            @error('no_of_chlidren')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Religion<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="religon" class="form-control form-group-margin form-select" required>
                                                {{-- <option value="">--- Please Select ---</option> --}}
                                                <option value="Muslim">Muslim</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddish">Buddish</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            @error('religon')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Nationality</label>
                                        <div class="col-sm-5">
                                            <input name="nationality" class="form-control" required />
                                            @error('nationality')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9 create-profile-btn-container" style="padding-bottom:30px;margin-top:10px;">
                                            <button type="submit" ng-click="Back()" class="btn-square btn-square-3 btn-square-medium text-capitalize">Back</button>
                                            <button id="btnCreateProfile" ng-disabled="form.$invalid" type="submit" ng-click="CreateProfile()" class="btn-square btn-square-medium text-capitalize padd-lr-40 f-15">Continue</button>
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

