<?php
include 'koneksi.php';
$nama_lengkap = $_POST['namalengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$query = "INSERT INTO user set nama = '$nama_lengkap', username = '$username', password = '$password', email = '$email'";

mysqli_query($koneksi, $query);
header("location:login.php?pesan=berhasil");
?>