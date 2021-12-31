<?php
// koneksi database
require 'sessionchecker_mhs.php';
include 'conf/koneksi.php';

// menangkap data yang di kirim dari form
$isi = $_POST['isi'];
$nim = $_SESSION["nim"];

// menginput data ke database
mysqli_query($koneksi, "insert into masukan (isi, nim_mahasiswa) values('$isi','$nim')");

// mengalihkan halaman kembali ke index.php
header("location:saran.php");
