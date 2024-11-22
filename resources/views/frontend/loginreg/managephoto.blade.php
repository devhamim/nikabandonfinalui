@extends('frontend.loginreg.app')
@section('content')
<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">


                    <style type="text/css">
                        .fileUpload {
                            position: relative;
                            overflow: hidden;
                            margin: 10px;
                        }

                        .fileUpload input.upload {
                            position: absolute;
                            top: 0;
                            right: 0;
                            margin: 0;
                            padding: 0;
                            font-size: 20px;
                            cursor: pointer;
                            opacity: 0;
                            filter: alpha(opacity=0);
                        }

                        .photo-sugg {
                            border: 1px solid #bbb;
                            border-radius: 5px;
                        }

                        .tbl-manage-photo tr td {
                            padding: 5px;
                            border: 1px solid #dcdcdc;
                        }

                        .tbl-manage-photo thead tr td {
                            padding: 7px;
                        }

                        .tbl-photo-settings tr td {
                            padding: 7px;
                        }

                        .photo-setting-options {
                            text-align: left;
                            margin-bottom: 7px;
                        }

                    </style>

                    <div id="statusMsg" style=" background-color: #f1f1f1; border: 1px solid #dcdcdc; text-align: center; padding: 10px; margin-bottom: 20px; display:none;">
                        <h1 style="padding-bottom:7px;">Your registration is successful</h1>
                        <div style="font-size: 14px; padding-top:10px;"><i>( <b>Note:</b> We will verify your profile within 6 to 12 hours and allow it searchable to others )</i></div>
                        <h3 style="padding-bottom:7px; padding-top: 10px;">Please add your photo now</h3>
                    </div>

                    <div class="page-banner no-subtitle">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Photo Album</h2>
                            </div>
                            <div class="col-md-6">
                                <ul class="breadcrumbs">
                                    <li class="nid-mybm-link">
                                        <a id="btnMyNikahBandhan" style="color: #0d6efd; font-weight:500; font-size:14px;" href="/Mypage">
                                            Go to My Nikah Bandhan
                                            <i class="fa fa-chevron-right" style="position: relative; top: 2px; margin-right: 5px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('manage.photo.store') }}" method="POST" class="shadow" enctype="multipart/form-data">
                        @csrf
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div style="background-color: #fff; border: 0px solid #f1f1f1; text-align: center;">
                                        <div class="row" style="padding-top:20px;">
                                            <div class="col-sm-7">
                                                <table style="width: 100%; " class="ajs-photo-upload-container">
                                                    <tr>
                                                        <td align="center" class="center" style="padding-bottom:20px;">
                                                            <div style="padding:10px;">
                                                                <h3>Upload minimum 3 photos to get better response</h3>
                                                            </div>
                                                            <table align="center" class="ajs-photo-upload-container">
                                                                <tr>
                                                                    <td class="center">
                                                                        <div style="background-color: aliceblue; border: 1px solid #ccc; padding: 20px;">
                                                                            <div style="font-size:14px;">Upload photos from your computer</div>
                                                                            <div class="fileUpload btn-square btn-square-medium text-capitalize center">
                                                                                <span>Browse Photo</span>
                                                                                <input id="inputFile" type="file" class="upload" name="image[]" multiple accept="image/*" onchange="angular.element(this).scope().selectPhoto(this.files)" />
                                                                            </div>
                                                                            @error('image')
                                                                                <span class="text-danger">{{$message}}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-5" style="border-left: 1px solid #dcdcdc;">
                                                <table align="center" style="margin-top:15px;">
                                                    <tr>
                                                        <td>
                                                            <div style="width: 150px; height: 150px; border:2px dashed #808080; padding:5px;">
                                                                <img id="imgTemp" style="height: 100%; width: 100%;" src="{{ asset('frontend') }}/images/user-privacy.gif" alt="your image" />
                                                            </div>
                                                            <div class="center loader" style="display:none;">
                                                                <img src="/Images/ajax-loader.gif" /> <span>Saving Photo...</span>
                                                            </div>
                                                            <div id="divSavePhoto" class="center" style="padding:5px; border:1px solid #bbb; margin-top: 2px; display: none;">
                                                                <button id="btnUploadPhoto" type="submit" ng-click="uploadPhoto()" class="btn btn-primary">Save</button>
                                                                <button id="btnPhotoCancel" type="submit" class="btn btn-default">Cancel</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="btnActionButton-Container" style="text-align: center;padding: 15px;border-top: 1px solid #dcdcdc;border-bottom: 1px solid #dcdcdc;background-color: #f1f1f1;">
                                            <button type="submit" value="1" name="imgbtn" id="btnContinue" class="btn btn-primary" style="color: #fff;" href="/Mypage"> Continue <i class="icon-right-open" style="font-size: 16px; position: relative; top: 2px; right: 3px;"></i></button>
                                            <button type="submit" value="2" name="imgbtn" id="btnSkip" class="btn btn-default" style="color: #444; margin-left:10px; text-decoration:underline !important;" href="/Mypage"> Skip</button>
                                        </div>

                                        <br />

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12" style="padding:20px;">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Photos</button>
                                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Photo Settings</button>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <div class="form-group div-my-photo-container" style="display:none;">
                                                                <div class="col-sm-12">
                                                                    <table class="tbl-manage-photo" border="1" style="width: 100%; border: 1px solid #ccc;">
                                                                        <thead>
                                                                            <tr style="background-color: #f1f1f1; font-weight: 600; padding:10px;">
                                                                                <td class="center">
                                                                                    Photo
                                                                                </td>
                                                                                <td class="center">
                                                                                    Profile Photo
                                                                                </td>
                                                                                <td class="center">
                                                                                    Status
                                                                                </td>
                                                                                <td class="center">
                                                                                    Delete
                                                                                </td>
                                                                            </tr>
                                                                        </thead>
                                                                        <tr ng-repeat="photo in photoList">
                                                                            <td class="center">
                                                                                <img alt="" class="studentPhoto" />
                                                                            </td>
                                                                            <td class="center">
                                                                                <span class="cursor-pointer" style="color: blue;" ng-click="setProfilePhoto(photo.Id)"></span>
                                                                            </td>
                                                                            <td class="center">
                                                                                <span class=""></span>
                                                                            </td>
                                                                            <td class="center">
                                                                                <span class="deletePhoto cursor-pointer fa fa-times cursor-pointer" style="color: red;" ng-click="deletePhoto(photo.Id)"></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="div-my-photo-notfound" style="display: none;padding: 20px;font-size: 17px;font-weight: 400;">
                                                                <span>No Photos Available!</span>
                                                            </div>
                                                            <div class="photo-loader" style="display:none; padding:15px;">
                                                                <img src="/images/ajax-loader.gif" />&nbsp; Loading Photos...
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <table class="tbl-photo-settings" style="margin-top:20px;">
                                                                <tr>
                                                                    <td valign="top">
                                                                        <span style="font-weight:400;">Photo Visible To:</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="photo-setting-options">
                                                                            <input id="rbViewAll" type="radio" name="photoSettings" value="view_all" /> View to all
                                                                        </div>
                                                                        <div class="photo-setting-options">
                                                                            <input id="rbViewPremiums" type="radio" name="photoSettings" value="view_premiums" /> View to premium members & Profiles that i liked
                                                                        </div>
                                                                        <div class="photo-setting-options">
                                                                            <input id="rbViewLiked" type="radio" name="photoSettings" value="view_liked" /> Only profiles that i liked
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td style="text-align: left;">
                                                                        <button class="btn btn-primary" ng-click="saveSettings()">Save Settings</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <br />

                                        <div style="border-top: 1px solid #bbb; padding:20px; margin-top:30px;">
                                            <div>
                                                <h3>Photo Guideline</h3>
                                            </div>
                                            <div class="center">
                                                <div class="row">
                                                    <div class="col-md-6" style="border-right: 1px dashed #777;">
                                                        <table style=" text-align: center; width: 100%;">
                                                            <tr>
                                                                <td align="center" colspan="3">
                                                                    <h4>Right Photo</h4>
                                                                    <div>
                                                                        Please upload your photo that focused to your face, clear and bright
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">
                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                                <i class="icon-check-1" style=" font-size: 25px; position: absolute; color: green;"></i>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-allow-1.jpg" />
                                                                            </td>
                                                                            <td>
                                                                                <i class="icon-check-1" style="font-size: 25px; position: absolute; color: green;"></i>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-allow-2.jpg" />
                                                                            </td>
                                                                            <td>
                                                                                <i class="icon-check-1" style="font-size: 25px; position: absolute; color: green;"></i>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-allow-3.jpg" />
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>

                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table style=" text-align: center; width: 100%;">
                                                            <tr>
                                                                <td align="center" colspan="3">
                                                                    <h4>Wrong Photo</h4>
                                                                    <div>
                                                                        Please dont upload side photo, blur or group photo
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">
                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-not-allow-1.jpg" />
                                                                            </td>
                                                                            <td>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-not-allow-2.jpg" />
                                                                            </td>
                                                                            <td>
                                                                                <img class="photo-sugg" src="{{ asset('frontend') }}/images/photo-suggestion-not-allow-3.jpg" />
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
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
@endsection

