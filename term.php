<!DOCTYPE html>
<html>
  <head>
    <title>MedReserve | Syarat dan Ketentuan</title>
    <link rel="shortcut icon" href="assets/img/logoRRR.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="termstyle.css">
    <style>

      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #2e7db8;
            background-repeat: no-repeat;
            background-size: cover;
      }

      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      h1 {
        font-size: 32px;
        margin-bottom: 20px;
      }

      p {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 20px;
      }

      .buttons {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
      }

      .button {
        font-size: 18px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 20px;
      }

      .agree-button {
        background-color: #28a745;
      }

      .disagree-button {
        background-color: #dc3545;
      }

      @media only screen and (max-width: 600px) {
        .buttons {
          flex-direction: column;
        }

        .button {
          margin-right: 0;
          margin-bottom: 10px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>SYARAT DAN KETENTUAN </h1>
      <p>Selamat datang di MedReserve</p>
      <p>Dengan mengunduh, memasang, dan/atau menggunakan Platform MedReserve , Anda menyetujui bahwa Anda telah membaca, memahami, dan menyetujui <a href="syarat.php" target="_blank">Syarat dan ketentuan</a> ini.</p>
      <p>Jika Anda tidak menyetujui Syarat dan Ketentuan ini, jangan mengakses dan/atau menggunakan Platform dan/atau Layanan ini.</p>
      <a href="syarat.php" target="_blank">Baca Selengkapnya....</a>
  
</body>
      <div class="buttons">
        <form method="post" action="homePasien.php">
          <input type="checkbox" name="agree" value="yes" required>
          <button class="button agree-button" type="submit" name="submit">Setuju</button>
        </form>
        <form method="post" action="logout.php">
          <button class="button disagree-button" type="submit" name="submit">Tidak Setuju</button>
       
