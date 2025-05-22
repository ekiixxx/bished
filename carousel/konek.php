<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bished');
 
/* Attempt to connect to MySQL database */
$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($koneksi === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

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
    $nama =$data ["nama"];
    $tipe = $_GET["tipe"];
    $harga = $data["harga"];
    $stok = $data["stok"];
    $gambar = $data["gambar"];
    $deskripsi = $data["deskripsi"];

    $query = "UPDATE daftarmobil SET
                nama = '$nama',
                tipe = '$tipe',
                harga = '$harga',
                stok = '$stok',
                gambar = '$gambar',
        deskripsi = '$deskripsi'
              WHERE tipe = '$tipe'
            ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
