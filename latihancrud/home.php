<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2 align="center">DATA PRAKTIKAN LAB SI 5</h2>
	<hr color="red" width="100%" size="4">
	<div>
	<table class="table" border="1">
		<thead>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>KOM</th>
			<th>Jurusan</th>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
 
				// query sql untuk mengambil data pada tabel
				$sql = "SELECT * FROM mahasiswa ORDER BY id_mhs ASC";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
				$no = 1; // no. urut
 
				while($data = mysqli_fetch_array($query)){
					
					$id = $data["id_mhs"];
					$nim = $data["nim"];
					$nama = $data["nama"];
					$kom = $data["kom"];
					$jurusan = $data["jurusan"];
 
					echo "<tr>
							<td>$no</td>
							<td>$nim</td>
							<td>$nama</td>
							<td>$kom</td>
							<td>$jurusan</td>							
						  </tr>";
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
	</br>
	</div>
 	<h3><a href="index.php">Halaman Admin</a></h3>
</body>
</html>