<?php
include ('koneksi.php');
session_start();
if (!isset($_SESSION['status']))
 {
	header("location: sistemlogin/proseslogin.php");
	exit;
}

//jika tombol diklik
if(isset($_POST['btnsimpan']))
{
	$id_pendaftar = $_SESSION['id_pendaftar'];
	$nomorun = $_POST['tnoun'];
	$tahunlulus = $_POST['tlulus'];
	$namalengkap = $_POST['tnama'];
	$usia = $_POST['tusia'];
	$tempatlahir = $_POST['ttmptlahir'];
	$tanggallahir = date('Y-m-d',strtotime($_POST['ttgllahir']));
	$jeniskelamin = $_POST['jeniskelamin'];
	$alamat = $_POST['talamat'];
	$asalsekolah = $_POST['tasalsekolah'];
	$nomorhp = $_POST['tnohp'];
	$namaortuwali = $_POST['tnamaortuwali'];
	$pekerjaan = $_POST['tpekerjaan'];
	$alamatortu = $_POST['talamatortu'];
	$nomorhportu = $_POST['tnohportu'];
	$jurusan = $_POST['tjurusan'];

	$simpan = mysqli_query($koneksi, "INSERT INTO formulir (id_pendaftar, no_peserta_ujian_nasional, tahun_kelulusan, nama_lengkap, usia, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat_rumah, asal_sekolah, no_hp, nama_orang_tua_wali, pekerjaan, alamat_rumah_ortu, no_hp_ortu, jurusan)VALUES ('$id_pendaftar','$nomorun', '$tahunlulus', '$namalengkap', '$usia', '$tempatlahir', '$tanggallahir', '$jeniskelamin', '$alamat', '$asalsekolah', '$nomorhp', '$namaortuwali', '$pekerjaan', '$alamatortu', '$nomorhportu', '$jurusan')");

	if($simpan)//jika simpan berhasil
	{

		session_start();
		$_SESSION['id_pendaftar'] = $id_pendaftar;
		$_SESSION['nomorun'] = $nomorun;
		$_SESSION['tahunlulus'] = $tahunlulus;
		$_SESSION['namalengkap'] = $namalengkap;
		$_SESSION['usia'] = $usia;
		$_SESSION['tempatlahir'] = $tempatlahir;
		$_SESSION['tanggallahir'] = $tanggallahir;
		$_SESSION['jeniskelamin'] = $jeniskelamin;
		$_SESSION['alamat'] = $alamat;
		$_SESSION['asalsekolah'] = $asalsekolah;
		$_SESSION['nomorhp'] = $nomorhp;
		$_SESSION['namaortuwali'] = $namaortuwali;
		$_SESSION['pekerjaan'] = $pekerjaan;
		$_SESSION['alamatortu'] = $alamatortu;
		$_SESSION['nomorhportu'] = $nomorhportu;
		$_SESSION['jurusan'] = $jurusan;


		echo "<script>
			alert('Data Berhasil Disimpan!');
			document.location= 'formulirtersimpan.php';
			</script>";
	}
	else
	{
		echo "<script>
			alert('Data Gagal Disimpan!');
			document.location= 'formulir.php';
			</script>";
	}
	// echo $id_pendaftar."<br>".$nomorun."<br>".$tahunlulus."<br>".$namalengkap."<br>".$usia."<br>".$tempatlahir."<br>".$tanggallahir."<br>".$jeniskelamin."<br>".$alamat."<br>".$asalsekolah."<br>".$nomorhp."<br>".$namaortuwali."<br>".$pekerjaan."<br>".$alamatortu."<br>".$nomorhportu."<br>".$jurusan;

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORMULIR PENDAFTARAN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container">

	<div>
	<h1 class="text-center text-dark">FORMULIR PENDAFTARAN</h1>
	<h3 class="text-center text-dark">SEKOLAH MENENGAN KEJURUAN</h3>

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form input data siswa
	    <button onclick="location.href ='proseslogout/logoutuser.php';" class="btn btn-danger" style="margin-left: 75%;">Log Out</button>
	  </div>
	  
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>No. Peserta Ujian Nasional</label>
	    		<input type="text" name="tnoun" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Tahun Kelulusan</label>
	    		<input type="text" name="tlulus" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama Lengkap</label>
	    		<input type="text" name="tnama" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Usia</label>
	    		<input type="text" maxlength="2" name="tusia" class="form-control" placeholder="Isi disini! (Contoh : 15)" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Tempat Lahir</label>
	    		<input type="text" name="ttmptlahir" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Tanggal Lahir</label>
	    		<input type="date" name="ttgllahir" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-check">
	    		<label>Jenkis Kelamin :</label>
	    		<br>
			  <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="Laki-laki">
			  <label class="form-check-label" for="lakilaki">
			    Laki-laki
			  </label>
			  <br>
			  <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
			<div class="form-group">
	    		<label>Alamat</label>
	    		<textarea type="text" name="talamat" class="form-control" placeholder="Isi disini!" required></textarea>
	    	</div>
	    	<div class="form-group">
	    		<label>Asal Sekolah</label>
	    		<input type="text" name="tasalsekolah" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>No. HP</label>
	    		<input type="text" name="tnohp" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama Orang Tua/Wali</label>
	    		<input type="text" name="tnamaortuwali" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Pekerjaan</label>
	    		<input type="text" name="tpekerjaan" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Alamat Orang Tua</label>
	    		<textarea type="text" name="talamatortu" class="form-control" placeholder="Isi disini!" required></textarea>
	    	</div>
	    	<div class="form-group">
	    		<label>No. HP Orang Tua</label>
	    		<input type="text" name="tnohportu" class="form-control" placeholder="Isi disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jurusan Yang Dipilih</label>
	    		<select class="form-control"name="tjurusan" required>
	    			<option>-Pilih Jurusan-</option>
	    			<option>Teknologi Pengolahan Pangan</option>
	    			<option>Akuntansi</option>
	    			<option>Animasi</option>
	    			<option>Multimedia</option>
	    			<option>Perkantoran</option>
	    			<option>Pengawasan Mutu Pangan</option>
	    			<option>Teknik Komputer Jaringan</option>
	    		</select>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="btnsimpan">Simpan</button>
	    	<label> | </label>
	    	<button type="reset" class="btn btn-danger" name="btnkosongkan">Kosongkan</button>

	    	<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Andi & Amir</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
	    	


	    </form>
	  </div>
	</div>
	<!-- Akhir Card Form -->

</div>
	<script type="text/javascript" src="js/bootstrap.min/js"></script>
</body>
</html>