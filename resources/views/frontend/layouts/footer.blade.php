<footer class="area-bg-one footer-area">
    <div class="container">
        <div class="footer-top ">
            <div class="row">
                <div class="col-md-6  col-lg-3 mb-4 mb-lg-0">
                    <a href="{{ url('/') }}">
                        <img width="170px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="Logo" >
                    </a>
                    <p>{{ $setting->first()->about }}</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="heading-five">Corporate</h5>
                    <ul class="arrow-list">
                        <li><a href="{{ route('about.us') }}" title="About Us">About Us</a></li>
                        <li><a href="{{ route('mission.vision') }}" title="Mission and Vision">Mission &amp; Vision</a></li>
                        
                        <li><a href="{{ route('contect') }}" rel="noopener">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2 mb-4 mb-lg-0">
                    <h5 class="heading-five">Legal</h5>
                    <ul class="arrow-list">
                        <li><a href="{{ route('privacy.policy') }}" title="Privacy Policy">Privacy pilicy</a></li>
                        <li><a href="{{ route('terms.condition') }}" title="Terms and Conditions">Terms & Condition	</a></li>
                       
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" style="text-align: center;">
                    <h5 class="heading-five">Download App</h5>
                    <div>
                        <div>
                            <span class="f-15">Download nikahbandhan app to get better experience and get notify when someone response</span>
                        </div>
                        <br />
                        <div>
                            <a class="d-none" href="#"><img src="{{ asset('frontend') }}/images/app-store.png" style="max-width:140px;" /></a> &nbsp; <a href="" target="_blank"><img src="{{ asset('frontend') }}/images/play-store.png" style="max-width:140px;" /></a>
                        </div>
                        <br />
                        <div class="social">
                            <div style="margin-top:5px;">
                                <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com"
                                   aria-label="Visit our facebook page" title="Visit our facebook page">
                                    <span class="d-none">facebook</span><i class="fa fa-facebook-f"></i>
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com"
                                   aria-label="visit our youtube page" title="Visit our youtube page">
                                    <span class="d-none">youtube</span><i class="fa fa-youtube-square"></i>
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="https://twitter.com"
                                   aria-label="visit our twitter page" title="Visit our twitter page">
                                    <span class="d-none">twitter</span><i class="fa fa-twitter"></i>
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com"
                                   aria-label="visit our linkedin page" title="Visit our linkedin page">
                                    <span class="d-none">linkedin</span><i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-top hide-desktop hide-mobile">
            <div class="row">
                <div class="col-12 center">
                    <div>
                        <div class="text-center footer-mobile-section-header">Download nikahbandhan Apps</div>
                        <div class="text-center">
                            <a class="d-none" href="#"><img src="{{ asset('frontend') }}/images/app-store.png" style="max-width:140px;" /></a> &nbsp; <a href="" target="_blank"><img src="{{ asset('frontend') }}/images/play-store.png" style="max-width:140px;" /></a>
                        </div>
                    </div>

                    <div class="footer-mobile-section-header text-center">Corporate</div>
                    <div class="text-center">
                        <a title="Register" href="register/account.html">Register</a> | <a title="Login" href="security/login.html">Login</a> | <a title="About Us" href="corporate/aboutus.html">About Us</a> | <a href="" target="_blank" rel="noopener" title="Lifestyle Blog">LifeStyle Blogs</a> | <a title="Terms and Conditions" href="corporate/TermsOfUse-2.html">Terms of Use</a> | <a title="Privacy" href="corporate/PrivacyPolicy-2.html">Privacy</a> | <a title="Contact Us" href="corporate/contactus.html">Contact us </a>
                    </div>
                    <div class="footer-mobile-section-header text-center">Customer Care</div>
                    <div class="text-center">
                        <div class="footer-icon" style="margin-top: 5px;">
                            <i class="fa fa-phone"></i>+88 09613821331
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="footer-bottom">
            <div class="row">
                <div class="col-12 text-center">
                    <details class="f-15">
                        <summary>Copyright &copy; 2024 Nikah Bandhan | All rights reserved.</summary>
                    </details>
                </div>
            </div>
        </div>
    </div>
</footer>