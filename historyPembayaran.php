<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reservasi.On | Laporan Pembayaran</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/logoRRR.png" type="image/gif">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Laporan Pembayaran</h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Tanggal Pesan</th>
                    <th>Waktu Pesan</th>
                    <th>Nama Dokter</th>
                    <th>Total Harga</th>
                    <th>Metode Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Place your PHP code here to fetch payment data and populate the table
                include 'koneksi.php';

                $sql = "SELECT * FROM pembayaran";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['tanggal'] . "</td>";
                        echo "<td>" . $row['waktu'] . "</td>";
                        echo "<td>" . $row['dokter'] . "</td>";
                        echo "<td>" . $row['harga'] . "</td>";
                        echo "<td>" . $row['metode'] . "</td>";
                        echo "<td><button class='btn btn-primary' onclick='printSingle(\"" . $row['nama'] . "\", \"" . $row['tanggal'] . "\", \"" . $row['waktu'] . "\", \"" . $row['dokter'] . "\", \"" . $row['harga'] . "\", \"" . $row['metode'] . "\")'>Print</button></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="homePasien.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="printModal" tabindex="-1" aria-labelledby="printModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="printModalLabel">Print Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="printContent">
                    <!-- Payment details will be populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="printPayment()">Print</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        function printSingle(nama, tanggal, waktu, dokter, harga, metode) {
            var content = `
                <p><strong>Nama Pasien:</strong> ${nama}</p>
                <p><strong>Tanggal Pesan:</strong> ${tanggal}</p>
                <p><strong>Waktu Pesan:</strong> ${waktu}</p>
                <p><strong>Nama Dokter:</strong> ${dokter}</p>
                <p><strong>Total Harga:</strong> ${harga}</p>
                <p><strong>Metode Pembayaran:</strong> ${metode}</p>
            `;
            $('#printContent').html(content);
            $('#printModal').modal('show');
        }

        function printPayment() {
            var printContents = document.getElementById('printContent').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.location.reload();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
