<?php
include "koneksi.php";

$delet = $_POST["cari"];

$sql = "DELETE FROM mahasiswa WHERE nrp = '$delet'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil dihapus";
}else{
	echo "Tidak di temukan NRP yang ingin anda hapus !".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>