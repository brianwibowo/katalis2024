<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KATALIS2024 - Notifications</title>

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
                            <h6 class="m-0 font-weight-bold text-primary">Notifikasi </h6>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                            </a>
                        </div>
                </div>

                <div class="w-full max-w-3xl mx-auto mt-10">
       
           <!-- Notification 1 -->
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex items-center">
                <div class="bg-blue-500 rounded-full h-10 w-10 flex items-center justify-center text-white">
                    <i class="fas fa-thermometer-three-quarters"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-800 font-semibold">Suhu Terlalu Tinggi</p>
                    <p class="text-sm text-gray-500">April 12, 2024. 12:30</p>
                </div>
            </div>
            <button id="dropdownButton1" class="mt-2 bg-blue-200 px-4 py-2 rounded-md focus:outline-none hover:bg-blue-300">
                Lihat Detail
            </button>

            <!-- Dropdown content for Notification 1 -->
            <div id="dropdownContent1" class="hidden mt-2 bg-gray-50 p-4 rounded-lg shadow-md">
                <!-- 7 Containers for Notification 1 -->
                <div class="grid grid-cols-1 gap-6">
                    <!-- Container 1 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 1: Suhu harian</p>
                        </div>
                    </div>
                    <!-- Container 2 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 2: Perbandingan mingguan</p>
                        </div>
                    </div>
                    <!-- Container 3 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 3: Suhu ekstrem</p>
                        </div>
                    </div>
                    <!-- Container 4 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 4: Suhu bulan ini</p>
                        </div>
                    </div>
                    <!-- Container 5 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 5: Target suhu vs Aktual</p>
                        </div>
                    </div>
                    <!-- Container 6 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 6: Peningkatan suhu tahunan</p>
                        </div>
                    </div>
                    <!-- Container 7 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 7: Prediksi suhu mendatang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification 2 -->
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex items-center">
                <div class="bg-green-500 rounded-full h-10 w-10 flex items-center justify-center text-white">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-800 font-semibold">Aisya Food and Juice</p>
                    <p class="text-sm text-gray-500">April 12, 2024. 12:30</p>
                </div>
            </div>
            <button id="dropdownButton2" class="mt-2 bg-green-200 px-4 py-2 rounded-md focus:outline-none hover:bg-green-300">
                Lihat Detail
            </button>

            <!-- Dropdown content for Notification 2 -->
            <div id="dropdownContent2" class="hidden mt-2 bg-gray-50 p-4 rounded-lg shadow-md">
                <!-- 7 Containers for Notification 2 -->
                <div class="grid grid-cols-1 gap-6">
                    <!-- Container 1 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 1: Penjualan harian</p>
                        </div>
                    </div>
                    <!-- Container 2 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 2: Tren mingguan</p>
                        </div>
                    </div>
                    <!-- Container 3 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 3: Performa bulanan</p>
                        </div>
                    </div>
                    <!-- Container 4 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 4: Pendapatan tahunan</p>
                        </div>
                    </div>
                    <!-- Container 5 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 5: Target vs Aktual</p>
                        </div>
                    </div>
                    <!-- Container 6 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 6: Pengeluaran bulanan</p>
                        </div>
                    </div>
                    <!-- Container 7 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 7: Prediksi penjualan mendatang</p>
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


                    <!-- DataTales Example
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Notifikasi </h6>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                            </a>
                        </div>
                        """
                        <div class="card-body">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">April 12, 2024. 12.30</div>
                                    <span class="font-weight-bold">Suhu Terlalu Tinggi</span>
                                </div>
                            </a>
                            <hr class="sidebar-divider d-none d-md-block">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">April 12, 2024. 12.30</div>
                                    Aisya Food and Juice, Gede Miniro, Irsyad PSHT, Ending, Apriansyah Wibowo Generasi Muda Emas 2045
                                </div>
                            </a>
                            <hr class="sidebar-divider d-none d-md-block">
                        </div>
                    </div>
                </div>

            </div> -->
            <!-- /.container-fluid -->


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

</body>

</html>