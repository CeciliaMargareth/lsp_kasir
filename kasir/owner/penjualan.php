<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Meta -->
    <meta name="description" content="Ruby - Responsive Bootstrap 5 Dashboard Template" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- Title -->
    <title>Admin Templates - Dashboard Templates - Admin Dashboards</title>

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

    <!-- Data Tables -->
    <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
    <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            <nav class="sidebar-wrapper">
                <div class="">
                    <h2 class="fw-light mt-5 mb-3 text-center text-white">
                        SevenResto
                    </h2>
                </div>
                <!-- Sidebar menu starts -->
                <div class="sidebar-menu">
                    <div class="sidebarMenuScroll">
                        <ul>
                            <li>
                                <a href="penjualan.php">
                                    <i class="bi bi-journal-text"></i>
                                    <span class="menu-text">Penjualan</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php">
                                    <i class="bi bi-clipboard"></i>
                                    <span class="menu-text">Laporan</span>
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php">
                                    <i class="bi bi-door-open text-red font-2x"></i>
                                    <span class="menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

            </nav>
            <!-- Sidebar wrapper end -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Main header starts -->
                <div class="main-header">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="page-icon">
                            <i class="bi bi-window-split"></i>
                        </div>
                        <div class="page-title d-none d-md-block">
                            <h5>Penjualan</h5>
                        </div>
                    </div>
                </div>
                <!-- Main header ends -->

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-sm-12 col-12">
                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Data Penjualan</div>
                                    <button onclick="printPage()" class="btn btn-success mt-2 mb-1">Cetak</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form method="GET">
                                            <table id="hideSearchExample" class="table custom-table">
                                                <?php
                                                $koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');
                                                $no = 1;
                                                $result = $koneksi->query("SELECT pesanan.*, menu.namamenu FROM pesanan INNER JOIN menu ON pesanan.idmenu = menu.idmenu");
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Menu-Menu Yang Terjual</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $row['namamenu'] ?></td>
                                                            <td>Rp <?= $row['total_harga'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                <?php } ?>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Card end -->
                        </div>
                    </div>
                    <!-- Row end -->

                </div>
                <!-- Content wrapper end -->

            </div>
            <!-- Content wrapper scroll end -->

            <!-- App Footer start -->
            <div class="app-footer">
                <span>© Cecilia 2024</span>
            </div>
            <!-- App footer end -->

        </div>
        <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- News ticker -->
    <script src="assets/vendor/newsticker/newsTicker.min.js"></script>
    <script src="assets/vendor/newsticker/custom-newsTicker.js"></script>

    <!-- Data Tables -->
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/custom/custom-datatables.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>
</body>

</html>
<!-- Add this script before the closing body tag -->
<script>
    // Function to open print page in a new tab
    function printPage() {
        window.open('cetak_penjualan.php', '_blank');
    }
</script>
