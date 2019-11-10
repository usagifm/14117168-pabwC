<?php
 session_start();
 if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
 header('location:index.php');
}
 include_once('user.php');
 include_once('DbConnection.php');

 include ('koneksi.php');
 $user = new User();

 $hehe = $_GET["update"];

 //fetch user data
 $sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
 $row = $user->details($sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Update Artikel </title>
 </head>
 <body>
 <div>
		<table class="table">
			<thead>
				<tr>
					
					<th>id</th>
					<th>Nama</th>
					<th>Artikel</th>
				</tr>
			</thead>
			<tbody>
				<?php

                    

            $sqli = "SELECT * FROM user WHERE id = $hehe";
            $query = mysqli_query($koneksi, $sqli) or die (mysqli_error());


$no = 1;

while($semua = mysqli_fetch_array($query)){

            $id = $semua["id"];
            $fname = $semua["fname"];
            $artikel = $semua["artikel"];

            echo "<tr>
            <td>$id</td>
            <td>$fname</td>
            <td>$artikel</td>
            </tr>";
            $no++;
        }

?>
		<br>
		<br>
		<h3>Tambah Artikel</h3>

		<form action="" method="POST" enctype="multipart/form-data">
            
           
			<div class="form-group">
            
				<label>Artikel</label>
                
				<textarea name="artikel" rows="10" class="form-control"></textarea>

				</div>


				<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>

        

		</form>

		 
  <?php      
            if (isset($_POST['tambah'])) {
				$artikel = $_POST['artikel'];
			


$sql = "UPDATE user SET artikel = '$artikel' where id='$id'"; 
$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

if($query){
	echo "Data berhasil ditambahkan";
	header('location: index.php');
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);


			} 
			?>
		</tbody>
	</table>


 <a href="logout.php"><span></span> Logout</a>
 </div>
 </div>
 </div>
 </body>
 </html>