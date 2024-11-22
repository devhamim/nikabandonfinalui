@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">
                    <form action="{{ route('physical.attribute.store') }}" method="POST" id="formCreateProfile" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div class="form-horizontal create-profile-form-container">
                            <div class="row back-leaf-white">
                                <div class="col-md-12">

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-child"></span>
                                        <span class="register-title-left">Physical Attribute</span>
                                        <span class="register-title-right"><b>80%</b> Complete</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Height<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="height" class="form-control form-group-margin form-select" required>
                                                <option value="">---Select Your Height---</option>
                                                <option value="4ft 2in">4ft 2in</option>
                                                <option value="4ft 3in">4ft 3in</option>
                                                <option value="4ft 4in">4ft 4in</option>
                                                <option value="4ft 5in">4ft 5in</option>
                                                <option value="4ft 6in">4ft 6in</option>
                                                <option value="4ft 7in">4ft 7in</option>
                                                <option value="4ft 8in">4ft 8in</option>
                                                <option value="4ft 9in">4ft 9in</option>
                                                <option value="4ft 10in">4ft 10in</option>
                                                <option value="4ft 11in">4ft 11in</option>
                                                <option value="5ft">5ft</option>
                                                <option value="5ft 1in">5ft 1in</option>
                                                <option value="5ft 2in">5ft 2in</option>
                                                <option value="5ft 3in">5ft 3in</option>
                                                <option value="5ft 4in">5ft 4in</option>
                                                <option value="5ft 5in">5ft 5in</option>
                                                <option value="5ft 6in">5ft 6in</option>
                                                <option value="5ft 7in">5ft 7in</option>
                                                <option value="5ft 8in">5ft 8in</option>
                                                <option value="5ft 9in">5ft 9in</option>
                                                <option value="5ft 10in">5ft 10in</option>
                                                <option value="5ft 11in">5ft 11in</option>
                                                <option value="6ft">6ft</option>
                                                <option value="6ft 1in">6ft 1in</option>
                                                <option value="6ft 2in">6ft 2in</option>
                                                <option value="6ft 3in">6ft 3in</option>
                                                <option value="6ft 4in">6ft 4in</option>
                                                <option value="6ft 5in">6ft 5in</option>
                                                <option value="6ft 6in">6ft 6in</option>
                                                <option value="6ft 7in">6ft 7in</option>
                                                <option value="6ft 8in">6ft 8in</option>
                                                <option value="6ft 9in">6ft 9in</option>
                                                <option value="6ft 10in">6ft 10in</option>
                                            </select>
                                            @error('height')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Weight<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="weight" class="form-control form-group-margin form-select" required>
                                                <option value="">---Select Your Weight---</option>
                                                <option value="">Not Specified</option>
                                                <option value="Below 40">Below 40 Kg</option>
                                                <option value="41">41 Kg</option>
                                                <option value="42">42 Kg</option>
                                                <option value="43">43 Kg</option>
                                                <option value="44">44 Kg</option>
                                                <option value="45">45 Kg</option>
                                                <option value="46">46 Kg</option>
                                                <option value="47">47 Kg</option>
                                                <option value="48">48 Kg</option>
                                                <option value="49">49 Kg</option>
                                                <option value="50">50 Kg</option>
                                                <option value="51">51 Kg</option>
                                                <option value="52">52 Kg</option>
                                                <option value="53">53 Kg</option>
                                                <option value="54">54 Kg</option>
                                                <option value="55">55 Kg</option>
                                                <option value="56">56 Kg</option>
                                                <option value="57">57 Kg</option>
                                                <option value="58">58 Kg</option>
                                                <option value="59">59 Kg</option>
                                                <option value="60">50 Kg</option>
                                                <option value="61">61 Kg</option>
                                                <option value="62">62 Kg</option>
                                                <option value="63">63 Kg</option>
                                                <option value="64">64 Kg</option>
                                                <option value="65">65 Kg</option>
                                                <option value="66">66 Kg</option>
                                                <option value="67">67 Kg</option>
                                                <option value="68">68 Kg</option>
                                                <option value="69">69 Kg</option>
                                                <option value="70">70 Kg</option>
                                                <option value="71">71 Kg</option>
                                                <option value="72">72 Kg</option>
                                                <option value="73">73 Kg</option>
                                                <option value="74">74 Kg</option>
                                                <option value="75">75 Kg</option>
                                                <option value="76">76 Kg</option>
                                                <option value="77">77 Kg</option>
                                                <option value="78">78 Kg</option>
                                                <option value="79">79 Kg</option>
                                                <option value="80">80 Kg</option>
                                                <option value="81">81 Kg</option>
                                                <option value="82">82 Kg</option>
                                                <option value="83">83 Kg</option>
                                                <option value="84">84 Kg</option>
                                                <option value="85">85 Kg</option>
                                                <option value="86">86 Kg</option>
                                                <option value="87">87 Kg</option>
                                                <option value="88">88 Kg</option>
                                                <option value="89">89 Kg</option>
                                                <option value="90">90 Kg</option>
                                                <option value="91">91 Kg</option>
                                                <option value="92">92 Kg</option>
                                                <option value="93">93 Kg</option>
                                                <option value="94">94 Kg</option>
                                                <option value="95">95 Kg</option>
                                                <option value="96">96 Kg</option>
                                                <option value="97">97 Kg</option>
                                                <option value="98">98 Kg</option>
                                                <option value="99">99 Kg</option>
                                                <option value="100">100 Kg</option>
                                                <option value="Above 100">Above 100 Kg</option>
                                            </select>
                                            @error('weight')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Body Type<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" class="form-check-input" name="body_type"  id="Average" value="Average" required>
                                                Average
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="body_type"  id="Slim" value="Slim" required>
                                                Slim
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="body_type"  id="Athletic" value="Athletic" required>
                                                Athletic
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="body_type"  id="Heavy" value="Heavy" required>
                                                Heavy
                                            </label>
                                            @error('body_type')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Complexion<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" class="form-check-input" name="complexion" id="Very Fair" value="Very Fair" required>
                                                Very Fair
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="complexion" id="Fair" value="Fair" required>
                                                Fair
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="complexion" id="Wheatish" value="Wheatish" required>
                                                Wheatish
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" class="form-check-input" name="complexion" id="Dark" value="Dark" required>
                                                Dark
                                            </label>
                                            @error('complexion')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Blood Group</label>
                                        <div class="col-sm-5">
                                            <select name="blood_group" class="form-control form-group-margin form-select">
                                                <option value="">---Select Blood Group---</option>
                                                <option value="A&#x2B;">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B&#x2B;">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB&#x2B;">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O&#x2B;">O+</option>
                                                <option value="O-">O-</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Physical Attribute Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="physical_attibute_details" rows="3" maxlength="1000" placeholder="Please enter physical attribute details" class="form-control"></textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">You can explain physical information if any</span>
                                                @error('physical_attibute_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
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

