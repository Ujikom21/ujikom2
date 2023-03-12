<?php
include '../koneksi.php';
$nama = $_POST['nama_paket'];
$hp = $_POST['harga'];
mysqli_query($koneksi,"insert into paket values('','$nama','$hp')");
header("location:paket.php");
?>
