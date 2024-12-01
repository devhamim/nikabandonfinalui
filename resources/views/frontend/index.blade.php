@extends('frontend.layouts.app')
@section('content')
<section class="hero-area" style="background: url('{{ asset('frontend/images/main-cover-photo.jpg') }}')">
    <div class="custom-container container pos-relative home-search-container">
        <div class="hero-content">
            <div class="slider-text">                        
                <h1 class="slider-heading">Most Trusted & Secured <br /> Matrimony Site in Bangladesh</h1>
            </div>
        </div>
        <div class="hero-form">
            <form action="{{ route('member.register') }}" method="POST">
                @csrf
                <div class="form-wrapper">
                    <div class="select width-100p">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required class="form-control form-group-margin">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="select width-100p">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="form-control form-group-margin">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="select width-100p">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control form-group-margin">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="select width-100p">
                        <label>Created By</label>
                        <select id="profession" name="profile_created_by" required class="form-control form-group-margin form-select">
                            <option selected value="Self">Self</option>
                            <option value="Parents">Parents</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Relative">Relative</option>
                        </select>
                        @error('profile_created_by')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="select width-100p">
                        <button type="submit" class="btn-square text-capitalize" style="padding: 4px 20px;">Submit</button>
                    </div>
                </div>
            </form>
            <div class="col-12 hide-mobile">
                <p class="text-center">
                    <img class="me-2" src="{{ asset('frontend') }}/images/verified.svg" alt="Search Profile" title="Search Securely" />We carefully protect your information
                </p>
            </div>
        </div>
    </div>
</section>

{{-- <section class="hide-desktop" style="background-color: #f5f5f5; padding-bottom: 30px;">
    <div class="row">
        <div class="col-12 center">
            <div>
                <div class="text-center footer-mobile-section-header">Download bdmarriage Apps</div>
                <div class="text-center">
                    <a class="d-none" href="#"><img src="{{ asset('frontend') }}/images/app-store.png" style="max-width:140px;" /></a> &nbsp; <a href="https://play.google.com/store/apps/details?id=com.bdmarriage.application" target="_blank"><img src="{{ asset('frontend') }}/images/play-store.png" style="max-width:140px;" /></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<div class="sec-padding-30-40">
    <div class="container homepage-mob-adj" style="text-align:center; padding:30px; background: none;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2"> <span class="main-color">How Nikah bondhan works</span> </h2>
                <div style="text-align:center; padding-bottom:20px;"><h4 style="font-weight:400; font-size:18px;">Get started in nikahbandhan.com in 3 easy steps</h4></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" data-animation="fadeIn" data-animation-delay="00">
                <div class="service-icon">
                    <a class="home-big-icon" href="{{ route('member.registration') }}"><img alt="create biodata" src="{{ asset('frontend') }}/images/Create-profile.png"></a>
                </div>
                <div class="service-content">
                    <h4 class="">Create Your Profile</h4>
                    <p class="sub-title">Create your detail profile, add photos and describe your partner preference </p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeIn" data-animation-delay="00">
                <div class="service-icon">
                    <a class="home-big-icon" href="search/advance.html"><img alt="search partner" src="{{ asset('frontend') }}/images/Search-partner.png"></a>
                </div>
                <div class="service-content">
                    <h4 class="">Find Your Partner</h4>
                    <p class="sub-title">Search your preferred partner by location, education, interest and so on </p>
                </div>
            </div>
            <div class="col-md-4" data-animation="fadeIn" data-animation-delay="00">
                <div class="service-icon">
                    <a class="home-big-icon" href="security/login.html"><img alt="marriage security" src="{{ asset('frontend') }}/images/communication.png"></a>
                </div>
                <div class="service-content">
                    <h4 class="">Start Communication</h4>
                    <p class="sub-title">Start communication with suitable profiles by sending message &amp; emails </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec-padding-40-60 mv-padd-bottom-20">
    <div class="container">
        <div class="text-left-sm text-center" style="margin-bottom: 30px;">
            <h3 class="h2 mb-3 md-br-remove text-center">
                <span class="main-color">Nikah</span> Assistant Service
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-6 right">
                <img src="{{ asset('frontend') }}/images/vip-assistant.jpg" style="max-height: 290px;" />
            </div>
            <div class="col-lg-6">
                <div class="timeline">
                    <div class="outer">
                        <div class="card">
                            <div class="info">
                                <h3 class="title">Assign Personal Advisor</h3>                                        
                            </div>
                        </div>
                        <div class="card">
                            <div class="info">
                                <h3 class="title">Advisor Will Manage Your Profile</h3>                                        
                            </div>
                        </div>
                        <div class="card">
                            <div class="info">
                                <h3 class="title">Handpick Matches For You</h3>                                        
                            </div>
                        </div>
                        <div class="card">
                            <div class="info">
                                <h3 class="title">Arranging Meetings</h3>                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <a class="btn-square text-capitalize" href="assistant.html">View More Details</a>
            </div>
        </div> --}}
    </div>
