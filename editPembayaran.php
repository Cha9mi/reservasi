<?php
        include 'koneksi.php';

        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $dokter = $_POST['dokter'];
        $harga = $_POST['harga'];
        $metode = $_POST['metode'];

        var_dump($_POST);
        $query = "UPDATE pembayaran SET nama = '$nama', tanggal = '$tanggal', waktu = '$waktu', dokter = '$dokter', harga = '$harga', metode = '$metode' where id = $_POST[id]";
        echo $query;
        $sql = mysqli_query($conn, $query);

        header("Location: crudPembayaran.php");
?>