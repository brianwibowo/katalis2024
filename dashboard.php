<?php
// Include necessary files and start session
session_start();

// Supabase connection details
$supabaseUrl = 'https://vgpnxrwylhohtldsqhcv.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InZncG54cnd5bGhvaHRsZHNxaGN2Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MjIzMTY3NDEsImV4cCI6MjAzNzg5Mjc0MX0.sp-iJ9WL_he_34zqMDjREqd-Cmj7OX0OtIifJqK51Js';

// Include Supabase client for database access
echo '<script type="module">
  import { createClient } from "https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm";

  const supabaseUrl = "' . $supabaseUrl . '";
  const supabaseKey = "' . $supabaseKey . '";
  const supabase = createClient(supabaseUrl, supabaseKey);

  async function fetchData() {
    let { data, error } = await supabase
      .from("data_now")
      .select("*");
    
    if (error) {
      console.error(error);
    } else {
      console.log(data);
      // Insert logic to display the data in your dashboard
    }
  }

  fetchData();
</script>';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KATALIS2024 - Dashboard</title>

    <!-- Link -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="dashboard.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">53.3</div>
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
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">233.9</div>
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
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">50&#8451;</div>
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
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">8</div>
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
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">30</div>
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
                                                <a href="#" id="1day" class="icon" onclick="loadData('1day')">Data Sensor dalam 24 Jam Terakhir</a>
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
                <?php include 'logoutmodal.php'; ?>

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