<?php
session_start(); // Start PHP session

// Check if data is available in sessions
if(isset($_SESSION['laporan']) && isset($_SESSION['tanggal'])) {
    $laporan = $_SESSION['laporan'];
    $tanggal = $_SESSION['tanggal'];
} else {
    // If data is not available, redirect back to the main page
    header("Location: index.php");
    exit(); // Make sure no other output is sent
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Page</title>
    <!-- Include CSS for print layout -->
    <link rel="stylesheet" href="print_styles.css">
</head>
<body>
    <h1>Print Page Content</h1>
    <p>Laporan: <?php echo $laporan; ?></p>
    <p>Tanggal: <?php echo $tanggal; ?></p>

    <!-- JavaScript to trigger print -->
    <script>
        // Automatically trigger print when the page is loaded
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
