<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "tugas";

//membuat koneksi
$koneksi = mysqli_connect($server,$user,$pass,$db);

//mengecek koneksi
if(!$koneksi){
	die("Koneksi gagal : ".mysqli_connect_error());
}

?>