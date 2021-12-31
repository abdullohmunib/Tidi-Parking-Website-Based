<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';
require 'kalkulator_kendaraan.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard2.css">
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
					<li><a href="#">Dashboard</a>
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
				<p> | Dashboard </p>
			</div>

			<div class="tengah">
				<h1>Selamat Datang di Beranda Tidi.id</h1>
				<p>Tidy.id sebuah sistem parkir dengan banyak keunggulan</p>

				<ol class="tengah">
					<li>Menggunakan antarmuka berbasis web</li>
					<li>Menjadikan mobilitas anda lebih cepat dan aman</li>
					<li>Memberikan informasi layanan parkir</li>
				</ol>
				<h3>Trust Your Bike With Us.</h3>
				<br><br>
				<?php
				// menghitung total motor
				$total = $jumlah_fti + $jumlah_ftsp + $jumlah_fiai + $jumlah_fh + $jumlah_fe  + $jumlah_fpsb + $jumlah_fk + $jumlah_fmipa;

				// menghitung prosentase laki-laki dan perempuan
				$prosenfti = $jumlah_fti / $total * 100;
				$prosenftsp = $jumlah_ftsp / $total * 100;
				$prosenfiai = $jumlah_fiai / $total * 100;
				$prosenfh = $jumlah_fh / $total * 100;
				$prosenfe = $jumlah_ftsp / $total * 100;
				$prosenfpsb = $jumlah_fpsb / $total * 100;
				$prosenfk = $jumlah_fk / $total * 100;
				$prosenfmipa = $jumlah_fmipa / $total * 100;

				// menentukan panjang grafik batang berdasarkan prosentase
				$panjangGrafikfti = $prosenfti * 30 / 100;
				$panjangGrafikftsp = $prosenftsp * 30 / 100;
				$panjangGrafikfiai = $prosenfiai * 30 / 100;
				$panjangGrafikfh = $prosenfh * 30 / 100;
				$panjangGrafikfe = $prosenfe * 30 / 100;
				$panjangGrafikfpsb = $prosenfpsb * 30 / 100;
				$panjangGrafikfk = $prosenfk * 30 / 100;
				$panjangGrafikmipa = $prosenfmipa * 30 / 100;

				?>
				<h3>Statistik Parkiran Berdasarkan Jenis Lokasi Parkir</h3><br>

				<p style="background-color:  lightgrey; width: 70%; opacity:70%"><b>FTI</b> (Jumlah: <?php echo $jumlah_fti; ?>| <?php echo $prosenfti; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikfti; ?>%; background-color: red;" title="FTI (Jumlah: <?php echo $jumlah_fti; ?> | <?php echo $prosenfti; ?>%)"></div>
				</p>	

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FTSP</b> (Jumlah: <?php echo $jumlah_ftsp; ?>| <?php echo $prosenftsp; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikftsp; ?>%; background-color: red;" title="FTSP (Jumlah: <?php echo $jumlah_ftsp; ?> | <?php echo $prosenftsp; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FIAI</b> (Jumlah: <?php echo $jumlah_fiai; ?>| <?php echo $prosenfiai; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikfiai; ?>%; background-color: red;" title="FTI (Jumlah: <?php echo $jumlah_fiai; ?> | <?php echo $prosenfiai; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FH</b> (Jumlah: <?php echo $jumlah_fh; ?>| <?php echo $prosenfh; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikfh; ?>%; background-color: red;" title="FH (Jumlah: <?php echo $jumlah_fh; ?> | <?php echo $prosenfh; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FE</b> (Jumlah: <?php echo $jumlah_fe; ?>| <?php echo $prosenfe; ?>%) <div style="height:20px; width: <?php echo $panjangGrafikfe; ?>%; background-color: red;" title="FE (Jumlah: <?php echo $jumlah_fei; ?> | <?php echo $prosenfe; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%"  ><b>FPSB</b> (Jumlah: <?php echo $jumlah_fpsb; ?>| <?php echo $prosenfpsb; ?>%) <div style="height:20px; width: <?php echo $panjangGrafikfpsb; ?>%; background-color: red;" title="FPSB (Jumlah: <?php echo $jumlah_fpsb; ?> | <?php echo $prosenfpsb; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FK</b> (Jumlah: <?php echo $jumlah_fk; ?>| <?php echo $prosenfk; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikfk; ?>%; background-color: red;" title="FK (Jumlah: <?php echo $jumlah_fk; ?> | <?php echo $prosenfk; ?>%)"></div>
				</p>

				<p style="background-color: lightgrey; width: 70%;opacity:70%" ><b>FMIPA</b> (Jumlah: <?php echo $jumlah_fmipa; ?>| <?php echo $prosenfmipa; ?>%) <div style="height: 20px; width: <?php echo $panjangGrafikmipa; ?>%; background-color: red;" title="FMIPA (Jumlah: <?php echo $jumlah_fmipa; ?> | <?php echo $prosenfmipa; ?>%)"></div>
				</p>

			</div>
		</div>
</body>

</html>