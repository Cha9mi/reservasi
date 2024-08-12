<?php
// Menginclude file koneksi.php
require_once('../koneksi.php');

// Inisialisasi variabel alert
$alert = '';

// Memeriksa jika form hapus telah disubmit
if(isset($_POST['hapus'])){
    $id = $_POST['id'];

    // Menghapus data reservasi dari database
    $query = "DELETE FROM janji_temu WHERE id=$id";
    if(mysqli_query($conn, $query)){
        $alert = '<div class="alert alert-success" role="alert">Reservasi berhasil dihapus!</div>';
    } else {
        $alert = '<div class="alert alert-danger" role="alert">Reservasi gagal dihapus: ' . mysqli_error($conn) . '</div>';
    }
}

// Mendapatkan data janji temu dari database
$query = "SELECT * FROM janji_temu";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Daftar Janji Temu</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom stlylesheet -->
    <style>
        body{
            background: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg');
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Janji Temu</h2>
        <?php echo $alert; // Menampilkan alert ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Dokter</th>
                    <th>Aksi</th>
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
                    echo '<td>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="'.$row['id'].'">
                                <button type="submit" name="edit" class="btn btn-primary btn-sm">Edit</button>
                                <button type="submit" name="hapus" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                          </td>';
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
