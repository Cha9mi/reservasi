<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Reservasi.On | Pembayaran</title>
     <!-- Favicons -->     <link rel="shortcut icon" href="assets/img/logoRRR.png" type="image/gif">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background: url('https://e1.pxfuel.com/desktop-wallpaper/963/596/desktop-wallpaper-backgrounds-dokter-3-background-dokter.jpg');
        }
    </style>
</head>

<body>
  <div class="center">
        <h1>Pembayaran</h1>
        <form action="pembayaran.php" method="post" onsubmit="return confirm('Apakah Anda yakin ingin melakukan pembayaran?')">
            <div class="txt_field">
                <input type="text" name="nama" required>
                <span></span>
                <label>Nama Pasien</label>
            </div>
            <div class="txt_field">
                <input type="date" name="tanggal" required>
                <span></span>
            </div>
            <div class="txt_field">
                <input type="time" name="waktu" required>
                <span></span>
            </div>

            <?php
            include 'koneksi.php';

            $sql = "SELECT * FROM dokter";
            $result = $conn->query($sql);

            $options = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $options[] = $row['nama'];
                }
            }

            echo "<label for='dokter'>Dokter</label><br>";
            echo "<select class='form-select' name='dokter' aria-label='Default select example'>";
            foreach ($options as $option) {
                echo "<option value='$option'>$option</option>";
            }
            echo "</select>";
            ?>

            <div class="txt_field">
                <input type="text" name="harga" required>
                <span></span>
                <label>Total harga</label>
                
            </div>

            <h4 class="text-center lead">Pilih Metode Pembayaran</h4>
            <select name="metode" id="metode" class="form-select" aria-label="Default select example">
              <option value="" selected disabled>-Pilih Metode Pembayaran-</option>
              <option value="cod">Bayar Di Tempat</option>
              <option value="netbanking">Dompet Digital</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
            <div><br></div>
    
            <input type="submit" name="submit" value="Tambah">
        </form>

        <form action="historyPembayaran.php">
            <input type="submit" name="submit" value="Cetak Bukti">
        </form>
        <form action="homePasien.php">
            <input type="submit" name="submit" value="Kembali">
        </form>
        <div><br></div>
        <script>
            function showAlert() {
                alert("Pembayaran berhasil dilakukan!");
            }
        </script>
  </div>
</body>

</html>
