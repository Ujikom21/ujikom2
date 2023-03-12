<?php
include '../koneksi.php';
$id = $_POST['id'];
$pelanggan = $_POST['pelanggan'];
$paket = $_POST['paket'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];
$status = $_POST['status'];



$h = mysqli_query($koneksi,"Select * from paket");
while($data = mysqli_fetch_array($h)){
	if($_POST['paket']== $data['id_paket']){
		$harga = $data['harga']* $_POST['berat'];
	}
}


mysqli_query($koneksi,"update transaksi set transaksi_pelanggan='$pelanggan',transaksi_paket='$paket', transaksi_harga='$harga', transaksi_berat='$berat', transaksi_tgl_selesai='$tgl_selesai', transaksi_status='$status' where transaksi_id='$id'");

$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];
mysqli_query($koneksi,"delete from item where item_transaksi='$id'");
for($x=0;$x<count($jenis_pakaian);$x++){
    if($jenis_pakaian[$x] != ""){
        mysqli_query($koneksi,"insert into item values('','$id','$jenis_pakaian[$x]','$jumlah_pakaian[$x]')");

    }
}
header("location:transaksi.php");
?>
