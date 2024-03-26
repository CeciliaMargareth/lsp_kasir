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
										<div class="card-title">Halaman Waiter - Data Menu</div>
									</div>
									<div class="card-body">
                                        <div class="table-responsive">
											<table class="table align-middle">
												<thead>
													<tr>
														<th>ID Menu</th>
														<th>Nama Menu</th>
														<th>Harga</th>
													</tr>
												</thead>
                                                <?php
                                                include '../config.php';

                                                $hasil = $koneksi->query("SELECT * FROM menu");
                                                while($row = $hasil->fetch_assoc()) {
                                                ?>                                                
												<tbody>
													<tr>
														<td><?= $row['idmenu'] ?></td>
                                                        <td><?= $row['namamenu'] ?></td>
                                                        <td><?= $row['harga'] ?></td>
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