@if(Auth::guard('customer')->user())
    <div class="side-drawer position-fixed" style="left: 0px;">
        <div class="h-100 bg-white">
            <div>
                <a href="{{ route('member.logout') }}" style="position:absolute; top:2px; left: 5px;">Sign out</a>
                <i class="icon-left-open-big" style="position: absolute; right: 0px; top: 2px; font-size: 24px;" onclick="closeSideDrawer()"></i>
                <div class="center" style="height: 110px;">
                    @if($customer->image != null)
                        <img class="mybm-profile-photo" alt="" src="{{ asset('uploads/memberimage') }}/{{ $customer->first_image }}" style="width: 80px; height: 80px; border-radius: 50%; border:1px solid #dcdcdc;">   
                    @else
                        @if($customer->gender == 'male')
                            <img class="mybm-profile-photo" alt="" src="{{ asset('frontend') }}/images/no-photo-male.jpg" style="width: 80px; height: 80px; border-radius: 50%; border:1px solid #dcdcdc;">
                        @endif
                        @if($customer->gender == 'female')
                            <img class="mybm-profile-photo" alt="" src="{{ asset('frontend') }}/images/no-photo-female.jpg" style="width: 80px; height: 80px; border-radius: 50%; border:1px solid #dcdcdc;">
                        @endif
                    @endif
                    <div class="add-photo"><a style="text-decoration: none; color: #fff;" href="{{ route('member.manage.photo') }}">+</a></div>
                </div>
                <div style="border-top: 1px solid #f2f2f2; margin-top:0px; padding:10px; text-align: center;">
                    <span>Profile ID:</span>&nbsp;<span style="font-weight: 500; color: #555;" class="profileId">
                        {{ $customer->username }}
                    </span>
                    &nbsp;<a class="linkViewProfile" href="{{ route('member.profile', Auth::guard('customer')->user()->username) }}" style="color: royalblue; font-weight:400;"> View</a>
                    |
                    <a class="linkEditProfile" href="{{ route('profile.update') }}" style="color: royalblue; font-weight: 400;"> Edit</a>
                </div>
                <div style="border-top: 1px solid #f2f2f2;padding: 5px;text-align: center;">
                    <span>Account Type:</span><span style="padding-left: 5px; font-weight: 500; color: #555; font-size: 15px;" class="membershipName">
                        @if(Auth::guard('customer')->user()->pay_active == 1)
                            Premium
                        @else
                            FREE Member
                        @endif
                    </span>
                    <div style="padding-left:5px; color: orangered;" class="membershipExpireDate"></div>
                    {{-- <div style="margin: 5px;" class="messageBalance">Message Balance: <b>3</b></div> --}}
                    @if(Auth::guard('customer')->user()->pay_active == 0)
                        <div class="center" style=" padding-top: 7px; padding-bottom: 4px;"><a class="btn-square btn-square-medium text-capitalize" style="width:180px;" href="{{ route('premium.package') }}">Upgrade Now</a></div>
                    @endif
                    
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
                <div class="filter-header mybm-interest-header">
                    <span><i class="icon-info-circled-1"></i>&nbsp;Interesteds</span>
                    <span style="float:right;"><i class="mybm-interest-icon icon-plus-3"></i></span>
                </div>
                <div class="filter-content mybm-interest-content" style="display: none;">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container padd-top-0">
                            <a href="{{ route('interested.received.list') }}"><i class="icon-right-1"></i> Received Interested</a>
                            
                        </li>
                        <li class="inner-list-container"><a href="{{ route('interested.sent.list') }}"><i class="icon-left-1"></i> Sent Interested</a></li>
                    </ul>
                </div>
            </div>
            <div class="filter-container">
                <div class="filter-header mybm-photo-header">
                    <span><i class="icon-heart-1"></i>&nbsp;My Favorites</span>
                    <span style="float:right;"><i class="mybm-photo-icon icon-plus-3"></i></span>
                </div>
                <div class="filter-content mybm-photo-content" style="display: none;">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container padd-top-0" style="border-bottom: 0;"><a href="{{ route('favorite.list') }}"><i class="icon-star"></i> Favorite List</a></li>
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
                        {{-- <li class="inner-list-container" style="border-bottom: 0;"><a href="/account/deleteaccount"><i class="icon-trash"></i> Delete My Account</a></li> --}}

                        <li class="inner-list-container" style="border-bottom: 0;"><a href="{{ route('member.logout') }}"><i class="icon-trash"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div style="margin-top:10px;">
                <div style="padding-left:15px; font-weight: 500; font-size:13px;">Hotline: {{ $setting->first()->number_one }}</div>
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
                <div style="font-weight: 500; font-size:13px;">Hotline: {{ $setting->first()->number_one }}</div>
            </div>
        </div>
    </div>
@endif