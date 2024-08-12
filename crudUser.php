<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>CRUD User</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/LogoRRR.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="crud.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                    </li>
                                </ul>
                            </li> -->
                            
                            <li>
                                <a href="crudUser.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">User</span> </a>
                            </li>

                            <li>
                                <a href="crudPembayaran.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-currency-dollar"></i></i> <span class="ms-1 d-none d-sm-inline">Pembayaran</span> </a>
                            </li>

                            <li>
                                <a href="crudReservasi.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-calendar-check"></i></i> <span class="ms-1 d-none d-sm-inline">Reservasi</span> </a>
                            </li>

                            <li>
                                <a href="logoutAdmin.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    </i> <span class="ms-1 d-none d-sm-inline">LogOut</span> </a>
                            </li>

                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col py-3">
                    <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>level</th>
                                <th colspan="2">Aksi</th>
                            </tr>

                            <?php
                                include "koneksi.php";

                                $sql = "SELECT * FROM login";
                                $result = $conn -> query($sql);

                                if(!$result){
                                    die("Invalid query: ". $conn -> error);
                                }

                                while($row = $result -> fetch_assoc()){
                                    echo "<tr>
                                        <td>".$row["id"]."</td>
                                        <td>".$row["username"]."</td>
                                        <td>".$row["password"]."</td>
                                        <td>".$row["nama"]."</td>
                                        <td>".$row["level"]."</td>
                                        <td><a href='hapusUser.php?id=".$row['id']."'><i class='bi-trash'></i></a></td>
                                        <td><a href='editForm.php?id=".$row['id']."'><i class='bi-pen'></i></a></td>
                                    </tr>";
                                }
                            ?>
                        </table>
                        <a href="tambahForm.php">
                            <button type="button" class="btn btn-primary float-end">Tambah</button>
                        </a>
                        <a href="CetakUser.php">
                            <button type="button" class="btn btn-primary float-end">Cetak</button>
                        </a>
                </div>
            </div>
        </div>
    </body>
</html>