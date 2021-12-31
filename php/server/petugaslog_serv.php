<?php
session_start();

if (isset($_SESSION["loginpetugas"])) {
	header("Location: dashboard_petugas.php");
	exit;
}


$error = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['nip']) || empty($_POST['password'])) {
		$error = "nip atau password anda salah!";
	} else {
		$nip = $_POST['nip'];
		$password = $_POST['password'];

		$koneksi = mysqli_connect("localhost", "tidy_id", "password", "newtidy");

		$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE password='$password' AND nip='$nip'");
		$row = mysqli_num_rows($query);
		if ($row == 1) {
			$_SESSION["loginpetugas"] = true;
			$_SESSION["nip"] = $nip;
			header("location: dashboard_petugas.php"); // pindah ke halaman lain
		} else {
			$error 	= "NIP atau password anda salah";
		}
		mysqli_close($koneksi);
	}
}
