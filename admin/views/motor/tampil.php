<div class="row">
    <div class="col-md-6 col-sm-6">
        <h4>Daftar Motor</h4>
    </div>
    <div class="col-md-6 col-sm-6 text-right">
        <a href="index.php?mod=motor&page=add" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Add Motor
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>ID</th>
                            <th>No Polisi</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($motor != null) {
                            $no = 1;
                            foreach ($motor as $row) { ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['nama_motor'] ?></td>
                                    <td><?= $row['id_motor'] ?></td>
                                    <td><?= $row['nomor_polisi'] ?></td>
                                    <td><?= $row['harga_sewa'] ?></td>
                                    <td><?= $row['status'] == 1 ? 'Tersedia' : 'Telah Disewakan'; ?></td>
                                    <td>
                                        <a href="index.php?mod=motor&page=edit&id=<?= md5($row['id_motor']) ?>" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a href="index.php?mod=motor&page=delete&id=<?= md5($row['id_motor']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus motor ini?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php $no++;
                            }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data motor</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
