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
		.base{
			width: 400px;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			background-color: #ededed;
		}
		label{
			margin-top: 10px;
			float: left;
			text-align: left;
			width: 100%;
		}
		input{
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f8f8f8;
			border: 2px solid #ccc;
			outline-color: salmon;
		}
		button{
			background-color: salmon;
			color: #fff;
			padding: 10px;
			font-size: 12px;
			border: 0;
			margin-top: 20px;
		}
		a{
			background-color: salmon;
			color: #fff;
			padding: 10px;
			font-size: 12px;
			text-decoration: none;
		}
		select{
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f8f8f8;
			border: 2px solid #ccc;
			outline-color: salmon;
		}
	</style>
</head>
<body>
	<center><h1>Tambah Sepeda & Skuter</h1></center>
	<center>
		<a href="crud.php"> &nbsp; Daftar Sepeda & Skuter</a>
		<a href="tambahmobil.php">+ &nbsp; Tambah Sepeda & Skuter</a>
	</center>
	<br>
	<form method="POST" action="prosestambah.php" enctype="multipart/form-data">
	<section class="base">
		<div>
			<label>Nama </label>
			<select name='nama'>
				<option value='Sepeda'>Sepeda</option>
				<option value='Skuter'>Skuter</option>
	</select>
		</div>
		<div>
			<label>Tipe Sepeda atau Skuter</label>
			<select name='tipe'>
				<option value='Tandem'>Tandem</option>
				<option value='BMX'>BMX</option>
				<option value='Balap'>Balap</option>
				<option value='Fixie'>Fixie</option>
				<option value='Gunung'>Gunung</option>
				<option value='Lipat'>Lipat</option>
				<option value='Skuter Listrik'>Skuter Listrik</option>
	  		</select>
		</div>
		<div>
			<label>Harga Sewa /jam</label>
			<input type="text" name="harga" required="" />
		</div>
		<div>
			<label>Stok </label>
			<input type="text" name="stok" required="" />
		</div>
		<div>
			<label>Deskripsi Skuter dan Sepeda</label>
			<input type="text" name="deskripsi" required=""/>
		</div>
		<div>
			<label>Gambar Skuter dan Sepeda</label>
			<input type="file" name="gambar" required="" />
		</div>
		<div>
			<button type="submit">Simpan</button>
		</div>
	</section>
</form>
</body>
</html>