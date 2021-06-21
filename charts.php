 <?php
include('koneksi.php');
$ambiljurusan = mysqli_query($koneksi, "select * from formulir");
while($row = mysqli_fetch_array($ambiljurusan)){
    $jurusan[] = $row['jurusan'];
}
$ambiljeniskelamin = mysqli_query($koneksi, "select * from formulir");
while($row = mysqli_fetch_array($ambiljeniskelamin)){
    $jeniskelamin[] = $row['jenis_kelamin'];
}
//get data
//ambil data total
$get1 = mysqli_query($koneksi, "select * from formulir where jurusan='Teknik Pengelolahan Pangan'");
$count1 = mysqli_num_rows($get1); //menghitung seluruh kolom

//ambil data teknologi Akuntansi
$get2 = mysqli_query($koneksi, "select * from formulir where jurusan='Akuntansi'");
$count2 = mysqli_num_rows($get2);

//ambil data teknologi Animasi
$get3 = mysqli_query($koneksi, "select * from formulir where jurusan='Animasi'");
$count3 = mysqli_num_rows($get3);

//ambil data teknologi Multimedia
$get4 = mysqli_query($koneksi, "select * from formulir where jurusan='Multimedia'");
$count4 = mysqli_num_rows($get4);

//ambil data teknologi Perkantoran
$get5 = mysqli_query($koneksi, "select * from formulir where jurusan='Perkantoran'");
$count5 = mysqli_num_rows($get5);

//ambil data teknologi Pengawasan Mutu Pangan
$get6 = mysqli_query($koneksi, "select * from formulir where jurusan='Pengawasan Mutu Pangan'");
$count6 = mysqli_num_rows($get6);

//ambil data teknologi Teknik Komputer jaringan
$get7 = mysqli_query($koneksi, "select * from formulir where jurusan='Teknik Komputer Jaringan'");
$count7 = mysqli_num_rows($get7);
//get data
//ambil data jenis kelamin Laki-laki
$get8 = mysqli_query($koneksi, "select * from formulir where jenis_kelamin='Laki-laki'");
$count8 = mysqli_num_rows($get8);
//ambil data jenis kelamin Perempuan
$get9 = mysqli_query($koneksi, "select * from formulir where jenis_kelamin='Perempuan'");
$count9 = mysqli_num_rows($get9);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="Chart.js"></script>

    <title>Grafik Pendaftar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#page-top">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DASHBOARD</div>
            </a>
            

            <!-- Nav Item - Beranda -->
            <li class="nav-item">
                <a class="nav-link" href="halamansekolah/index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                 <!-- Card Total Jenis Kelamin -->
                 <h1 class="h3 mb-2 text-gray-800">Total Pendaftar Pria dan Wanita:</h1>
                <div class="row mt-4">
                    <div class="col-xl-3">
                        <div class="card bg-gradient-success text-white p-2"><h3>Laki-laki: <?=$count8;?></h3></div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bg-gradient-danger text-white p-2"><h3>Perempuan: <?=$count9;?></h3></div>
                    </div>
                </div>

                <!-- Card Total Jurusan -->
                <h1 class="h3 mb-2 text-gray-800">Total Jurusan:</h1>
                <div class="row mt-4">
                    <div class="col-xl-3">
                        <div class="card bg-gradient-primary text-white p-2"><h3>TPP: <?=$count1;?></h3></div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bg-gradient-primary text-white p-2"><h3>Akuntansi: <?=$count2;?></h3></div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bg-gradient-primary text-white p-2"><h3>Animasi: <?=$count3;?></h3></div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bg-gradient-primary text-white p-2"><h3>Multimedia: <?=$count4;?></h3></div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-gradient-primary text-white p-2"><h3>Perkantoran: <?=$count5;?></h3></div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-gradient-primary text-white p-2"><h3>PMP: <?=$count6;?></h3></div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-gradient-primary text-white p-2"><h3>TKJ: <?=$count7;?></h3></div>
                </div>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- catatan keterangan singkatan jurusan -->
                    <h8 class="h8 mb-2 text-danger">Catatan: </h8>
                    <h9>TPP(Teknik Pengelolaan Pangan), PMP(Pengawasan Mutu Pangan), TKJ(Teknik Komputer Jaringan).</h9>
                    <hr>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Grafik</h1>
                    <p class="mb-4">Grafik pendaftaran Jurusan</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart Jurusan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                        <script>
                                            var ctx = document.getElementById("myBarChart").getContext('2d');
                                            var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: ['TPP', 'Akuntansi', 'Animasi', 'Multimedia', 'Perkantoran','PMP', 'TKJ'],
                                                    datasets: [{
                                                        label: 'Jurusan',
                                                        data: [<?php echo json_encode($count1); ?>,<?php echo json_encode($count2); ?>,<?php echo json_encode($count3); ?>,<?php echo json_encode($count4); ?>,<?php echo json_encode($count5); ?>,<?php echo json_encode($count6); ?>,<?php echo json_encode($count7); ?>],
                                                        backgroundColor: 'rgba(3, 73, 252, 0.2)',
                                                        borderColor: 'rgba(3, 73, 252,1)',
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero:true
                                                            }
                                                        }]
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart Jenis Kelamin</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                        <script>
                                            var config = {
                                                type: 'doughnut',
                                                data: {
                                                    datasets: [{
                                                        data:[<?php echo json_encode($count8); ?>, <?php echo json_encode($count9); ?>],
                                                        backgroundColor: [
                                                        'rgba(52, 235, 91, 0.2)',
                                                        'rgba(255, 99, 132, 0.2)',
                                                        ],
                                                        borderColor: [
                                                        'rgba(52, 235, 91, 1)',
                                                        'rgba(255,99,132,1)',
                                                        ],
                                                        label: 'jenis_kelamin'
                                                    }],
                                                    labels: ['Laki-laki', 'Perempuan']},
                                                options: {
                                                    responsive: true
                                                }
                                            };

                                            window.onload = function() {
                                                var ctx = document.getElementById('myPieChart').getContext('2d');
                                                window.myPie = new Chart(ctx, config);
                                            };

                                            document.getElementById('randomizeData').addEventListener('click', function() {
                                                config.data.datasets.forEach(function(dataset) {
                                                    dataset.data = dataset.data.map(function() {
                                                        return randomScalingFactor();
                                                    });
                                                });

                                                window.myPie.update();
                                            });

                                            var colorNames = Object.keys(window.chartColors);
                                            document.getElementById('addDataset').addEventListener('click', function() {
                                                var newDataset = {
                                                    backgroundColor: [],
                                                    data: [],
                                                    label: 'New dataset ' + config.data.datasets.length,
                                                };

                                                for (var index = 0; index < config.data.labels.length; ++index) {
                                                    newDataset.data.push(randomScalingFactor());

                                                    var colorName = colorNames[index % colorNames.length];
                                                    var newColor = window.chartColors[colorName];
                                                    newDataset.backgroundColor.push(newColor);
                                                }

                                                config.data.datasets.push(newDataset);
                                                window.myPie.update();
                                            });

                                            document.getElementById('removeDataset').addEventListener('click', function() {
                                                config.data.datasets.splice(0, 1);
                                                window.myPie.update();
                                            });
                                        </script>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">tekan tombol "Logout" jika iya, tekan tombol "Cancel" jika tidak.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="halamansekolah/index.php">Logout</a>
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
    <script src="js/bootstrap.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
   <script src="Chart.js"></script>

</body>

</html>