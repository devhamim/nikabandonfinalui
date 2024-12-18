<div class="col-sm-3 mypage-left-col" style="margin-bottom: 20px;">
    <div class="mypage-menu-container">

        <div class="refine-search-container shadow">
            <div class="filter-container">
                <div class="filter-content mybm-myprofile-content back-leaf-white" style="padding-top: 0; padding-left:0; padding-right:0;">
                    <table style="width: 100%; text-align:left; margin-top: 10px; margin-bottom: 0px;">
                        <tr>
                            <td style="vertical-align:top;">
                                <div class="center">
                                    @if($customer->image != null)
                                        <img class="mybm-profile-photo" alt="" src="{{ asset('uploads/memberimage') }}/{{ $customer->first_image }}" style="width: 150px; height: 150px; border-radius: 50%; border:1px solid #dcdcdc;" />        
                                    @else
                                        @if($customer->gender == 'male')
                                            <img class="mybm-profile-photo" alt="" src="{{ asset('frontend') }}/images/no-photo-male.jpg" style="width: 150px; height: 150px; border-radius: 50%; border:1px solid #dcdcdc;" />
                                        @endif
                                        @if($customer->gender == 'female')
                                            <img class="mybm-profile-photo" alt="" src="{{ asset('frontend') }}/images/no-photo-female.jpg" style="width: 150px; height: 150px; border-radius: 50%; border:1px solid #dcdcdc;" />
                                            
                                        @endif
                                    @endif
                                    
                                    <div class="add-photo"><a style="text-decoration: none; color: #fff;" href="{{ route('member.manage.photo') }}">+</a></div>
                                </div>

                            </td>
                        </tr>
                    </table>

                    <div style="border-top: 1px solid #f2f2f2; margin-top:0px; padding:5px; text-align: center;">
                        <span>Profile ID: </span>{{ $customer->username }}<span style="font-weight: 500; color: #555;" id="profileId" class="profileId"></span>
                        &nbsp;<a class="linkViewProfile" href="{{ route('member.profile', Auth::guard('customer')->user()->username) }}" style="color: royalblue; font-weight:400;"> View</a>
                        |
                        <a class="linkEditProfile" href="{{ route('profile.update') }}" style="color: royalblue; font-weight: 400;"> Edit</a>
                    </div>

                    <div style="border-top: 1px solid #f2f2f2;padding: 10px;text-align: center;">
                        <span style=" font-weight: 500;color: #fff;font-size: 13px;background-color: yellowgreen;padding: 10px;padding-top: 5px;padding-bottom: 5px;border-radius: 10px;" class="membershipName">
                            @if(Auth::guard('customer')->user()->pay_active == 1)
                                Premium
                            @else
                                FREE Member
                            @endif
                        </span>
                        <div style="margin: 5px; font-weight: 400; color: orangered;" class="membershipExpireDate"></div>
                        <div style="margin: 5px;" class="messageBalance"></div>
                        @if(Auth::guard('customer')->user()->pay_active == 0)
                            <div class="center" style=" padding-top: 7px; padding-bottom: 4px;"><a class="btn-square btn-square-medium text-capitalize" style="width:180px; font-weight:400; padding: 3px;" href="{{ route('premium.package') }}">Upgrade Now</a></div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- <div class="filter-container">
                <div class="filter-header mybm-message-header">
                    <span>Messages</span>
                    <span style="float:right;"><i class="mybm-message-icon icon-minus-3"></i></span>
                </div>
                <div class="filter-content mybm-message-content">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container border-top-0"><a id="linkInbox" href="/message/list?Type=Inbox">Inbox</a><a href="/message/list/?Type=Inbox" class="inboxCounter"></a></li>
                        <li class="inner-list-container"><a href="/message/list?Type=SendItems">Sent Messages</a></li>
                    </ul>
                </div>
            </div> --}}
            
            <div class="filter-container">
                <div class="filter-header mybm-account-header">
                    <span>My Profile</span>
                    <span style="float:right;"><i class="mybm-account-icon icon-minus-3"></i></span>
                </div>
                <div class="filter-content mybm-account-content">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container border-top-0" id="editProfile"><a class="linkEditProfile" href="{{ url('/') }}">Dashboard</a></li>
                        <li class="inner-list-container border-top-0" id="editProfile"><a class="linkEditProfile" href="{{ route('profile.update') }}">Edit My Profile</a></li>
                        <li class="inner-list-container" id="changePhoto"><a href="{{ route('member.manage.photo') }}">Add/Change Photo</a></li>
                        {{-- <li class="inner-list-container" id="changeNid"><a href="/verification/documents">My NID</a></li> --}}
                        <li class="inner-list-container" id="editPartner"><a class="linkEditPartnerPreference" href="{{ route('partner.preferance.view') }}">Edit Partner Preference</a></li>
                        <li class="inner-list-container" id="viewProfile"><a class="linkViewProfile" href="{{ route('member.profile', Auth::guard('customer')->user()->username) }}">View My Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="filter-container">
                <div class="filter-header mybm-interest-header">
                    <span>Interesteds</span>
                    <span style="float:right;"><i class="mybm-interest-icon icon-minus-3"></i></span>
                </div>
                <div class="filter-content mybm-interest-content">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container border-top-0">
                            <a href="{{ route('interested.received.list') }}">Received Interested</a>
                        </li>
                        <li class="inner-list-container">
                            <a href="{{ route('interested.sent.list') }}">Sent Interested</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="filter-container">
                <div class="filter-header mybm-photo-header">
                    <span>My Favorites</span>
                    <span style="float:right;"><i class="mybm-photo-icon icon-minus-3"></i></span>
                </div>
                <div class="filter-content mybm-photo-content">
                    <ul class="ul-list-container padd-top-0">
                        <li class="inner-list-container border-top-0"><a href="{{ route('favorite.list') }}">Favorite List</a></li>
                    </ul>
                </div>
            </div>
            <div class="filter-container">
                <div class="filter-header mybm-settings-header">
                    <span>Settings</span>
                    <span style="float:right;"><i class="mybm-settings-icon icon-minus-3"></i></span>
                </div>
                <div class="filter-content mybm-settings-content">
                    <ul class="ul-list-container padd-top-0">
                        {{-- <li class="inner-list-container border-top-0"><a href="/account/changepassword">Change Password</a></li>
                        <li class="inner-list-container"><a href="/account/deleteaccount">Delete My Account</a></li> --}}
                        <li class="inner-list-container"><a href="{{ route('member.logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>