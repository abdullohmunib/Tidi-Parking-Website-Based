<?php
$fti = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fti'");
$ftsp = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='ftsp'");
$fiai = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fiai'");
$fh = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fh'");
$fe = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fe'");
$fpsb = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fpsb'");
$fk = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fk'");
$fmipa = $koneksi->query("SELECT * FROM riwayat WHERE nip IS NULL AND nama_parkir='fmipa'");

$jumlah_fti = $fti->num_rows;
$jumlah_ftsp = $ftsp->num_rows;
$jumlah_fiai = $fiai->num_rows;
$jumlah_fh = $fh->num_rows;
$jumlah_fe = $fe->num_rows;
$jumlah_fpsb = $fpsb->num_rows;
$jumlah_fk = $fk->num_rows;
$jumlah_fmipa = $fmipa->num_rows;
