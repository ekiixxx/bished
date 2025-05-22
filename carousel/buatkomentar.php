<?php include('konek.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="daftar.css">
    <title>Bished Rent Car</title>
  </head>
    
<body>




  <div class="nav">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="tentang kami.php">Tentang Kami</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="bantuan.php">Bantuan</a></li>
      <li style="float: right;"><a href="https://www.whatsapp.com/">PESAN</a></li>
    </ul>
  </div>
  <main>
    <center>
      <br>
      <a href="home.php"><img src="lucasposter.png"></a>
    <h2 >Inputkan Komentar</h2><br>
    <div class="container form-signin">
        <?php
        $msg = '';

        if (
            isset($_POST['posting']) && !empty($_POST['nama'])
            && !empty($_POST['komentar'])
        ) {

            $sql = "INSERT INTO `komentar` ( `nama`, `komentar`) VALUES ('" . $_POST['nama'] . "', '" . $_POST['komentar'] . "')";
            $query = $koneksi->query($sql);

            if ($query === TRUE) {
                header('Location: tentang kami.php');
            } else {
                $msg = 'gagal mengirim.';
            }
        }
        ?>
    </div>

    <div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                                                        ?>" method="post">
            <h4 ><?php echo $msg; ?></h4>

            <input style="width: 40%; height: 40px; text-align: center;" type="text" name="nama" placeholder="nama" required autofocus><br><br>
            <input style="width: 40%; height: 40px; text-align: center;" type="text" name="komentar" placeholder="komentar" rows="10" required><br>

            <button type="submit" name="posting">Kirim Komentar</button>
        </form>
    </div>
    </center>
  </main>
<footer style="text-align: center;">
  <br>
  <p>&copy; 2020 – 2021 Bished Company </p>
</footer>  
</body>
</html>


