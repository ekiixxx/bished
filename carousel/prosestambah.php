<?php  
	include('konek.php');

	$nama = $_POST['nama'];
	$tipe = $_POST['tipe'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = $_POST['deskripsi'];
	$gambar = $_FILES['gambar']['name'];

	if ($gambar != "") {
		$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['gambar']['tmp_name'];
		$angka_acak = rand(1, 999);
		$namagambarbaru = $angka_acak. '-'.$gambar;


		if (in_array($ekstensi, $ekstensi_diperbolehkan) == true) {
			move_uploaded_file($file_tmp, 'gambar/'.$namagambarbaru);

			$query = "INSERT INTO daftarmobil (nama, tipe, harga, stok, deskripsi, gambar) VALUES
			('$nama', '$tipe', '$harga', '$stok', '$deskripsi', '$namagambarbaru')";
			$result = mysqli_query($koneksi, $query);

			if(!$result){
				die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}else {
				echo "<script>alert('Data berhasil Ditambahkan!');window.location'crud.php';</script>";
			} 

		} else {
			echo "<script>alert('Ekstensi gambar hanya bisa jpg, jpeg atau png !')window.location='tambahmobil.php'; </script>";
		}
	}else{
		$query = "INSERT INTO daftarmobil (nama, tipe, harga, stok, deskripsi) VALUES
			('$nama', '$tipe', '$harga', '$stok', '$deskripsi')";
			$result = mysqli_query($koneksi, $query);

			if(!$result){
				die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}else {
				echo "<script>alert('Data berhasil Ditambahkan!');window.location'crud.php';</script>";
			} 
	}

	if (!isset($_SESSION['daftarmobil'])) {
    header('Location: crud.php');
}
?>