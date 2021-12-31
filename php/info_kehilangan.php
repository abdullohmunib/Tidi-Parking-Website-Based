<?php
require 'sessionchecker_mhs.php';
require 'conf/koneksi.php';
require 'functions/function.php';
$tidy_id = query("SELECT * FROM info_kehilangan");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Info Kehilangan</title>
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
              <li><a href="jadwal_portal.php">Info Portal</a></li>
              <li><a href="#">Info Kehilangan</a></li>
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
        <p> | Informasi > Info Kehilangan </p>
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
            </tr>

            <?php $i++; ?>
          <?php endforeach;  ?>

        </table>
      </div>

    </div>

  </div>
</body>

</html>