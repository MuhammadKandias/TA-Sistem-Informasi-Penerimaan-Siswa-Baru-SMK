<?php
include 'koneksi.php';
session_start(); 
$username = $_POST['username'];
$password = $_POST['password'];
$database = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' and password = '$password'");

$ceklogin = mysqli_num_rows($database);
if($ceklogin>0){
	$ambil_data_pengguna = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' and password = '$password'");
	while ($row = $ambil_data_pengguna->fetch_assoc()){
		$id_pendaftar = $row['id_pendaftar'];
		$nama = $row['nama'];
		$email = $row['email'];
	}
	$_SESSION['id_pendaftar'] = $id_pendaftar;
	$_SESSION['nama'] = $nama;
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:../formulir.php");
}
else{
	header("location:login.php?pesan=gagal");
}
?>