@extends('frontend.loginreg.app')
@section('content')

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <form name="myForm" novalidate>
                        <div ng-controller="ProfileDetailCtrl" class="form-horizontal">

                            <div class="row">
                                <div class="col-12">
                                    <nav aria-label="breadcrumb" class="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href=" url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                                            
                                            <li class=" active" aria-current="page">/Profile Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                            <div class="row" style="border-bottom: 0px solid #dcdcdc;">
                                <div class="col-sm-3" style="margin-bottom: 20px;">
                                    <div style="text-align:center;">
                                        <div style="border: 1px solid #dcdcdc; position: relative;">
                                            <div style="padding:0px; text-align:center;" class="-border photo-container">
                                                @if($customer->gender == 'male')
                                                    <img alt="profile photo" src="{{ asset('frontend') }}/images/no-photo-male.jpg" class="" style="width: 100%;" />
                                                @endif
                                                @if($customer->gender == 'female')
                                                    <img alt="profile photo" src="{{ asset('frontend') }}/images/no-photo-female.jpg" class="" style="width: 100%;" />
                                                @endif
                                                
                                                <div style="display:none; left: 16px; top: 7px; cursor:default;" title="userProfile.MembershipPackageName}} Member" class="userProfile.MembershipPackageName}}-batch">
                                                    <img alt="membership package bronze" class="package-batch" src="/Images/medal_bronze.png" /><span class="package-text">Member</span><img style="height:19px;" alt="membership package" src="/Images/userProfile.MembershipPackageName}}-batch-right-shape.png" />
                                                </div>
                                            </div>
                                            <div style="text-align: center; background-color: #fff; border-top:1px solid #dcdcdc; padding:4px;">
                                                <a class="cursor-pointer" style="font-weight: 600;">View Photo Album</a>
                                            </div>
                                            <div class="photo-mask-detail-page" ng-class="{'show-photo-mask-label': userProfile.PhotoMaskLabel!==''}" style="display: none;">
                                                <i class="icon-lock photo-request-icon-lock"></i>
                                                <div class="photo-request-link">
                                                    <div>gg</div>
                                                    <div style="margin-top:5px;"><a href="/Payment/MembershipPlan" target="_blank">View Plans</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="veriry-profile-hints shadow" style="border:1px solid #ccc; margin-top: 30px;">
                                        <div style=" background-color: #dcdcdc; border-bottom: 1px solid #ccc; height: 35px;">
                                            <img alt="trusted site" src="{{ asset('frontend') }}/images/trust-icon.png" style="height: 65px; padding-left: 8px; position: relative; top: -25px;" />
                                            <span style="font-size: 16px; padding-left: 10px; position: relative; top: -15px; font-weight: 400;">Verified Profile</span>
                                        </div>
                                        <div style="padding:12px;">
                                            <div>
                                                <i class="glyphicon glyphicon-ok-2 " style="color: yellowgreen;"></i>
                                                <span>Profile is Varified</span>
                                            </div>
                                            <div style="padding-top:10px;">
                                                <i class="glyphicon glyphicon-ok-2 " style="color: yellowgreen;"></i>
                                                <span>Trusted & Secured</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="refine-search-section shadow" style="border:1px solid #ccc; margin-top: 30px;">
                                        <div style=" background-color: #dcdcdc; border-bottom: 1px solid #ccc; height: 35px;">
                                            <span style="font-size: 16px; padding-left: 10px; position:relative; top: 5px; font-weight: 400;">Search Profile</span>
                                        </div>
                                        <div style="padding: 15px;">
                                            <div>
                                                <div>
                                                    <label class="search-label" style="position: relative; top: 7px; font-size:15px;">Looking for :</label>
                                                </div>
                                                <div>
                                                    <div class="radio-control">
                                                        <label>
                                                            <input type="radio" class="form-check-input" name="GenderSearch" ng-model="GenderSearch" id="female" value="female">
                                                            Female
                                                        </label>
                                                        <label class="padd-left-10">
                                                            <input type="radio" class="form-check-input" name="GenderSearch" ng-model="GenderSearch" id="male" value="male">
                                                            Male
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div>
                                                    <label class="search-label">Age :</label>
                                                </div>
                                                <div>
                                                    <div id="ageRangeSlider"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div>
                                                    <label class="search-label">Religion :</label>
                                                </div>
                                                <div>
                                                    <select ng-model="Religion" name="Religion" class="form-control form-group-margin form-select">
                                                        <option value="all">All</option>
                                                        <option value="Muslim">Muslim</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddish">Buddish</option>
                                                        <option value="Christian">Christian</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div>
                                                    <label class="search-label">Marital Status:</label>
                                                </div>
                                                <div>
                                                    <select ng-model="MaritalStatus" name="MaritalStatus" class="form-control form-group-margin form-select">
                                                        <option value="all">Any</option>
                                                        <option value="UnMarried">UnMarried</option>
                                                        <option value="Married">Widow(er)</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Separated">Separated</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div>
                                                    <button id="btnSearch" ng-click="search()" class="btn-square btn-square-medium">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="advertisement-section" style="display:none;">
                                        <div style="border: 1px solid #dcdcdc; margin-top: 20px; border: 1px solid #dcdcdc; margin-top: 20px; border-bottom: 0 !important; font-size: 11px; background-color: #f1f1f2; text-align: center;">ADVERTISEMENT</div>
                                    </div> --}}
                                </div>
                                <div class="col-sm-9">
                                    <div class="shadow" style="background-color: #fff;">
                                        <div class="detail-page-headerinfo-ma" style="border: 1px solid #dcdcdc; padding: 10px; border-bottom: 0;">
                                            <span style=" font-size: 18px; font-weight: 600;">
                                                @if(Auth::guard('customer')->user()->pay_active == 1)
                                                {{ $customer->candidate_name }}
                                                @else
                                                {{ $customer->username }}
                                                @endif
                                            </span>
                                            <span>
                                                {{-- <img alt="premium member" style="width:30px;" title="Premium member" src="/Images/Premium-member.png" /> --}}
                                            </span>
                                            <a style="cursor:pointer; font-weight:500; margin-left:10px; display:none;" class="user-chat-status">
                                                <img style="width:30px;" title="Chat Now" src="/Images/chat-now.gif" />
                                                Chat Now
                                            </a>
                                            <span class="profileby-ma" style="float: right; color: #444; font-size:13px;">Profile Created By: <span style="font-weight:400;">{{ $customer->profile_created_by }}</span></span>
                                            <span class="profileby-separator-ma" style="color: #444; float:right;padding-left:5px; padding-right:5px;">|</span>
                                            <div class="lastlogin-ma" style="color: #444; float:right; font-size:13px;">Online:<span style="font-weight:400;"> </span></div>
                                        </div>
                                        <div style="border: 1px solid #dcdcdc; border-bottom:0; padding: 5px;" class="clearfix">
                                            <table class="tbl-profile-details" style="float:left;">
                                                <tr>
                                                    @if($customer->gender == 'male')  
                                                        <td><i class="icon-male" style="color: yellowgreen;"></i></td>
                                                    @endif
                                                    @if($customer->gender == 'female')
                                                        <td><i class="icon-female" style="color: yellowgreen;"></i></td> 
                                                    @endif
                                                    <td><span id="user-age" class="profile-detail-value">{{ $customer->age }} Years</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="icon-resize-vertical-1" style="color: blue;"></i></td>
                                                    <td><span class="profile-detail-value">{{ $customer->height }}, {{ $customer->weight }} Kg</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="icon-heart-1" style="color: hotpink;"></i></td>
                                                    <td><span class="profile-detail-value">{{ $customer->marital_status }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="icon-book-open" style="color: green;"></i></td>
                                                    <td><span class="profile-detail-value">{{ $customer->religon }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="icon-graduation-cap" style="color: green;"></i></td>
                                                    <td><span class="profile-detail-value">{{ $customer->highest_qualification }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="icon-briefcase" style="color: purple;"></i></td>
                                                    <td><span class="profile-detail-value">{{ $customer->working_sector }}</span></td>
                                                </tr>

                                            </table>
                                            <style>
                                                .profile_detail_info .tick_sign {
                                                    background: url('{{ asset('frontend/images/right-tic.png') }}') no-repeat left 4px;
                                                    margin: 6px 8px;
                                                    padding-left: 15px;
                                                }
                                            </style>
                                            <div class="basic-hints" style="float: right; top: 20px; right: 20px; position: relative;">
                                                <div class="profile_detail_info">
                                                    <p class="tick_sign" >Trusted marriage site in bangladesh</p>
                                                    <p class="tick_sign">Running under islamic shariah</p>
                                                    <p class="tick_sign">Secured & Reliable</p>
                                                    <p class="tick_sign">Verified Profile</p>
                                                    <div class="div_line_shadow"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="background-color: #dcdcdc; border: 1px solid #ccc; padding: 10px; padding-bottom: 16px; ">
                                            <a id="btnSendMessage" ng-click="sendMessage()" class="bm-button" style="padding:7px; position:relative; top:2px; background-color: #c0272c;">
                                                <i class="icon-mail" style="color:#fff; font-size: 1.3em; position:relative; top: 2px;"></i>Send Message
                                            </a>
                                            <a id="btnSendInterest" class="bm-button detail-page-action-btn" ng-click="sendInterest()" style="margin-left:7px; background-color: #c0272c;">
                                                <i class="icon-thumbs-up-1"></i>I am Interested
                                            </a>
                                            <a id="btnFavorite" class="bm-button detail-page-action-btn" ng-click="saveFavoriteUser()" style="margin-left:7px; background-color: #c0272c;">
                                                <i class="icon-star"></i>Add to Favorite
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shadow" style="margin-top: 30px; background-color: #fff;">
                                        <div style="border:1px solid #dcdcdc; background-color: #fff; height: 40px; ">
                                            <style>
                                                .detail-profile-label {
                                                    font-size: 20px;
                                                    padding-left: 10px;
                                                    position: relative;
                                                    top: 10px;
                                                    color: #000;
                                                }
                                            </style>
                                            <span class="detail-profile-label">Profile Details</span>
                                            {{-- <div id="verifiedItems" style="float:right; padding-top: 5px; padding-right: 5px;">
                                                <span style=" font-size: 15px; color: gray; position: relative; top: 3px;">Verified:</span>
                                                <img alt=" profile verify" title="Profile approved" style="height:24px;" src="/Images/icon_profile_verified.png" />
                                                <img alt="mobile verify" title="Mobile verified" style="height:26px;" id="imgPhoneVerified" src="/Images/icon_phone_verified.png" />
                                                <img alt="NID verify" title="NID verified" style="height:26px;" id="imgNidVerified" src="/Images/icon_nid_verified.png" />
                                            </div> --}}
                                        </div>
                                        <div style=" border: 1px solid #dcdcdc; border-top:0px; min-height:300px; padding: 10px;">
                                            <div class="profile-detail-section" style="margin-top:10px;">
                                                <div class="profile-detail-header">
                                                    <i class="icon-female icon-mini-effect icon-effect-2" style="font-size:1.8em;"></i>
                                                    <span>About 
                                                        @if($customer->gender == 'male')
                                                            Him
                                                        @endif
                                                        @if($customer->gender == 'female')
                                                            Her
                                                        @endif
                                                    </span>
                                                </div>
                                                <div class="profile-detail-body">
                                                    <div class="pl27 f15 m-v-pl-0" style="padding-top: 5px; padding-bottom: 5px;">
                                                        <span class="profile-detail-value">
                                                            {{ $customer->write_about_yourself }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-detail-section">
                                                <div class="profile-detail-header">
                                                    <i class="icon-list-2 icon-mini-effect icon-effect-2" style="font-size: 1.9em;"></i>
                                                    <span>Basic Information</span>
                                                </div>
                                                <div class="profile-detail-body">
                                                    <div class="pl27 f15 m-v-pl-0 prflist1">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <p class="color12 pt15">Age</p>
                                                                <p class="pt2 pr20">
                                                                    <span id="user-age1">{{ $customer->age }}</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Marital Status </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        m{{ $customer->marital_status }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Height</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->height }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">Weight</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->weight }} Kg
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Religion
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span id="under_grad_collgView">
                                                                        {{ $customer->religon }}
                                                                    </span>

                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Living Country
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->currently_living_in }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">Nationality</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->nationality }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Blood Group </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->blood_group }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-detail-section">
                                                <div class="profile-detail-header">
                                                    <i class="icon-graduation-cap icon-mini-effect icon-effect-2"></i>
                                                    <span>Education & Profession</span>
                                                </div>
                                                <div class="profile-detail-body">
                                                    <div class="pl27 f15 m-v-pl-0 prflist1">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <p class="color12 pt15">Highest Qualification</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->highest_qualification }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">Working Sector</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->working_sector }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li id="liEducationDetails">
                                                                <p class="color12 pt15">Education Details </p>
                                                                <p class="pt2 pr20">
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 0)
                                                                    <span class="lockView">
                                                                        <img alt="feature lock" src="{{ asset('frontend') }}/images/icon_lock_description.png" /> <a href="/Payment/MembershipPlan">Upgrade membership to view details</a>
                                                                    </span>
                                                                    @endif
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 1)
                                                                    <span class="unlockView">
                                                                        {{ $customer->education_details }}
                                                                    </span>
                                                                    @endif
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">Profession</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->profession }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li id="liProfessionalDetails">
                                                                <p class="color12 pt15">Profession Details</p>
                                                                <p class="pt2 pr20">
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 0)
                                                                    <span class="lockView">
                                                                        <img alt="Upgrade membership to view details" src="{{ asset('frontend') }}/images/icon_lock_description.png" /> <a href="/Payment/MembershipPlan">Upgrade membership to view details</a>
                                                                    </span>
                                                                    @endif
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 1)
                                                                    <span class="unlockView">
                                                                        {{ $customer->profession_details }}
                                                                    </span>
                                                                    @endif
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Monthly Income </p>
                                                                <p class="pt2 pr20">
                                                                    @if($customer->keep_it_private != null)
                                                                        <span>
                                                                            Tell you later
                                                                        </span>
                                                                    @else
                                                                        <span>
                                                                            {{ $customer->monthly_income }}
                                                                        </span>
                                                                    @endif
                                                                    
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-detail-section">
                                                <div class="profile-detail-header">
                                                    <i class="icon-home-1 icon-mini-effect icon-effect-2 family-icon" style="font-size: 1.9em"></i>
                                                    <span>Family & Location</span>
                                                </div>
                                                <div class="profile-detail-body">

                                                    <div class="pl27 f15 m-v-pl-0 prflist1">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <p class="color12 pt15">Father Status</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->father_status }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Mother Status </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->mother_status }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Father Occupation </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->father_occupation }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Mother Occupation </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->mother_occupation }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Family Status</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        aaa
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Home District
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span id="under_grad_collgView">
                                                                        {{ $customer->home_division }}
                                                                    </span>

                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Living Country
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->currently_living_in }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Living City
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->city_living_in }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Siblings
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        @if($customer->bro_not_married != 0)
                                                                            {{ $customer->bro_not_married }} brothers Not Married,
                                                                        @endif
                                                                        @if($customer->bro_married != 0)
                                                                            {{ $customer->bro_married }} brothers Married,
                                                                        @endif
                                                                        @if($customer->sis_not_married != 0)
                                                                            {{ $customer->sis_not_married }} sister Not Married,
                                                                        @endif
                                                                        @if($customer->sis_married != 0)
                                                                            {{ $customer->sis_married }} sister Married
                                                                        @endif
                                                                        @if($customer->bro_not_married == 0 && $customer->bro_married == 0 && $customer->sis_not_married == 0 && $customer->sis_married == 0)
                                                                            No siblings
                                                                        @endif
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li id="liFamilyDetails">
                                                                <p class="color12 pt15">
                                                                    Family Details
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 0)
                                                                        <span class="lockView">
                                                                            <img alt="Upgrade membership to view details" src="{{ asset('frontend') }}/images/icon_lock_description.png" /> <a href="/Payment/MembershipPlan">Upgrade membership to view details</a>
                                                                        </span>
                                                                    @endif
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 1)
                                                                        <span class="unlockView">
                                                                            {{ $customer->family_details }}
                                                                        </span>
                                                                    @endif
                                                                </p>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-detail-section">
                                                <div class="profile-detail-header">
                                                    <i class="icon-lifebuoy icon-mini-effect icon-effect-2"></i>
                                                    <span>Appearance & Life Style</span>
                                                </div>
                                                <div class="profile-detail-body">
                                                    <div class="pl27 f15 m-v-pl-0 prflist1">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <p class="color12 pt15">Body Type</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->body_type }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Complexion </p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->complexion }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">Diet</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->diet }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <p class="color12 pt15">Smoke</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->smoke }}
                                                                    </span>
                                                                </p>
                                                            </li>

                                                            <li id="liPhysicalAttr">
                                                                <p class="color12 pt15">
                                                                    More Details
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 0)
                                                                    <span class="lockView">
                                                                        <img alt="Upgrade membership to view details" src="{{ asset('frontend') }}/images/icon_lock_description.png" /> <a href="/Payment/MembershipPlan">Upgrade membership to view details</a>
                                                                    </span>
                                                                    @endif
                                                                    @if(Auth::guard('customer')->user()->pay_active  == 1)
                                                                    <span class="unlockView">
                                                                        {{ $customer->physical_attibute_details }}
                                                                    </span>
                                                                    @endif
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-detail-section">
                                                <div class="profile-detail-header">
                                                    <i class="icon-book-open icon-mini-effect icon-effect-2" style="font-size:2em;"></i>
                                                    <span>Religious Values</span>
                                                </div>
                                                <div class="profile-detail-body">
                                                    <div class="pl27 f15 m-v-pl-0 prflist1">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <p class="color12 pt15">Religion</p>
                                                                <p class="pt2 pr20">
                                                                    <span>
                                                                        {{ $customer->religon }}
                                                                    </span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="color12 pt15">
                                                                    Religious Status
                                                                </p>
                                                                <p class="pt2 pr20">
                                                                    <span id="under_grad_collgView">
                                                                        {{ $customer->religious_value }}
                                                                    </span>

                                                                </p>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Partner Preference-->
                                            <div class="profile-detail-section" style="margin-top:20px; border-bottom:0px;">
                                                <div class="profile-detail-header" style="height: 40px;">
                                                    <span style="color: blue; padding-left: 22px;">
                                                        What 
                                                        @if($customer->gender == 'male')
                                                            He
                                                        @endif
                                                        @if($customer->gender == 'female')
                                                            She
                                                        @endif
                                                        is looking for
                                                    </span>
                                                </div>
                                                <div style="padding-left: 35px;" class="m-v-pl-0">
                                                    <table style="width:100%;">
                                                        <tr>
                                                            {{-- <td>
                                                                <div style=" float: left; overflow: hidden; border-radius: 50%;">
                                                                    <img alt="" ng-src="/Photos/Members/userProfile.PhotoSize}}/userProfile.ProfilePhoto}}" style=" width: 90px; height: 90px; border-radius: 50%; border: 1px dashed #444;" />
                                                                </div>
                                                            </td> --}}
                                                            {{-- <td class="center">
                                                                <span id="match-count" style="background-color: #dcdcdc; font-weight: 600; font-size: 15px; border-radius: 20px; padding: 5px; padding-left: 20px; padding-right: 20px;"></span>
                                                            </td>
                                                            <td style="text-align:right;">
                                                                <img id="header-profile-photo" alt="" ng-src="/Photos/Members/s25634/no-photo-male.jpg" style=" width: 90px; height: 90px; border-radius: 50%; border: 1px dashed #444;" />
                                                            </td> --}}
                                                        </tr>
                                                        <tr style="font-size: 17px; font-weight: 600;" class="theme-color">
                                                            <td>
                                                                <span style="float: left; padding-top: 20px;">
                                                                    @if($customer->gender == 'male')
                                                                        His
                                                                    @endif
                                                                    @if($customer->gender == 'female')
                                                                        Her
                                                                    @endif
                                                                     Preferences</span>
                                                            </td>
                                                            <td></td>
                                                            {{-- <td>
                                                                <span style="float: right; padding-top: 20px;">Matches You</span>
                                                            </td> --}}
                                                        </tr>
                                                    </table>

                                                    <table class="partner-preference-detail" style="margin-top:15px;">
                                                        <tr style="border-top: 1px dashed #dcdcdc;">
                                                            <td style=" width: 125px;">
                                                                <span class="color12 pt15 f15">Age</span>
                                                            </td>
                                                            <td style="width:5px;">:</td>
                                                            <td>
                                                                <span class="profile-detail-value">{{ $customer->age_from }} - {{ $customer->age_to }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="match-sign isAgeMatch ? 'icon-ok-2' : 'icon-minus'}}"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="color12 pt15 f15">Height</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">{{ $customer->height_from }} - {{ $customer->height_to }}</span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isHeightMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="color12 pt15 f15">Marital Status</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">
                                                                    @foreach(explode('"', $customer->partner_marital_status) as $status)
                                                                        {{ str_replace(['[', ']'], '', $status) }}
                                                                    @endforeach
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isMaritalStatusMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="color12 pt15 f15">Complexion</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">
                                                                    @foreach(explode('"', $customer->partner_complexion) as $status)
                                                                        {{ str_replace(['[', ']'], '', $status) }}
                                                                    @endforeach
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isComplexionMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="color12 pt15 f15">Education</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">
                                                                    @foreach(explode('"', $customer->partner_education) as $status)
                                                                        {{ str_replace(['[', ']'], '', $status) }}
                                                                    @endforeach
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isEducationMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="color12 pt15 f15">Profession</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">
                                                                    @foreach(explode('"', $customer->partner_profession) as $status)
                                                                        {{ str_replace(['\\', '[', ']'], '', $status) }}
                                                                    @endforeach
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isProfessionMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                        <tr style="border-bottom: 0;">
                                                            <td>
                                                                <span class="color12 pt15 f15">Working Sector</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="profile-detail-value">
                                                                    @foreach(explode('"', $customer->partner_working_sector) as $status)
                                                                        {{ str_replace(['\\', '[', ']'], '', $status) }}
                                                                    @endforeach
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <i class="match-sign isWorkingSectorMatch ? 'icon-ok-2' : 'icon-minus'}}"></i>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="photo-album" style="display: none;"></div>

                            <div class="modal fade bm-modal login-modal" id="notifyModal" role="dialog">
                                <div class="modal-dialog" style="width: 650px;">
                                    <div class="modal-content no-radius">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Send Message</h4>
                                            <div class="center modal-loader" style="display: none; position: relative; top: -32px; right: 30px; float: right; ">
                                                <img src="/Images/ajax-loader.gif" /> <span>Sending Message</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div style="padding: 10px; padding-top:0; padding-bottom:0; margin: 0px auto;">

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="message"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input id="email" placeholder="Email" style="height:45px;" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input id="emailSubject" placeholder="Subject" style="height:45px;" class="form-control" value="Please update your profile (Approval Pending)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <textarea id="emailBody" rows="7" placeholder="Message" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6" style="text-align:center;">
                                                                    <button style="width: 100%; background-color: #34495e;" id="btnSendEmail" type="submit" class="login bm-button">Send Message</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button style="width: 100%; background-color: #34495e;" id="btnBlockUser" type="submit" class="login bm-button">Block User</button>
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
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

