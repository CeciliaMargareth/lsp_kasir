<?php
session_start(); // Start PHP session

$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');

$pesan = '';
if(isset($_POST['tambah_laporan'])) {
    $laporan = $_POST['laporan'];
    $tanggal = $_POST['tanggal'];

    // Store submitted data in sessions
    $_SESSION['laporan'] = $laporan;
    $_SESSION['tanggal'] = $tanggal;

    $koneksi->query("INSERT INTO laporan(laporan, tanggal) values('$laporan', '$tanggal')");

    // Redirect to the print page
    echo "<script>window.open('cetak.php', '_blank')</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Meta -->
    <meta name="description" content="Ruby - Responsive Bootstrap 5 Dashboard Template" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- Title -->
    <title>SevenResto - Data Menu</title>

    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
    <!-- Date Range CSS -->
    <link rel="stylesheet" href="assets/vendor/daterange/daterange.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <?php include 'layout/sidebar.php' ?>

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Main header starts -->
                <div class="main-header d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="page-icon">
                            <i class="bi bi-house"></i>
                        </div>
                        <div class="page-title d-none d-md-block">
                            <h5>Hai Waiter!</h5>
                        </div>
                    </div>
                </div>
                <!-- Main header ends -->

                <!-- Content wrapper start -->
                <div class="content-wrapper">
                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-xxl-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Halaman Waiter - Laporanku</div>

                                </div>
                                <div class="card-body">
                                    <div class="create-invoice-wrapper">
                                        <!-- Row start -->
                                        <div class="row gx-3">
                                            <div class="col-sm-10 col-4 ">
                                                <form method="POST">
                                                    <!-- Row start -->
                                                    <div class="row gx-3">
                                                        <div class="col-sm-12 col-12">
                                                            <!-- Form group start -->
                                                            <div class="mb-2">
                                                                <label for="msgCustomer" class="form-label">Laporan</label>
                                                                <textarea name="laporan" rows="3" id="msgCustomer"
                                                                    class="form-control"></textarea>
                                                            </div>
                                                            <!-- Form group end -->
                                                        </div>
                                                        <div class="col-sm-12 col-12">
                                                            <div class="mb-2">
                                                                <div class="form-label">Datepicker</div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control datepicker"
                                                                        name="tanggal" />
                                                                    <span class="input-group-text">
                                                                        <i class="bi bi-calendar4"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-12">
                                                            <!-- Form group start -->
                                                            <div class="mb-2">
                                                                <button type="submit" name="tambah_laporan"
                                                                    class="btn btn-info m-2">Submit Laporan</button>
                                                                <!-- Form group end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- Row end -->
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
                <?php include 'layout/footer.php' ?>

                <script>
                    // Function to open print page in a new tab
                    function printPage() {
                        window.open('cetak.php', '_blank');
                    }
                </script>
            </div>
