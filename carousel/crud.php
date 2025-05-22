<?php include('konek.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		h1{
			text-transform: uppercase;
			color: #216286;
		}
		table{
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		table thead th{
			background-color: #216286;
			border: 1px solid #216286;
			color: #ffffff;
			padding: 10px;
			text-align: left;
			/*text-shadow: 1px 1px 1px #aaaaaa;*/
		}
		table tbody td{
			border: 1px solid #ddeeee;
			color: #333;
			padding: 10px;
		}
		a{
			background-color: salmon;
			color: #fff;
			padding: 10px;
			font-size: 12px;
			text-decoration: none;
		}

	</style>
</head>
<body>
	<center><h1>Daftar Sepeda & Skuter</h1></center>
	<center>
		<a href="crud.php"> &nbsp; Daftar Sepeda & Skuter</a>
		<a href="tambahmobil.php">+ &nbsp; Tambah Sepeda & Skuter</a>
	</center>
		<br>
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Sepeda/Skuter</th>
					<th>Tipe Sepeda/Skuter</th>
					<th>Harga Sepeda/Skuter</th>
					<th>Status Sepeda/Skuter</th>
					<th>Deskripsi Sepeda/Skuter</th>
					<th>Gambar Sepeda/Skuter</th>
					<th>Edit</th>
					<th>Hapus</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
					$query = "SELECT * FROM daftarmobil ORDER BY tipe ASC";
					$result = mysqli_query($koneksi, $query);

					if(!$result){
						die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
					}
					$no = 1;

					while ($row = mysqli_fetch_assoc($result)){

				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['tipe']; ?></td>
					<td><?php echo $row['harga']; ?></td>
					<td><?php echo $row['stok']; ?></td>
					<td><?php echo $row['deskripsi']; ?></td>
					<td><center><img src="gambar/<?php echo $row['gambar']; ?>" width="200" ></center></td>
					<td>
						<a href="editmobil.php?tipe=<?php echo $row['tipe']; ?>">Edit</a>
					</td>
					<td>
						<a href="proseshapus.php?tipe=<?php echo $row['tipe']; ?>" onclick="return confirm(' anda yakin ingin menghapus stok ini?')"> hapus</a>
					</td>
				</tr>
				<?php
					$no++;
				}
				 ?>
				

			</tbody>
		</table>
</body>
</html>