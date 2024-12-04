@extends('frontend.loginreg.app')
@section('content')

<div id="content" class="full-sections">
    <div class="container middle-content back-none pad-none" style="padding-top: 30px;">
        <div class="main-content" style="padding-bottom: 30px;">
            <div class="main-content-inner">
                <div class="page-content">

                    <style type="text/css">
                        .mypage-menu-active {
                            background-color: #f2f2f2;
                        }

                        .refine-search-container {
                            border: 1px solid #dcdcdc;
                            background-color: #fff;
                        }

                        .filter-header {
                            padding: 8px;
                            background-color: #dcdcdc;
                            font-weight: 500;
                            color: #000;
                            margin-bottom: 1px;
                            font-size: 15px;
                            cursor: pointer;
                        }

                        .filter-content {
                            padding: 0px !important;
                            padding-top: 0px !important;
                            padding-left: 0px !important;
                            overflow: auto;
                        }

                        .mypage-left-col {
                            padding-right: 0px;
                        }

                        .padd-top-0 {
                            padding-top: 0 !important;
                        }

                        .inner-list-container a {
                            color: #0d6efd;
                            font-weight: 400;
                        }

                        .add-photo {
                            padding: 8px;
                            border-radius: 50%;
                            height: 37px;
                            width: 37px;
                            position: relative;
                            top: -25px;
                            left: 45%;
                            background: #10BFD6;
                            font-size: 28px;
                            font-weight: 400;
                            color: white;
                            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
                        }

                        .add-photo:hover {
                            box-shadow: 0 0 11px rgba(33, 33, 33, .8);
                        }

                        .mybm-message-content li,
                        .mybm-interest-content li,
                        .mybm-photo-content li,
                        .mybm-account-content li,
                        .mybm-settings-content li {
                            border-top: 1px solid #f0f0f0;
                            padding: 6px;
                            padding-left: 10px;
                        }

                        .border-top-0 {
                            border-top: 0 !important;
                        }

                    </style>

                    <div class="row">
                        @include('frontend.memberdashboard.sitebar')
                        <div class="col-sm-9 show-result mypage-right-col">
                            <div class="mypage-right-container">

                                <div class="page-banner no-subtitle">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Interest Recived</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="breadcrumbs">
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li>Interest Recived List</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div  class="form-horizontal">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div>
                                                <br />
                                                <table id="data-table-favorite-list" class="table table-striped table-bordered table-responsive table-hover" style="width: 100%;">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Accept</th>
                                                        <th>Decline</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @foreach($interesteds as $interested)
                                                    <tr>
                                                        <td>{{ $interested->rel_to_customer->name }}</td>
                                                        <td>{{ $interested->created_at->format('d m Y') }}</td>
                                                        <td>
                                                            @if($interested->status == 0)
                                                                Pending
                                                            @elseif($interested->status == 1)
                                                                Accept
                                                            @else
                                                                Decline
                                                            @endif
                                                        </td>
                                                        <td><a href="{{ route('interested.accept', $interested->id) }}" class="text-white rounded p-1 bg-success">Accept</a></td>
                                                        <td><a href="{{ route('interested.decline', $interested->id) }}" class="text-white rounded p-1 bg-info">Decline</a></td>
                                                        <td><a href="{{ route('interested.sent.delete', $interested->id) }}" class="text-white rounded p-1 bg-danger">Delete</a></td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                            <div class="center loader" style="display:none;">
                                                <img src="{{ asset('frontend') }}/images/ajax-loader.gif" /> <span>Loading Data...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {

                            // Call for desktop version. For mobile viersion (Navigation drawer) its called from _Layout.cshtml
                            if ($(window).width() >= 768) {
                                getBasicInfo();
                                collapseLeftMenuAreas();
                            }
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

