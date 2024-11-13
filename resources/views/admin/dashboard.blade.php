@extends('admin.layouts.app')

@section('title')
    Dashhboard
@endsection

@section('css-header')
    <link href="{{ asset('assets/admin/css/dashboard.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="dashboard.blade.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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

            <!-- N -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    N</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">23.3</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-leaf fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- P -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    P</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">22.3</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-vial fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- K -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    K</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">23.9</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-atom fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Temperature -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Temperature</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">32&#8451;</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pH -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    pH</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">6.5</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-flask fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Humidity -->
            <div class="col-xl-2 col-md-3 mb-2">
                <div class="card border-left-primary shadow h-100 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Humidity</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">20</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tint fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">
                <!-- Grafik dan dropdown sensor -->
                <div class="col-xl-8 col-md-7 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="chart-container">
                                <!-- Dropdown "Jenis Sensor" -->
                                <div class="dropdown mb-3">
                                    <label for="sensorSelect">Jenis Sensor:</label>
                                    <select id="sensorSelect">
                                        <option value="npk">N</option>
                                        <option value="npk">P</option>
                                        <option value="npk">K</option>
                                        <option value="temperature">Temperature</option>
                                        <option value="humidity">pH</option>
                                        <option value="npk">Humidity</option>
                                    </select>
                                </div>

                                <!-- Kategori Waktu -->
                                <div class="category mb-3">
                                    <a href="#" id="1day" class="icon" onclick="loadData('1day')">Data Sensor
                                        dalam 24 Jam Terakhir</a>
                                </div>

                                <!-- Grafik Chart.js -->
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kalender -->
                <div class="col-xl-4 col-md-5 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body text-center">
                            <div class="calendar-container">
                                <!-- Year Navigation -->
                                <div class="year-navigation d-flex justify-content-between align-items-center mb-2">
                                    <button id="prevYear" class="btn btn-sm btn-outline-secondary">&lt;</button>
                                    <span id="year" class="h5">2024</span>
                                    <button id="nextYear" class="btn btn-sm btn-outline-secondary">&gt;</button>
                                </div>

                                <!-- Month Navigation -->
                                <div class="month-navigation d-flex justify-content-between align-items-center mb-2">
                                    <button id="prevMonth" class="btn btn-sm btn-outline-secondary">&lt;</button>
                                    <span id="month" class="h6">April</span>
                                    <button id="nextMonth" class="btn btn-sm btn-outline-secondary">&gt;</button>
                                </div>

                                <!-- Days of the month -->
                                <div id="days" class="days-grid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('js-footer')
            <script src="{{ asset('assets/admin/js/chartdb.js') }}"></script>
            <script src="{{ asset('assets/admin/js/calendardb.js') }}"></script>

            <script>
                $(document).ready(function() {
                    $(".dashboard-menu-link").addClass("active");

                    initializeChart();
                    initializeCalendar();
                })
            </script>
        @endsection
