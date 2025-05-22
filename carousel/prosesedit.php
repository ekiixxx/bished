<?php  
    include('konek.php');

    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    if($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $namagambarbaru = $angka_acak. '-' . $gambar;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/' .$namagambarbaru);

            $query = "UPDATE produk SET nama = '$nama', tipe = '$tipe', harga = '$harga', status = '$status', deskripsi = '$deskripsi', gambar = '$gambar' ";
            
            $query = "WHERE nama = '$nama'";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {
                die("Query Error : ".mysqli_error($koneksi). " - ".mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil diubah');window.location='crud.php;</script>";
            }
        
        } else {
            echo"<script>alert('Ekstensi gambar hanya bisa jpg, png!');window.location='editmobil.php;</script>";
        }
    } else {
        $query = "UPDATE daftarmobil SET nama = '$nama', tipe = '$tipe', harga = '$harga', status = '$status', deskripsi = '$deskripsi'";
            
        $query = "WHERE nama = '$nama'";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_error($koneksi). " - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah');window.location='crud.php;</script>";
        }
    }