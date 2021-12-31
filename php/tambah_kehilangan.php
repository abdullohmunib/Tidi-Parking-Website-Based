<?php
// koneksi database
require 'sessionchecker_petugas.php';
include 'conf/koneksi.php';

// menangkap data yang di kirim dari form
$barang = $_POST['barang'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];
$nip = $_SESSION["nip"];

// menginput data ke database
mysqli_query($koneksi, "insert into info_kehilangan (barang, lokasi_pengambilan, keterangan, nip_petugas) values('$barang', '$lokasi', '$keterangan','$nip')");

// mengalihkan halaman kembali ke index.php
header("location:isi_kehilangan.php");
