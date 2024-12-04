<div class="hidden-header ribon-height"></div>
<div class="site-header clearfix ie-header header-shadow">

    <!----------------------------- NEW NAVBAR IMPLEMENTATION ------------------------------->

    <!-- Mobile view -->
    <div class="mobile-view hide-desktop">
        @include('frontend.memberdashboard.sitebar_mobile')
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

                            @if($customer->image != null)
                                <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('uploads/memberimage') }}/{{ $customer->first_image }}">
                            @else
                                @if($customer->gender == 'male')
                                    <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-male.jpg">
                                @endif
                                @if($customer->gender == 'female')
                                    <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-female.jpg">
                                @endif
                            @endif
                            
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
                            @if($customer->image != null)
                                <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('uploads/memberimage') }}/{{ $customer->first_image }}">
                            @else
                                @if($customer->gender == 'male')
                                    <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-male.jpg">
                                @endif
                                @if($customer->gender == 'female')
                                    <img id="header-profile-photo" alt="" style="width: 46px; height: 46px; border-radius: 50%; border: 2px solid #bbb;" src="{{ asset('frontend') }}/images/no-photo-female.jpg">
                                @endif
                            @endif
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
                        <a class="header-text" href="{{ route('premium.package') }}">
                            <span>Packages</span>
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

