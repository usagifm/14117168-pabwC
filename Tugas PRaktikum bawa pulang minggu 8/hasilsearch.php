<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampil Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Tampil Data</h3>
		<table class="table">
			<thead>
				<tr>
					<th>NRP</th>
					<th>Nama</th>
					<th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Foto</th>
				</tr>
			</thead>
			<tbody>



<?php

$cari=$_POST['cari'];

include "koneksi.php";

$sql = "SELECT nrp,nama,foto,alamat,id_jur from mahasiswa where nama like '%$cari%' ";

$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

?>

<?php

while($data = mysqli_fetch_array($query)){
    $nrp = $data["nrp"];
    $nama = $data["nama"];
    $foto = $data["foto"];
    $alamat = $data["alamat"];
    $jurusan = $data["id_jur"];
   

    ?>


   <?php echo "<tr>  
    <td>$nrp</td>
    <td>$nama</td> " ?>

    <?php
    if ($jurusan == 1 ){

        echo "<td>Telekomunikasi</td>
        ";

    } else if ($jurusan == 2){

        echo "<td>Teknik Informatika</td>
        ";
    }else if ($jurusan == 3){

        echo "<td>Teknik Elektro</td>
        ";
    }else if ($jurusan == 4){

        echo "<td>Perencanaan Wilayah dan Kota</td>
        ";
    }
?>

<?php echo "
    
    <td>$alamat</td>
    <td>  " ?>
    
    
    <img src="<?= $foto ?>" alt="<?= $foto ?>" width="100px">

<?php
    echo "</td>"


        ?>

   <?php echo " </tr>";

?>
  
    
    <?php } ?>
</tbody>
    </table>
    

    <form action="hasilsearch.php" method="post">


Masukan nama mahasiswa yang mau anda cari
<input type ="text" type ="text" name="cari">

<input type ="submit" value="cari" >

</div>
</body>
</html>