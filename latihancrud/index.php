<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2 align="center">Halaman Admin</h2>
	<hr color="red" width="100%" size="4">
	</br>
	<a href="tambah-data.php">+TAMBAH</a>
	<div>
	<table class="table" border="1">
		<thead>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>KOM</th>
			<th>Jurusan</th>
			<th colspan="2">Aksi</th>
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
							<td>
								<a href='rubah-data.php?rubah_id=$id'>Edit</a>
								<a href='hapus-data.php?hapus_id=$id'>Delete</a>
							</td>
						  </tr>";
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
 	</br>
 	</div>
 	<h3><a href="home.php">Home</a></h3>
</body>
</html>