@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <form action="{{ route('lifestyle.store') }}" method="POST" id="formCreateProfile" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div ng-controller="RegisterLifeStyleCtrl" class="form-horizontal create-profile-form-container">
                            <div class="row back-leaf-white">
                                <div class="col-md-12">

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-pagelines"></span>
                                        <span class="register-title-left">Life Style</span>
                                        <span class="register-title-right"><b>90%</b> Complete</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Religious Value<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="religious_value" class="form-control form-group-margin form-select" required>
                                                <option selected="selected" value="">--- Select Religious Value ---</option>
                                                <option value="Very religious">Very religious</option>
                                                <option value="Average religious">Average religious</option>
                                                <option value="Does not matter">Does not matter</option>
                                            </select>
                                            @error('religious_value')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Family Values</label>
                                        <div class="radio-control col-sm-5">
                                            <label>
                                                <input type="radio" class="form-check-input" name="family_values" id="Traditional" value="Traditional">
                                                Traditional
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="family_values" id="Moderate" value="Moderate">
                                                Moderate
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="family_values" id="Liberal" value="Liberal">
                                                Liberal
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Diet</label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" class="form-check-input" name="diet" id="Vegetarian" value="Vegetarian">
                                                Vegetarian
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="diet" id="NonVegetarian" value="NonVegetarian">
                                                Non Vegetarian
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="diet" id="DoesNotMatter" value="DoesNotMatter">
                                                Not Matter
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Smoke<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" class="form-check-input" name="smoke" id="NonSmoker" value="NonSmoker" required>
                                                Non Smoker
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="smoke" id="Smoker" value="Smoker" required>
                                                Smoker
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="smoke" id="LightSmoker" value="LightSmoker" required>
                                                Light / Social smoker
                                            </label>
                                            @error('smoke')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9 create-profile-btn-container" style="padding-bottom:30px; margin-top:10px;">
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

