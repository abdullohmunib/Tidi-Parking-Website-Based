<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';
require 'functions/function.php';
$tidy_id = query("SELECT * FROM info_umum");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/isi_laporan2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="utama">

		<div class="sidebar-kiri">
			<div class="menu">
				<div style="padding: 2px; background-color: #1abc9c; ">
				<center><img src="../logo/logokecil.svg"></center></div>				
				<ul>
					<li><a href="dashboard_petugas.php">Dashboard</a>
					<li>
						<p>Log Parkir</p>
						<ul>
							<li><a href="data_kendaraan.php">Data Kendaraan Parkir</a></li>
							<li><a href="kalkulasi_kendaraan.php">Kalkulasi Kendaraan</a></li>
						</ul>
					<li>
						<p>Laporan</p>
					</li>
					<ul>
						<li><a href="isi_laporan.php">Isi laporan</a></li>
						<li><a href="isi_kehilangan.php">Isi kehilangan</a></li>
					</ul>
					</li>
					<li><a href="logoutpetugas.php">Keluar</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-kanan">
			<div class="atas">
				<p> | Laporan > isi laporan </p>
			</div>

		<div class="tengah">
				<form method="post" action="tambah_umum.php">
					<h1>Tambah Laporan Umum</h1>
					<p>
						<textarea class="text" name="informasi" placeholder="Isikan saran anda dikolom ini."></textarea>
					</p>
					<input type="submit" class="submit-btn" value="SUBMIT">
					<button class="submit-btn">
						<a href="tampil_isi_laporan.php">LIHAT DATA</a>
				</button>
				</form>
				
			</div>
		</div>
</body>

</html>