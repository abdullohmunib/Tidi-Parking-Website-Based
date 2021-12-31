<?php
require 'sessionchecker_mhs.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Parkir</title>
	<link rel="stylesheet" type="text/css" href="../css/parkir.css">
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
							<li><a href="#">Parkir</a></li>
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
				<p> | Parkir Kendaraan > Parkir </p>
			</div>

			<div class="tengah">
				<h2>Tambah Kendaraan Baru</h2>

				<form class="login-form" method="post" action="tambah_parkir.php">
					<table border="0">
						<tr>
							<td></td>
						</tr>
						<tr>
							<td><label for="nopol">Nomor Polisi</label></td>
							<td><input style="text-align: center;" type="text" name="nopol" id="nopol" placeholder=" Masukan plat nomor"></td> <br>
						</tr>
						<tr>
							<td><label for="nama_parkir">Area Parkir</label></td>
							<td><select name="nama_parkir" id="nama_parkir">
									<option value="FTI" selected>FTI</option>
									<option value="FTSP">FTSP</option>
									<option value="FIAI">FIAI</option>
									<option value="FH">FH</option>
									<option value="FE">FE</option>
									<option value="FPSB">FPSB </option>
									<option value="FK">FK</option>
									<option value="FMIPA">FMIPA</option>
								</select></td><br>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" class="submit-btn" value="Tambah">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>

</html>