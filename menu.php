<!DOCTYPE html>
<html lang="en">

<head>


</head>

<?php
session_start();
if (!array_key_exists("username", $_SESSION)) {
  header("location:logout.php");
  exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(251, 235, 217);">
  <div class="container px-4">
    <a class="navbar-brand" href="/">
      <span style="color:#000000; font-size:26px; font-weight:bold; letter-spacing: 1px;">Flowers</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="user.php">User</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="barang.php">Barang</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="penjualan.php">Penjualan</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="pembelian.php">Pembelian</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="profil.php">Profil</a></li>
        <li class="nav-item"><a class="nav-link" style="color: rgb(0, 0, 0); font-size:15px; " href="logout.php">Log out</a></li>
      </ul>
    </div>
</nav>