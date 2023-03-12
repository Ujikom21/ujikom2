<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Paket</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from paket where id_paket='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="paket_update.php">
                        <div class="form-group">
                            <label>Nama Paket</label>
                            <input type="hidden" name="id" value="<?php echo $d['id_paket']; ?>">
                            <input type="text" class="form-control" name="nama_paket" placeholder="Masukkan nama .." value="<?php echo $d['nama_paket']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga .." value="<?php echo $d['harga']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
