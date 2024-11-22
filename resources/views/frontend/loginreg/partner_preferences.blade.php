@extends('frontend.loginreg.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">
                    <div class="page-banner no-subtitle" style="border: 1px solid #dcdcdc;">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 id="form-header-label">Your Partner Preferences</h3>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('partner.preferences.store') }}" method="POST" style="border: 1px solid #dcdcdc; background-color: #fff; padding-top: 30px; border-top: 0;">
                        <div class="form-horizontal partner-preference-container">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="login-section">
                                        <div class="row form-group partner-gender">
                                            <label class="col-sm-3 control-label">Partner Gender</label>
                                            <div class="col-sm-9">
                                                <label>
                                                    <i class="icon-male" style="color: green; font-size: 20px;"></i>
                                                    <input type="radio" name="partner_gender" class="form-check-input" id="male" value="male" style="position: relative; left: -6px; top: 2px;" required>
                                                    Male
                                                </label>
                                                <label class="padd-left-10" style="padding-left: 20px;">
                                                    <i class="icon-female" style="color: deeppink; font-size: 20px;"></i>
                                                    <input type="radio" name="partner_gender" class="form-check-input" id="female" value="female" style="position: relative; left: -6px; top: 2px;" required>
                                                    Female
                                                </label>
                                                @error('partner_gender')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Age <span class="mandatory-field">*</span></label>
                                            <div class="col-sm-9">
                                                <select name="age_from" style="float:left; width: 110px;" class="form-select form-control" required>
                                                    <option value="">From</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                </select>
                                                <span style="float:left; margin: 10px;">To</span>
                                                <select name="age_to" style="float:left; width: 105px;" class="form-select form-control" required>
                                                    <option value="">To</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Height<span class="mandatory-field">*</span></label>
                                            <div class="col-sm-9">
                                                <select name="height_from" style="float:left; width: 110px;" class="form-select form-control">
                                                    <option value="">From</option>
                                                    <option value="4ft 2in">4ft 2in</option>
                                                    <option value="4ft 3in">4ft 3in</option>
                                                    <option value="4ft 4in">4ft 4in</option>
                                                    <option value="4ft 5in">4ft 5in</option>
                                                    <option value="4ft 6in">4ft 6in</option>
                                                    <option value="4ft 7in">4ft 7in</option>
                                                    <option value="4ft 8in">4ft 8in</option>
                                                    <option value="4ft 9in">4ft 9in</option>
                                                    <option value="4ft 10in">4ft 10in</option>
                                                    <option value="4ft 11in">4ft 11in</option>
                                                    <option value="5ft">5ft</option>
                                                    <option value="5ft 1in">5ft 1in</option>
                                                    <option value="5ft 2in">5ft 2in</option>
                                                    <option value="5ft 3in">5ft 3in</option>
                                                    <option value="5ft 4in">5ft 4in</option>
                                                    <option value="5ft 5in">5ft 5in</option>
                                                    <option value="5ft 6in">5ft 6in</option>
                                                    <option value="5ft 7in">5ft 7in</option>
                                                    <option value="5ft 8in">5ft 8in</option>
                                                    <option value="5ft 9in">5ft 9in</option>
                                                    <option value="5ft 10in">5ft 10in</option>
                                                    <option value="5ft 11in">5ft 11in</option>
                                                    <option value="6ft">6ft</option>
                                                    <option value="6ft 1in">6ft 1in</option>
                                                    <option value="6ft 2in">6ft 2in</option>
                                                    <option value="6ft 3in">6ft 3in</option>
                                                    <option value="6ft 4in">6ft 4in</option>
                                                    <option value="6ft 5in">6ft 5in</option>
                                                    <option value="6ft 6in">6ft 6in</option>
                                                    <option value="6ft 6in">6ft 7in</option>
                                                    <option value="6ft 6in">6ft 8in</option>
                                                    <option value="6ft 6in">6ft 9in</option>
                                                    <option value="6ft 6in">6ft 10in</option>
                                                </select>
                                                <span style="margin:10px; float:left;">To</span>
                                                <select name="height_to" style="float: left; width: 105px;" class="form-select form-control">
                                                    <option value="">To</option>
                                                    <option value="4ft 2in">4ft 2in</option>
                                                    <option value="4ft 3in">4ft 3in</option>
                                                    <option value="4ft 4in">4ft 4in</option>
                                                    <option value="4ft 5in">4ft 5in</option>
                                                    <option value="4ft 6in">4ft 6in</option>
                                                    <option value="4ft 7in">4ft 7in</option>
                                                    <option value="4ft 8in">4ft 8in</option>
                                                    <option value="4ft 9in">4ft 9in</option>
                                                    <option value="4ft 10in">4ft 10in</option>
                                                    <option value="4ft 11in">4ft 11in</option>
                                                    <option value="5ft">5ft</option>
                                                    <option value="5ft 1in">5ft 1in</option>
                                                    <option value="5ft 2in">5ft 2in</option>
                                                    <option value="5ft 3in">5ft 3in</option>
                                                    <option value="5ft 4in">5ft 4in</option>
                                                    <option value="5ft 5in">5ft 5in</option>
                                                    <option value="5ft 6in">5ft 6in</option>
                                                    <option value="5ft 7in">5ft 7in</option>
                                                    <option value="5ft 8in">5ft 8in</option>
                                                    <option value="5ft 9in">5ft 9in</option>
                                                    <option value="5ft 10in">5ft 10in</option>
                                                    <option value="5ft 11in">5ft 11in</option>
                                                    <option value="6ft">6ft</option>
                                                    <option value="6ft 1in">6ft 1in</option>
                                                    <option value="6ft 2in">6ft 2in</option>
                                                    <option value="6ft 3in">6ft 3in</option>
                                                    <option value="6ft 4in">6ft 4in</option>
                                                    <option value="6ft 5in">6ft 5in</option>
                                                    <option value="6ft 6in">6ft 6in</option>
                                                    <option value="6ft 6in">6ft 7in</option>
                                                    <option value="6ft 6in">6ft 8in</option>
                                                    <option value="6ft 6in">6ft 9in</option>
                                                    <option value="6ft 6in">6ft 10in</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Marital Status<span class="mandatory-field">*</span></label>
                                            <div class="col-sm-5">
                                                <select name="partner_marital_status[]" id="partner_marital_status" class="form-control form-group-margin form-select" multiple="multiple">
                                                    <option value="UnMarried">UnMarried</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Body Type</label>
                                            <div class="col-sm-9">
                                                <select name="partner_bodytype[]" id="partner_bodytype" class="form-control form-group-margin form-select" multiple="multiple">
                                                    <option value="Average">Average</option>
                                                    <option value="Slim">Slim</option>
                                                    <option value="Athletic">Athletic</option>
                                                    <option value="Heavy">Heavy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label" for="complexion">Complexion</label>
                                            <div class="col-sm-9">
                                                <select id="complexion" name="partner_complexion[]" class="form-control" multiple="multiple">
                                                    <option value="Very Fair">Very Fair</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Wheatish">Wheatish</option>
                                                    <option value="Dark">Dark</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group" style="display:none;">
                                            <label class="col-sm-3 control-label">Country Living In</label>
                                            <div class="col-sm-9">
                                                <select id="ddlCountryLivingIn" multiple="multiple">
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo (DRC)">Congo (DRC)</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d&amp;#39;Ivoire">Cote d&#39;Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji Islands">Fiji Islands</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong SAR">Hong Kong SAR</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao SAR">Macao SAR</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Education</label>
                                            <div class="col-sm-9">
                                                <select name="partner_education[]" id="partner_education" class="form-control form-group-margin form-select" multiple="multiple">
                                                    <option value="Elementary">Elementary</option>
                                                    <option value="High School">High School</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Associates Degree">Associates Degree</option>
                                                    <option value="Professional Degree">Professional Degree</option>
                                                    <option value="Undergraduate">Undergraduate</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="Doctorate">Doctorate</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Profession</label>
                                            <div class="col-sm-9">
                                                <select name="partner_profession[]" class="form-control form-group-margin form-select" id="partner_profession" multiple="multiple">
                                                    <option value="Advertising/Marketing">Advertising/Marketing</option>
                                                    <option value="Administrative services">Administrative services</option>
                                                    <option value="Architecture">Architecture</option>
                                                    <option value="Armed Forces">Armed Forces</option>
                                                    <option value="Arts">Arts</option>
                                                    <option value="Banking">Banking</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="Computers/IT">Computers/IT</option>
                                                    <option value="Education/Teacher">Education/Teacher</option>
                                                    <option value="Engineering/Technology">Engineering/Technology</option>
                                                    <option value="Fashion">Fashion</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="Law">Law</option>
                                                    <option value="Management">Management</option>
                                                    <option value="Medical doctor">Medical doctor</option>
                                                    <option value="Nursing/Health Sciences">Nursing/Health Sciences</option>
                                                    <option value="Office administration">Office administration</option>
                                                    <option value="Professor/Lecturer">Professor/Lecturer</option>
                                                    <option value="Shipping">Shipping</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Travel/Tourism">Travel/Tourism</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-3 control-label">Working Sector</label>
                                            <div class="col-sm-9">
                                                <select name="partner_working_sector[]" class="form-control form-group-margin form-select" id="partner_working_sector" multiple="multiple">
                                                    <option value="Private Company">Private Company</option>
                                                    <option value="Government / Public Sector">Government / Public Sector</option>
                                                    <option value="Defense / Civil Services">Defense / Civil Services</option>
                                                    <option value="Business / Self Employed">Business / Self Employed</option>
                                                    <option value="Not Working">Not Working</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <label class="col-sm-3"></label>
                                            <div class="col-sm-9 partner-preference-btn-container" style="padding-bottom:30px; padding-top:15px;">
                                                <button id="btnCreatePartnerPreference" ng-disabled="form.$invalid" type="submit" ng-click="CreatePartnerPreference()" class="btn-square btn-square-medium text-capitalize" style="padding: 10px; padding-left: 30px; padding-right: 30px;">Save & Continue</button>
                                                &nbsp;<span class="create-profile-loading" style="display:none;">&nbsp;<img src="/Images/ajax_loader_blue_32.gif" />&nbsp;<label class="loading-text">Saving Partner Preference...</label></span>
                                            </div>
                                        </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#complexion').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#partner_marital_status').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#partner_bodytype').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#partner_education').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#partner_profession').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#partner_working_sector').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            buttonWidth: '100%',
            nonSelectedText: 'Select options',
        });
    });
</script>

@endsection

