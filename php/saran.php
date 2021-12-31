<?php
require 'sessionchecker_mhs.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Saran</title>
	<link rel="stylesheet" type="text/css" href="../css/saran2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="utama">

		<div class="sidebar-kiri">
			<div class="menu">
				<div style="padding: 2px; background-color: #1abc9c; ">
				<center><img src="../logo/logokecil.svg"></center></div>
				<ul>
					<li><a href="dashboard_mahasiswa.php">Dashboard</a>
					<li>
						<p>Informasi</p>
						<ul>
							<li><a href="jadwal_portal.php">Info Portal</a></li>
							<li><a href="info_kehilangan.php">Info Kehilangan</a></li>
							<li><a href="info_umum.php">Info Umum</a></li>
						</ul>
					</li>

					<li>
						<p>Parkir Kendaraan</p>
						<ul>
							<li><a href="parkir.php">Parkir</a></li>
							<li><a href="aksi.php">Lihat data</a></li>
						</ul>
					</li>

					<li><a href="#">Saran</a></li>
					<li><a href="kontak_kami.php">Kontak Kami</a></li>
					<li><a href="logoutmhs.php">Keluar</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-kanan">
			<div class="atas">
				<p> | Saran </p>
			</div>
			<div class="tengah"> 

				<form method="post" action="tambah_saran.php">
					<h1>Isikan Saran Anda Untuk Sistem/App Kami</h1>
					<p>
						<textarea class="text" name="isi" placeholder="Isikan saran anda dikolom ini."></textarea>
					</p>
					<input type="submit" class="submit-btn" value="Submit">
				</form>

			</div>

		</div>

	</div>
</body>

</html>