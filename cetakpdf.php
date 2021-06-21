<?php
include('koneksi.php');
session_start();

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();

	$nomorun = $_SESSION['nomorun'];
	$tahunlulus = $_SESSION['tahunlulus'];
	$namalengkap = $_SESSION['namalengkap'];
	$usia = $_SESSION['usia'];
	$tempatlahir = $_SESSION['tempatlahir'];
	$tanggallahir = $_SESSION['tanggallahir'];
	$jeniskelamin = $_SESSION['jeniskelamin'];
	$alamat = $_SESSION['alamat'];
	$asalsekolah = $_SESSION['asalsekolah'];
	$nomorhp = $_SESSION['nomorhp'];
	$namaortuwali = $_SESSION['namaortuwali'];
	$pekerjaan = $_SESSION['pekerjaan'];
	$alamatortu = $_SESSION['alamatortu'];
	$nomorhportu = $_SESSION['nomorhportu'];
	$jurusan = $_SESSION['jurusan'];

	$html =
	'<html><body>'.
	'<center>BUKTI PENDAFTARAN FORMULIR</center>'.
	'<br>No. Peserta Ujian Nasional: '.$nomorun.
	'<br>Tahun Lulus: '.$tahunlulus.
	'<br>Nama Lengkap: '.$namalengkap.
	'<br>Usia: '.$usia.
	'<br>Tempat Lahir: '.$tempatlahir.
	'<br>Tanggal Lahir: '.$tanggallahir.
	'<br>Jenis Kelamin: '.$jeniskelamin.
	'<br>Alamat: '.$alamat.
	'<br>Asal Sekolah: '.$asalsekolah.
	'<br>No. HP: '.$nomorhp.
	'<br>Nama Orang Tua Wali: '.$namaortuwali.
	'<br>Pekerjaan: '.$pekerjaan.
	'<br>Alamat Orang Tua: '.$alamatortu.
	'<br>No. HP Orang Tua: '.$nomorhportu.
	'<br>Jurusan: '.$jurusan.
	'</body></html>';

	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4','portrait');
	$dompdf->render();
	$dompdf->stream('Formulir_'.$namalengkap.'.pdf', array("Attachment"=>0));
?>