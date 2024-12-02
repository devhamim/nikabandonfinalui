@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <link href="{{ asset('frontend') }}/css/Pages/mypage-index.css" rel="stylesheet" />

                    <style type="text/css">
                        .mypage-menu-active {
                            background-color: #f2f2f2;
                        }

                        .refine-search-container {
                            border: 1px solid #dcdcdc;
                            background-color: #fff;
                        }

                        .filter-header {
                            padding: 8px;
                            background-color: #dcdcdc;
                            font-weight: 500;
                            color: #000;
                            margin-bottom: 1px;
                            font-size: 15px;
                            cursor: pointer;
                        }

                        .filter-content {
                            padding: 0px !important;
                            padding-top: 0px !important;
                            padding-left: 0px !important;
                            overflow: auto;
                        }

                        .mypage-left-col {
                            padding-right: 0px;
                        }

                        .padd-top-0 {
                            padding-top: 0 !important;
                        }

                        .inner-list-container a {
                            color: #0d6efd;
                            font-weight: 400;
                        }

                        .add-photo {
                            padding: 8px;
                            border-radius: 50%;
                            height: 37px;
                            width: 37px;
                            position: relative;
                            top: -25px;
                            left: 45%;
                            background: #10BFD6;
                            font-size: 28px;
                            font-weight: 400;
                            color: white;
                            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
                        }

                        .add-photo:hover {
                            box-shadow: 0 0 11px rgba(33, 33, 33, .8);
                        }

                        .mybm-message-content li,
                        .mybm-interest-content li,
                        .mybm-photo-content li,
                        .mybm-account-content li,
                        .mybm-settings-content li {
                            border-top: 1px solid #f0f0f0;
                            padding: 6px;
                            padding-left: 10px;
                        }

                        .border-top-0 {
                            border-top: 0 !important;
                        }

                    </style>

                    <div class="row">
                        @include('frontend.memberdashboard.sitebar')
                        <div class="col-sm-9 show-result mypage-right-col">
                            <div class="mypage-right-container">

                                <form name="myForm" novalidate>
                                    <div ng-controller="MyPageIndexCtrl" class="form-horizontal">
                                        <div class="container11">

                                            <div class="row11">

                                                {{-- <div class="col-lg-12 mypage-middle offer-container" style="text-align:center;">
                                                    <div class="sectionbox-container">
                                                        <div class="sectionbox-content">
                                                            <div class="bg-white">
                                                                <div class="clearfix" style="font-size: 14px; padding-top: 15px; padding-bottom: 15px; color: red;">
                                                                    <span style="font-size:20px; font-weight: 500; float:left;">Flat 70% Off till 31st July!</span> <span style=" float:right; margin-left: 5px; font-size:18px; font-weight:600;" id="offer-duration"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mypage-middle mypage-msg-alert-container" style="text-align: center; display:none;">
                                                    <div class="sectionbox-container" style="margin-bottom: 0; border-bottom: 0 !important;">
                                                        <div class="sectionbox-content" style="background-color: #fff;">
                                                            <div>
                                                                <div class="clearfix" style="font-size: 14px; padding-top: 5px; padding-bottom: 5px;">
                                                                    <img src="/Images/bell-animation.gif" style="width:50px; border-radius: 50%;" />
                                                                    <a id="newMessageCount" style="color:royalblue; font-weight:400;" href="/message/list?Type=Inbox">New Messages</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="verify-warn" class="col-lg-12 mypage-middle" style="text-align:center; display:none;">
                                                    <div class="sectionbox-container">
                                                        <div class="sectionbox-content">
                                                            <div class="bg-white">
                                                                <div id="mobile-verify-warn" style="font-size: 14px; display:none;">
                                                                    <img src="/Images/warning.png" style="height: 40px;" />
                                                                    <span><b>Important:</b> Your mobile number is not verified! </span>
                                                                    <a id="lnkVerifyMobile" style="margin-left: 5px; color:blue;" href="#">Verify Mobile Now</a>
                                                                </div>

                                                                <div id="email-verify-warn" style="padding: 2px; font-size: 14px; display: none;">
                                                                    <img src="/Images/warning.png" style="height: 40px;" />
                                                                    <span><b>Important:</b> Your email account is not verified! </span>
                                                                    <a id="lnkVerifyEmail" style="margin-left: 5px; color:blue;" href="#">Verify Email Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mypage-middle hide-mobile">
                                                    <div class="sectionbox-container">
                                                        <div class="sectionbox-content">
                                                            <div class="bg-white">
                                                                <div style="padding: 10px;">
                                                                    <table style="width: 100%; text-align: center;">
                                                                        <tr>
                                                                            <td style="width:20%">
                                                                                <span>Profile Completion:</span>
                                                                            </td>
                                                                            <td style="width:50%">
                                                                                <div class="mypage-profile-completion-container">
                                                                                    <div id="profile-completion-color" style="width: 50%; background-color: #f9a339; height: 10px; border-radius: 8px;">
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                            <td style="width:10%; text-align:left; padding-left: 5px;">
                                                                                <span id="profile-completion-count">70%</span>
                                                                            </td>
                                                                            <td style="width:20%">
                                                                                <a id="profile-completion-btnUpdate">Update Profile</a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div style="text-align: center; border-top: 1px dashed #dcdcdc; padding: 7px;">
                                                                    <span id="profile-incomplete-field"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mypage-middle" style="display:none;">
                                                    <div class="sectionbox-container">
                                                        <div class="sectionbox-header" style="display:none;">
                                                            <span style=" font-weight: 600; color: #444;">Add Trust Mark</span>
                                                        </div>
                                                        <div class="sectionbox-content mypage-search-section">
                                                            <div class="bg-white clearfix" style="padding: 10px; padding-top: 0; margin-bottom:5px;">
                                                                <div class="col-md-6 center">
                                                                    <table style="width: 100%;">
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/Images/mobile_verify.png" />
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="margin-top:5px;">
                                                                                    <i class="icon-check-1" style=" color:green; font-size: 18px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No Verified</span>
                                                                                </div>
                                                                                <div style="margin-top:5px; display: none;">
                                                                                    <i class="bootbox-close-button close" style="font-size: 16px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No Not Verified</span>
                                                                                    <button class="btn btn-primary"> Update </button>
                                                                                </div>
                                                                                <div style="margin-top:5px; display:none;">
                                                                                    <i class="icon-hourglass" style="font-size: 18px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No: Verification Pending</span>
                                                                                </div>
                                                                                <div style="padding:5px; margin-top:10px; border-top: 1px solid #dcdcdc;">
                                                                                    <span>Verified mobile number will receive trust icon</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="col-md-6 center" style="border-left: 1px dashed #dcdcdc;">
                                                                    <table style="width: 100%;">
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/Images/id_verify.png" />
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="margin-top:5px;">
                                                                                    <i class="icon-check-1" style=" color:green; font-size: 18px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No Verified</span>
                                                                                </div>
                                                                                <div style="margin-top:5px; display: none;">
                                                                                    <i class="bootbox-close-button close" style="font-size: 16px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No Not Verified</span>
                                                                                    <button class="btn btn-primary"> Update </button>
                                                                                </div>
                                                                                <div style="margin-top:5px; display:none;">
                                                                                    <i class="icon-hourglass" style="font-size: 18px; position: relative; top: 2px; right: 3px;"></i>
                                                                                    <span>Mobile No: Verification Pending</span>
                                                                                </div>
                                                                                <div style="padding:5px; margin-top:10px; border-top: 1px solid #dcdcdc;">
                                                                                    <span>Verified mobile number will receive trust icon</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                {{-- <div name="SearchProfileTag" class="col-lg-12 mypage-middle mypage-search-anchor" style="margin-top: 15px;">
                                                    <div class="sectionbox-container">
                                                        <div style="border-bottom: 1px dashed #ccc; padding: 10px;">
                                                            <span style=" font-weight: 400; font-size:18px; color: #000;">Quick Search</span>
                                                        </div>
                                                        <div class="container sectionbox-content mypage-search-section" style="padding-left:15px; padding-right:15px;">
                                                            <div class="row bg-white clearfix" style="padding: 10px; padding-top: 0; margin-bottom:0px;">
                                                                <div class="col-md-6" style="padding: 10px;">
                                                                    <div>
                                                                        <label class="search-label" style="position: relative; top: 3px;">Looking for:</label>
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
                                                                <div class="col-md-6" style="margin-top: 0px; padding: 10px;">
                                                                    <div>
                                                                        <label class="search-label">Age:</label>
                                                                    </div>
                                                                    <div>
                                                                        <div id="ageRangeSlider"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: 0px; padding: 10px;">
                                                                    <div>
                                                                        <label class="search-label">Religion:</label>
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
                                                                <div class="col-md-6" style="margin-top: 0px; padding: 10px;">
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
                                                            </div>
                                                            <div style="margin-left: 8px; margin-bottom: 10px;">
                                                                <div>
                                                                    <a id="btnSearch" ng-click="search()" class="btn-square btn-square-medium text-capitalize">Search</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                {{-- <div class="col-lg-12 mypage-middle sectionbox-container" style="margin-top:20px; background-color: #fff;">
                                                    <div style="border-bottom: 1px dashed #ccc; padding: 10px;">
                                                        <span style=" font-weight:400; font-size:18px; color: #000;">Profile matches</span>
                                                    </div>
                                                    <div style="padding: 15px;">
                                                        <div class="matches-basic-loader center">
                                                            <img src="/images/ajax-loading.gif" style="width: 40px;" /> <span>Loading Matching Profiles...</span>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div id="mypage-matches_basic" class="slider"></div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="col-lg-12 sectionbox-container" style="margin-top:20px; background-color: #fff;">
                                                    <div style="border-bottom: 1px dashed #ccc; padding: 10px;">
                                                        <span style=" font-weight:400; font-size:18px; color: #000;">Matches with same origin</span>
                                                    </div>
                                                    <div style="padding: 15px;">
                                                        <div class="matches-homeDistrict-loader center" style="display: none;">
                                                            <img src="{{ asset('frontend') }}/images/ajax-loading.gif" style="width: 40px;"> <span>Loading Matching Profiles...</span>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div id="mypage-matches_homeDistrict" class="slider slick-initialized slick-slider">
                                                                <div class="row">
                                                                    @foreach($recentmember as $key => $member)
                                                                        <div class="col-lg-3 col-6 py-3">
                                                                            <div class="grid-item" style="width: 168px;"> 
                                                                                <a style="text-decoration: none;" href="{{ route('member.profile', $member->username) }}" tabindex="-1">
                                                                                    <div class="grid-item-image text-center">
                                                                                        @if($member->image != null)
                                                                                        <style>
                                                                                            .blur-effect {
                                                                                                filter: blur(5px);
                                                                                            }
                                                                                        </style>
                                                                                        <img src="{{ asset('uploads/memberimage') }}/{{ $member->first_image }}" class="undefined {{ Auth::guard('customer')->user()->pay_active == 0 ? 'blur-effect' : '' }}" style="border-radius: 50%; height:100px; width:100px; border:1px solid #ccc;">                                                                                   
                                                                                        @else
                                                                                            @if($member->gender == 'male')  
                                                                                                <img src="{{ asset('frontend') }}/images/no-photo-male.jpg" class="undefined" style="border-radius: 50%; height:100px; width:100px; border:1px solid #ccc;"> 
                                                                                            @endif
                                                                                            @if($member->gender == 'female')
                                                                                                <img src="{{ asset('frontend') }}/images/no-photo-female.jpg" class="undefined" style="border-radius: 50%; height:100px; width:100px; border:1px solid #ccc;"> 
                                                                                            @endif
                                                                                        @endif
                                                                                        
                                                                                    </div>
                                                                                    <div class="grid-item-info">
                                                                                        <div class="center" style="font-weight:500;">
                                                                                            @if(Auth::guard('customer')->user()->pay_active  == 1)
                                                                                            {{ $member->candidate_name }}
                                                                                            @else
                                                                                            {{ $member->username }}
                                                                                            @endif
                                                                                        </div>
                                                                                        <div class="center" style="font-size:13px;">{{ $member->age }} years, {{ $member->height }}, {{ $member->highest_qualification }}</div>
                                                                                        <div class="center" style="font-size:13px; margin-top:5px;">
                                                                                            <a href="{{ route('member.profile', $member->username) }}">
                                                                                                <span class="grid-item-view-details mini-p-l-0 mini-p-r-0" style="color:royalblue; font-weight:500; border-radius:12px; border:1px solid yellowgreen; padding:6px; padding-left:10px; padding-right:10px;">View Details</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </a> 
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    
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

                    {{-- <script type="text/javascript">
                        $(document).ready(function() {
                            if ($(window).width() >= 768) {
                                getBasicInfo();
                                collapseLeftMenuAreas();
                            }
                        });

                    </script> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

