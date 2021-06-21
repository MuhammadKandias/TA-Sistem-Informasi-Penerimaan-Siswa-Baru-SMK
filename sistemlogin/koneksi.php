<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "pendaftaran";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysql_error($koneksi));
?>