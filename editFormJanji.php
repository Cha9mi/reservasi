<?php
    session_start();

    include 'koneksi.php';

    $query = "SELECT * FROM janji_temu where id = '$_GET[id]'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Edit Janji</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="center">
        <h1>Edit Janji</h1>
        <form action="editJanji.php" method="POST">
            <div class="txt_field">
                <input type="text" name="nama" value="<?php echo $data['nama'];?>" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="text" name="usia" value="<?php echo $data['usia'];?>" required>
                <span></span>
            </div>

            <div class="txt_field">
                <input type="text" name="gender" value="<?php echo $data['gender'];?>" required>
                <span></span>
            </div>

            <div class="txt_field">
                <input type="text" name="alamat" value="<?php echo $data['alamat'];?>" required>
                <span></span>
            </div>

            <div class="txt_field">
                <input type="text" name="dokter" value="<?php echo $data['dokter'];?>" required>
                <input type="text" name="id" value="<?php echo $data['id'];?>" hidden required>
                <span></span>
                <label>dokter</label>
            </div>

            <div class="txt_field">
                <input type="date" name="tanggal" value="<?php echo $data['tanggal'];?>" required>
                <span></span>
            </div>

            <div class="txt_field">
                <input type="time" name="waktu" value="<?php echo $data['waktu'];?>" required>
                <span></span>
            </div>

            <input type="submit" name="submit" value="Edit">
        </form>
        <form action="crudReservasi.php">
                <input type="submit" name="submit" value="Back">
        </form>
    </div>
    </body>
</html>