</section>

<section class="area-bg-one">
    <div class="area-bg-right">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-lg-6 py-5 mv-padd-top-20">
                    <h3 class="h2 mb-4">Why choose <span class="main-color">Nikah Bondhan</span></h3>
                    <ul class="check-square">
                        <li>Register for Free!</li>
                        <li>100% human verified profiles</li>
                        <li>Chat, Voice & Video calling</li>
                        <li>Private, personalized, and highly confidential service</li>
                        <li>Halal, safe and secured Matrimony site in Bangladesh</li>
                    </ul>
                    <a title="Find your life partner" class="btn-square mt-3 text-center w-60 text-capitalize" href="search/advance.html">Find your Partner</a>
                </div>
                <div class="col-lg-6 d-block">
                    <div class="video-box image-box">
                        <img class="lazyloaded" src="{{ asset('frontend') }}/images/video-thumb.jpg" title="video" data-src="/images/video-thumb.jpg" alt="Why Choose Nikah Bandhan">
                        <a data-fancybox="" aria-label="Youtube" href="#" class="video-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec-padding-40-60 area-bg-one">
    <div class="container">
        <div class="text-left-sm text-center mb-5">
            <h4 class="h2 mb-3 md-br-remove text-center"> <span class="main-color">Membership </span>Plans</h4>
            <p class="mb-4">With a paid membership, you can seamlessly connect with your prospects and get more responses. Many have found their love. Are you ready to meet your Soul Mate?</p>

        </div>
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-lg-4">
                <div class="price-box pricing-white">
                    <h4 class="heading-one main-color">FREE</h4>
                    <ul class="check-square free-list">
                        <li class="yes">Search Profiles</li>
                        <li class="yes">Shortlist & Send Interest</li>
                        <li class="yes">Photo Album</li>
                        <li class="no">Chat & Messaging</li>
                        <li class="no">View contacts of members you like</li>
                        <li class="no">Priority customer support</li>
                        <li class="no">Profile Boost</li>
                    </ul>
                    <a title="Free Register" class="btn-square mt-5 text-capitalize" href="{{ route('member.registration') }}">Free Register</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-box pricing-two">
                    <h4 class="heading-one ">Gold</h4>
                    <ul class="check-square">
                        <li>Search Profiles</li>
                        <li>Shortlist & Send Interest</li>
                        <li>Photo Album</li>
                        <li>Chat & Messaging</li>
                        <li>View contacts of members you like</li>
                        <li>Priority customer support</li>
                        <li>Profile Boost</li>
                    </ul>
                    <a class="btn-square mt-5 text-capitalize back-image-none" style="font-weight: 500;" href="{{ route('member.registration') }}">Gold Register</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="price-box pricing-white">
                    <h4 class="heading-one main-color">Silver</h4>
                    <ul class="check-square free-list">
                        <li>Search Profiles</li>
                        <li>Shortlist & Send Interest</li>
                        <li>Photo Album</li>
                        <li>Chat & Messaging</li>
                        <li>View contacts of members you like</li>
                        <li>Priority customer support</li>
                        <li>Profile Boost</li>
                    </ul>
                    <a title="Free Register" class="btn-square mt-5 text-capitalize" href="{{ route('member.registration') }}">Silver Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="sec-padding-40-60 blue-grad-back">
    <div class="container">
        <div class="text-left-sm text-center mb-3">
            <h4 class="h2 mb-3 md-br-remove text-center"> <span class="main-color">Browse </span>Profiles</h4>
            <p class="mb-4">We search in our system based on your preferences. With a paid membership, you can seamlessly connect with your prospects and get more responses. <br /> Browse the categories and Match with your partner.</p>

        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                    Division
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                    Education
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="country-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">
                    Living Country
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Profession-tab" data-bs-toggle="tab" data-bs-target="#Profession"
                        type="button" role="tab" aria-controls="Profession" aria-selected="false">
                    Profession
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="bp-tab-items">
                    <a href="search/resultf329.html?searchby=division&amp;v=dhaka" title="Dhaka Matrimony">Dhaka</a>
                    <a href="search/resultae80.html?searchby=division&amp;v=chittagong" title="Chittagong Matrimony">Chittagong</a>
                    <a href="search/result5ee4.html?searchby=division&amp;v=sylhet" title="Sylhet Matrimony">Sylhet</a>
                    <a href="search/resulta3ed.html?searchby=division&amp;v=barishal" title="Barishal Matrimony">Barisal</a>
                    <span class="tab-items-row2">
                        <a href="search/result45f4.html?searchby=division&amp;v=mymensing" title="Mymensign Matrimony">Mymensing</a>
                        <a href="search/result7449.html?searchby=division&amp;v=khulna" title="Khulna Matrimony">Khulna</a>
                        <a href="search/result89e0.html?searchby=division&amp;v=rajshahi" title="Rajshahi Matrimony">Rajshahi</a>
                        <a href="search/result355f.html?searchby=division&amp;v=rangpur" title="Rangpur Matrimony">Rangpur</a>
                    </span>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="education-tab">
                <div class="bp-tab-items">
                    <a href="search/resulta2c0.html?searchby=education&amp;v=Doctorate-/-Phd-/-MPhil" title="Doctorate / Phd / MPhil">Doctorate / Phd / MPhil</a>
                    <a href="search/result75fe.html?searchby=education&amp;v=Masters" title="Masters">Masters</a>
                    <a href="search/result5692.html?searchby=education&amp;v=Bachelors" title="Bachelors">Bachelors</a>
                    <a href="search/result6b18.html?searchby=education&amp;v=FCPS-/-MD" title="FCPS / MD">FCPS / MD</a>
                    <a href="search/result502a.html?searchby=education&amp;v=MBBS-/-BDS" title="MBBS / BDS">MBBS / BDS</a>
                    <span class="tab-items-row2">
                        <a href="search/result5c11.html?searchby=education&amp;v=Undergraduate" title="Undergraduate">Undergraduate</a>
                        <a href="search/resultb561.html?searchby=education&amp;v=Diploma" title="Diploma">Diploma</a>
                        <a href="search/result0ef7.html?searchby=education&amp;v=Professional-Degree" title="Professional Degree">Professional Degree</a>
                        <a href="search/result2af3.html?searchby=education&amp;v=HSC-/-A-Label" title="HSC / A-Label">HSC / A-Label</a>
                        <a href="search/result7f2e.html?searchby=education&amp;v=" title="View More">View More</a>
                    </span>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="country-tab">
                <div class="bp-tab-items">
                    <a href="search/result8bbb.html?searchby=country&amp;v=Bangladesh" title="Bangladesh">Bangladesh</a>
                    <a href="search/result9b4f.html?searchby=country&amp;v=USA" title="USA">USA</a>
                    <a href="search/result061e.html?searchby=country&amp;v=United-Kingdom" title="United Kingdom">United Kingdom</a>
                    <a href="search/resultb196.html?searchby=country&amp;v=Canada" title="Canada">Canada</a>
                    <a href="search/resultb0ab.html?searchby=country&amp;v=Saudi-Arabia" title="Saudi Arabia">Saudi Arabia</a>
                    <span class="tab-items-row2">
                        <a href="search/result351a.html?searchby=country&amp;v=Malaysia" title="Malaysia">Malaysia</a>
                        <a href="search/result3227.html?searchby=country&amp;v=Italy" title="Italy">Italy</a>
                        <a href="search/result0cc6.html?searchby=country&amp;v=Germany" title="Germany">Germany</a>
                        <a href="search/result4410.html?searchby=country&amp;v=Japan" title="Japan">Japan</a>
                        <a href="search/resulte157.html?searchby=country&amp;v=" title="Other Countries">Other Countries</a>
                    </span>
                </div>
            </div>
            <div class="tab-pane fade" id="Profession" role="tabpanel" aria-labelledby="Profession-tab">
                <div class="bp-tab-items">
                    <a href="search/result3827.html?searchby=profession&amp;v=1" title="Accounting & Banking">Accounting & Banking</a>
                    <a href="search/resultfacc.html?searchby=profession&amp;v=5" title="Airline & Aviation">Airline & Aviation</a>
                    <a href="search/result5506.html?searchby=profession&amp;v=8" title="Beauty & Fashion">Beauty & Fashion</a>
                    <a href="search/resultd464.html?searchby=profession&amp;v=11" title="Engineering">Engineering</a>
                    <span class="tab-items-row2">
                        <a href="search/result9069.html?searchby=profession&amp;v=10" title="Education & Training">Education & Training</a>
                        <a href="search/result4c28.html?searchby=profession&amp;v=14" title="Medical & Healthcare">Medical & Healthcare</a>
                        <a href="search/result8f77.html?searchby=profession&amp;v=16" title="Business">Business</a>
                        <a href="search/resultec30.html?searchby=profession&amp;v=9" title="Defense">Defense</a>
                        <a href="search/result8910.html?searchby=profession&amp;v=" title="View More">View More</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="sec-padding-50-50">
    <div class="container ">
        <div class="cta font-white">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h5 class="h2 font-white">
                        Find Someone Special at <br>
                        nikahbandhan.com
                    </h5>
                    <p>Safe, Secure and Trusted Matrimony site in Bangladesh</p>
                </div>
                <div class="col-lg-4">
                    <a title="free registration" class="btn-square back-image-none text-capitalize" href="{{ route('member.registration') }}">Register Free  Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqarea" class="sec-padding-50-50 area-bg-one">
    <div class="container" style="margin-bottom: 40px;">
        <div class="faq">
            <h5 class="h2 mb-4 text-center">
                Frequently Asked <span class="main-color">Questions </span>
            </h5>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Is It FREE to create profile in Nikah Bandhan?
                        </button>
                    </h6>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="fh1"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Absolutely. Creating a profile in Nikah Bandhan is completely FREE and no service charge is required. Create your profile and enjoy the exciting services.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            How can i create my profile on nikahbandhan.com?
                        </button>
                    </h6>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="fh2"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            It's very easy & simple. Just click <a href="{{ route('member.registration') }}" target="_blank" rel="noopener noreferrer">Register Now</a> to go to the registration page and follow the steps by filling up all the required information.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            How long does it take to create my profile?
                        </button>
                    </h6>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="fh3"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            It will take less than 5 minutes. However, we suggest you fill up all information nicely so that others will get a better understanding of you.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Is mandatory to add a phone number & email address?
                        </button>
                    </h6>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="fh4"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Mobile is required. We would suggest you provide the email also. It will help you to get better notifications when someone communicates with you.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            What is the advantage of verifying a mobile number?
                        </button>
                    </h6>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="fh5"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Verifying your phone number helps you to get a better response. It will also build the trust and authenticity of your profile.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            What is Profile ID?
                        </button>
                    </h6>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="fh6"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Profile ID is a unique auto-generated Id. All members have a unique ID on nikahbandhan.com. Other members can search your profile by your Profile ID.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            How to login my account?
                        </button>
                    </h6>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="fh7"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Please click the link below to login to your account and put all the necessary information to get access to your accounts. Link to log in: <a target="_blank" href="{{ route('member.login') }}">Login</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            Can I update my profile data?
                        </button>
                    </h6>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="fh8"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. You can update your profile data any time you want. Just visit your profile and go to the edit my profile segment.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h6 class="accordion-header" id="fh9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            Are my photos are secure?
                        </button>
                    </h6>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="fh9"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. Your photos are secure. On nikahbandhan.com, all photos are coded and tamper-proof.
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-2">Looking for something else? <a class="main-color" href="#">Go to detailed FAQs page</a></p>
        </div>
    </div>
