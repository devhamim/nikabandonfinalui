<div class="hidden-header ribon-height"></div>
<div class="site-header clearfix ie-header header-shadow">

    <!----------------------------- NEW NAVBAR IMPLEMENTATION ------------------------------->

    <!-- Mobile view -->
    <div class="mobile-view hide-desktop">
        @if(Auth::guard('customer')->user())
            <div class="side-drawer position-fixed" style="left: 0px;">
                <div class="h-100 bg-white">
                    <div>
                        <a href="{{ route('member.logout') }}" style="position:absolute; top:2px; left: 5px;">Sign out</a>
                        <i class="icon-left-open-big" style="position: absolute; right: 0px; top: 2px; font-size: 24px;" onclick="closeSideDrawer()"></i>
                        <div class="center" style="height: 110px;">
                            <img class="mybm-profile-photo" alt="" src="{{ asset('frontend') }}/images/no-photo-male.jpg" style="width: 80px; height: 80px; border-radius: 50%; border:1px solid #dcdcdc;">
                            <div class="add-photo"><a style="text-decoration: none; color: #fff;" href="/photo/managephoto">+</a></div>
                        </div>
                        <div style="border-top: 1px solid #f2f2f2; margin-top:0px; padding:10px; text-align: center;">
                            <span>Profile ID:</span>&nbsp;<span style="font-weight: 500; color: #555;" class="profileId">
                                {{ $customer->username }}
                            </span>
                            &nbsp;<a class="linkViewProfile" href="/search/profile/?id=e7bcf5cc-d2a9-4fa7-8085-338960adb490" style="color: royalblue; font-weight:400;"> View</a>
                            |
                            <a class="linkEditProfile" href="/account/createprofile/?UserId=e7bcf5cc-d2a9-4fa7-8085-338960adb490&amp;Type=update" style="color: royalblue; font-weight: 400;"> Edit</a>
                        </div>
                        <div style="border-top: 1px solid #f2f2f2;padding: 5px;text-align: center;">
                            <span>Account Type:</span><span style="padding-left: 5px; font-weight: 500; color: #555; font-size: 15px;" class="membershipName">FREE Member</span>
                            <div style="padding-left:5px; color: orangered;" class="membershipExpireDate"></div>
                            <div style="margin: 5px;" class="messageBalance">Message Balance: <b>3</b></div>
                            <div class="center" style=" padding-top: 7px; padding-bottom: 4px;"><a class="btn-square btn-square-medium text-capitalize" style="width:180px;" href="{{ route('premium.package') }}">Upgrade Now</a></div>
                        </div>
                    </div>
                    {{-- <div class="filter-container" style="margin-top:10px;">
                        <div class="filter-header mybm-message-header">
                            <span><i class="icon-mail-alt"></i>&nbsp;Messages</span>
                            <span style="float:right;"><i class="mybm-message-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-message-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                <li class="inner-list-container padd-top-0"><a id="linkInbox" href="/message/list/?Type=Inbox"><i class="icon-mail-4"></i> Inbox</a><a href="/message/messagelist/?Type=Inbox" class="inboxCounter"></a></li>
                                <li class="inner-list-container" style="border-bottom: 0;"><a href="/message/list/?Type=SendItems"><i class="icon-paper-plane-1"></i>&nbsp;Sent Messages</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-container">
                        <div class="filter-header mybm-interest-header">
                            <span><i class="icon-info-circled-1"></i>&nbsp;Invitations</span>
                            <span style="float:right;"><i class="mybm-interest-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-interest-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                <li class="inner-list-container padd-top-0"><a href="/interest/receivedlist"><i class="icon-right-1"></i> Received Invitation</a><a href="/interest/receivedlist" class="interestCounter"></a></li>
                                <li class="inner-list-container"><a href="/interest/sendlist"><i class="icon-left-1"></i> Sent Invitation</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="filter-container">
                        <div class="filter-header mybm-photo-header">
                            <span><i class="icon-heart-1"></i>&nbsp;My Favorites</span>
                            <span style="float:right;"><i class="mybm-photo-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-photo-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                <li class="inner-list-container padd-top-0" style="border-bottom: 0;"><a href="/account/favoritelist"><i class="icon-star"></i> Favorite List</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="filter-container">
                        <div class="filter-header mybm-account-header">
                            <span><i class="icon-user-1"></i>&nbsp;Pages</span>
                            <span style="float:right;"><i class="mybm-account-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-account-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                <li class="inner-list-container"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                                
                                <li class="inner-list-container"><a href="{{ route('premium.package') }}"><i class="fa fa-certificate"></i> Membership Plans</a></li>
                                <li class="inner-list-container"><a href="{{ route('about.us') }}"><i class="fa fa-at"></i> About Us</a></li>
                                <li class="inner-list-container"><a href="{{ route('mission.vision') }}"><i class="fa fa-search"></i>Mission Vision</a></li>
                                <li class="inner-list-container"><a href="{{ asset('frontend') }}/corporate/termsofuse.html"><i class="fa fa-check-square"></i> Terms & Conditions</a></li>
                                <li class="inner-list-container"><a href="{{ asset('frontend') }}/corporate/privacypolicy.html"><i class="fa fa-unlock-alt"></i> Privacy Policy</a></li>
                                <li class="inner-list-container"><a href="{{ route('contect') }}"><i class="fa fa-envelope"></i> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-container">
                        <div class="filter-header mybm-account-header">
                            <span><i class="icon-user-1"></i>&nbsp;My Profile</span>
                            <span style="float:right;"><i class="mybm-account-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-account-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                <li class="inner-list-container" id="editProfile"><a class="linkEditProfile" href="{{ url('/') }}"><i class="icon-photo"></i> Dashboard</a></li>
                                <li class="inner-list-container" id="editProfile"><a class="linkEditProfile" href="{{ route('profile.update') }}"><i class="icon-edit"></i> Edit My Profile</a></li>
                                <li class="inner-list-container" id="changePhoto"><a href="{{ route('member.manage.photo') }}"><i class="icon-photo"></i> Add/Change Photo</a></li>
                                <li class="inner-list-container" id="editPartner"><a class="linkEditPartnerPreference" href="{{ route('partner.preferance.view') }}"><i class="icon-edit-1"></i> Edit Partner Preference</a></li>
                                <li class="inner-list-container padd-top-0" id="viewProfile" style="border-bottom: 0;"><a class="linkViewProfile" href="{{ route('member.profile', Auth::guard('customer')->user()->username) }}"><i class="icon-eye-4" style="font-size: 15px; position: relative; left: -1px;"></i> View My Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="filter-container">
                        <div class="filter-header mybm-settings-header">
                            <span><i class="icon-cog-4"></i>&nbsp;Settings</span>
                            <span style="float:right;"><i class="mybm-settings-icon icon-plus-3"></i></span>
                        </div>
                        <div class="filter-content mybm-settings-content" style="display: none;">
                            <ul class="ul-list-container padd-top-0">
                                {{-- <li class="inner-list-container"><a href="/account/changepassword"><i class="icon-lock"></i> Change Password</a></li> --}}
                                <li class="inner-list-container" style="border-bottom: 0;"><a href="/account/deleteaccount"><i class="icon-trash"></i> Delete My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="margin-top:10px;">
                        <div style="padding-left:15px; font-weight: 500; font-size:13px;">Hotline: +88 01876674794</div>
                    </div>
                </div>
            </div>
        @endif
        @if(!Auth::guard('customer')->user())
            <div class="side-drawer position-fixed">
                <div class="drawer-continer drawer-guest-user bg-white">
                    <i class="icon-left-open-big" style="position: absolute; right: 0px; top: 2px; font-size: 24px;" onclick="closeSideDrawer()"></i>
                    <div>
                        <a href="{{ url('/') }}">
                            <img width="170px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="Logo" style="height:80px;">
                        </a>
                    </div>
                    <div>
                        <ul class="ul-list-container padd-top-0">
                            <li class="inner-list-container"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                            
                            {{-- <li class="inner-list-container"><a href="{{ route('premium.package') }}"><i class="fa fa-certificate"></i> Membership Plans</a></li> --}}
                            <li class="inner-list-container"><a href="{{ route('about.us') }}"><i class="fa fa-at"></i> About Us</a></li>
                            <li class="inner-list-container"><a href="{{ route('mission.vision') }}"><i class="fa fa-search"></i>Mission Vision</a></li>
                            <li class="inner-list-container"><a href="{{ asset('frontend') }}/corporate/termsofuse.html"><i class="fa fa-check-square"></i> Terms & Conditions</a></li>
                            <li class="inner-list-container"><a href="{{ asset('frontend') }}/corporate/privacypolicy.html"><i class="fa fa-unlock-alt"></i> Privacy Policy</a></li>
                            <li class="inner-list-container"><a href="{{ route('contect') }}"><i class="fa fa-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                    <div style="margin-top:10px;">
                        <a href="{{ route('member.registration') }}" class="btn-square btn-square-medium text-capitalize">Register Account</a>
                        <a href="{{ route('member.login') }}" style="margin-left: 10px; background-color: #0d6efd; border-color: #0d6efd;" class="btn-square btn-square-medium text-capitalize btn-square-2">Login</a>
                    </div>
                    <div style="margin-top:10px;">
                        <div style="font-weight: 500; font-size:13px;">Hotline: +88 01876674794</div>
                    </div>
                </div>
            </div>
        @endif
        <div class="side-drawer-void position-fixed d-none" onclick="closeSideDrawer()"></div>
        <nav class="mobile-ribon-height navbar-backcolor navbar-dark fixed-top">
            <div class="row" style="padding: 10px; color: #fff; margin-top: 5px;">
                <div class="m-h-column m-h-col-left" style="float:left;">
                    <a onclick="openSideDrawer()">
                        <div class="navbar-toggler-icon m-h-i"></div>
                    </a>
                </div>
                <div class="m-h-column m-h-col-middle" style="text-align:center;">
                    {{-- <h5 class="m-h-title" style="text-align:center; color: #fff;">
                        <a href="{{ url('/') }}">
                            <strong class="text-white" style="font-size: 18px">Nikahbandhan.com</strong>
                        </a>
                    </h5> --}}
                    <a href="{{ url('/') }}" style="text-align:center;">
                        <img width="120px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="Logo" >
                    </a>
                </div>
                @if(Auth::guard('customer')->user())
                    <div class="nav-item dropdown m-h-column m-h-col-right" style="text-align:right; float:left;">
                        <span style="text-align: center;color: #fff;" class="dropdown-toggle cursor-pointer header-profile-photo-container" data-toggle="dropdown" aria-expanded="false" data-bs-toggle="dropdown" id="header-right-photo-dropdown">
                            <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-male.jpg">
                            <b class="caret" style="color: #fff;"></b>
                        </span>
                        <ul class="dropdown-menu loggedInUser-dropmenu shadow" style="position: absolute; left: initial; right: 0; top: 50px; width: 200px; padding-top:0;" aria-labelledby="header-right-photo-dropdown">
                            <li style="text-align: center; font-size: 12px; padding: 5px; background-color: #f2f2f2; padding-top:10px; padding-bottom:10px; font-weight:400;">
                                <div id="shortName" style="font-size:14px;">{{ Auth::guard('customer')->user()->name }}</div>
                                <div id="username" style="font-size:13px;">(Officiis)</div>
                            </li>
                            <li class="divider" style="margin-top:0;"></li>
                            <li style="text-align: center; font-size: 12px;">
                                <div>
                                    <span style="margin-right:5px; font-weight:400; font-size:13px;">Member Type:</span><span class="top-right-menu-membership-type">FREE</span>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{ route('premium.package') }}">Membership Packages</a></li>
                            <li class="divider"></li>
                            <li><a class="sign-out" href="{{ route('member.logout') }}">Sign out</a></li>
                        </ul>
                    </div>
                @endif
                @if(!Auth::guard('customer')->user())
                    <div class="m-h-column m-h-col-right" style="text-align:right; float:left;">
                        <a href="{{ route('member.login') }}" style=" color: #fff; font-weight: 500; margin-right: 2px;">
                            Login
                        </a>
                    </div>
                @endif
            </div>
        </nav>
    </div>
    <!-- End mobile view -->
    <!-- Desktop view -->
    <div class="navbar navbar-default navbar-top navbar-backcolor ribon-height hide-mobile" style="padding-top:0; padding-bottom:0;">
        <div class="container navbar-back">
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand" style="padding:0px; padding-left:0px;">
                    <img width="170px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" class="bm-logo" alt="Logo" >
                </a>
                <span class="activation-status" style="color: #fff; font-style: italic;"></span>
            </div>
            <div class="navbar-collapse-pad0" >
                @if(Auth::guard('customer')->user())
                    <div style="position:relative; float:right;" class="nav-item dropdown">
                        <span style="text-align: center;color: #fff;" class="dropdown-toggle cursor-pointer header-profile-photo-container" data-toggle="dropdown" aria-expanded="false" data-bs-toggle="dropdown" id="header-right-photo-dropdown">
                            <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-male.jpg">
                            <b class="caret" style="color: #fff;"></b>
                        </span>
                        <ul class="dropdown-menu loggedInUser-dropmenu shadow" style="position: absolute; left: initial; right: 0; top: 50px; width: 200px; padding-top:0;" aria-labelledby="header-right-photo-dropdown">
                            <li style="text-align: center; font-size: 12px; padding: 5px; background-color: #f2f2f2; padding-top:10px; padding-bottom:10px; font-weight:400;">
                                <div id="shortName" style="font-size:14px;">{{ Auth::guard('customer')->user()->name }}</div>
                                <div id="username" style="font-size:13px;">(Officiis)</div>
                            </li>
                            <li class="divider" style="margin-top:0;"></li>
                            <li style="text-align: center; font-size: 12px;">
                                <div>
                                    <span style="margin-right:5px; font-weight:400; font-size:13px;">Member Type:</span><span class="top-right-menu-membership-type">FREE</span>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{ route('premium.package') }}">Membership Packages</a></li>
                            <li class="divider"></li>
                            <li><a class="sign-out" href="{{ route('member.logout') }}">Sign out</a></li>
                        </ul>
                    </div>
                    <div class="header-link-areas" style="float:right; position:relative; top:10px; right:30px;">
                @endif
                @if(!Auth::guard('customer')->user())
                    <div class="header-link-areas" style="float:right;">
                @endif
                    <span class="menu-item-help" style="padding-left:30px; cursor: pointer;">
                        <a class="header-text" href="{{ route('about.us') }}">
                            <span>About</span>
                        </a>
                    </span>
                    <span class="menu-item-help" style="padding-left:30px; cursor: pointer;">
                        <a class="header-text" href="{{ route('mission.vision') }}">
                            <span>Mission Vision</span>
                        </a>
                    </span>
                    <span class="menu-item-help" style="padding-left:30px; cursor: pointer;">
                        <a class="header-text" href="{{ route('contect') }}">
                            <span>contact</span>
                        </a>
                    </span>
                    @if(!Auth::guard('customer')->user())
                        <span class="menu-item-login" style="padding-left:30px;">
                            <a class="header-text" href="{{ route('member.login') }}">
                                <span class="layout-header-login-txt">Login</span>
                            </a>
                        </span>
                        <a class="menu-item-create-profile" style="margin-left: 20px;" href="{{ route('member.registration') }}">
                            <i class="icon-user-2" style="left:3px;"></i>
                            <span class="layout-header-login-txt">Create Profile</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End desktop view -->
    <!--------------------------------END OF NEW NAVBAR ------------------------------------->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const headers = document.querySelectorAll(".filter-header");

        const defaultContent = document.querySelector(".filter-content");
        if (defaultContent) {
            defaultContent.style.display = "block";
            const defaultIcon = defaultContent.previousElementSibling.querySelector("i");
            defaultIcon.classList.remove("icon-plus-3");
            defaultIcon.classList.add("icon-minus-3");
        }

        headers.forEach(header => {
            header.addEventListener("click", function () {
                const content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                    this.querySelector("i").classList.remove("icon-minus-3");
                    this.querySelector("i").classList.add("icon-plus-3");
                } else {
                    content.style.display = "block";
                    this.querySelector("i").classList.remove("icon-plus-3");
                    this.querySelector("i").classList.add("icon-minus-3");
                }
            });
        });
    });
</script>

