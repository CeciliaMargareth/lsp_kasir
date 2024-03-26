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
		<title>SevenResto - Data Meja</title>

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
								<h5>Hai Admin!</h5>
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
										<div class="card-title">Halaman Admin - Data Meja</div>
									</div>
									<div class="card-body">
                                        <a href="tambah_meja.php" type="button" class="btn btn-info mb-4">Tambah Data Meja</a>
                                        <div class="table-responsive">
											<table class="table align-middle">
												<thead>
													<tr>
														<th>ID Meja</th>
                                                        <th>Nomo Meja</th>
														<th>Kapasitas</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
                                                <?php
                                                include 'config.php';

                                                $hasil = $koneksi->query("SELECT * FROM meja");
                                                while($row = $hasil->fetch_assoc()) {
                                                ?>                                                
												<tbody>
													<tr>
														<td><?= $row['idmeja'] ?></td>
                                                        <td><?= $row['nomor_meja'] ?></td>
                                                        <td><?= $row['kapasitas'] ?></td>
                                                        <td><?= $row['status'] ?></td>
                                                        <td>
                                                        <a href="edit_meja.php?edit=<?= $row['idmeja'] ?>" type="button" class="btn btn-warning mb-4">Edit</a>
                                                        <a href="config.php?idmeja=<?= $row['idmeja'] ?>" type="button" class="btn btn-primary mb-4" onclick="return confirm('Anda yakin data ini ingin dihapus?')">Hapus</a>
                                                        </td>
													</tr>
												</tbody>
                                                <?php } ?>                                                
											</table>
										</div>                                        
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->                        
					</div>
					<?php include 'layout/footer.php' ?>