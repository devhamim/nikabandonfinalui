@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <style type="text/css">
                        .menu-bg {
                            background-color: #f2f1f1;
                        }

                        ul.ul-menuTab {
                            list-style-type: none;
                        }

                        .menu-font {
                            font-family: "Roboto", "sans-serif";
                            font-weight: 300;
                        }

                        .menu-item-color {
                            color: #34495e;
                        }

                        ul.ul-menuTab li {
                            float: left;
                            text-align: center;
                            border-right: 1px solid #bbb;
                        }

                        li.selected {
                            border-bottom: 2px solid #df292f;
                        }

                    </style>

                    <link href="{{ asset('frontend') }}/css/Index/css/index.css" rel="stylesheet" />
                    <link href="{{ asset('frontend') }}/css/Index/css/font-awesome.min.css" rel="stylesheet" />

                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('payment.methode.store') }}" method="post">
                                @csrf
                                <div class="bg-white back-leaf-white shadow mv-no-shadow" style="padding: 20px; margin: 0px auto; margin-bottom: 30px;">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-8 m-auto" style="font-weight: 600; padding: 5px;">
                                                <div class="message center" >
                                                    <h3>Payment Method</h3>
                                                    
                                                </div>
                                                <p>You can pay bKash account</p>
                                                    <p>Merchant Account: 01876674794</p>
                                                    <p>Personal Account : 01876674794</p>
                                                    <p>You can pay your membership amount to our above Merchant or Personal bKash account. After sending your payment, with 24 hour your account will be active</p>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="packages" name="packages" value="{{ $packages->id }}" type="hidden" class="form-control">
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Name:</h6>
                                            <div class="col-sm-8">
                                                <input id="name" name="name" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Payment:</h6>
                                            <div class="col-sm-8">
                                                <select name="payment" class="form-control" id="">
                                                    <option value="bkash">Bkash</option>
                                                    <option value="nagad">Nagad</option>
                                                    <option value="rocket">Rocket</option>
                                                    <option value="upay">Upay</option>
                                                    <option value="bank">Bank</option>
                                                    <option value="card">Card</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Number:</h6>
                                            <div class="col-sm-8">
                                                <input id="number" name="number" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Transaction ID:</h6>
                                            <div class="col-sm-8">
                                                <input id="trxid" name="trxid" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <h6 class="col-sm-3 m-ta-l" style="text-align:right;">Message:</h6>
                                            <div class="col-sm-8">
                                                <textarea name="message" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <h3 class="col-sm-3 control-label"></h3>
                                            <div class="col-sm-8">
                                                <button  type="submit" class="btn-square btn-square-medium text-capitalize">Submit</button>
                                                <span class="status-msg" style="display:none;">Sending Message...</span>
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
    </div>
</div>

@endsection
