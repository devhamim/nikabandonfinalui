<header class="main-header">
    <div class="header-menu">
        <div class="custom-container container">
            <div class="row align-items-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <div class="logo" style="margin-top:8px;">
                        <a href="{{ url('/') }}">
                            <img width="170px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="Logo" >
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 d-xl-block d-none">
                </div>
                <div class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-4 d-flex justify-content-end align-items-center">
                    <div class="main-menu">
                        <ul class="navigation">
                            <li><a title="Create Profile" href="{{ route('member.registration') }}" style="text-transform: none; font-size: 16px;">Register</a></li>
                            <li><a title="Login" href="{{ route('member.login') }}" style="text-transform: none; font-size: 16px;">Login</a></li>
                        </ul>
                    </div>

                    {{-- <div class="right-box home-right-help">
                        <div>
                            <img src="{{ asset('frontend') }}/images/online-support3860.png?v=1" style="border-radius: 50%; border: 1px solid #F1494C; padding: 1px;" />
                        </div>
                        <div style="position:relative; top: 5px; left: 5px;">
                            <img src="{{ asset('frontend') }}/images/arrow-down.png" style="height: 24px; position:relative;right: 7px;" />
                        </div>

                        <!--Help tips-->
                        <div id="hp-help-div" class="home-help-tips home-help-tip-container">
                            <div class="help-tip-arrow-con">
                                <div class="help-tip-arrow"></div>
                            </div>
                            <div class="home-help-tip-bg">
                                <div style="letter-spacing:0.4px;">
                                    <div style="color:#777;">
                                        <div class="paddt5 paddl10">
                                            <div class="helpline-icon">
                                                <div class="fixed-helpline-icon">
                                                    <div>Help Line: +88 09613821331</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div style=" font-size: 13px; line-height: 17px; margin-top:10px; margin-bottom:15px;">
                                                    <span>Please call our customer care service at any time between 10am to 7pm.  </span>
                                                </div>
                                            </div>
                                            <div id="help-tip-bullet" class="fleft" style="padding-top:10px; margin-top: 10px; border-top: 1px dashed #ccc;">
                                                <a href="corporate/aboutus.html" class="arrow">About us</a>
                                                <a href="corporate/contactus.html" class="arrow">Contact us</a>
                                                <a href="help/faq.html" class="arrow">FAQ</a>
                                                <a href="corporate/sitemap.html" class="arrow">Sitemap</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>