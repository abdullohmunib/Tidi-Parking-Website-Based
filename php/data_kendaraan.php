<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';
require 'functions/function.php';

if (isset($_GET['nopol'])) {
	$nopol = $_GET['nopol'];
	$tidy_id = query("SELECT * FROM riwayat WHERE nip IS NULL AND nopol LIKE '%" . $nopol . "%'");
} else {
	$tidy_id = query("SELECT * FROM riwayat WHERE nip IS NULL");
}

//$tidy_id = query("SELECT * FROM riwayat WHERE nip IS NULL");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/data_kendaraan1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="utama">

		<div class="sidebar-kiri">
			<div class="menu">
				<div style="padding: 2px; background-color: #1abc9c; ">
       			 <center><img src="../logo/logokecil.svg"></center>
       			</div>
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
				<p> | Log parkir > Data Kendaraan Parkir </p>
			</div>
			<div class="tengah">
				<table class="table-field" style="text-align: center;" border="1">
					<form style="text-align: center;" action="data_kendaraan.php" method="get">
					<input style="background-color: rgba(224, 231, 255, .2); width: 20%; padding: 5.5px 15px; font-size: 15px; border: 1px solid rgba(46, 91, 255, 0.08);border-radius: 5px; " type="text" name="nopol" placeholder="Cari nopol">

					<input type="submit" class="submit-btn" value="Cari">
				</form>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nomor Polisi</th>
						<th>Area Parkir</th>
						<th>ID Riwayat</th>
						<th>Aksi</th>
					</tr>
					<?php $i = 1; ?>
					<!-- mengambil setiap nilai array -->
					<?php foreach ($tidy_id as $row) : ?>
						<tr>
							<!-- membuat nomor auto incremen -->
							<td><?php echo $i;  ?></td>
							<td><?php echo $row['nim'];
								?></td>
							<td><?php echo $row['nopol']; ?></td>
							<td><?php echo $row['nama_parkir']; ?></td>
							<td><?php echo $row['id_riwayat']; ?></td>
							<td>
								<button class="submit-btn1"><a href="checkout.php?idriwayat=<?php echo $row['id_riwayat']; ?>">Check Out</a></button>
							</td>
						</tr>

						<?php $i++; ?>
					<?php endforeach;  ?>

				</table>

			</div>

		</div>
	</div>
</body>

</html>