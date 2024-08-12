<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Reservasi.On | Selamat Datang</title>
        <link rel="shortcut icon" href="assets/img/logo.png" type="image/gif">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <h3 class="logo me-auto" align="center"><a href=""><img src="assets/img/logoR.png" class="img-fluid animated"></a></h3>
    <div class="center">
        <h1>Selamat Datang di Reservasi.On</h1>
        <br>
        <form>
            <h2 align="center">Pilih Login Sebagai</h2>
        </form>
        <br>
        <form action="formLoginAdmin.php" method="POST">
            <input type="submit" name="submit" value="Admin">
        </form>
        <br>
        <form action="formLogin.php" method="POST">
            <input type="submit" name="submit" value="Pasien">
        </form>
        <br>
    </div>
    </body>
</html>