<?php 
include 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input data</title>
</head>
<body background="sky.png">
<h2 align="center">Silahkan Input Data</h2>
<p align="center"><a href="data.php">Data</a></p>
<form action="" method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>File</td>
			<td>:</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>
	</table>
</form>

<?php 
if (isset($_POST['kirim'])){
 $nama = $_POST ['nama'];
 $nama_file = $_FILES ['gambar']['name'];
$source = $_FILES ['gambar']['tmp_name'];
$folder = './uploads/';

move_uploaded_file($source, $folder.$nama_file);
$insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES (
	NULL,
	'$nama',
	'$nama_file')");
if ($insert){
	header('location:data.php');
}else{
	echo "<br><br>Gagal Upload";
}
}
?>
</body>
</html>