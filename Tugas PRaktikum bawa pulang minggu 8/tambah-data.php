<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Tambah Data</h3>
		<form action="insert.php" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>NRP</label>
				<input type="number" name="nrp" class="form-control">

				</div>

			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>alamat</label>
				<input type="text" name="alamat" class="form-control">
			</div>

			<div class="form-group">
				<label>Jurusan</label>
				<select name="jurusan">
    
			<option value="1">Telekomunikasi</option>
			<option value="2">Teknik Informatika</option>
			<option value="3">Teknik Elektro</option>
			<option value="4">Perencanaan Wilayah dan Kota</option>

			</select>
			</div>

			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>

			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</body>
</html>