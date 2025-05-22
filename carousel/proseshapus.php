<?php 
include('konek.php'); 
$tipe = $_GET['tipe'];
$query = "DELETE FROM daftarmobil where tipe = '$tipe'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
	echo "<script>alert('data berhasil dihapus!');window.location='crud.php";
}

if (!isset($_SESSION['daftarmobil'])) {
    header('Location: crud.php');
}
