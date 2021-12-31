<?php
require 'server/mahasiswalog_serv.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="login-utama">

		<div class="kiri">

			<!-- login form -->
			<form class="login-form" action="" method="post">
				<img style="width: 40%" src="../logo/logobesar.svg">
				<div class="login-field">
					<h1 class="form-title">Login Mahasiswa</h1>
				</div>
				<div class="login-field">
					<h5 class="form-input-label">
						Username</h5>
					<input class="form-input" type="text" id="nim" name="nim" placeholder="masukan nim" required></input>
				</div>

				<div class="login-field">
					<h5 class="form-input-label">
						Password</h5>
					<input class="form-input" type="password" id="password" name="password" placeholder="masukan password" required></input>
				</div>

				<div class="login-field">
					<button class="submit-btn" value="login" type="submit" name="submit">Login</button>

					<p class="form-info-text">Login sebagai <a href="login_petugas.php">Petugas</a></p>
					<span><?php echo $error; ?></span>

					<p class="form-info-text">Jika bermasalah, silahkan email <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCGDBdjsSDRZlpLzvLDsvgGPJhRxmcsXbNJSFkwgrQFpKFjFjFRlgVlMbKknJKJjDXfWZg">tidy.id</a> </p>

				</div>
			</form>

		</div>

		<img class="login-image" src="../img/parking.jpg"></img>
		<!-- <div class="login-image"></div>
 -->
	</div>
	<!-- pesan error -->


</body>

</html>