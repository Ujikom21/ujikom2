<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_paket'];
$hp = $_POST['harga'];
mysqli_query($koneksi,"update paket set nama_paket='$nama', harga='$hp' where id_paket='$id'");
header("location:paket.php");
?>
