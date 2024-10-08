<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KATALIS2024 - Statistics</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Import Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800">Statistics</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Node Buttons -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <div>
                            <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 1</button>
                            <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 2</button>
                            <button class="btn btn-sm" style="background-color: #4c74dc; color: white;">Node 3</button>
                        </div>
                    </div>

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
                                        <div class="d-sm-flex align-items-center justify-content-between mb-2">
                                            <div>
                                                <button class="btn btn-sm" style="background-color: #4c74dc; color: white;" id="1day" onclick="loadData('1day')">1 Hari</button>
                                                <button class="btn btn-sm" style="background-color: #4c74dc; color: white;" id="1week" onclick="loadData('1week')">1 Minggu</button>
                                                <button class="btn btn-sm" style="background-color: #4c74dc; color: white;" id="1month" onclick="loadData('1month')">1 Bulan</button>
                                                <button class="btn btn-sm" style="background-color: #4c74dc; color: white;" id="1year" onclick="loadData('1year')">1 Tahun</button>
                                            </div>
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
                                            <!-- Days will be dynamically generated using JavaScript -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Basic CSS for Calendar Layout -->
                    <style>
                        .days-grid {
                            display: grid;
                            grid-template-columns: repeat(7, 1fr);
                            gap: 10px;
                        }

                        .days-grid span {
                            display: inline-block;
                            width: 30px;
                            height: 30px;
                            line-height: 30px;
                            text-align: center;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                        }
                    </style>


                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; KATALIS TE UNNES 2024</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="index.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script src="calendardb.js"></script>
            <script src="chartdb.js"></script>

</body>

</html>