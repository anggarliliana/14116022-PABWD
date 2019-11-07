
<html>
<head>
	<title>Koneksi Database MYSQL</title>
</head>
<body>
	<h1>Demo koneksi database MYSQL</h1>
<?php
$conn=mysqli_connect
("localhost","root","","tugasphp");
if ($conn) {
	echo "OK";
} else {
	echo "Server not connected";

}
?>
</body>
</html>