<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<form action="tambah.php" method="POST">
		TAMBAH DATA <br>
		NRP  : 
		<input type="text" name="nrp" size="8" > <br>
		Nama  :
		<input type="text" name="nama" size="50"> <br>
		Jurusan  : 
		<select name="jurusan">
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Teknik Elektro">Teknik Elektro</option>
			<option value="Teknik Sipil">Teknik Sipil</option>
		</select><br>
		<input type="submit" name="tambah" value="Tambah">
	</form>
	<hr><br>
	<form action="search.php" method="POST">
		<h4>Cari Mahasiswa</h4>
		Nama  : 
		<input type="text" name="nama"><br>
		<input type="submit" name="cari" value="Cari">
	</form><br>
	<hr><br>
	<form action="delete.php" method="POST">
		<h4>Hapus Mahasiswa</h4>
		Nama   :
		<input type="text" name="nama"><br>
		<input type="submit" name="hapus" value="Hapus">
	</form>

</body>
</html>