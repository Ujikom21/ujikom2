<?php
include '../koneksi.php';
$pelanggan = $_POST['pelanggan'];
$paket = $_POST['paket'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];
$tgl_hari_ini = date('Y-m-d');
$status = 0;

$h = mysqli_query($koneksi,"Select * from paket");
while($data = mysqli_fetch_array($h)){
	if($_POST['paket']== $data['nama_paket']){
		$harga = $data['harga']* $_POST['berat'];
	}
}

mysqli_query($koneksi,"insert into transaksi values('','$tgl_hari_ini',
'$pelanggan','$paket','$harga','$berat','$tgl_selesai','$status')");


$id_terakhir = mysqli_insert_id($koneksi);
$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];
for($x=0;$x<count($jenis_pakaian);$x++){
    if($jenis_pakaian[$x] != ""){
        mysqli_query($koneksi,"insert into item values('','$id_terakhir','$jenis_pakaian[$x]','$jumlah_pakaian[$x]')");
    }
}
header("location:transaksi.php");
?>
 