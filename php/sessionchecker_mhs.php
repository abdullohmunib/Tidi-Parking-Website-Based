<?php
session_start();
if (!isset($_SESSION["loginmhs"])) {
	header("Location:login_mahasiswa.php");
	exit;
}
