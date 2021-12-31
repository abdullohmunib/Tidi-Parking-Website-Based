<?php
// koneksi database
include 'conf/koneksi.php';

// menangkap data id yang di kirim dari url
$id_info = $_GET['idinfo'];


// menghapus data dari database
mysqli_query($koneksi, "delete from info_umum where id_info = '$id_info'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_isi_laporan.php");
