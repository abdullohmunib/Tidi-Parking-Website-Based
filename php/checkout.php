<?php
require 'sessionchecker_petugas.php';
require 'conf/koneksi.php';

$nip = $_SESSION["nip"];
$id_riwayat = $_GET['idriwayat'];


mysqli_query($koneksi, "UPDATE riwayat SET waktu_keluar = NOW(), nip = $nip WHERE id_riwayat = $id_riwayat");


header("location:data_kendaraan.php");
