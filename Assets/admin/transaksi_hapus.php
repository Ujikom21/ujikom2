<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from transaksi where transaksi_id='$id'");
mysqli_query($koneksi,"delete from item where item_transaksi='$id'");
header("location:transaksi.php");
?>
