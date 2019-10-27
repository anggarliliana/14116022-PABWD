<!DOCTYPE html>
<html lang="en">
<head>
	<title>Belajar PHP</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
	<h2>Form Biodata Mahasiswa</h2>
	<form method="POST" action="">
		<div class="form-group">
      <div class="col-md-6">
    	<label for="nama">Nama :</label>
    	<input type="text" class="form-control" id="nama" name="name"><br>
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control" id="alamat" name="alamat"><br>
      <label for="jk" >Jenis Kelamin :</label>
      <select
      < name="jk" class="form-control">
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select><br>
      <label for="gd">Golongan Darah :</label>
      <select
      < name="gd" class="form-control">
        <option>A</option>
        <option>B</option>
        <option>AB</option>
        <option>O</option>
      </select><br>
        <label for="hobby" >Hobby :</label> 
       <input type="checkbox" />Golf
                 <input type="checkbox" />Bola
                 <input type="checkbox" />Renang
  	<br>
     
      <br>
  		<button name="kirim">kirim</button>
      </div>
    </div>
    <div>
  	</form>	

  	<?php if (isset($_POST['kirim'])) : ?>
  	<table class="table table-bordered table-striped table-hover" >
  		<thead>
        <tr>
        <th>No</th>
  			<th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
  			<th>Golongan Darah</th>
        <th>Hobby</th>
     
  		<tr>
  		</thead>
  		<tbody>
  			<?php  $data = [
            [
              "nama"=>$_POST['name'],
              "alamat"=>$_POST['alamat'],
              "jk"=>$_POST['jk'],
              "gd"=>$_POST['gd'],
              "hobby"=>$_POST['hobby']
              
            ]
          ];
    ?>
    
    <?php foreach ($data as $key => $value) : ?>
    <tr>
      <td><?php echo $key+=1; ?></td>
      <td><?php echo $value["nama"]; ?> </td>
      <td><?php echo $value["alamat"]; ?> </td>
      <td><?php echo $value["jk"]; ?> </td>
      <td><?php echo $value["gd"]; ?> </td>
      <td><?php echo $value["hobby"]; ?> </td>
    
     
    </tr>
    <?php endforeach; ?>  
    </tbody>
    </table>
  <?php endif; ?>
	</body>
	</html>
