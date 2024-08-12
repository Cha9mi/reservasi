<?php
        include 'koneksi.php';

        $name = $_POST['nama'];
        $usia = $_POST['usia'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $dokter = $_POST['dokter'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];

        var_dump($_POST);
        $query = "UPDATE janji_temu SET nama = '$name', usia = '$usia', gender = '$gender', alamat = '$alamat', dokter = '$dokter', tanggal = '$tanggal', waktu = '$waktu' where id = $_POST[id]";
        echo $query;
        $sql = mysqli_query($conn, $query);

        header("Location: crudReservasi.php");
?>