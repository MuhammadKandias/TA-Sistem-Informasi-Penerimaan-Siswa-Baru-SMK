<?php
include ('koneksi.php');
session_start();
if (!isset($_SESSION['status_admin']))
 {
    header("location: sistemlogin/loginadmin.php");
    exit;
}

//button hapus data
if(isset($_GET['hal'])){
    if ($_GET['hal'] == "hapus"){
        $id_formulir = $_GET['id'];
        $hapus = mysqli_query($koneksi, "DELETE FROM formulir WHERE id_formulir = '$id_formulir' ");
        if($hapus){
            echo "<script>
                alert('Hapus data berhasil!!');
                document.location= 'dashboard.php';
                </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TABEL PENDAFTARAN</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
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

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                    

                        <div class="topbar-divider d-none d-sm-block"></div>

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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel pendaftar</h1>
                    <p class="mb-4">Tabel Di bawah ini merupakan tabel data pengisi formulir
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Pendaftar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php
                                    include('koneksi.php');?>
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>NO. PESERTA UJIAN NASIONAL</th>
                                            <th>TAHUN KELULUSAN</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>USIA</th>
                                            <th>TEMPAT LAHIR</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>ALAMAT</th>
                                            <th>ASAL SEKOLAH</th>
                                            <th>NOMOR HP</th>
                                            <th>NAMA ORANG TUA/WALI</th>
                                            <th>PEKERJAAN</th>
                                            <th>ALAMAT ORANG TUA</th>
                                            <th>NOMOR HP ORANG TUA</th>
                                            <th>JURUSAN YANG DI PILIH</th>
                                            <th>Aksi Admin</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "SELECT * from formulir order by id_formulir desc");
                                    while($data = mysqli_fetch_array($tampil)) :
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$no++;?></td>
                                            <td><?=$data['no_peserta_ujian_nasional']?></td>
                                            <td><?=$data['tahun_kelulusan']?></td>
                                            <td><?=$data['nama_lengkap']?></td>
                                            <td><?=$data['usia']?></td>
                                            <td><?=$data['tempat_lahir']?></td>
                                            <td><?=$data['tanggal_lahir']?></td>
                                            <td><?=$data['jenis_kelamin']?></td>
                                            <td><?=$data['alamat_rumah']?></td>
                                            <td><?=$data['asal_sekolah']?></td>
                                            <td><?=$data['no_hp']?></td>
                                            <td><?=$data['nama_orang_tua_wali']?></td>
                                            <td><?=$data['pekerjaan']?></td>
                                            <td><?=$data['alamat_rumah_ortu']?></td>
                                            <td><?=$data['no_hp_ortu']?></td>
                                            <td><?=$data['jurusan']?></td>
                                            <td>
                                                <a href="dashboard.php?hal=hapus&id=<?=$data['id_formulir']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endwhile; //penutup perulangan while ?>
                                <button onclick="location.href = 'cetakexcel.php';" id="cetak" class="btn btn-success" >Cetak File Excel</button>
                                <br><br>
                                </table>
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
                        <span>Copyright &copy; Andi & Amir</span>
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
                    <a class="btn btn-primary" href="proseslogout/logoutadmin.php">Logout</a>
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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>