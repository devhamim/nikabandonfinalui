@extends('frontend.loginreg.app')
@section('content')
<link href="{{ asset('frontend') }}/css/Pages/membership-plan.css" rel="stylesheet" />
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <div class="big-title text-center" style="padding-top:10px;">
                        <h1>Choose your membership <strong>Plan</strong></h1>
                        <br />
                        <div class="offer-container" style="font-size: 24px; color: #fff; padding: 20px; background: linear-gradient(to right,rgba(174,124,161,0.99) 0,#4997ab 92%,#4997ab 100%); margin-left: 5px; margin-right: 5px;">
                            <div style="margin-bottom:15px;">
                                <span class="offer-text" style="font-weight: 500; float:left;">Flat 70% Off till 31st July!</span>
                                <span id="offer-duration" style="float: right;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="center" style="text-align: center; margin: 5px; margin-bottom: 15px;">

                        <div class="section" style="padding-top: 5px; padding-bottom: 10px; background-color: #fff !important; border-top: 3px solid green;">
                            <div class="container11" style="padding-bottom:20px; background: none;">
                                <div class="pricing-tables grid-5 clearfix">

                                    <div class="pricing-table" style="text-align:left;">
                                        <div class="plan-name">
                                            <h3 style="padding-left: 10px;">Packages</h3>
                                        </div>
                                        <div class="plan-price">
                                            <div class="price-value" style="text-align: left; padding-left: 10px; color: #000; padding-top: 24px; padding-bottom: 24px;">Amount</div>
                                        </div>
                                        <div class="plan-list">
                                            <ul style="text-align: left; color: #444; font-weight: 400;">
                                                <li><strong>Create Profile</strong></li>
                                                <li><strong>Search Profile</strong></li>
                                                <li><strong>Send Interest</strong></li>
                                                <li><strong>Chatting</strong></li>
                                                <li><strong>Express Support</strong></li>
                                                <li><strong>Interested</strong></li>
                                                <li><strong>Validity</strong></li>
                                            </ul>
                                        </div>
                                        <div class="plan-signup">

                                        </div>
                                    </div>

                                    <div class="pricing-table package-free">
                                        <div class="plan-name">
                                            <h3>FREE</h3>
                                        </div>
                                        <div class="plan-price">
                                            <div class="price-value" style="padding-top: 24px; padding-bottom: 24px;">-</div>
                                        </div>
                                        <div class="plan-list">
                                            <ul>
                                                <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                <li><i class="glyphicon glyphicon-remove price-plan-no"></i></li>
                                                <li><i class="glyphicon glyphicon-remove price-plan-no"></i></li>
                                                <li><i class="glyphicon glyphicon-remove price-plan-no"></i></li>
                                                <li><i class="glyphicon glyphicon-remove price-plan-no"></i></li>
                                            </ul>
                                        </div>
                                        <div class="plan-signup">

                                        </div>
                                    </div>
                                    @foreach($packages as $package)
                                        <div class="pricing-table">
                                            <div class="plan-name">
                                                <h3>{{ $package->name }}</h3>
                                            </div>
                                            <div class="plan-price">
                                                {{-- <div class="off-price">50% Off</div> --}}
                                                <div class="cutt-price">{{ $package->discount_price }} Tk</div>
                                                <div class="price-value">{{ $package->price }} Tk</div>
                                            </div>
                                            <div class="plan-list">
                                                <ul>
                                                    <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                    <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                    <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                    <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                    <li><i class="icon-check-1 price-plan-yes"></i></li>
                                                    <li>{{ $package->interested }}</li>
                                                    <li>{{ $package->validity }} Days</li>
                                                </ul>
                                            </div>
                                            <div class="plan-signup">
                                                <a id="plan-bronze" href="{{ route('payment.view', $package->id) }}" class="bm-button theme-backcolor">&nbsp; Select &nbsp;</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="paymenttype-section-mobile" id="yourPlan" style="background-color: #fff; padding: 30px; border:2px dashed #dcdcdc; margin-left: 5px; margin-right: 5px;">
                        {{-- <div style="padding-top:10px; padding-bottom:30px;">
                            <div class="payment-type-header">Payment Online</div>
                            <div>
                                <span>
                                    <img class="ssl-payment-icons" src="/images/sslcommerz-payments.png" />
                                </span>
                                <button id="payment-procced" class="btn-square btn-square-medium text-capitalize" style="font-size: 17px; margin-left: 20px; font-weight: 600; height: 37px; padding-top: 3px;">Pay Now</button>
                            </div>
                        </div> --}}
                        <div style="border-top:1px solid #dcdcdc; padding-top:20px; padding-bottom: 20px;">
                            <span class="payment-type-header">Payment Offline</span>
                            <div>
                                <span>You can pay offline by following bKash account</span>
                            </div>
                            <div style="margin-top:10px; margin-bottom:10px;">
                                <div>
                                    <b>Merchant Account: </b><b style="color:blue;">01876674794</b>
                                </div>
                                <div>
                                    <b>Personal Account : </b><b style="color:blue;">01876674794</b>
                                </div>
                                <div class="mobile-paybkash-ins" style="margin-top:5px;">
                                    You can pay your membership amount to our above Merchant or Personal bKash account. After sending your payment, please send us SMS your Mobile number and TrxID (Transaction ID) to <b>01876674794</b> <i>(Sample SMS text: TrxID=13876512, Mobile=01876674794)</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

