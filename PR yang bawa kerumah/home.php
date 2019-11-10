<?php
 session_start();
 if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
 header('location:index.php');
}
 include_once('user.php');
 include_once('DbConnection.php');

 include ('koneksi.php');


 $user = new User();

 
 //fetch user data
 $sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
 $row = $user->details($sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>PHP Login Authentication OOP PABW</title>
 </head>
 <body>
 <div>
 <h1>PHP Login Authentication OOP PABW</h1>
 <div>
 <div>
 <h2>Selamat datang di Dashboard </h2>
 <h4>User Info: </h4>
 <p>Name: <?php echo $row['fname']; ?></p>
 <p>Username: <?php echo $row['username']; ?></p>
 <p>Password: <?php echo $row['password']; ?></p>



 <h3>Tampil Data</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>id</th>
					<th>Nama</th>
					<th colspan="3">Aksi</th>
                    <th>Artikel</th>
				
                </tr>
			</thead>
			<tbody>
				<?php

                    if ($_SESSION['user'] == 1) {

                $sqli = "SELECT * FROM user ORDER BY id ASC ";
                $query = mysqli_query($koneksi, $sqli) or die (mysqli_error());


$no = 1;

while($semua = mysqli_fetch_array($query)){
				$id = $semua["id"];
				$fname = $semua["fname"];
				$artikel = $semua["artikel"];

				echo "<tr>
				<td>$no</td>
				<td>$id</td>
				<td>$fname</td>
				<td>
                <a href='buat_artikel.php?buat=$id'>Buat</a>
                <a href='delete_artikel.php?delete=$id'>Hapus</a>
                <a href='update_artikel.php?update=$id'>Update</a>
						
                </td>
                <td>$artikel</td>
				</tr>";
				$no++;
            }


        } else {

            $sqli = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
            $query = mysqli_query($koneksi, $sqli) or die (mysqli_error());


$no = 1;

while($semua = mysqli_fetch_array($query)){

            $id = $semua["id"];
            $fname = $semua["fname"];
            $artikel = $semua["artikel"];

            echo "<tr>
            <td>$no</td>
            <td>$id</td>
            <td>$fname</td>
            
            <td>
                <a href='buat_artikel.php?buat=$id'>Buat</a>
                <a href='delete_artikel.php?delete=$id'>Hapus</a>
                <a href='update_artikel.php?update=$id'>Update</a>
                    
            </td>
            <td>$artikel</td>
            </tr>";
            $no++;
        }


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