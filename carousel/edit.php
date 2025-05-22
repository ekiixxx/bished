<?php
require_once "conf/konek.php";


function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	};
	return $rows;
};

function ubah($data) {
	global $koneksi;
		$id = $_GET["id"];
    $nama = $data["nama"];
    $komentar = $data["komentar"];

	$query = "UPDATE komentar SET
				id = '$id',
			  nama = '$nama',
        komentar = '$komentar'
			  WHERE id = '$id'
			";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

$id = $_GET["id"];
$komentar = query("SELECT * FROM komentar WHERE id = '$id'")[0];

if (isset ($_POST["submit"])) {

  if (ubah($_POST) > 0 ) {
    echo "
      <script>
      alert('Data Berhasil di Edit!');
        document.location.href = 'tentang kami.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
          document.location.href = 'tentang kami.php';
      </script>
    ";
  }
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
	 <form action="" method="post">

        <label>Nama</label>
          <input type="text" name="nama" value="<?= $komentar["nama"]; ?>">
        <label>Komentar</label>
          <input type="text" name="komentar" value="<?= $komentar["komentar"]; ?>">
        
        <button type="submit" name="submit">Ubah</button>
      </form>
</body>
</html>