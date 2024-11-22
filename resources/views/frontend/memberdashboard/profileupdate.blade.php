@extends('frontend.loginreg.app')
@section('content')

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">
                    <div class="page-banner no-subtitle shadow" style="border:1px solid #dcdcdc;">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 style="padding:10px; padding-left: 0;" id="form-header-label">Create Your Profile</h2>
                            </div>
                            <div class="col-md-6">
                                <ul class="breadcrumbs">
                                    <li><span class="mandatory-field">* </span><span>Marked fields are mandatory</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('profile.update.store') }}" method="POST" id="formCreateProfile" class="shadow" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div class="form-horizontal create-profile-form-container">
                            <div class="row">
                                @include('frontend.memberdashboard.sitebar')
                                <div class="col-sm-9 show-result mypage-right-col">

                                    <div class="section-header">
                                        <span class="section-header-icon icon-info-circled-1"></span>
                                        <span class="section-header-text">Basic Info</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">I am<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-5">
                                            <label>
                                                <i class="icon-male" style="color: green; font-size: 20px;"></i>
                                                <input type="radio" name="gender" id="male" value="male" {{ $customer->gender == 'male' ? 'checked' : '' }} style="position: relative; left: -6px; top: 2px;" required>
                                                Male
                                            </label>
                                            <label class="padd-left-10" style="padding-left: 20px;">
                                                <i class="icon-female" style="color: deeppink; font-size: 20px;"></i>
                                                <input type="radio" name="gender" id="female" value="female" {{ $customer->gender == 'female' ? 'checked' : '' }} style="position: relative; left: -6px; top: 2px;" required>
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
                                            <input type="text" name="candidate_name" value="{{ $customer->candidate_name }}" class="form-control" required>
                                            @error('candidate_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="row form-group agency-no-need">
                                        <label class="col-sm-3 control-label">Profile Created By<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select  name="profile_created_by" class="form-control form-group-margin form-select">
                                                <option value="Self" {{ $customer->profile_created_by == 'Self' ? 'selected' : '' }}>Self</option>
                                                <option value="Parents" {{ $customer->profile_created_by == 'Parents' ? 'selected' : '' }}>Parents</option>
                                                <option value="Brother"  {{ $customer->profile_created_by == 'Brother' ? 'selected' : '' }}>Brother</option>
                                                <option value="Sister" {{ $customer->profile_created_by == 'Sister' ? 'selected' : '' }}>Sister</option>
                                                <option value="Relative" {{ $customer->profile_created_by == 'Relative' ? 'selected' : '' }}>Relative</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group profile-creator-name-section">
                                        <label class="col-sm-3 control-label profile-creator-name-caption">Name<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="name" value="{{ $customer->name }}" class="form-control">
                                            @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group profile-creator-name-section">
                                        <label class="col-sm-3 control-label profile-creator-name-caption">Date Of Birth<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="date" name="date_of_birth" value="{{ $customer->date_of_birth }}" class="form-control">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Marital Status<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="marital_status" ng-change="changeMaritalStatus()" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Please Select ---</option>
                                                <option value="UnMarried" {{ $customer->marital_status == 'UnMarried' ? 'selected' : '' }}>UnMarried</option>
                                                <option value="Divorced" {{ $customer->marital_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                                <option value="Separated" {{ $customer->marital_status == 'Separated' ? 'selected' : '' }}>Separated</option>
                                                <option value="Widow" {{ $customer->marital_status == 'Widow' ? 'selected' : '' }}>Widow(er)</option>
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
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Religion<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="religon" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Please Select ---</option>
                                                <option value="Muslim" {{ $customer->religon == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                                                <option value="Hindu" {{ $customer->religon == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                <option value="Buddish" {{ $customer->religon == 'Buddish' ? 'selected' : '' }}>Buddish</option>
                                                <option value="Christian" {{ $customer->religon == 'Christian' ? 'selected' : '' }}>Christian</option>
                                                <option value="Other" {{ $customer->religon == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                            @error('religon')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Nationality</label>
                                        <div class="col-sm-5">
                                            <input name="nationality" value="{{ $customer->nationality }}" class="form-control" required />
                                            @error('nationality')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="section-header">
                                        <span style="font-size:36px;" class="section-header-icon fa fa-child"></span>
                                        <span class="section-header-text">Physical Attribute</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Height<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            {{-- <select name="height" class="form-control form-group-margin form-select" required>
                                                <option value="">---Select Your Height---</option>
                                                <option value="4ft 2in" {{ $customer->height == '4ft 2in' ? 'selected' : '' }}>4ft 2in</option>
                                                <option value="4ft 3in" {{ $customer->height == '4ft 3in' ? 'selected' : '' }}>4ft 3in</option>
                                                <option value="4ft 4in" {{ $customer->height == '4ft 4in' ? 'selected' : '' }}>4ft 4in</option>
                                                <option value="4ft 5in" {{ $customer->height == '4ft 5in' ? 'selected' : '' }}>4ft 5in</option>
                                                <option value="4ft 6in" {{ $customer->height == '4ft 6in' ? 'selected' : '' }}>4ft 6in</option>
                                                <option value="4ft 7in" {{ $customer->height == '4ft 7in' ? 'selected' : '' }}>4ft 7in</option>
                                                <option value="4ft 8in" {{ $customer->height == '4ft 8in' ? 'selected' : '' }}>4ft 8in</option>
                                                <option value="4ft 9in" {{ $customer->height == '4ft 9in' ? 'selected' : '' }}>4ft 9in</option>
                                                <option value="4ft 10in" {{ $customer->height == '4ft 10in' ? 'selected' : '' }}>4ft 10in</option>
                                                <option value="4ft 11in" {{ $customer->height == '4ft 11in' ? 'selected' : '' }}>4ft 11in</option>
                                                <option value="5ft" {{ $customer->height == '5ft' ? 'selected' : '' }}>5ft</option>
                                                <option value="5ft 1in" {{ $customer->height == '5ft 1in' ? 'selected' : '' }}>5ft 1in</option>
                                                <option value="5ft 2in" {{ $customer->height == '5ft 2in' ? 'selected' : '' }}>5ft 2in</option>
                                                <option value="5ft 3in" {{ $customer->height == '5ft 3in' ? 'selected' : '' }}>5ft 3in</option>
                                                <option value="5ft 4in" {{ $customer->height == '5ft 4in' ? 'selected' : '' }}>5ft 4in</option>
                                                <option value="5ft 5in" {{ $customer->height == '5ft 5in' ? 'selected' : '' }}>5ft 5in</option>
                                                <option value="5ft 6in" {{ $customer->height == '5ft 6in' ? 'selected' : '' }}>5ft 6in</option>
                                                <option value="5ft 7in" {{ $customer->height == '5ft 7in' ? 'selected' : '' }}>5ft 7in</option>
                                                <option value="5ft 8in" {{ $customer->height == '5ft 8in' ? 'selected' : '' }}>5ft 8in</option>
                                                <option value="5ft 9in" {{ $customer->height == '5ft 9in' ? 'selected' : '' }}>5ft 9in</option>
                                                <option value="5ft 10in" {{ $customer->height == '5ft 10in' ? 'selected' : '' }}>5ft 10in</option>
                                                <option value="5ft 11in" {{ $customer->height == '5ft 11in' ? 'selected' : '' }}>5ft 11in</option>
                                                <option value="6ft" {{ $customer->height == '6ft' ? 'selected' : '' }}>6ft</option>
                                                <option value="6ft 1in" {{ $customer->height == '6ft 1in' ? 'selected' : '' }}>6ft 1in</option>
                                                <option value="6ft 2in" {{ $customer->height == '6ft 2in' ? 'selected' : '' }}>6ft 2in</option>
                                                <option value="6ft 3in" {{ $customer->height == '6ft 3in' ? 'selected' : '' }}>6ft 3in</option>
                                                <option value="6ft 4in" {{ $customer->height == '6ft 4in' ? 'selected' : '' }}>6ft 4in</option>
                                                <option value="6ft 5in" {{ $customer->height == '6ft 5in' ? 'selected' : '' }}>6ft 5in</option>
                                                <option value="6ft 6in" {{ $customer->height == '6ft 6in' ? 'selected' : '' }}>6ft 6in</option>
                                                <option value="6ft 7in" {{ $customer->height == '6ft 7in' ? 'selected' : '' }}>6ft 7in</option>
                                                <option value="6ft 8in" {{ $customer->height == '6ft 8in' ? 'selected' : '' }}>6ft 8in</option>
                                                <option value="6ft 9in" {{ $customer->height == '6ft 9in' ? 'selected' : '' }}>6ft 9in</option>
                                                <option value="6ft 10in" {{ $customer->height == '6ft 10in' ? 'selected' : '' }}>6ft 10in</option>
                                            </select> --}}
                                            
                                            <select name="height" class="form-control form-group-margin form-select" required>
                                                <option value="">---Select Your Height---</option>
                                                @foreach(['4ft 2in', '4ft 3in', '4ft 4in', '4ft 5in', '4ft 6in', '4ft 7in', '4ft 8in', '4ft 9in', 
                                                          '4ft 10in', '4ft 11in', '5ft', '5ft 1in', '5ft 2in', '5ft 3in', '5ft 4in', '5ft 5in', 
                                                          '5ft 6in', '5ft 7in', '5ft 8in', '5ft 9in', '5ft 10in', '5ft 11in', '6ft', '6ft 1in', 
                                                          '6ft 2in', '6ft 3in', '6ft 4in', '6ft 5in', '6ft 6in', '6ft 7in', '6ft 8in', '6ft 9in', 
                                                          '6ft 10in'] as $height)
                                                    <option value="{{ $height }}" {{ $customer->height == $height ? 'selected' : '' }}>{{ $height }}</option>
                                                @endforeach
                                            </select>
                                            @error('nationality')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group" >
                                        <label class="col-sm-3 control-label">Weight<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            {{-- <select name="weight" class="form-control form-group-margin form-select" required>
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
                                            </select> --}}
                                            <select name="weight" class="form-control form-group-margin form-select" required>
                                                <option value="">---Select Your Weight---</option>
                                                <option value="">Not Specified</option>
                                                <option value="Below 40" {{ $customer->weight == 'Below 40' ? 'selected' : '' }}>Below 40 Kg</option>
                                                @foreach(range(41, 100) as $weight)
                                                    <option value="{{ $weight }}" {{ $customer->weight == $weight ? 'selected' : '' }}>{{ $weight }} Kg</option>
                                                @endforeach
                                                <option value="Above 100" {{ $customer->weight == 'Above 100' ? 'selected' : '' }}>Above 100 Kg</option>
                                            </select>
                                            @error('weight')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group" ng-class="{ 'has-error' : myForm.BodyType.$invalid && submitted }">
                                        <label class="col-sm-3 control-label">Body Type<span class="mandatory-field">*</span></label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" name="body_type" id="Average" value="Average" 
                                                {{ $customer->body_type == 'Average' ? 'checked' : '' }} required>
                                                Average
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="body_type" id="Slim" value="Slim" 
                                                {{ $customer->body_type == 'Slim' ? 'checked' : '' }} required>
                                                Slim
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="body_type" id="Athletic" value="Athletic" 
                                                {{ $customer->body_type == 'Athletic' ? 'checked' : '' }} required>
                                                Athletic
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="body_type" id="Heavy" value="Heavy" 
                                                {{ $customer->body_type == 'Heavy' ? 'checked' : '' }} required>
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
                                                <input type="radio" name="complexion" id="Very Fair" value="Very Fair" 
                                                {{ $customer->complexion == 'Very Fair' ? 'checked' : '' }} required>
                                                Very Fair
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="complexion" id="Fair" value="Fair" 
                                                {{ $customer->complexion == 'Fair' ? 'checked' : '' }} required>
                                                Fair
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="complexion" id="Wheatish" value="Wheatish" 
                                                {{ $customer->complexion == 'Wheatish' ? 'checked' : '' }} required>
                                                Wheatish
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="complexion" id="Dark" value="Dark" 
                                                {{ $customer->complexion == 'Dark' ? 'checked' : '' }} required>
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
                                                <option value="A&#x2B;" {{ $customer->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                                <option value="A-" {{ $customer->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                                <option value="B&#x2B;" {{ $customer->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                                <option value="B-" {{ $customer->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                                <option value="AB&#x2B;" {{ $customer->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                <option value="AB-" {{ $customer->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                <option value="O&#x2B;" {{ $customer->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                                <option value="O-" {{ $customer->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                            </select>
                                            @error('blood_group')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Physical Attribute Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="physical_attibute_details" rows="3" maxlength="1000" placeholder="Please enter physical attribute details" class="form-control">{{ $customer->physical_attibute_details }}</textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                @error('physical_attibute_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-graduation-cap"></span>
                                        <span class="section-header-text">Education & Career</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Highest Qualification<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="highest_qualification" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Select Qualification ---</option>
                                                <option value="Doctorate / Phd / MPhil" {{ $customer->highest_qualification == 'Doctorate / Phd / MPhil' ? 'selected' : '' }}>Doctorate / Phd / MPhil</option>
                                                <option value="Masters" {{ $customer->highest_qualification == 'Masters' ? 'selected' : '' }}>Masters</option>
                                                <option value="Bachelors" {{ $customer->highest_qualification == 'Bachelors' ? 'selected' : '' }}>Bachelors</option>
                                                <option value="FCPS / MD" {{ $customer->highest_qualification == 'FCPS / MD' ? 'selected' : '' }}>FCPS / MD</option>
                                                <option value="MBBS / BDS" {{ $customer->highest_qualification == 'MBBS / BDS' ? 'selected' : '' }}>MBBS / BDS</option>
                                                <option value="Undergraduate" {{ $customer->highest_qualification == 'Undergraduate' ? 'selected' : '' }}>Undergraduate</option>
                                                <option value="Diploma" {{ $customer->highest_qualification == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                                <option value="Professional Degree" {{ $customer->highest_qualification == 'Professional Degree' ? 'selected' : '' }}>Professional Degree</option>
                                                <option value="HSC / A-Label" {{ $customer->highest_qualification == 'HSC / A-Label' ? 'selected' : '' }}>HSC / A-Label</option>
                                                <option value="Others" {{ $customer->highest_qualification == 'Others' ? 'selected' : '' }}>Others</option>
                                            </select>
                                            <span class="help-block">
                                                @error('highest_qualification') 
                                                    <span class="text-danger">{{$message}}</span> 
                                                @enderror
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Education Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="education_details" rows="4" maxlength="1000" placeholder="Please enter education details" class="form-control">{{ $customer->education_details }}</textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Example: Bsc in Computer Science / Honors in Social Science</span>
                                                @error('education_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Working Sector<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="working_sector" class="form-control form-group-margin form-select" required>
                                                <option value="">---Please Select---</option>
                                                <option value="Private Company" {{ $customer->working_sector == 'Private Company' ? 'selected' : '' }}>Private Company</option>
                                                <option value="Government / Public Sector" {{ $customer->working_sector == 'Government / Public Sector' ? 'selected' : '' }}>Government / Public Sector</option>
                                                <option value="Defense / Civil Services" {{ $customer->working_sector == 'Defense / Civil Services' ? 'selected' : '' }}>Defense / Civil Services</option>
                                                <option value="Business / Self Employed" {{ $customer->working_sector == 'Business / Self Employed' ? 'selected' : '' }}>Business / Self Employed</option>
                                                <option value="Not Working" {{ $customer->working_sector == 'Not Working' ? 'selected' : '' }}>Not Working</option>
                                            </select>
                                            @error('working_sector')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Profession<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="profession" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Select Occupation ---</option>
                                        
                                                <!-- Accounting, Banking & Finance -->
                                                <optgroup label="Accounting, Banking & Finance">
                                                    <option value="1#Accounting Professional" {{ old('profession', $customer->profession ?? '') == '1#Accounting Professional' ? 'selected' : '' }}>Accounting Professional</option>
                                                    <option value="1#Banking Professional" {{ old('profession', $customer->profession ?? '') == '1#Banking Professional' ? 'selected' : '' }}>Banking Professional</option>
                                                    <option value="1#Chartered Accountant" {{ old('profession', $customer->profession ?? '') == '1#Chartered Accountant' ? 'selected' : '' }}>Chartered Accountant</option>
                                                    <option value="1#Finance Professional" {{ old('profession', $customer->profession ?? '') == '1#Finance Professional' ? 'selected' : '' }}>Finance Professional</option>
                                                    <option value="1#Investment Professional" {{ old('profession', $customer->profession ?? '') == '1#Investment Professional' ? 'selected' : '' }}>Investment Professional</option>
                                                    <option value="1#Accounting & Finance (Others)" {{ old('profession', $customer->profession ?? '') == '1#Accounting & Finance (Others)' ? 'selected' : '' }}>Accounting & Finance (Others)</option>
                                                </optgroup>
                                        
                                                <!-- Administration & HR -->
                                                <optgroup label="Administration & HR">
                                                    <option value="2#Admin Professional" {{ old('profession', $customer->profession ?? '') == '2#Admin Professional' ? 'selected' : '' }}>Admin Professional</option>
                                                    <option value="2#Human Resources Professional" {{ old('profession', $customer->profession ?? '') == '2#Human Resources Professional' ? 'selected' : '' }}>Human Resources Professional</option>
                                                </optgroup>
                                        
                                                <!-- Advertising, Media & Entertainment -->
                                                <optgroup label="Advertising, Media & Entertainment">
                                                    <option value="3#Actor" {{ old('profession', $customer->profession ?? '') == '3#Actor' ? 'selected' : '' }}>Actor</option>
                                                    <option value="3#Advertising Professional" {{ old('profession', $customer->profession ?? '') == '3#Advertising Professional' ? 'selected' : '' }}>Advertising Professional</option>
                                                    <option value="3#Entertainment Professional" {{ old('profession', $customer->profession ?? '') == '3#Entertainment Professional' ? 'selected' : '' }}>Entertainment Professional</option>
                                                    <option value="3#Event Manager" {{ old('profession', $customer->profession ?? '') == '3#Event Manager' ? 'selected' : '' }}>Event Manager</option>
                                                    <option value="3#Journalist" {{ old('profession', $customer->profession ?? '') == '3#Journalist' ? 'selected' : '' }}>Journalist</option>
                                                    <option value="3#Media Professional" {{ old('profession', $customer->profession ?? '') == '3#Media Professional' ? 'selected' : '' }}>Media Professional</option>
                                                    <option value="3#Public Relations Professional" {{ old('profession', $customer->profession ?? '') == '3#Public Relations Professional' ? 'selected' : '' }}>Public Relations Professional</option>
                                                </optgroup>
                                        
                                                <!-- Agriculture -->
                                                <optgroup label="Agriculture">
                                                    <option value="4#Agricultural Professional" {{ old('profession', $customer->profession ?? '') == '4#Agricultural Professional' ? 'selected' : '' }}>Agricultural Professional</option>
                                                </optgroup>
                                        
                                                <!-- Airline & Aviation -->
                                                <optgroup label="Airline & Aviation">
                                                    <option value="5#Air Hostess / Flight Attendant" {{ old('profession', $customer->profession ?? '') == '5#Air Hostess / Flight Attendant' ? 'selected' : '' }}>Air Hostess / Flight Attendant</option>
                                                    <option value="5#Pilot" {{ old('profession', $customer->profession ?? '') == '5#Pilot' ? 'selected' : '' }}>Pilot</option>
                                                    <option value="5#Airline Professional" {{ old('profession', $customer->profession ?? '') == '5#Airline Professional' ? 'selected' : '' }}>Airline Professional</option>
                                                </optgroup>
                                        
                                                <!-- Architecture & Design -->
                                                <optgroup label="Architecture & Design">
                                                    <option value="6#Architect" {{ old('profession', $customer->profession ?? '') == '6#Architect' ? 'selected' : '' }}>Architect</option>
                                                    <option value="6#Interior Designer" {{ old('profession', $customer->profession ?? '') == '6#Interior Designer' ? 'selected' : '' }}>Interior Designer</option>
                                                </optgroup>
                                        
                                                <!-- Artists & Animators -->
                                                <optgroup label="Artists & Animators">
                                                    <option value="7#Animator" {{ old('profession', $customer->profession ?? '') == '7#Animator' ? 'selected' : '' }}>Animator</option>
                                                    <option value="7#Artist" {{ old('profession', $customer->profession ?? '') == '7#Artist' ? 'selected' : '' }}>Artist</option>
                                                </optgroup>
                                        
                                                <!-- Beauty & Fashion -->
                                                <optgroup label="Beauty & Fashion">
                                                    <option value="8#Beautician" {{ old('profession', $customer->profession ?? '') == '8#Beautician' ? 'selected' : '' }}>Beautician</option>
                                                    <option value="8#Fashion Designer" {{ old('profession', $customer->profession ?? '') == '8#Fashion Designer' ? 'selected' : '' }}>Fashion Designer</option>
                                                </optgroup>
                                        
                                                <!-- Defense -->
                                                <optgroup label="Defense">
                                                    <option value="9#Airforce" {{ old('profession', $customer->profession ?? '') == '9#Airforce' ? 'selected' : '' }}>Airforce</option>
                                                    <option value="9#Army" {{ old('profession', $customer->profession ?? '') == '9#Army' ? 'selected' : '' }}>Army</option>
                                                    <option value="9#Navy" {{ old('profession', $customer->profession ?? '') == '9#Navy' ? 'selected' : '' }}>Navy</option>
                                                    <option value="9#Defense Services (Others)" {{ old('profession', $customer->profession ?? '') == '9#Defense Services (Others)' ? 'selected' : '' }}>Defense Services (Others)</option>
                                                </optgroup>
                                        
                                                <!-- Education & Training -->
                                                <optgroup label="Education & Training">
                                                    <option value="10#Lecturer" {{ old('profession', $customer->profession ?? '') == '10#Lecturer' ? 'selected' : '' }}>Lecturer</option>
                                                    <option value="10#Professor" {{ old('profession', $customer->profession ?? '') == '10#Professor' ? 'selected' : '' }}>Professor</option>
                                                    <option value="10#Teacher" {{ old('profession', $customer->profession ?? '') == '10#Teacher' ? 'selected' : '' }}>Teacher</option>
                                                </optgroup>
                                        
                                                <!-- Engineering -->
                                                <optgroup label="Engineering">
                                                    <option value="11#Civil Engineer" {{ old('profession', $customer->profession ?? '') == '11#Civil Engineer' ? 'selected' : '' }}>Civil Engineer</option>
                                                    <option value="11#Electronics / Telecom Engineer" {{ old('profession', $customer->profession ?? '') == '11#Electronics / Telecom Engineer' ? 'selected' : '' }}>Electronics / Telecom Engineer</option>
                                                    <option value="11#Mechanical / Production Engineer" {{ old('profession', $customer->profession ?? '') == '11#Mechanical / Production Engineer' ? 'selected' : '' }}>Mechanical / Production Engineer</option>
                                                    <option value="11#Engineer (Non IT)" {{ old('profession', $customer->profession ?? '') == '11#Engineer (Non IT)' ? 'selected' : '' }}>Engineer (Non IT)</option>
                                                </optgroup>
                                        
                                                <!-- IT & Software Engineering -->
                                                <optgroup label="IT & Software Engineering">
                                                    <option value="12#Software Engineer / Programmer" {{ old('profession', $customer->profession ?? '') == '12#Software Engineer / Programmer' ? 'selected' : '' }}>Software Engineer / Programmer</option>
                                                    <option value="12#Software Consultant" {{ old('profession', $customer->profession ?? '') == '12#Software Consultant' ? 'selected' : '' }}>Software Consultant</option>
                                                    <option value="12#Hardware & Networking professional" {{ old('profession', $customer->profession ?? '') == '12#Hardware & Networking professional' ? 'selected' : '' }}>Hardware & Networking professional</option>
                                                    <option value="12#Database Administrator" {{ old('profession', $customer->profession ?? '') == '12#Database Administrator' ? 'selected' : '' }}>Database Administrator</option>
                                                    <option value="12#Web / UX Designers / Graphics Designers" {{ old('profession', $customer->profession ?? '') == '12#Web / UX Designers / Graphics Designers' ? 'selected' : '' }}>Web / UX Designers / Graphics Designers</option>
                                                    <option value="12#Computer Operator" {{ old('profession', $customer->profession ?? '') == '12#Computer Operator' ? 'selected' : '' }}>Computer Operator</option>
                                                    <option value="12#Computers / IT" {{ old('profession', $customer->profession ?? '') == '12#Computers / IT' ? 'selected' : '' }}>Computers / IT</option>
                                                    <option value="12#Software Professional (Others)" {{ old('profession', $customer->profession ?? '') == '12#Software Professional (Others)' ? 'selected' : '' }}>Software Professional (Others)</option>
                                                </optgroup>
                                        
                                                <!-- Legal -->
                                                <optgroup label="Legal">
                                                    <option value="13#Lawyer" {{ old('profession', $customer->profession ?? '') == '13#Lawyer' ? 'selected' : '' }}>Lawyer</option>
                                                    <option value="13#Legal Assistant" {{ old('profession', $customer->profession ?? '') == '13#Legal Assistant' ? 'selected' : '' }}>Legal Assistant</option>
                                                    <option value="13#Legal Professional (Others)" {{ old('profession', $customer->profession ?? '') == '13#Legal Professional (Others)' ? 'selected' : '' }}>Legal Professional (Others)</option>
                                                </optgroup>
                                        
                                                <!-- Medical & Healthcare -->
                                                <optgroup label="Medical & Healthcare">
                                                    <option value="14#Doctor" {{ old('profession', $customer->profession ?? '') == '14#Doctor' ? 'selected' : '' }}>Doctor</option>
                                                    <option value="14#Dentist" {{ old('profession', $customer->profession ?? '') == '14#Dentist' ? 'selected' : '' }}>Dentist</option>
                                                    <option value="14#Nurse" {{ old('profession', $customer->profession ?? '') == '14#Nurse' ? 'selected' : '' }}>Nurse</option>
                                                    <option value="14#Pharmacist" {{ old('profession', $customer->profession ?? '') == '14#Pharmacist' ? 'selected' : '' }}>Pharmacist</option>
                                                    <option value="14#Psychologist" {{ old('profession', $customer->profession ?? '') == '14#Psychologist' ? 'selected' : '' }}>Psychologist</option>
                                                    <option value="14#Therapist" {{ old('profession', $customer->profession ?? '') == '14#Therapist' ? 'selected' : '' }}>Therapist</option>
                                                    <option value="14#Medical / Healthcare Professional" {{ old('profession', $customer->profession ?? '') == '14#Medical / Healthcare Professional' ? 'selected' : '' }}>Medical / Healthcare Professional</option>
                                                </optgroup>
                                        
                                                <!-- Sales & Marketing -->
                                                <optgroup label="Sales & Marketing">
                                                    <option value="15#Marketing Professional" {{ old('profession', $customer->profession ?? '') == '15#Marketing Professional' ? 'selected' : '' }}>Marketing Professional</option>
                                                    <option value="15#Sales Professional" {{ old('profession', $customer->profession ?? '') == '15#Sales Professional' ? 'selected' : '' }}>Sales Professional</option>
                                                </optgroup>
                                        
                                                <!-- Business & Others -->
                                                <optgroup label="Business & Others">
                                                    <option value="16#Business Owner / Entrepreneur" {{ old('profession', $customer->profession ?? '') == '16#Business Owner / Entrepreneur' ? 'selected' : '' }}>Business Owner / Entrepreneur</option>
                                                    <option value="16#Consultant / Supervisor" {{ old('profession', $customer->profession ?? '') == '16#Consultant / Supervisor' ? 'selected' : '' }}>Consultant / Supervisor</option>
                                                    <option value="16#Politician" {{ old('profession', $customer->profession ?? '') == '16#Politician' ? 'selected' : '' }}>Politician</option>
                                                    <option value="16#Sportsman" {{ old('profession', $customer->profession ?? '') == '16#Sportsman' ? 'selected' : '' }}>Sportsman</option>
                                                    <option value="16#Travel & Transport Professional" {{ old('profession', $customer->profession ?? '') == '16#Travel & Transport Professional' ? 'selected' : '' }}>Travel & Transport Professional</option>
                                                    <option value="16#Writer" {{ old('profession', $customer->profession ?? '') == '16#Writer' ? 'selected' : '' }}>Writer</option>
                                                    <option value="16#Not Defined" {{ old('profession', $customer->profession ?? '') == '16#Not Defined' ? 'selected' : '' }}>Not Defined</option>
                                                </optgroup>
                                        
                                                <!-- Not Working -->
                                                <optgroup label="Not Working">
                                                    <option value="17#Student" {{ old('profession', $customer->profession ?? '') == '17#Student' ? 'selected' : '' }}>Student</option>
                                                    <option value="17#Not Working" {{ old('profession', $customer->profession ?? '') == '17#Not Working' ? 'selected' : '' }}>Not Working</option>
                                                </optgroup>
                                        
                                            </select>
                                            @error('profession')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Profession Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="profession_details" placeholder="Enter your profession details" rows="4" maxlength="1000" class="form-control">{{ $customer->profession_details }}</textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Explain about your woking company, designation etc.</span>
                                                @error('profession_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Monthly Income</label>
                                        <div class="col-sm-5">
                                            <select name="monthly_income" class="form-control form-group-margin form-select">
                                                <option value="">--- Select Your Monthly Income ---</option>
                                                <option value="Below BDT 10K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'Below BDT 10K' ? 'selected' : '' }}>Below BDT 10K</option>
                                                <option value="BDT 10K to 20K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 10K to 20K' ? 'selected' : '' }}>BDT 10K to 20K</option>
                                                <option value="BDT 20K to 35K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 20K to 35K' ? 'selected' : '' }}>BDT 20K to 35K</option>
                                                <option value="BDT 35K to 50K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 35K to 50K' ? 'selected' : '' }}>BDT 35K to 50K</option>
                                                <option value="BDT 50K to 75K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 50K to 75K' ? 'selected' : '' }}>BDT 50K to 75K</option>
                                                <option value="BDT 75K to 100K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 75K to 100K' ? 'selected' : '' }}>BDT 75K to 100K</option>
                                                <option value="BDT 100K to 125K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 100K to 125K' ? 'selected' : '' }}>BDT 100K to 125K</option>
                                                <option value="BDT 125K to 150K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 125K to 150K' ? 'selected' : '' }}>BDT 125K to 150K</option>
                                                <option value="BDT 150K to 175K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 150K to 175K' ? 'selected' : '' }}>BDT 150K to 175K</option>
                                                <option value="BDT 175K to 200K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 175K to 200K' ? 'selected' : '' }}>BDT 175K to 200K</option>
                                                <option value="BDT 200K to 250K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 200K to 250K' ? 'selected' : '' }}>BDT 200K to 250K</option>
                                                <option value="BDT 250K to 300K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'BDT 250K to 300K' ? 'selected' : '' }}>BDT 250K to 300K</option>
                                                <option value="Above BDT 300K" {{ old('monthly_income', $customer->monthly_income ?? '') == 'Above BDT 300K' ? 'selected' : '' }}>Above BDT 300K</option>
                                                <option value="Not Applicable" {{ old('monthly_income', $customer->monthly_income ?? '') == 'Not Applicable' ? 'selected' : '' }}>Not Applicable</option>
                                            </select>
                                            @error('monthly_income')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <div style="margin-top:3px;">
                                                <input type="checkbox" name="keep_it_private"  {{ old('keep_it_private', $customer->keep_it_private ?? '') == 'on' ? 'checked' : '' }} />
                                                <label style="position: relative; top: -2px; padding-left: 5px; color: #666;">Keep it private</label>
                                                <i class="icon-lock-filled" style=" color: #555; position: relative; top: -2px;"></i>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-map-marker"></span>
                                        <span class="section-header-text">Family & Location</span>
                                    </div>


                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Father Status<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="father_status" class="form-control form-group-margin form-select" required>
                                                <option value="" {{ old('father_status', $customer->father_status) == '' ? 'selected' : '' }}>--- Please Select ---</option>
                                                <option value="Employed" {{ old('father_status', $customer->father_status) == 'Employed' ? 'selected' : '' }}>Employed</option>
                                                <option value="Business" {{ old('father_status', $customer->father_status) == 'Business' ? 'selected' : '' }}>Business</option>
                                                <option value="Retired" {{ old('father_status', $customer->father_status) == 'Retired' ? 'selected' : '' }}>Retired</option>
                                                <option value="Not Employed" {{ old('father_status', $customer->father_status) == 'Not Employed' ? 'selected' : '' }}>Not Employed</option>
                                                <option value="Passed Away" {{ old('father_status', $customer->father_status) == 'Passed Away' ? 'selected' : '' }}>Passed Away</option>
                                            </select>
                                            @error('father_status')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Father Occupation</label>
                                        <div class="col-sm-5">
                                            <input name="father_occupation" value="{{ $customer->father_occupation }}" class="form-control" />
                                            @error('father_occupation')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Mother Status<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="mother_status" class="form-control form-group-margin form-select" required>
                                                <option value="" {{ old('mother_status', $customer->mother_status) == '' ? 'selected' : '' }}>--- Please Select ---</option>
                                                <option value="Housewife" {{ old('mother_status', $customer->mother_status) == 'Housewife' ? 'selected' : '' }}>Housewife</option>
                                                <option value="Employed" {{ old('mother_status', $customer->mother_status) == 'Employed' ? 'selected' : '' }}>Employed</option>
                                                <option value="Business" {{ old('mother_status', $customer->mother_status) == 'Business' ? 'selected' : '' }}>Business</option>
                                                <option value="Retired" {{ old('mother_status', $customer->mother_status) == 'Retired' ? 'selected' : '' }}>Retired</option>
                                                <option value="Passed Away" {{ old('mother_status', $customer->mother_status) == 'Passed Away' ? 'selected' : '' }}>Passed Away</option>
                                            </select>
                                            @error('mother_status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Mother Occupation</label>
                                        <div class="col-sm-5">
                                            <input name="mother_occupation" value="{{ $customer->mother_occupation }}" class="form-control" />
                                            @error('mother_occupation')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Guardian Mobile</label>
                                        <div class="col-sm-5">
                                            <input name="guardian_mobile" value="{{ $customer->guardian_mobile }}" class="form-control" />
                                            @error('guardian_mobile')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Your Siblings</label>
                                        <div class="col-sm-5">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <table class="tbl-sibling">
                                                            <tr>
                                                                <td colspan="2" class="center">
                                                                    <i class="icon-male" style="color: green; font-size: 30px;"></i>
                                                                </td>
                                                            </tr>
                                        
                                                            <tr class="center">
                                                                <td>
                                                                    <span class="siblings-font">Not Married</span>
                                                                </td>
                                                                <td>
                                                                    <span class="siblings-font">Married</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="center">
                                                                    <select name="bro_not_married" class="form-control form-group-margin form-select">
                                                                        <option value="0" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '0' ? 'selected' : '' }}>0</option>
                                                                        <option value="1" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '1' ? 'selected' : '' }}>1</option>
                                                                        <option value="2" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '2' ? 'selected' : '' }}>2</option>
                                                                        <option value="3" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '3' ? 'selected' : '' }}>3</option>
                                                                        <option value="4" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '4' ? 'selected' : '' }}>4</option>
                                                                        <option value="5" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '5' ? 'selected' : '' }}>5</option>
                                                                        <option value="6" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '6' ? 'selected' : '' }}>6</option>
                                                                        <option value="7" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '7' ? 'selected' : '' }}>7</option>
                                                                        <option value="8" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '8' ? 'selected' : '' }}>8</option>
                                                                        <option value="9" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '9' ? 'selected' : '' }}>9</option>
                                                                        <option value="10" {{ old('bro_not_married', $customer->bro_not_married ?? '0') == '10' ? 'selected' : '' }}>10</option>
                                                                    </select>
                                                                </td>
                                                                <td class="center">
                                                                    <select name="bro_married" class="form-control form-group-margin form-select">
                                                                        <option value="0" {{ old('bro_married', $customer->bro_married ?? '0') == '0' ? 'selected' : '' }}>0</option>
                                                                        <option value="1" {{ old('bro_married', $customer->bro_married ?? '0') == '1' ? 'selected' : '' }}>1</option>
                                                                        <option value="2" {{ old('bro_married', $customer->bro_married ?? '0') == '2' ? 'selected' : '' }}>2</option>
                                                                        <option value="3" {{ old('bro_married', $customer->bro_married ?? '0') == '3' ? 'selected' : '' }}>3</option>
                                                                        <option value="4" {{ old('bro_married', $customer->bro_married ?? '0') == '4' ? 'selected' : '' }}>4</option>
                                                                        <option value="5" {{ old('bro_married', $customer->bro_married ?? '0') == '5' ? 'selected' : '' }}>5</option>
                                                                        <option value="6" {{ old('bro_married', $customer->bro_married ?? '0') == '6' ? 'selected' : '' }}>6</option>
                                                                        <option value="7" {{ old('bro_married', $customer->bro_married ?? '0') == '7' ? 'selected' : '' }}>7</option>
                                                                        <option value="8" {{ old('bro_married', $customer->bro_married ?? '0') == '8' ? 'selected' : '' }}>8</option>
                                                                        <option value="9" {{ old('bro_married', $customer->bro_married ?? '0') == '9' ? 'selected' : '' }}>9</option>
                                                                        <option value="10" {{ old('bro_married', $customer->bro_married ?? '0') == '10' ? 'selected' : '' }}>10</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="padding-left:10px;">
                                                        <table class="tbl-sibling">
                                                            <tr>
                                                                <td colspan="2" class="center">
                                                                    <i class="icon-female" style="color: deeppink; font-size: 30px;"></i>
                                                                </td>
                                                            </tr>
                                                            <tr class="center">
                                                                <td>
                                                                    <span class="siblings-font">Not Married</span>
                                                                </td>
                                                                <td>
                                                                    <span class="siblings-font">Married</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="center">
                                                                    <select name="sis_not_married" class="form-control form-group-margin form-select">
                                                                        <option value="0" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '0' ? 'selected' : '' }}>0</option>
                                                                        <option value="1" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '1' ? 'selected' : '' }}>1</option>
                                                                        <option value="2" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '2' ? 'selected' : '' }}>2</option>
                                                                        <option value="3" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '3' ? 'selected' : '' }}>3</option>
                                                                        <option value="4" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '4' ? 'selected' : '' }}>4</option>
                                                                        <option value="5" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '5' ? 'selected' : '' }}>5</option>
                                                                        <option value="6" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '6' ? 'selected' : '' }}>6</option>
                                                                        <option value="7" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '7' ? 'selected' : '' }}>7</option>
                                                                        <option value="8" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '8' ? 'selected' : '' }}>8</option>
                                                                        <option value="9" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '9' ? 'selected' : '' }}>9</option>
                                                                        <option value="10" {{ old('sis_not_married', $customer->sis_not_married ?? '0') == '10' ? 'selected' : '' }}>10</option>
                                                                    </select>
                                                                </td>
                                                                <td class="center">
                                                                    <select name="sis_married" class="form-control form-group-margin form-select">
                                                                        <option value="0" {{ old('sis_married', $customer->sis_married ?? '0') == '0' ? 'selected' : '' }}>0</option>
                                                                        <option value="1" {{ old('sis_married', $customer->sis_married ?? '0') == '1' ? 'selected' : '' }}>1</option>
                                                                        <option value="2" {{ old('sis_married', $customer->sis_married ?? '0') == '2' ? 'selected' : '' }}>2</option>
                                                                        <option value="3" {{ old('sis_married', $customer->sis_married ?? '0') == '3' ? 'selected' : '' }}>3</option>
                                                                        <option value="4" {{ old('sis_married', $customer->sis_married ?? '0') == '4' ? 'selected' : '' }}>4</option>
                                                                        <option value="5" {{ old('sis_married', $customer->sis_married ?? '0') == '5' ? 'selected' : '' }}>5</option>
                                                                        <option value="6" {{ old('sis_married', $customer->sis_married ?? '0') == '6' ? 'selected' : '' }}>6</option>
                                                                        <option value="7" {{ old('sis_married', $customer->sis_married ?? '0') == '7' ? 'selected' : '' }}>7</option>
                                                                        <option value="8" {{ old('sis_married', $customer->sis_married ?? '0') == '8' ? 'selected' : '' }}>8</option>
                                                                        <option value="9" {{ old('sis_married', $customer->sis_married ?? '0') == '9' ? 'selected' : '' }}>9</option>
                                                                        <option value="10" {{ old('sis_married', $customer->sis_married ?? '0') == '10' ? 'selected' : '' }}>10</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Home Division<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="home_division" class="form-control form-group-margin form-select" required>
                                                <option value="" {{ old('home_division', $customer->home_division ?? '') == '' ? 'selected' : '' }}>--- Select Home Division ---</option>
                                                <option value="Dhaka" {{ old('home_division', $customer->home_division ?? '') == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                                                <option value="Chittagong" {{ old('home_division', $customer->home_division ?? '') == 'Chittagong' ? 'selected' : '' }}>Chittagong</option>
                                                <option value="Sylhet" {{ old('home_division', $customer->home_division ?? '') == 'Sylhet' ? 'selected' : '' }}>Sylhet</option>
                                                <option value="Khulna" {{ old('home_division', $customer->home_division ?? '') == 'Khulna' ? 'selected' : '' }}>Khulna</option>
                                                <option value="Barisal" {{ old('home_division', $customer->home_division ?? '') == 'Barisal' ? 'selected' : '' }}>Barisal</option>
                                                <option value="Rajshahi" {{ old('home_division', $customer->home_division ?? '') == 'Rajshahi' ? 'selected' : '' }}>Rajshahi</option>
                                                <option value="Rangpur" {{ old('home_division', $customer->home_division ?? '') == 'Rangpur' ? 'selected' : '' }}>Rangpur</option>
                                                <option value="Mymensingh" {{ old('home_division', $customer->home_division ?? '') == 'Mymensingh' ? 'selected' : '' }}>Mymensingh</option>
                                            </select>
                                            @error('home_division')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Currently Living In</label>
                                        <div class="col-sm-5">
                                            <select name="currently_living_in" class="form-control form-group-margin form-select">
                                                <option value="" {{ old('currently_living_in', $customer->currently_living_in ?? '') == '' ? 'selected' : '' }}>--- Select Country ---</option>
                                                <option value="Afghanistan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                                <option value="Albania" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Albania' ? 'selected' : '' }}>Albania</option>
                                                <option value="Algeria" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                                <option value="Andorra" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                                                <option value="Angola" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Angola' ? 'selected' : '' }}>Angola</option>
                                                <option value="Antigua and Barbuda" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                                                <option value="Argentina" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                                                <option value="Armenia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                                                <option value="Australia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Australia' ? 'selected' : '' }}>Australia</option>
                                                <option value="Austria" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Austria' ? 'selected' : '' }}>Austria</option>
                                                <option value="Azerbaijan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                                <option value="Bahamas" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                                                <option value="Bahrain" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                                <option value="Bangladesh" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                                <option value="Barbados" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                                                <option value="Belarus" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                                                <option value="Belgium" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                                <option value="Belize" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Belize' ? 'selected' : '' }}>Belize</option>
                                                <option value="Benin" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Benin' ? 'selected' : '' }}>Benin</option>
                                                <option value="Bhutan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                                                <option value="Bolivia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                                <option value="Bosnia and Herzegovina" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                                                <option value="Botswana" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                                                <option value="Brazil" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                                <option value="Brunei" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Brunei' ? 'selected' : '' }}>Brunei</option>
                                                <option value="Bulgaria" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                                <option value="Burkina Faso" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                                                <option value="Burundi" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                                                <option value="Cambodia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                                                <option value="Cameroon" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                                                <option value="Canada" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Canada' ? 'selected' : '' }}>Canada</option>
                                                <option value="Cape Verde" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                                                <option value="Cayman Islands" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
                                                <option value="Central African Republic" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                                                <option value="Chile" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Chile' ? 'selected' : '' }}>Chile</option>
                                                <option value="China" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'China' ? 'selected' : '' }}>China</option>
                                                <option value="Colombia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                                <option value="Comoros" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                                                <option value="Congo" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Congo' ? 'selected' : '' }}>Congo</option>
                                                <option value="Cook Islands" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
                                                <option value="Costa Rica" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                                                <option value="Croatia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                                                <option value="Cuba" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                                                <option value="Cyprus" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                                                <option value="Czech Republic" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                                                <option value="Denmark" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                                <option value="Djibouti" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                                                <option value="Dominica" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                                                <option value="Dominican Republic" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                                                <option value="Ecuador" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                                                <option value="Egypt" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                                                <option value="El Salvador" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                                                <option value="Equatorial Guinea" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                                                <option value="Eritrea" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                                                <option value="Estonia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                                                <option value="Eswatini" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Eswatini' ? 'selected' : '' }}>Eswatini</option>
                                                <option value="Ethiopia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                                <option value="Fiji" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                                                <option value="Finland" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Finland' ? 'selected' : '' }}>Finland</option>
                                                <option value="France" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'France' ? 'selected' : '' }}>France</option>
                                                <option value="Gabon" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                                                <option value="Gambia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                                                <option value="Georgia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                                <option value="Germany" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Germany' ? 'selected' : '' }}>Germany</option>
                                                <option value="Ghana" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                                <option value="Greece" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Greece' ? 'selected' : '' }}>Greece</option>
                                                <option value="Grenada" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                                                <option value="Guatemala" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                                                <option value="Guinea" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                                                <option value="Guinea-Bissau" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
                                                <option value="Guyana" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                                                <option value="Haiti" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                                                <option value="Honduras" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                                                <option value="Hungary" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                                                <option value="Iceland" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                                                <option value="India" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'India' ? 'selected' : '' }}>India</option>
                                                <option value="Indonesia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                                <option value="Iran" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Iran' ? 'selected' : '' }}>Iran</option>
                                                <option value="Iraq" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                                                <option value="Ireland" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                                <option value="Israel" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Israel' ? 'selected' : '' }}>Israel</option>
                                                <option value="Italy" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Italy' ? 'selected' : '' }}>Italy</option>
                                                <option value="Jamaica" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                                                <option value="Japan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Japan' ? 'selected' : '' }}>Japan</option>
                                                <option value="Jordan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                                                <option value="Kazakhstan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                                <option value="Kenya" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                                                <option value="Kiribati" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                                                <option value="Korea, North" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Korea, North' ? 'selected' : '' }}>Korea, North</option>
                                                <option value="Korea, South" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Korea, South' ? 'selected' : '' }}>Korea, South</option>
                                                <option value="Kuwait" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                                                <option value="Kyrgyzstan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                                                <option value="Laos" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Laos' ? 'selected' : '' }}>Laos</option>
                                                <option value="Latvia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                                                <option value="Lebanon" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                                                <option value="Lesotho" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                                                <option value="Liberia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                                                <option value="Libya" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Libya' ? 'selected' : '' }}>Libya</option>
                                                <option value="Liechtenstein" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                                                <option value="Lithuania" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                                                <option value="Luxembourg" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                                                <option value="Madagascar" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                                                <option value="Malawi" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                                                <option value="Malaysia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                                <option value="Maldives" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                                                <option value="Mali" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mali' ? 'selected' : '' }}>Mali</option>
                                                <option value="Malta" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Malta' ? 'selected' : '' }}>Malta</option>
                                                <option value="Marshall Islands" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                                                <option value="Mauritania" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                                                <option value="Mauritius" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                                                <option value="Mexico" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                                <option value="Micronesia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Micronesia' ? 'selected' : '' }}>Micronesia</option>
                                                <option value="Moldova" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Moldova' ? 'selected' : '' }}>Moldova</option>
                                                <option value="Monaco" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                                <option value="Mongolia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                                                <option value="Montenegro" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Montenegro' ? 'selected' : '' }}>Montenegro</option>
                                                <option value="Morocco" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                                                <option value="Mozambique" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                                                <option value="Myanmar" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                                                <option value="Namibia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                                                <option value="Nauru" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                                                <option value="Nepal" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                                                <option value="Netherlands" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                                <option value="New Zealand" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                                <option value="Nicaragua" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                                                <option value="Niger" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Niger' ? 'selected' : '' }}>Niger</option>
                                                <option value="Nigeria" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                                <option value="North Macedonia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'North Macedonia' ? 'selected' : '' }}>North Macedonia</option>
                                                <option value="Norway" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Norway' ? 'selected' : '' }}>Norway</option>
                                                <option value="Oman" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Oman' ? 'selected' : '' }}>Oman</option>
                                                <option value="Pakistan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                                <option value="Palau" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Palau' ? 'selected' : '' }}>Palau</option>
                                                <option value="Panama" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Panama' ? 'selected' : '' }}>Panama</option>
                                                <option value="Papua New Guinea" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                                                <option value="Paraguay" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                                                <option value="Peru" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Peru' ? 'selected' : '' }}>Peru</option>
                                                <option value="Philippines" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                                <option value="Poland" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Poland' ? 'selected' : '' }}>Poland</option>
                                                <option value="Portugal" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                                                <option value="Qatar" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                                                <option value="Romania" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Romania' ? 'selected' : '' }}>Romania</option>
                                                <option value="Russia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Russia' ? 'selected' : '' }}>Russia</option>
                                                <option value="Rwanda" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                                                <option value="Saint Kitts and Nevis" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                                                <option value="Samoa" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                                                <option value="San Marino" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'San Marino' ? 'selected' : '' }}>San Marino</option>
                                                <option value="Sao Tome and Principe" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                                                <option value="Saudi Arabia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                                <option value="Senegal" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                                                <option value="Serbia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                                                <option value="Seychelles" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                                                <option value="Sierra Leone" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                                                <option value="Singapore" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                                                <option value="Slovakia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                                                <option value="Slovenia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                                                <option value="Solomon Islands" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                                                <option value="Somalia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                                                <option value="South Africa" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                                <option value="South Sudan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'South Sudan' ? 'selected' : '' }}>South Sudan</option>
                                                <option value="Spain" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Spain' ? 'selected' : '' }}>Spain</option>
                                                <option value="Sri Lanka" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                                                <option value="Sudan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                                                <option value="Suriname" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Suriname' ? 'selected' : '' }}>Suriname</option>
                                                <option value="Sweden" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                                <option value="Switzerland" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                                <option value="Syria" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Syria' ? 'selected' : '' }}>Syria</option>
                                                <option value="Taiwan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                                                <option value="Tajikistan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                                                <option value="Tanzania" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Tanzania' ? 'selected' : '' }}>Tanzania</option>
                                                <option value="Thailand" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                                                <option value="Timor-Leste" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Timor-Leste' ? 'selected' : '' }}>Timor-Leste</option>
                                                <option value="Togo" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Togo' ? 'selected' : '' }}>Togo</option>
                                                <option value="Tonga" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                                                <option value="Trinidad and Tobago" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                                                <option value="Tunisia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                                                <option value="Turkey" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                                <option value="Turkmenistan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                                                <option value="Tuvalu" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                                                <option value="Uganda" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                                                <option value="Ukraine" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                                <option value="United Arab Emirates" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                                <option value="United Kingdom" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                                <option value="United States" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'United States' ? 'selected' : '' }}>United States</option>
                                                <option value="Uruguay" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                                <option value="Uzbekistan" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                                                <option value="Vanuatu" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                                                <option value="Vatican City" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Vatican City' ? 'selected' : '' }}>Vatican City</option>
                                                <option value="Venezuela" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                                                <option value="Vietnam" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                                                <option value="Yemen" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                                                <option value="Zambia" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                                                <option value="Zimbabwe" {{ old('currently_living_in', $customer->currently_living_in ?? '') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                            </select>
                                            @error('currently_living_in')
                                                <div class="text-sm text-red-500">{{ $message }}</div>
                                            @enderror
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">City Living In</label>
                                        <div class="col-sm-5">
                                            <input name="city_living_in" value="{{ $customer->city_living_in }}" class="form-control" />
                                            @error('city_living_in')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Family Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="family_details" rows="4" maxlength="1000" placeholder="Please enter your family details" class="form-control">{{ $customer->family_details }}</textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Example: Explain about your brother, sisters, uncle etc.</span>
                                                @error('family_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-coffee"></span>
                                        <span class="section-header-text">Life Style</span>
                                    </div>


                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Religious Value</label>
                                        <div class="col-sm-5">
                                            <select name="religious_value" class="form-control form-group-margin form-select">
                                                <option value="">--- Select Religious Value ---</option>
                                                <option value="Very religious" {{ old('religious_value', $customer->religious_value ?? '') == 'Very religious' ? 'selected' : '' }}>Very religious</option>
                                                <option value="Average religious" {{ old('religious_value', $customer->religious_value ?? '') == 'Average religious' ? 'selected' : '' }}>Average religious</option>
                                                <option value="Does not matter" {{ old('religious_value', $customer->religious_value ?? '') == 'Does not matter' ? 'selected' : '' }}>Does not matter</option>
                                            </select>
                                            @error('religious_value')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Family Values</label>
                                        <div class="radio-control col-sm-5">
                                            <label>
                                                <input type="radio" name="family_values" id="Traditional" value="Traditional" {{ old('family_values', $customer->family_values ?? '') == 'Traditional' ? 'checked' : '' }}>
                                                Traditional
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="family_values" id="Moderate" value="Moderate" {{ old('family_values', $customer->family_values ?? '') == 'Moderate' ? 'checked' : '' }}>
                                                Moderate
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="family_values" id="Liberal" value="Liberal" {{ old('family_values', $customer->family_values ?? '') == 'Liberal' ? 'checked' : '' }}>
                                                Liberal
                                            </label>
                                            @error('family_values')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Diet</label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" name="diet" id="Vegetarian" value="Vegetarian" {{ old('diet', $customer->diet ?? '') == 'Vegetarian' ? 'checked' : '' }}>
                                                Vegetarian
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="diet" id="NonVegetarian" value="NonVegetarian" {{ old('diet', $customer->diet ?? '') == 'NonVegetarian' ? 'checked' : '' }}>
                                                Non Vegetarian
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="diet" id="DoesNotMatter" value="DoesNotMatter" {{ old('diet', $customer->diet ?? '') == 'DoesNotMatter' ? 'checked' : '' }}>
                                                Does Not Matter
                                            </label>
                                            @error('diet')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Smoke</label>
                                        <div class="radio-control col-sm-9">
                                            <label>
                                                <input type="radio" name="smoke" id="NonSmoker" value="NonSmoker" {{ old('smoke', $customer->smoke ?? '') == 'NonSmoker' ? 'checked' : '' }}>
                                                Non Smoker
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="smoke" id="Smoker" value="Smoker" {{ old('smoke', $customer->smoke ?? '') == 'Smoker' ? 'checked' : '' }}>
                                                Smoker
                                            </label>
                                            <label class="padd-left-10">
                                                <input type="radio" name="smoke" id="LightSmoker" value="LightSmoker" {{ old('smoke', $customer->smoke ?? '') == 'LightSmoker' ? 'checked' : '' }}>
                                                Light / Social Smoker
                                            </label>
                                            @error('smoke')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-user"></span>
                                        <span class="section-header-text">More About Yourself</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">About Myself<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-8">
                                            <div style="border: 1px solid #dcdcdc; border-bottom: 0; background-color:whitesmoke; padding: 5px; font-size: 14px;">
                                                <span>
                                                    Introduce yourself. It will help you make a good impression on your potential partner.
                                                    <br />Please write more about yourself, your partner choices & your family. Don't write any mobile number or email here.'
                                                </span>
                                                
                                            </div>
                                          
                                            <textarea id="aboutMe" style="border:1px solid #bbb; border-top: 1px solid #dcdcdc; margin-top: 0px;" placeholder="Please write here" name="write_about_yourself" rows="10" maxlength="1999" class="form-control" required>{{ $customer->write_about_yourself }}</textarea>
                                            @error('write_about_yourself')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Check the grammatical syntax in your description. You can correct by right click red underline and choose right word</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="terms-condition-section" class="row form-group" style="margin-bottom: 0;">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-8 create-profile-btn-container" style="padding-bottom:0px; font-size: 14px;">
                                            <div id="agreeContainer" style="margin-top: 7px;">
                                                <input id="ckbAgreeTerms" type="checkbox" style="position:relative; top:2px;" /> <a href="#" style="color: blue;" ng-click="showTermsAndCondition()">I agree with terms & conditions</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9 create-profile-btn-container" style="padding-bottom:30px; padding-top:5px; margin-top:20px;">
                                            <button type="submit" class="btn-square btn-square-medium text-capitalize" style="padding: 10px; padding-left: 30px; padding-right: 30px;">Profile Update</button>
                                            &nbsp;<span class="create-profile-loading" style="display:none;">&nbsp;<img src="/Images/ajax_loader_blue_32.gif" />&nbsp;<label class="loading-text">Saving Your Profile...</label></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>


                    <script type="text/javascript">
                        $(document).ready(function() {

                        });

                    </script>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
