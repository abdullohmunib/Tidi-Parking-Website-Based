<?php
require 'sessionchecker_mhs.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Jadwal Portal</title>
	<link rel="stylesheet" type="text/css" href="../css/informasi1.css">
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
							<li><a href="#">Info Portal</a></li>
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

					<li><a href="saran.php">Saran</a></li>
					<li><a href="kontak_kami.php">Kontak Kami</a></li>
					<li><a href="logoutmhs.php">Keluar</a></li>
				</ul>
			</div>
		</div>

		<div class="sidebar-kanan">
			<div class="atas">
				<p> | Informasi > Jadwal Portal </p>
			</div>
			<div class="tengah">

				<table style="text-align: center;">
					<tr>

						<th style="font-size: 25px">Hari</th>
						<th style="font-size: 25px">Jam Operasional</th>

					</tr>
					<tr>
						<td>Senin</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Selasa</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Rabu</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Kamis</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Jum'at</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Sabtu</td>
						<td>07.00 - 21.00</td>
					</tr>
					<tr>
						<td>Minggu</td>
						<td>07.00 - 21.00</td>
					</tr>
				</table>
			</div>

		</div>

	</div>
</body>

</html>