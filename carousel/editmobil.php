<?php include('konek.php');
$editmobil = $_GET['tipe'];
$daftarmobil = query("SELECT * FROM daftarmobil WHERE tipe = '$editmobil'")[0];


if (isset ($_POST["submit"])) {

  if (ubah($_POST) > 0 ) {
    echo "
      <script>
      alert('Data Berhasil di Edit!');
      document.location.href = 'crud.php';

      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        document.location.href = 'crud.php';

      </script>
    ";
  }
}


?>
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
	</style>
</head>
<body>
	<center><h1>Edit Sepeda & Skuter <?php echo $daftarmobil['nama']; ?></h1></center>
	<center>
		<a href="crud.php"> &nbsp; Daftar Sepeda & Skuter</a>
		<a href="tambahmobil.php">+ &nbsp; Tambah Sepeda & Skuter</a>
	</center>
	<br>
	<form method="POST" action="" enctype="multipart/form-data">
	<section class="base">
		<div>
			<label></label>
			<input type="text" name="nama" autofocus="" required="" value="<?php echo $daftarmobil['nama']; ?>" style=display:none>
		</div>
		<div>
			<label></label>
			<input type="text" name="tipe" required="" value="<?php echo $daftarmobil['tipe']; ?>" style=display:none>
		</div>
		<div>
			<label></label>
			<input type="text" name="harga" required="" value="<?php echo $daftarmobil['harga']; ?>"style=display:none>
		</div>
		<div>
			<label>Stok</label>
			<input type="text" name="stok" required="" value="<?php echo $daftarmobil['stok']; ?>" />
		</div>
		<div>
			<label></label>
			<input type="text" name="deskripsi" required="" value="<?php echo $daftarmobil['deskripsi']; ?>" style=display:none>
			<!-- style="height: 100px" -->
		</div>
		<div>
			<label>Gambar Mobil</label>
			<img src="gambar/<?php echo $daftarmobil['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;" >
			<input type="text" name="gambar" value="<?php echo $daftarmobil['gambar']; ?>" style="display: none;" />
			<i style="float: left;font-size: 11px;color: red;">Abaikan jika tidak merubah gambar</i>
		</div>
		<div>
			<button type="submit" name="submit">Simpan</button>
		</div>
	</section>
</form>
</body>
</html>