<?php 
include 'db.php';

 ?>	
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data</title>
</head>
<body background="sky.png">
      <h2 align="center">Data Gambar</h2>

       <table border="1" align="center" width="75%">
       	<tr align="center" bgcolor="yellow">
       		<th>No</th>
       		<th>Nama</th>
       		<th>Gambar</th>
       		<th>Aksi</th>
       	</tr>
       	<?php 
       	$query = mysqli_query($conn, "SELECT * FROM tb_gambar");
       	while ($row = mysqli_fetch_array($query)) {
       		# code...
       	 ?>
       	<tr align="center">
       		<td bgcolor="yellow"><?php echo $row['id_gambar']; ?></td>
       		<td bgcolor="#00ffff"><?php echo $row['nama']; ?></td>
       		<td bgcolor="#00ffff"> <img src="uploads/<?php echo $row['file']; ?>" width="100px" height="100px"></td>
       		<td bgcolor="#00ffff">
       		<a href="edit.php?id=<?php echo $row['id_gambar']; ?>">Edit</a> |
       		<a href="hapus.php?id=<?php echo $row['id_gambar']; ?>">Hapus</a>
       		</td>
       	</tr>
       	<?php } ?>
       </table>
       <h3 align="center"><a href="index.php">Tambah</a></h3>
</body>
</html>