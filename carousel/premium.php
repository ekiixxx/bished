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
    <section>
      <center>
        <br>
        <a href="home.php"><img src="bished.jpeg"></a>
        <br>
        <button><a href="citycar.php" role="button">City Car</a></button>
        <button><a href="minibus.php" role="button">Minibus</a></button>
        <button><a href="suv.php" role="button">SUV</a></button> 
        <button style="background-color: #216286; "><a href="premium.php" role="button">Premium Car</a></button> 
        <button><a href="electric.php" role="button">Electric Car</a></button>
        <br>
      </center>
    </section>
  </main>
  <table>
    <thead>
      <tr>
        <th><center>No</center></th>
        <th><center>Nama Mobil</center></th>
        <th><center>Tipe Mobil</center></th>
        <th><center>Harga Mobil</center></th>
        <th><center>Status Mobil</center></th>
        <th><center>Deskripsi</center></th>
        <th><center>Gambar Mobil</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = "SELECT * FROM daftarmobil where tipe like '%premium%'";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
          die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        }
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><center><?php echo $no; ?></center></td>
        <td style="width:10%" align="center"><?php echo $row['nama']; ?></td>
        <td style="width:10%" align="center"><?php echo $row['tipe']; ?></td>
        <td style="width:10%" align="center"><?php echo $row['harga']; ?></td>
        <td style="width:10%" align="center"><?php echo $row['status']; ?></td>
        <td style="width:40%" align="justify"><?php echo $row['deskripsi']; ?></td>
        <td><center><img src="gambar/<?php echo $row['gambar']; ?>" width="200" ></center></td>
      </tr>
      <?php
      $no++;
    }
    ?>
  </tbody>
</table>
<footer style="text-align: center;">
  <br>
  <p>&copy; 2020 – 2021 Bished Company </p>
</footer>  
</body>
</html>
