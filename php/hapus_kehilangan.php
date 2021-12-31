<?php
// koneksi database
include 'conf/koneksi.php';

// menangkap data id yang di kirim dari url
$id_kehilangan = $_GET['idkehilangan'];


// menghapus data dari database
mysqli_query($koneksi, "delete from info_kehilangan where id_kehilangan = '$id_kehilangan'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_isi_kehilangan.php");
