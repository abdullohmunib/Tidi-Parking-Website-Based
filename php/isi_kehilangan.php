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
                <p> | Laporan > Isi Kehilangan </p>
            </div>

            <div class="tengah">
                
                <form class="login-form" action="tambah_kehilangan.php" method="post" >

                        <h1>Tambah Laporan Kehilangan</h1>
                        
                        <div class="login-field">
                            <h5 class="form-input-label">Barang</h5>
                            
                            <input class="form-input" style="text-align: center; width: 300px;height: 30px;" type="text" name="barang" placeholder="isikan nama barang" required>
                        </div>
                        <div class="login-field">
                            <h5 class="form-input-label">Lokasi Pengambilan</h5>
                            <input class="form-input"  style=" text-align: center; width: 300px; height: 30px;" type="text" name="lokasi" placeholder="Isikan lokasi di kolom ini " required>
                        </div>

                        <div class="login-field">
                            <h5 class="form-input-label">Keterangan</h5>
                            <textarea class="form-input" style="  width: 300px; height: 80px;" name="keterangan" placeholder="Isikan keterangan di kolom ini " required></textarea>
                        </div>
                        <div class="login-field">
                            <input type="submit" class="submit-btn" value="SUBMIT">
                            <button class="submit-btn"><a href="tampil_isi_kehilangan.php">TAMPIL DATA</a></button>        
                        </div>
                </form>
            </div>
        </div>
</body>
</html>