<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from paket where id_paket='$id'");
header("location:paket.php");
?>
