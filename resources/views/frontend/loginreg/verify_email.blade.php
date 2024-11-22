@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <div class="form-page shadow" style="margin-top:0px; margin-bottom:30px; width: 500px;">

                        <div class="row" style="margin-left:0; margin-right:0;">
                            <div class="col-sm-12">
                                <div class="login-padding-ma" style="padding: 50px; padding-top:0; padding-bottom:0; max-width: 450px; margin: 0px auto;">

                                    <div class="form-group">
                                        <h3 class="col-sm-12 control-label" style="text-align:center; padding:10px; margin-top:10px;">Verify Your Email Account</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input id="email" readonly style="height:45px; text-align: center; font-size: 18px !important; background-color: #fff;" type="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 control-label center">
                                                <span class="checkbox-label hide-mobile">Yes. This is my email account</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12" style="text-align:center;">
                                                <button style="width: 100%; font-size: 16px; border-radius: 6px; font-weight: 400;" id="btnConfirmEmailAccount" type="submit" class="login bm-button">Send Me Verification Code</button>
                                                <div class="loading" style="padding-top: 10px; display:none;">
                                                    <img id="send-loading" src="/Images/ajax-loader-small.gif" /> <span style="font-size:14px; font-weight:600; color:green;" id="send-status-msg">Sending Verification Code...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="border-top: 1px solid #dcdcdc; margin-left: 0; margin-right: 0;">
                            <div class="col-sm-12 mobile-pad-10" style="padding: 50px; padding-top:20px; padding-bottom:30px; text-align:left;">
                                <div style="font-size:14px; padding-bottom:5px; text-align: center;">After confirm your email account, click "Send Me Verification Code" button to receive verification code to your email.</div>
                                <div style=" font-style: italic; color: #888;">
                                    Verification code may take few moments to arrive. Please write the verification code below and click "Verify My Account"
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <div class="row">
                                        <div class="col col-sm-3 center">
                                            <img src="/Images/email-verification-code.png" />
                                        </div>
                                        <div class="col col-sm-9 center" style="position:relative;">

                                            <table style="width: 100%; position: absolute; bottom: 0; margin-bottom: 25px;">
                                                <tr>
                                                    <td>
                                                        <div class="verification-code-container">
                                                            <input id="verify-digit1" class="verification-code" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="verification-code-container">
                                                            <input id="verify-digit2" class="verification-code" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="verification-code-container">
                                                            <input id="verify-digit3" class="verification-code" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="verification-code-container">
                                                            <input id="verify-digit4" class="verification-code" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div style="text-align:center; border-top:1px solid #dcdcdc;padding-top: 10px;">
                                    <div class="token-verifying-loader" style="font-weight:500; margin-bottom:10px; display:none;"><img src="/images/ajax-loader.gif" style="width: 22px;" />&nbsp;&nbsp;Verifying Token...</div>
                                    <button style="padding-left:30px; padding-right:30px; font-size: 15px; border-radius:6px;" id="btnVerify-email-Token" type="submit" class="bm-button gradient-button gradient-button-3">Verify My Account</button>
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

