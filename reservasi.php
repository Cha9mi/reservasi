<?php
    include 'koneksi.php';

    session_start();

    $name = $_POST['nama'];
    $usia = $_POST['usia'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $dokter = $_POST['dokter'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    
    
    
    

    $sql = "INSERT INTO janji_temu(nama, usia, gender, alamat, dokter, tanggal, waktu) VALUES('$name', '$usia', '$gender', '$alamat', '$dokter', '$tanggal', '$waktu')";

    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan <br>";
    }else{
        echo "Data gagal ditambahkan<br>";
    }

    header("Location: halamanReservasi.php");
