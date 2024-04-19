<?php

require "koneksi.php";

session_start();

// id_barang dan jumlah diambil dari new-pembelian.php
$id_barang = $_POST["id_barang"];
$jumlah = $_POST["jumlah"];

// ambil harga beli barang
$sql = "SELECT harga_beli FROM barang WHERE id = '$id_barang'";
$query = mysqli_query($koneksi, $sql);
$barang = mysqli_fetch_array($query);

$total_harga = $jumlah * $barang["harga_beli"];

// id_staff diambil dari sesi login
$id_staff = $_SESSION["id"];

$sql = "INSERT INTO pembelian (id_barang, jumlah, total_harga, id_staff) VALUES ('$id_barang', '$jumlah', '$total_harga', '$id_staff')";
mysqli_query($koneksi, $sql);

// tambah stok barang yang dibeli
$sql = "UPDATE barang SET stok = stok + $jumlah WHERE id = '$id_barang'";
mysqli_query($koneksi, $sql);

// cek adakah error ketika menjalankan SQL
if (mysqli_error($koneksi)) {
    // jika ada error tampilkan
    echo mysqli_error($koneksi);
} else {
    // jika tidak ada error, kembali ke pembelian.php
    header("location: pembelian.php");
}