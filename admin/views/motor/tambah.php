<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=motor&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Merk Motor</label>
            <input type="text" name="nama_motor" class="form-control" value="<?=(isset($_POST['nama_motor']))?$_POST['nama_motor']:'';?>">
        </div>
        <div class="form-group">
            <label for="">ID Motor</label>
            <input type="text" name="id_motor" class="form-control" value="<?=(isset($_POST['id_motor']))?$_POST['id_motor']:'';?>">
        </div>
        <div class="form-group">
            <label for="">Nomor Polisi</label>
            <input type="text" name="nomor_polisi" class="form-control" value="<?=(isset($_POST['nomor_polisi']))?$_POST['nomor_polisi']:'';?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Harga Sewa</label>
            <input type="text" name="harga_sewa" class="form-control" value="<?=(isset($_POST['harga_sewa']))?$_POST['harga_sewa']:'';?>">
        </div>
        <div class="form-group">
            <label for="s">Status</label>
            <select name="status" id="s" class="form-control"> 
                <option value="Tersedia" <?= (isset($_POST['status']) && $_POST['status'] == 'Tersedia') ? 'selected' : ''; ?>>Tersedia</option> 
                <option value="Telah Disewakan" <?= (isset($_POST['status']) && $_POST['status'] == 'Telah Disewakan') ? 'selected' : ''; ?>>Telah Disewakan</option>  
            </select> 
        </div>
        <button type="submit" class="btn btn-default btn-primary">Save</button> 
    </div>
</form>