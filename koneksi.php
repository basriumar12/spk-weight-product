 
<?php
//def 
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "karyawan_wp";
//cek koneksi
// Koneksi dan memilih database di server
$con =mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
//mysqli_select_db($database) or die("Database tidak bisa dibuka");
?>