<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PENDAFTARAN SMK</title>
        <link rel="icon" type="image/x-icon" href="assets/sekolah.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">SEKOLAH MENENGAH KEJURUAN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="../sistemlogin/login.php">PENDAFTARAN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontak">KONTAK</a></li>
                        <li class="nav-item"><a class="nav-link" href="../sistemlogin/loginadmin.php">LOGIN ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header style="background-image: url('assets/123.png'); color: black;">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder text-primary">SELAMAT DATANG DI SMK</h1>
                <p class="fs-4 fw-bolder text-success">"SEKOLAH MENENGAH KEJURUAN"</p>
                <a class="btn btn-lg btn-info" href="#beranda">PROFIL</a>
            </div>
        </header>
        <!-- About section-->
        <section id="beranda">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>PROFIL</h2>
                        <center><h4>VISI</h4></center>
                        <p class="lead fw-bolder">MENJADIKAN WARGA SMK UNITOMO TANGGUH, TANGGAP DAN TRENGGINAS DALAM BINGKAI NKRI</p>
                        <center><h4>MISI</h4></center>
                        <p class="lead">
                            <ul class="fw-bolder">
                                <li>MENYELENGGARAKAN PENDIDIKAN AGAR SISWA MENJADI TRAMPIL, SOPAN, DISIPLIN DAN JUJUR.</li>
                                <li>MENGAJAK SISWA UNTUK SEMAKIN DEWASA DALAM IMAN, PERBUATAN, GUYUB DAN PEDULI KEPADA SESAMA DAN LINGKUNGAN.</li>
                                <li>MEMBERI BEKAL KEPADA SISWA BERDASARKAN BAKAT DAN MINAT AGAR MAMPU HIDUP MANDIRI DAN BERTANGGUNG JAWAB.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services carousel-->
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>JURUSAN</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/tpp1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/akuntansi1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/animasi1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/multimedia1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/perkantoran1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/pmp1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/tkj1.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section-->
        <section id="kontak">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h3>KONTAK</h3>
                        <p class="lead">Telepon: (031)-72513180 <br>Fax: (031)-72513180 <br>Email: smk777surabaya@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Andi & Amir</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
