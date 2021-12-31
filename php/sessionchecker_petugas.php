<?php
session_start();
if (!isset($_SESSION["loginpetugas"])) {
    header("Location:login_petugas.php");
    exit;
}
