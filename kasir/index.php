<?php
session_start(); // Start session for storing login information

$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');

// If login form is submitted
if (isset($_POST['submit'])) {
	$conn = $koneksi;

	$namauser = $conn->real_escape_string($_POST['namauser']);
	$password = $conn->real_escape_string($_POST['password']);

	$query = "SELECT * FROM user WHERE namauser='$namauser' AND password='$password'";
	$result = $conn->query($query);

	if ($result->num_rows == 1) {
		$user = $result->fetch_assoc();
		$_SESSION['user'] = $user;

		// Redirect to the appropriate page based on user's level
		$level = $_SESSION['user']['level'];
		switch ($level) {
			case 1:
				header("Location: admin/index.php");
				break;
			case 2:
				header("Location: waiter/menu/index.php");
				break;
			case 3:
				header("Location: kasir/transaksi/index.php");
				break;
			case 4:
				header("Location: owner/index.php");
				break;
			default:
				// Redirect to login page if level is not recognized
				header("Location: login.php");
				break;
		}
		exit(); // Stop further execution
	} else {
		$error = true;
	}

	$conn->close();
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
	<title>Login - SevenResto</title>

	<!-- *************
			************ Common Css Files *************
		************ -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="design/assets/css/bootstrap.min.css" />

	<!-- Bootstrap font icons css -->
	<link rel="stylesheet" href="design/assets/fonts/bootstrap/bootstrap-icons.css" />

	<!-- Main css -->
	<link rel="stylesheet" href="design/assets/css/main.min.css" />

	<!-- Login css -->
	<link rel="stylesheet" href="design/assets/css/login.css" />
</head>

<body class="login-container">
	<!-- Login box start -->
	<div class="container">
		<div class="login-box rounded-2 p-5">
			<div class="login-form">
				<form method="POST">
					<div class="text-center">
						<h4 class="my-4">Login to Account.</h4>
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control" placeholder="Enter your username" name="namauser" />
					</div>
					<div class="mb-3">
						<label class="form-label">Your Password</label>
						<input type="password" class="form-control" placeholder="Enter password" name="password" />
					</div>
					<div class="d-grid py-3">
						<button type="submit" name="submit" class="btn btn-lg btn-info">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Login box end -->
</body>

</html>