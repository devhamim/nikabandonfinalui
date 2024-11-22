@extends('backend.layouts.app')
@section('content')
<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-1">
                <div class="card-body">
                    <h2 class="mb-1">{{ $total_user }}</h2>
                    <p>Total User</p>
                    <span class="mdi mdi-account-arrow-left"></span>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-8 col-md-12 p-b-15">
            <!-- Sales Graph -->
            <div id="user-acquisition" class="card card-default">
                <div class="card-header">
                    <h2>Sales Report</h2>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab"
                                aria-selected="true">Today's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab"
                                aria-selected="false">Monthly </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab"
                                aria-selected="false">Yearly</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-4" id="salesReport">
                        <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                            <div class="mb-6" style="max-height:247px">
                                <canvas id="acquisition" class="chartjs2"></canvas>
                                <div id="acqLegend" class="customLegend mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 p-b-15">
            <!-- Doughnut Chart -->
            <div class="card card-default">
                <div class="card-header justify-content-center">
                    <h2>Orders Overview</h2>
                </div>
                <div class="card-body">
                    <canvas id="doChart"></canvas>
                </div>
                <div class="card-footer d-flex flex-wrap bg-white p-0">
                    <div class="col-6">
                        <div class="p-20">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #4c84ff"></i>Order Completed</li>
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #80e1c1 "></i>Order Unpaid</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #ff7b7b "></i>Order returned</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 border-left">
                        <div class="p-20">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #8061ef"></i>Order Pending</li>
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #ffa128"></i>Order Canceled</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #7be6ff"></i>Order Broken</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
