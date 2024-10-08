<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KATALIS2024 - Components</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Import Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
                                <div class="card border-left-danger shadow h-100 py-1">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-1">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Arus</div>
                                                <div class="h4 mb-0 font-weight-bold text-gray-800">2.5 A</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-battery-half fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script>
                            document.getElementById('dropdownButton1').addEventListener('click', function() {
                                var dropdownContent = document.getElementById('dropdownContent1');
                                dropdownContent.classList.toggle('hidden');
                            });

                            document.getElementById('dropdownButton2').addEventListener('click', function() {
                                var dropdownContent = document.getElementById('dropdownContent2');
                                dropdownContent.classList.toggle('hidden');
                            });
                        </script>


</body>

</html>

<!-- End of Main Content -->

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

</body>

</html>