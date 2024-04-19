<?php

require "koneksi.php";


$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$no_telepon = $_POST["no_telepon"];

$sql = "INSERT INTO pelanggan (nama, alamat, no_telepon) VALUES ('$nama', '$alamat', '$no_telepon')";
mysqli_query($koneksi, $sql);


if (mysqli_error($koneksi)) {

    echo mysqli_error($koneksi);
} else {

    header("location: pelanggan.php");
}
