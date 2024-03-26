<?php
include 'config.php';

$result1 = $koneksi->query("SELECT idmenu, namamenu from menu");
$result2 = $koneksi->query("SELECT idpelanggan, namapelanggan from pelanggan");
$result3 = $koneksi->query("SELECT iduser, namauser from user where namauser='waiter'");

$pesan = '';
if(isset($_POST['tambah_pelanggan'])) {
    $namapelanggan = $_POST['namapelanggan'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $sql = $koneksi->query("INSERT INTO pelanggan(namapelanggan, jeniskelamin, nohp, alamat) VALUES('$namapelanggan', '$jeniskelamin', '$nohp', '$alamat')");
	$pesan = '<div class="alert alert-success alert-dismissible fade show" role="alert">
	Data berhasil di tambah
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
    
}

$hasil = '';

if(isset($_POST['tambahpesanan'])) {
    $idmenu = $_POST['idmenu'];
    $idpelanggan = $_POST['idpelanggan'];
    $jumlah = $_POST['jumlah'];
    $iduser = $_POST['iduser'];
    $total_harga = $_POST['total_harga'];

    $koneksi->query("INSERT INTO pesanan(idmenu, idpelanggan, jumlah, iduser, total_harga) VALUES('$idmenu', '$idpelanggan', '$jumlah', '$iduser', '$total_harga')");

	$idpesanan = $koneksi->insert_id;
	$koneksi->query("INSERT INTO transaksi(idpesanan, total) values('$idpesanan', '$total_harga')");

    $hasil = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di tambah
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
}
$total = '';
if(isset($_POST['hitungtotal'])) {
	$jumlah = $_POST['jumlah'];
	$total_harga = $_POST['total_harga'];
	$idmenu = $_POST['idmenu'];

	$result = $koneksi->query("SELECT harga from menu where idmenu = $idmenu");
	
	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$harga_peritem = $row['harga'];

		$total = $jumlah * $harga_peritem;
	}
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
    <title>SevenResto - Data Pelanggan</title>

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

            <div class="content-wrapper-scroll">

                <!-- Main header starts -->
                <div class="main-header">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="page-icon">
                            <i class="bi bi-stickies"></i>
                        </div>
                        <div class="page-title d-none d-md-block">
                            <h5>Invoice</h5>
							<?php echo $pesan; ?>
                            <?php echo $hasil; ?>
                        </div>
                    </div>
                </div>

					<!-- Main header ends -->

					<!-- Content wrapper start -->
					<div class="content-wrapper">
						<!-- Row start -->
						<div class="row justify-content-center">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Buat Pelanggan Baru</div>
									</div>
									<div class="card-body">
										<div class="create-invoice-wrapper">
											<!-- Row start -->
											<div class="row gx-3">
												<div class="col-sm-10 col-4	">
												<form action="index.php" method="POST">
													<!-- Row start -->
													<div class="row gx-3">
														<div class="col-sm-6 col-12">
															<!-- Form group start -->
															<div class="mb-3">
																<label for="invNumber" class="form-label">Nama Pelanggan</label>
																<input type="text" name="namapelanggan" id="invNumber" class="form-control"
																	placeholder="Enter Nama Pelanggan" />
															</div>
															<!-- Form group end -->
														</div>
														<div class="col-sm-6 col-12">
															<!-- Form group start -->
															<div class="mb-3">
															<label for="invNumber" class="form-label">Jenis Kelamin</label>
																<select class="form-label form-select" name="jeniskelamin">
																	<option>Pilih Jenis Kelamin</option>
																	<option value="1">Laki-laki</option>
																	<option value="2">Perempuan</option>
																</select>
														</div>
														</div>
													</div>
														<div class="col-sm-12 col-12">
															<!-- Form group start -->
															<div class="mb-3">
																<label for="invNumber" class="form-label">Nomor Telefon</label>
																<input type="text" name="nohp" id="invNumber" class="form-control"
																	placeholder="Enter Nomor Telefon" />
															</div>
															<!-- Form group end -->
														</div>
														<div class="col-sm-12 col-12">
															<!-- Form group start -->
															<div class="mb-2">
																<label for="msgCustomer" class="form-label">Alamat</label>
																<textarea name="alamat" rows="3" id="msgCustomer" class="form-control"></textarea>
															</div>
															<!-- Form group end -->
														</div>
														<div class="col-sm-12 col-12">
															<!-- Form group start -->
															<div class="mb-2">
															<button type="submit" name="tambah_pelanggan" class="btn btn-info m-2">Tambah Data Pelanggan</button>
															</div>
															<!-- Form group end -->
														</div>
													</div>
												</form>
													<!-- Row end -->
												</div>
											</div>
											<!-- Row end -->
										</div>

										<!-- Row start -->
										<div class="row gx-3">
											<div class="col-12">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th colspan="7" class="pt-3 pb-3">
																	Pemesanan
																</th>
															</tr>
															<tr>
																<th>Nama Menu</th>
																<th>Customer</th>
																<th>Jumlah</th>
																<th>Total Harga</th>
																<th>User</th>
															</tr>
														</thead>
														<tbody>
															<form action="index.php" method="POST">
															<tr>
																<td>
																	<!-- Form group start -->
																	<select class="form-select" name="idmenu">
																		<?php
																		if ($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) {
																				echo "<option value='".$row["idmenu"]."'>".$row["namamenu"]."</option>";
																			}
																		}
																		?>
																	</select>
																	<!-- Form group end -->
																</td>
																<td>
																	<!-- Form group start -->
																	<select class="form-select" name="idpelanggan">
																		<?php
																		if($result2->num_rows > 0) {
																			while($row = $result2->fetch_assoc()){
																				echo "<option value='".$row["idpelanggan"]."'>".$row["namapelanggan"]."</option>";
																			}
																		}
																		?>
																	</select>
																	<!-- Form group end -->
																</td>
																<td>
																	<input type="text" class="form-control" placeholder="Enter Harga" name="jumlah" />
																</td>
																<td>
																<input type="text" class="form-control" placeholder="Enter Harga" name="total_harga" value="<?= $total; ?>" />
																</td>
																<td>
																	<!-- Form group start -->
																	<select class="form-select" name="iduser">
																		<?php
																		if($result3->num_rows > 0) {
																			while($row = $result3->fetch_assoc()){
																				echo "<option value='".$row["iduser"]."'>".$row["namauser"]."</option>";
																			}
																		}
																		?>
																	</select>
																	<!-- Form group end -->
																</td>
															</tr>
															
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-12">
												<div class="text-end">
												<button name="hitungtotal" class="btn btn-danger ms-1">Hitung Total</button>
													<button name="tambahpesanan" class="btn btn-info ms-1">Buat Pesanan</button>
												</div>
												</form>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->
					<?php include 'layout/footer.php' ?>