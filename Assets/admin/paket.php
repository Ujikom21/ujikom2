<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Paket</h4>
        </div>
        <div class="panel-body">
            <a href="paket_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"select * from paket");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_paket']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        
                        <td>
                            <a href="paket_edit.php?id=<?php echo $d['id_paket']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="paket_hapus.php?id=<?php echo $d['id_paket']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            </div>
    </div>
</div>
<?php include 'footer.php'; ?>
