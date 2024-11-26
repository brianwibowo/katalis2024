@extends('admin.layouts.app')

@section('title')
    Dashboard
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
            <a href="#" id="generateReport" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
        </div>

        <!-- Node Buttons -->
        <div class="d-flex align-items-center justify-content-start mb-3">
            @for ($i = 1; $i <= 3; $i++)
                <button class="btn btn-sm node-btn mx-1" 
                        style="background-color: #4c74dc; color: white;" 
                        data-node="{{ $i }}">Node {{ $i }}</button>
            @endfor
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
                                    <option value="p">P</option>
                                    <option value="k">K</option>
                                    <option value="temperature">Temperature</option>
                                    <option value="ph">pH</option>
                                    <option value="humidity">Humidity</option>
                                </select>
                            </div>

                            <!-- Kategori Waktu -->
                            <div class="category mb-3">
                                <a class="icon">Data Sensor dalam 24 Jam Terakhir</a>
                            </div>

                            <!-- Grafik Chart.js -->
                            <canvas id="myChart"></canvas>

                            <!-- Keterangan Data -->
                            <div class="sensor-info mt-3">
                                <p id="sensorDetails" class="text-muted">
                                    Data sensor <span id="sensorType">-</span> untuk Node <span id="nodeId">-</span> 
                                    pada tanggal <span id="sensorDate">-</span>:
                                    Menampilkan data dari <span id="startTime">-</span> 
                                    sampai <span id="endTime">-</span>.
                                </p>
                            </div>
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

            // Update chart and info dynamically
            $('#sensorSelect').on('change', updateChartAndInfo);
            $('.node-btn').on('click', function() {
                $('.node-btn').removeClass('active');
                $(this).addClass('active');
                updateChartAndInfo();
            });

            $('#generateReport').on('click', function() {
                // Call Laravel route to generate report
                window.location.href = "{{ route('admin.generateReport') }}";
            });
        });

        function updateChartAndInfo() {
            let selectedSensor = $('#sensorSelect').val();
            let selectedNode = $('.node-btn.active').data('node') || 1; // Default to Node 1
            let date = new Date();

            $('#sensorType').text(selectedSensor);
            $('#nodeId').text(selectedNode);
            $('#sensorDate').text(`${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`);
            $('#startTime').text('00:00');
            $('#endTime').text('22:00');

            // Refresh Chart (Add logic for AJAX call here if needed)
            loadChartData(selectedSensor, selectedNode);
        }
    </script>
@endsection
