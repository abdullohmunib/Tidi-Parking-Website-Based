<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';
require 'kalkulator_kendaraan.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/kalkulasi_kendaraan1.css">
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
				<p> | Log parkir > Kalkulasi Kendaraan </p>
			</div>
			<div class="tengah">

				<table style="text-align: center;" border="1">
					<tr>
						<th>FTI</th>
						<th>FTSP</th>
						<th>FIAI</th>
						<th>FH</th>
						<th>FE</th>
						<th>FPSB</th>
						<th>FK</th>
						<th>FMIPA</th>
					</tr>
					<tr>
						<td><?php echo $jumlah_fti; ?></td>
						<td><?php echo $jumlah_ftsp; ?></td>
						<td><?php echo $jumlah_fiai; ?></td>
						<td><?php echo $jumlah_fh; ?></td>
						<td><?php echo $jumlah_fe; ?></td>
						<td><?php echo $jumlah_fpsb; ?></td>
						<td><?php echo $jumlah_fk; ?></td>
						<td><?php echo $jumlah_fmipa; ?></td>
					</tr>
				</table>

			</div>

		</div>
	</div>
</body>

</html>