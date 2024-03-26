<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .receipt h2 {
            text-align: center;
        }
        .receipt p {
            margin: 5px 0;
        }
        .receipt .footer {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body onload="window.print()">
    <div class="receipt">
        <h2>Receipt</h2>
        <?php
        $koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');
        // Retrieve transaction data from the database based on the ID passed from the previous page
        $idtransaksi = $_GET['idtransaksi'];
        // Assuming you have a database connection and can fetch data accordingly
        $query = $koneksi->query("SELECT * FROM transaksi WHERE idtransaksi='$idtransaksi'");
        $transaction = $query->fetch_assoc();
        // Calculate change
        $kembalian = $transaction['bayar'] - $transaction['total'];
        ?>
        <p>ID Transaksi: <?= $transaction['idtransaksi'] ?></p>
        <p>ID Pesanan: <?= $transaction['idpesanan'] ?></p>
        <p>Total: Rp <?= $transaction['total'] ?></p>
        <p>Bayar: Rp <?= $transaction['bayar'] ?></p>
        <p>Kembalian: Rp <?= $kembalian ?></p>
        <p>Status: <?= $transaction['status'] ?></p>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>
</html>
