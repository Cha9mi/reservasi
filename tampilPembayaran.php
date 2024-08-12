<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
            </tr>
        </thead>
        <tbody>
            <?php
            // Place your PHP code here to fetch reservation data and populate the table
            // Example:
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
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>
    <div class="text-center mt-4">
        <button class="btn btn-primary me-2" onclick="printInvoice()">
            <i class="bi bi-printer-fill me-2">Cetak Pembayaran</i>
        </button>
        <a href="halamanPembayaran.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-2">Kembali</i>
        </a>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script>
        function printInvoice() {
            window.print();
        }
    </script>
</body>

</html>
