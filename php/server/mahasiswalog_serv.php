<?php
session_start();

if (isset($_SESSION["loginmhs"])) {
    header("Location: dashboard_mahasiswa.php");
    exit;
}

$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['nim']) || empty($_POST['password'])) {
        $error = "nim atau password anda salah!";
    } else {
        $nim = $_POST['nim'];
        $password = $_POST['password'];


        $koneksi = mysqli_connect("localhost", "root", "", "db_tidyid");

        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE password='$password' AND nim='$nim'");
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $_SESSION["loginmhs"] = true;
            $_SESSION["nim"] = $nim;
            header("location: dashboard_mahasiswa.php"); // pindah ke halaman lain
        } else {
            $error     = "NIM atau password anda salah";
        }
        mysqli_close($koneksi);
    }
}
