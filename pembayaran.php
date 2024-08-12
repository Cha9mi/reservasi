<?php
    include 'koneksi.php';

    session_start();

    $name = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $dokter = $_POST['dokter'];
    $harga = $_POST['harga'];
    $metode = $_POST['metode'];
    

    $sql = "INSERT INTO pembayaran (nama, tanggal, waktu, dokter, harga, metode) VALUES('$name', '$tanggal', '$waktu', '$dokter', '$harga', '$metode')";

    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan <br>";
    }else{
        echo "Data gagal ditambahkan<br>";
    }

    header("Location: halamanPembayaran.php");
?>
