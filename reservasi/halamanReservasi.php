<?php
// Menginclude file koneksi.php
require_once('../koneksi.php');

// Inisialisasi variabel alert
$alert = '';

// Memeriksa jika form telah disubmit
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $dokter = $_POST['dokter'];

    // Memasukkan data reservasi ke database
    $query = "INSERT INTO janji_temu (nama, tanggal, waktu, dokter) VALUES ('$nama', '$tanggal', '$waktu', '$dokter')";
    if(mysqli_query($conn, $query)){
        $alert = '<div class="alert alert-success" role="alert">Reservasi berhasil!</div>';
    } else {
        $alert = '<div class="alert alert-danger" role="alert">Reservasi gagal: ' . mysqli_error($conn) . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>Make your reservation</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                                ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                                Perspiciatis.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <?php echo $alert; // Menampilkan alert ?>
                            <form method="post" action="">
                                <div class="form-group">
                                    <h2 align="center">Daftar Reservasi</h2>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal:</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="waktu">Waktu:</label>
                                    <input type="time" class="form-control" id="waktu" name="waktu" required>
                                </div>
                                <div class="form-group">
                                    <label for="dokter">Dokter:</label>
                                    <input type="text" class="form-control" id="dokter" name="dokter" placeholder="Nama Dokter" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Reservasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
