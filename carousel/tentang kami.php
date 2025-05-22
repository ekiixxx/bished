<?php include('konek.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="tentang.css">
    <title>Bished Rent Car</title>
  </head>
    
<body>
  <div class="nav">
    <ul>
      <li><a style="font-size: 20px; font-family: robotto; padding: 14px 10px;" href="home.php">Home</a></li>
      <li><a style="font-size: 20px; font-family: robotto; padding: 14px 10px;" href="tentang kami.php">Tentang Kami</a></li>
      <li><a style="font-size: 20px; font-family: robotto; padding: 14px 10px;" href="galeri.php">Galeri</a></li>
      <li><a style="font-size: 20px; font-family: robotto; padding: 14px 10px;" href="bantuan.php">Bantuan</a></li>
      <li><a style="font-size: 20px; font-family: robotto; padding: 14px 10px;" href="grafik.php">Grafik</a></li>
      <li style="font-size: 20px; font-family: robotto; float: right; "><a href="https://www.whatsapp.com/">PESAN</a></li>
    </ul>
  </div>
  <main>
    <section>
        <center>
            <br>
            <a href="home.php"><img src="lucasposter2.png"></a>
        </center>
        <h1 style="padding-left: 60px;  style=font-family:lora"> <th><b>Feedback</b></h1><br>
        <p style="padding-left: 60px; font-family:lora">Demi memberikan layanan yang baik namun juga memberikan dampak positif bagi
                lingkungan dan orang-orang yang membutuhkan. Kami memberikan program bagi anda
            dan Indonesia. Kami juga butuh masukan dari penyewa-penyewa sekalian agar kedepannya kami dapat berkembang lebih baik lagi dari sebelumnnya </p>
            <br>
    <center style="font-family:lora"><h2> Komentar</h2></center>
    <div class="komen" style=" text-align: -webkit-center;">
    </div>
    </section>
    </main>

    <table>
    <thead>
      <tr>
        <th><center>Nama</center></th>
        <th><center>Komentar</center></th>
        <th><center>HAPUS</center></th>
        <th><center>EDIT</center></th>
      </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM komentar";
        $query = $koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['komentar'] . "</td>
                        <td><center><a href='hapus.php?hapus=" . $row['id'] . "&tabel=komentar&where=id'>HAPUS</a></center></td>
                        <td><center><a href='edit.php?id=" . $row['id']. "'>EDIT</a></center></td>
                    </tr>";
            }
        } else {
            $msg = 'error';
        }
        ?>
    

  </tbody>

</table>
<center>
<button><a href="buatkomentar.php" role="button">Buat Komentar</a></button>
</center>
<footer style="text-align: center;">
  <br>
  <p>&copy; 2020 – 2021 Bished Company </p>
</footer>  
</body>
</html>