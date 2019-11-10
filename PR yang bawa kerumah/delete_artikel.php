<?php
include "koneksi.php";

$delet = $_GET["delete"];

$sql = "UPDATE user set artikel = ' ' where id='$delet'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil dihapus";
	header('location: index.php');
}else{
	echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>