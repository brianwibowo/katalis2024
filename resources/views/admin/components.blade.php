@extends('admin.layouts.app')

@section('title', 'Components')

@section('css-header')
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Import Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Photovoltaic Components</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
            </div>
        </div>

        <!-- Container for Flexbox -->
        <div class="d-flex justify-content-around">
            <!-- Daya -->
            <div class="col-xl-3 col-md-4 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daya</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">500 W</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bolt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tegangan -->
            <div class="col-xl-3 col-md-4 mb-2">
                <div class="card border-left-warning shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tegangan</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">220 V</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-plug fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arus -->
            <div class="col-xl-3 col-md-4 mb-2">
                <div class="card border-left-success shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Arus</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">2.27 A</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-battery-half fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
