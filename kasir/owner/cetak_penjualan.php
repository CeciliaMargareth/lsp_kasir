<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Cetak Laporan</h2>
        <table id="hideSearchExample" class="table custom-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Menu-Menu Yang Terjual</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');
                $no = 1;
                $result = $koneksi->query("SELECT pesanan.*, menu.namamenu FROM pesanan INNER JOIN menu ON pesanan.idmenu = menu.idmenu");
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['namamenu'] ?></td>
                        <td>Rp <?= $row['total_harga'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        // Automatically trigger print when the page is loaded
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>