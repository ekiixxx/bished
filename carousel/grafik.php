<?php

// koneksi database
include ('konek.php');

$banding1 =mysqli_query($koneksi, "SELECT tipe FROM daftarmobil  ");
$banding2 =mysqli_query($koneksi, "SELECT  stok FROM daftarmobil ");
?>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="daftar.css">
    <link href= "https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script type="text/javascript" src="chartjs/Chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Grafik</title>
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
	<style>
		.container {
				width: 50%;
				margin: 15px auto;
		}
		</style>
  </div>
    <section>
      <center>
        <br>
        <a href="home.php"></a><br><br>
        <img src="lucasposter2.png" width="25%"><br>
        <br>
        <br>
      </center>
    </section>
    <main>
    <div class="row">
	<div class="column middle" >
							<div class="container">
									<canvas id="myChart" width="100" height="100"></canvas>
							</div>
							<script>
									var ctx = document.getElementById("myChart");
									var myChart = new Chart(ctx, {
											type: 'bar',
											data: {
													labels:  [<?php while ($b = mysqli_fetch_array($banding1)) { echo '"' . $b['tipe'] . '",';}?>],
													datasets: [{
																	label: '# of Votes',
																	data:  [<?php while ($p = mysqli_fetch_array($banding2)) { echo '"' . $p['stok'] . '",';}?>],
																	backgroundColor: [
																			'rgba(255, 99, 132, 0.2)',
																			'rgba(54, 162, 235, 0.2)',
																			'rgba(255, 206, 86, 0.2)',
																			'rgba(75, 192, 192, 0.2)',
																			'rgba(153, 102, 255, 0.2)',
																			'rgba(255, 159, 64, 0.2)',
																			'rgba(255, 99, 132, 0.2)',
																			'rgba(54, 162, 235, 0.2)',
																			'rgba(255, 206, 86, 0.2)',
																			'rgba(75, 192, 192, 0.2)',
																			'rgba(153, 102, 255, 0.2)',
																			'rgba(255, 159, 64, 0.2)'
																	],
																	borderColor: [
																			'rgba(255,99,132,1)',
																			'rgba(54, 162, 235, 1)',
																			'rgba(255, 206, 86, 1)',
																			'rgba(75, 192, 192, 1)',
																			'rgba(153, 102, 255, 1)',
																			'rgba(255, 159, 64, 1)',
																			'rgba(255, 99, 132, 0.2)',
																			'rgba(54, 162, 235, 0.2)',
																			'rgba(255, 206, 86, 0.2)',
																			'rgba(75, 192, 192, 0.2)',
																			'rgba(153, 102, 255, 0.2)',
																			'rgba(255, 159, 64, 0.2)'
																	],
																	borderWidth: 1
															}]
											},
											options: {
													scales: {
															yAxes: [{
																			ticks: {
																					beginAtZero: true
																			}
																	}]
													}
											}
									});
							</script>

            </div>
			test
          </div>
    </body>
</html>
