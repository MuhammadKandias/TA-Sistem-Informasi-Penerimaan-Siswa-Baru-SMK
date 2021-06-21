<?php
include 'koneksi.php';
session_start(); 
$username = $_POST['username'];
$password = $_POST['password'];
$database = mysqli_query($koneksi, "SELECT * FROM admin where username = '$username' and password = '$password'");

$ceklogin = mysqli_num_rows($database);
if($ceklogin>0){
	$ambil_data_admin = mysqli_query($koneksi, "SELECT * FROM admin where username = '$username' and password = '$password'");
	while ($row = $ambil_data_admin->fetch_assoc()){
		$id_admin = $row['id_admin'];
		$nama = $row['nama'];
		$email = $row['email'];
	}
	$_SESSION['id_admin'] = $id_admin;
	$_SESSION['nama'] = $nama;
	$_SESSION['email'] = $email;
	$_SESSION['status_admin'] = "login";
	header("location:../dashboard.php");
}
else{
	header("location:loginadmin.php?pesan=gagal");
}
?>