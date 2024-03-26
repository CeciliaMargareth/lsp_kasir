<?php
$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');

$pesan = '';
if(isset($_POST['edit'])) {
    $idtransaksi = $_POST['idtransaksi'];
    $bayar = $_POST['bayar'];
    $status = 'selesai';

    $koneksi->query("UPDATE transaksi set bayar='$bayar', status='$status' where idtransaksi='$idtransaksi'");
    $pesan = '<div class="alert alert-success alert-dismissible fade show" role="alert">
	Data berhasil di tambah
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
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
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- Title -->
		<title>SevenResto - Transaksi</title>

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
	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			</div>

			<!-- Main container start -->
			<div class="main-container">
                    <?php include 'layout/sidebar.php'; ?>

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gx-3">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transaksi</div>
                                        <?php echo $pesan; ?>
									</div>
									<div class="card-body">
										<div class="table-responsive">
                                            <?php
                                            $hasil = $koneksi->query("SELECT * FROM transaksi where status='belum dibayar'");
                                            while($row = $hasil->fetch_assoc()) {
                                            ?>
                                            <form method="POST">
											<table class="table align-middle">
												<thead>
													<tr>
														<td>ID Transaksi</td>
                                                        <td>ID Pesanan</td>
														<td>Total</td>
														<td>Bayar</td>
														<td>Status</td>
														<td>Action</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
                                                            <input type="text" class="form-control" value="<?= $row['idtransaksi']; ?>" name="idtransaksi"/>
                                                        </td>
                                                        <td><?= $row['idpesanan'] ?></td>
														<td><?= $row['total'] ?></td>
                                                        <div class="col-sm-6 col-12">
														    <td>
                                                                <input type="text" class="form-control" placeholder="Bayar" name="bayar"/>
                                                            </td>
                                                        </div>
														<td>
                                                        <?php
                                                            if(isset($row['status']) && $row['status'] == 'belum dibayar') {
                                                            echo "<span class='badge shade-light-red'>belum dibayar</span>";
                                                            }
                                                        ?>

														</td>
														<td>
															<button class="btn btn-info" name="edit">Bayar</button>
														</td>
													</tr>
												</tbody>
											</table>
                                            </form>
                                            <?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->
<?php include 'layout/footer.php';