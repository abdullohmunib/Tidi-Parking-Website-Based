<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';
require 'functions/function.php';
$tidy_id = query("SELECT * FROM info_kehilangan");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/tampil_isi_kehilangan.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="utama">

		<div class="sidebar-kiri">
			<div class="menu">
				<div style="padding: 2px; background-color: #1abc9c; ">
				<center><img src="../logo/logokecil.svg"></center></div>
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
				<p> | Laporan > Isi Kehilangan > Tampil Data </p>
			</div>

			<div class="tengah">
				 <table style="text-align: center;" border="1">
                        <tr>
                            <th>No</th>
                            <th>Waktu</th>
                            <th>Benda Yang Ditemukan</th>
                            <th>Lokasi Pengambilan</th>
                            <th>Keterangan</th>
                            <th>NIP Petugas</th>
                            <th>ID Kehilangan</th>
                            <th>Aksi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <!-- mengambil setiap nilai array -->
                        <?php foreach ($tidy_id as $row) : ?>
                            <tr>
                                <!-- membuat nomor auto incremen -->
                                <td><?php echo $i;  ?></td>

                                <td><?php echo $row['waktu']; ?></td>
                                <td><?php echo $row['barang']; ?></td>
                                <td><?php echo $row['lokasi_pengambilan']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td><?php echo $row['nip_petugas']; ?></td>
                                <td><?php echo $row['id_kehilangan']; ?></td>
                                <td>
                                    <button class="submit-btn1"><a href="hapus_kehilangan.php?idkehilangan=<?php echo $row['id_kehilangan']; ?>">Hapus</a>
                                    </button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach;  ?>
        
                     </table>				
			</div>
		</div>
</body>

</html>