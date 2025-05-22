<?php include('konek.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="daftar.css">

    <title>Bished Rent Car</title>
  </head>
    <div class="navi">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="tentang kami.php">About</a></li>
        <li><a href="galeri.php">Galery</a></li>
        <li><a href="bantuan.php">HELPl</a></li>
      </ul>
    </div>
<main>
  <section class="button">
    <div>
      <div>
        <center>
        <img src="bished.jpeg">
        <p>
          <button href="citycar.php" role="button">City Car</button>
          <button href="minibus.php" role="button">Minibus</button> 
          <button href="SUV.php" role="button">SUV/Jeep</button> 
          <button href="premium.php" role="button">Premium Car</button> 
          <button href="electric.php" role="button">Electric Car</button> 
        </center>
      </div>
    </div>
  </section>
</main>
<body>
    <table>
      <thead>
        <tr>
          <th><center>No</center></th>
          <th><center>Nama Mobil</center></th>
          <th><center>Tipe Mobil</center></th>
          <th><center>Harga Mobil</center></th>
          <th><center>Status Mobil</center></th>
          <th><center>Gambar Mobil</center></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM daftarmobil where tipe like '%city%'";
          $result = mysqli_query($koneksi, $query);
          if(!$result){
            die("Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
          }
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <td><center><?php echo $no; ?></center></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['tipe']; ?></td>
          <td><?php echo $row['harga']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <td><center><img src="gambar/<?php echo $row['gambar']; ?>" width="200" ></center></td>
        </tr>
        <?php
          $no++;
        }
         ?>

      </tbody>
    </table>
</body>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p>&copy; 2020 – 2021 Bished Company </p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
