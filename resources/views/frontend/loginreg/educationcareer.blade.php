@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">
                    <form action="{{ route('education.career.store') }}" method="POST" id="formCreateProfile" style="background-color: #fff; padding-left: 10px; border: 1px solid #dcdcdc; border-top: 0;">
                        @csrf
                        <div class="form-horizontal create-profile-form-container">
                            <div class="row back-leaf-white">
                                <div class="col-md-12">

                                    <div class="section-header">
                                        <span class="section-header-icon fa fa-graduation-cap"></span>
                                        <span class="register-title-left">Education & Career</span>
                                        <span class="register-title-right"><b>40%</b> Complete</span>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Highest Qualification<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="highest_qualification" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Select Qualification ---</option>
                                                <option value="Doctorate / Phd / MPhil">Doctorate / Phd / MPhil</option>
                                                <option value="Masters">Masters</option>
                                                <option value="Bachelors">Bachelors</option>
                                                <option value="FCPS / MD">FCPS / MD</option>
                                                <option value="MBBS / BDS">MBBS / BDS</option>
                                                <option value="Undergraduate">Undergraduate</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Professional Degree">Professional Degree</option>
                                                <option value="HSC / A-Label">HSC / A-Label</option>
                                                <option value="Others">Others</option>

                                            </select>
                                            @error('highest_qualification')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Education Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="education_details" rows="4" maxlength="1000" placeholder="Please enter education details" class="form-control"></textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Example: Bsc in Computer Science / Honors in Social Science</span>
                                                @error('education_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Working Sector<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="working_sector" class="form-control form-group-margin form-select" required>
                                                <option value="">---Please Select---</option>
                                                <option value="Private Company">Private Company</option>
                                                <option value="Government / Public Sector">Government / Public Sector</option>
                                                <option value="Defense / Civil Services">Defense / Civil Services</option>
                                                <option value="Business / Self Employed">Business / Self Employed</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                            @error('working_sector')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Profession<span class="mandatory-field">*</span></label>
                                        <div class="col-sm-5">
                                            <select name="profession" class="form-control form-group-margin form-select" required>
                                                <option value="">--- Select Occupation ---</option>
                                                <optgroup label="Accounting, Banking & Finance"></optgroup>
                                                <option value="1#Accounting Professional">Accounting Professional</option>
                                                <option value="1#Banking Professional">Banking Professional</option>
                                                <option value="1#Chartered Accountant">Chartered Accountant</option>
                                                <option value="1#Finance Professional">Finance Professional</option>
                                                <option value="1#Investment Professional">Investment Professional</option>
                                                <option value="1#Accounting &amp; Finance (Others)">Accounting & Finance (Others)</option>

                                                <optgroup label="Administration & HR"></optgroup>
                                                <option value="2#Admin Professional">Admin Professional</option>
                                                <option value="2#Human Resources Professional">Human Resources Professional</option>

                                                <optgroup label="Advertising, Media & Entertainment"></optgroup>
                                                <option value="3#Actor">Actor</option>
                                                <option value="3#Advertising Professional">Advertising Professional</option>
                                                <option value="3#Entertainment Professional">Entertainment Professional</option>
                                                <option value="3#Event Manager">Event Manager</option>
                                                <option value="3#Journalist">Journalist</option>
                                                <option value="3#Media Professional">Media Professional</option>
                                                <option value="3#Public Relations Professional">Public Relations Professional</option>

                                                <optgroup label="Agriculture"></optgroup>
                                                <option value="4#Agricultural Professional">Agricultural Professional</option>

                                                <optgroup label="Airline & Aviation"></optgroup>
                                                <option value="5#Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
                                                <option value="5#Pilot">Pilot</option>
                                                <option value="5#Airline Professional">Airline Professional</option>

                                                <optgroup label="Architecture & Design"></optgroup>
                                                <option value="6#Architect">Architect</option>
                                                <option value="6#Interior Designer">Interior Designer</option>

                                                <optgroup label="Artists & Animators"></optgroup>
                                                <option value="7#Animator">Animator</option>
                                                <option value="7#Artist">Artist</option>

                                                <optgroup label="Beauty & Fashion"></optgroup>
                                                <option value="8#Beautician">Beautician</option>
                                                <option value="8#Fashion Designer">Fashion Designer</option>

                                                <optgroup label="Defense"></optgroup>
                                                <option value="9#Airforce">Airforce</option>
                                                <option value="9#Army">Army</option>
                                                <option value="9#Navy">Navy</option>
                                                <option value="9#Defense Services (Others)">Defense Services (Others)</option>

                                                <optgroup label="Education & Training"></optgroup>
                                                <option value="10#Lecturer">Lecturer</option>
                                                <option value="10#Professor">Professor</option>
                                                <option value="10#Teacher">Teacher</option>

                                                <optgroup label="Engineering"></optgroup>
                                                <option value="11#Civil Engineer">Civil Engineer</option>
                                                <option value="11#Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
                                                <option value="11#Mechanical / Production Engineer">Mechanical / Production Engineer</option>
                                                <option value="11#Engineer (Non IT)">Engineer (Non IT)</option>

                                                <optgroup label="IT & Software Engineering"></optgroup>
                                                <option value="12#Software Engineer / Programmer">Software Engineer / Programmer</option>
                                                <option value="12#Software Consultant">Software Consultant</option>
                                                <option value="12#Hardware &amp; Networking professional">Hardware & Networking professional</option>
                                                <option value="12#Database Administrator">Database Administrator</option>
                                                <option value="12#Web / UX Designers / Graphics Designers">Web / UX Designers / Graphics Designers</option>
                                                <option value="12#Computer Operator">Computer Operator</option>
                                                <option value="12#Computers / IT">Computers / IT</option>
                                                <option value="12#Software Professional (Others)">Software Professional (Others)</option>

                                                <optgroup label="Legal"></optgroup>
                                                <option value="13#Lawyer">Lawyer</option>
                                                <option value="13#Legal Assistant">Legal Assistant</option>
                                                <option value="13#Legal Professional (Others)">Legal Professional (Others)</option>

                                                <optgroup label="Medical & Healthcare"></optgroup>
                                                <option value="14#Doctor">Doctor</option>
                                                <option value="14#Dentist">Dentist</option>
                                                <option value="14#Nurse">Nurse</option>
                                                <option value="14#Pharmacist">Pharmacist</option>
                                                <option value="14#Psychologist">Psychologist</option>
                                                <option value="14#Therapist">Therapist</option>
                                                <option value="14#Medical / Healthcare Professional">Medical / Healthcare Professional</option>

                                                <optgroup label="Sales & Marketing"></optgroup>
                                                <option value="15#Marketing Professional">Marketing Professional</option>
                                                <option value="15#Sales Professional">Sales Professional</option>

                                                <optgroup label="Business & Others"></optgroup>
                                                <option value="16#Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
                                                <option value="16#Consultant / Supervisor">Consultant / Supervisor</option>
                                                <option value="16#Politician">Politician</option>
                                                <option value="16#Sportsman">Sportsman</option>
                                                <option value="16#Travel &amp; Transport Professional">Travel & Transport Professional</option>
                                                <option value="16#Writer">Writer</option>
                                                <option value="16#Not Defined">Not Defined</option>

                                                <optgroup label="Not Working"></optgroup>
                                                <option value="17#Student">Student</option>
                                                <option value="17#Not Working">Not Working</option>

                                            </select>
                                            @error('profession')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Profession Details</label>
                                        <div class="col-sm-5">
                                            <textarea name="profession_details" placeholder="Enter your profession details" rows="4" maxlength="1000" class="form-control"></textarea>
                                            <div class="hits-container">
                                                <i class="icon-info-circled" style="color:#555;"></i>
                                                <span class="hints" style="color:#666;">Explain about your woking company, designation etc.</span>
                                                @error('profession_details')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 control-label">Monthly Income</label>
                                        <div class="col-sm-5">
                                            <select name="monthly_income" class="form-control form-group-margin form-select">
                                                <option value="">--- Select Your Monthly Income ---</option>
                                                <option value="Below BDT 10K">Below BDT 10K</option>
                                                <option value="BDT 10K to 20K">BDT 10K to 20K</option>
                                                <option value="BDT 20K to 35K">BDT 20K to 35K</option>
                                                <option value="BDT 35K to 50K">BDT 35K to 50K</option>
                                                <option value="BDT 50K to 75K">BDT 50K to 75K</option>
                                                <option value="BDT 75K to 100K">BDT 75K to 100K</option>
                                                <option value="BDT 100K to 125K">BDT 100K to 125K</option>
                                                <option value="BDT 125K to 150K">BDT 125K to 150K</option>
                                                <option value="BDT 150K to 175K">BDT 150K to 175K</option>
                                                <option value="BDT 175K to 200K">BDT 175K to 200K</option>
                                                <option value="BDT 200K to 250K">BDT 200K to 250K</option>
                                                <option value="BDT 250K to 300K">BDT 250K to 300K</option>
                                                <option value="Above BDT 300K">Above BDT 300K</option>
                                                <option value="Not Applicable">Not Applicable</option>
                                            </select>
                                            @error('monthly_income')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <div style="margin-top:3px;">
                                                <input type="checkbox" name="keep_it_private" class="form-check-input" /><label style="padding-left: 5px; color: #666;">Keep it private</label> <i class="icon-lock-filled" style=" color: #555;"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9 create-profile-btn-container" style="padding-bottom:30px; margin-top:10px;">
                                            <button type="submit" ng-click="Back()" class="btn-square btn-square-3 btn-square-medium text-capitalize">Back</button>
                                            <button id="btnCreateProfile" ng-disabled="form.$invalid" type="submit" ng-click="CreateProfile()" class="btn-square btn-square-medium text-capitalize padd-lr-40 f-15">Continue</button>
                                            &nbsp;<span class="create-profile-loading" style="display:none;">&nbsp;<img src="/Images/ajax_loader_blue_32.gif" />&nbsp;<label class="loading-text">Saving Your Profile...</label></span>
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
@endsection

