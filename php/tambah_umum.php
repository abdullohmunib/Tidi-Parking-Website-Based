<?php
// koneksi database
require 'sessionchecker_petugas.php';
include 'conf/koneksi.php';

// menangkap data yang di kirim dari form
$informasi = $_POST['informasi'];
$nip = $_SESSION["nip"];

// menginput data ke database
mysqli_query($koneksi, "insert into info_umum (informasi, nip_petugas) values('$informasi','$nip')");

// mengalihkan halaman kembali ke index.php
header("location:isi_laporan.php");
