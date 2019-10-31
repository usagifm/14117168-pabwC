<?php
include "koneksi.php";

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$foto = $_FILES['foto']['name'];

date_default_timezone_set("Asia/Jakarta");
$tgl = date("Y:m:d");

$sql = "INSERT INTO mahasiswa(nrp,nama,alamat,id_jur,foto) VALUES('$nrp','$nama','$alamat','$jurusan','$foto')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil ditambahkan";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>