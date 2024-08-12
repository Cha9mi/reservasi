<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/logoRRR.png" type="image/gif">
        <title>Register Admin</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="center">
        <h1>Register Admin</h1>
        <form action="register.php" method="POST">  
            <div class="txt_field">
                <input type="text" id="name" name="name" required>
                <span></span>
                <label>Name</label>
            </div>

            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="txt_field">
                <input type="password" id="rePassword" name="rePassword" required>
                <span></span>
                <label>Re-Password</label>
            </div>

            <!-- <div class="txt_field">
                <input type="email" id="InputEmail" name="email" required>
                <span></span>
                <label>Email</label>
            </div> -->

            <!-- <div class="txt_field">
                <input type="tel" name="phone" required>
                <span></span>
                <label>Nomor Telepon</label>
            </div> -->

            <input type="submit" name="register" value="Register">

            <div class="signup_link">
                <a href="formLoginAdmin.php">Sudah punya akun?</a>
            </div>
        </form>
    </div>
    </body>
</html>