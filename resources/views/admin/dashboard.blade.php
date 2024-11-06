@extends('layouts.app')

@section('content')
<div id="wrapper">

    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            @include('partials.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="{{ route('dashboard') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </a>
                </div>

                <!-- Node Buttons -->
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <div>
                        <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 1</button>
                        <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 2</button>
                        <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 3</button>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Cards for N, P, K, Temperature, pH, Humidity -->
                    @foreach(['N' => 'leaf', 'P' => 'vial', 'K' => 'atom', 'Temperature' => 'thermometer-half', 'pH' => 'flask', 'Humidity' => 'tint'] as $label => $icon)
                        <div class="col-xl-2 col-md-3 mb-2">
                            <div class="card border-left-primary shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-1">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                {{ $label }}</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">23.3</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-{{ $icon }} fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Chart and Calendar -->
                <div class="row">
                    <div class="col-xl-8 col-md-7 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="dropdown mb-3">
                                        <label for="sensorSelect">Jenis Sensor:</label>
                                        <select id="sensorSelect">
                                            <option value="npk">N</option>
                                            <option value="npk">P</option>
                                            <option value="npk">K</option>
                                            <option value="temperature">Temperature</option>
                                            <option value="ph">pH</option>
                                            <option value="humidity">Humidity</option>
                                        </select>
                                    </div>
                                    <a href="#" id="1day" class="icon" onclick="loadData('1day')">Data Sensor dalam 24 Jam Terakhir</a>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-5 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body text-center">
                                <div class="calendar-container">
                                    <div class="year-navigation d-flex justify-content-between align-items-center mb-2">
                                        <button id="prevYear" class="btn btn-sm btn-outline-secondary">&lt;</button>
                                        <span id="year" class="h5">2024</span>
                                        <button id="nextYear" class="btn btn-sm btn-outline-secondary">&gt;</button>
                                    </div>
                                    <div class="month-navigation d-flex justify-content-between align-items-center mb-2">
                                        <button id="prevMonth" class="btn btn-sm btn-outline-secondary">&lt;</button>
                                        <span id="month" class="h6">April</span>
                                        <button id="nextMonth" class="btn btn-sm btn-outline-secondary">&gt;</button>
                                    </div>
                                    <div id="days" class="days-grid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; KATALIS TE UNNES 2024</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

@include('partials.logoutmodal')

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
