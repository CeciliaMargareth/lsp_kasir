<?php
include 'config.php';

if(isset($_POST['edit'])){
    $idmeja = $_POST['idmeja'];
    $nomor_meja = $_POST['nomor_meja'];
    $kapasitas = $_POST['kapasitas'];
    $status = $_POST['status'];
    
    $koneksi->query("UPDATE meja SET nomor_meja='$nomor_meja', kapasitas='$kapasitas', status='$status' WHERE idmeja='$idmeja'");
    header('location:meja.php');
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
		<title>SevenResto - Edit Data Menu</title>

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
					<!-- Content wrapper start -->
					<div class="content-wrapper">
                        <!-- Row start -->
                        <div class="row gx-3">
							<div class="col-xxl-4 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Halaman Admin - Edit Data Menu</div>
									</div>
									<div class="card-body">
                                        <?php
                                        $hasil = $koneksi->query("SELECT * FROM meja WHERE idmeja='$_GET[edit]'");
                                        while($row = $hasil->fetch_assoc()){
                                        ?>
                                        <form action="edit_meja.php" method="POST">
                                            <div class="m-2">
										    	<label class="form-label">ID Meja</label>
										    	<input type="text" value="<?= $row['idmeja'] ?>" name="idmeja" class="form-control" placeholder="Enter text" readonly/>
										    </div>                         
                                            <div class="m-2">
                                                <label class="form-label">Nomor Meja</label>
										    	<input type="text" value="<?= $row['nomor_meja'] ?>" name="nomor_meja" class="form-control" placeholder="Enter text" required/>
										    </div>
                                            <div class="m-2">
                                            <label class="form-label">Kapasitas</label>
										    	<input type="text" value="<?= $row['kapasitas'] ?>" name="kapasitas" class="form-control" placeholder="Enter text" required/>
										    </div>
                                            <div class="m-2">
											    <label class="form-label">Status</label>
											    <select class="form-select" name="status" aria-label="Default select example">
												    <option selected=""><?= $row['status'] ?></option>
												    <option value="Terisi">Terisi</option>
												    <option value="Kosong">Kosong</option>
											    </select>
									        </div>
                                            <button type="submit" name="edit" class="btn btn-info m-2">Edit Data Meja</button>
                                            <a href="meja.php" type="submit" class="btn btn-light ml-2">Back</a>
                                        </form>
                                        <?php } ?>                                        
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->                        
					</div>
					<?php include 'layout/footer.php' ?>