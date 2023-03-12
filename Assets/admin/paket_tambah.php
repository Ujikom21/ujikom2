<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Paket Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="paket_aksi.php">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" placeholder="Masukkan nama paket ..">
                    </div>
                    <div class="form-group">
                        <label>Harha</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukkan harga ..">
                    </div>

                  
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
