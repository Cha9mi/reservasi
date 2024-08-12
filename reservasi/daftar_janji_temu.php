<?php
// Menginclude file koneksi.php
require_once('../koneksi.php');

// Mendapatkan data janji temu dari database
$query = "SELECT * FROM janji_temu";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Janji Temu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            background: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg');
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Janji Temu</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Dokter</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan data janji temu dalam tabel
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['tanggal']."</td>";
                    echo "<td>".$row['waktu']."</td>";
                    echo "<td>".$row['dokter']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Menggunakan Bootstrap JS (jQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
