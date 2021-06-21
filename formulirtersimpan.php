<?php
include('koneksi.php');

session_start();
echo "<center>FORMULIR PENDAFTARAN</center><br><br>";
echo "No. Peserta Ujian: ".$_SESSION['nomorun']."<br><br>";
echo "Tahun Lulus: ".$_SESSION['tahunlulus']."<br><br>";
echo "Nama Lengkap: ".$_SESSION['namalengkap']."<br><br>";
echo "Usia: ".$_SESSION['usia']."<br>";
echo "Tempat Lahi: ".$_SESSION['tempatlahir']."<br><br>";
echo "Tanggal Lahir: ".$_SESSION['tanggallahir']."<br><br>";
echo "Jenis Kelamin: ".$_SESSION['jeniskelamin']."<br><br>";
echo "Alamat: ".$_SESSION['alamat']."<br><br>";
echo "Asal Sekolah: ".$_SESSION['asalsekolah']."<br><br>";
echo "No. HP: ".$_SESSION['nomorhp']."<br><br>";
echo "Nama Orang Tua Wali: ".$_SESSION['namaortuwali']."<br><br>";
echo "Pekerjaan: ".$_SESSION['pekerjaan']."<br><br>";
echo "Alamat Orang Tua: ".$_SESSION['alamatortu']."<br><br>";
echo "No. HP Orang Tua: ".$_SESSION['nomorhportu']."<br><br>";
echo "Jurusan Yang Dipilih: ".$_SESSION['jurusan']."<br><br>";



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min/js"></script>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	

	<button onclick="location.href='cetakpdf.php'" id="cetakpdf" class="btn btn-warning" style="margin-left:1%; margin-bottom: 1%;">Cetak File PDF</button>

</body>
</html>