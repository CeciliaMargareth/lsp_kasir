<?php
$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');

// Fetch data from the laporan table
$result = $koneksi->query("SELECT * FROM laporan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
    <!-- Include CSS for print layout -->
    <link rel="stylesheet" href="assets/css/print_styles.css">
</head>
<body>

    <h1>Data Laporan</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Laporan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['laporan'] ?></td>
                    <td><?= $row['tanggal'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- JavaScript to trigger print -->
    <script>
        // Automatically trigger print when the page is loaded
        window.onload = function() {
            window.print();
        };
    </script>

</body>
</html>
