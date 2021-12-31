<?php
// koneksi database
require 'sessionchecker_mhs.php';
include 'conf/koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_SESSION["nim"];
$nopol = $_POST['nopol'];
$nama_parkir = $_POST['nama_parkir'];

$nopoltrimmed = preg_replace('/\s+/', '', $nopol);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO riwayat (nim, nopol, nama_parkir) VALUES ('$nim', '$nopoltrimmed','$nama_parkir')");

// mengalihkan halaman kembali ke index.php
header("location:aksi.php");