</section>

<section id="appSection" style="background-color: #f5f5f5; padding-top:30px; padding-bottom:20px;" class="hide-mobile">
    <div class="container" style="background-image: url(images/dot-back-1.png) !important; background-position: center; background-size: contain;">
        <div class="row">
            <div class="col-lg-7" style="position:relative;">
                <div class="vertical-center">
                    <div style=" font-size: 18px; font-weight: 500; color: #777; line-height: 25px;">Connect with</div>
                    <h5 class="h2">Nikah <span class="main-color">Bandhan</span></h5>
                    <br />
                    <div style="margin-top:20px; margin-bottom: 20px;">
                        
                        <div style=" font-size: 22px; font-weight: 500; color: #444; line-height: 25px;">Simple & Quick Search, Stay Notified and Get the best Experience of Matchmaking.</div>
                        <br />
                        <br />
                        <a href="#" target="_blank"><img src="{{ asset('frontend') }}/images/play-store.png" style="max-width: 170px;" /></a> &nbsp; <a class="d-none" href="#"><img src="{{ asset('frontend') }}/images/app-store.png" style="max-width: 170px;" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="text-align:right;">
                <img src="{{ asset('frontend') }}/images/bdmarriage-app3860.jpg" />
            </div>
        </div>
    </div>
</section>

<section style="background-color: #dcdcdc; padding: 40px;" class="hide-mobile">
    <div class="container">
        <div class="row">
            <div class="col-12 m-auto text-center">
                <span style="font-size:1.7rem; font-weight: 500;">Want to know more about Nikah Bandhan and its services?</span>
                <div style="margin-top: 25px;">
                    <a class="btn-square-medium text-capitalize" href="corporate/contactus.html" style="position:relative; top: -15px; background:#fff; color: #444; border: 1px solid #999!important; font-weight: 500; padding: 11px 20px; border-radius: 5px; line-height: 30px;"><i class="fa fa-envelope">&nbsp;</i>Contact Us</a> &nbsp;&nbsp;
                    <a class="btn-square btn-square-medium text-capitalize" href="tel:#" style="padding-left: 30px; padding-right: 30px; font-weight: 500;"><i class="fa fa-phone">&nbsp;</i>+88 01876674794</a>
                </div>
            </div>
            {{-- <div class="col-3">
                <div style="position: relative;">
                    <img src="{{ asset('frontend') }}/images/customer-support.png" style="position: absolute; bottom: -140px; height: 250px; right: 0;" />
                </div>

            </div> --}}
        </div>
    </div>
</section>
@endsection


