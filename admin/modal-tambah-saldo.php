<div class="modal fade" id="modalTambahSaldo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalTambahSaldoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahSaldoLabel">Tambah Saldo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="f-tambah-saldo.php" method="POST">
                    <div class="row">
                        <div class="col-md-12" style="display: none;">
                            <?php
                            $query = mysqli_query($koneksi, "select count(id) as max_id from ta_saldo");
                            while ($data = mysqli_fetch_array($query)) :
                                $max_id = $data['max_id'];
                                $id_baru = $max_id + 1;
                            ?>
                            <?php endwhile; ?>
                            <input type="text" name="id" class="form-control" value="<?= $id_baru ?>">
                            <input type="text" name="time_stamp" class="form-control" value="<?= $time_stamp ?>">
                        </div>
                        <div class="col-md-4">
                            <b>Nama Penyetor</b>
                            <input type="text" class="form-control" name="nm_penyetor" required>
                        </div>
                        <div class="col-md-4">
                            <b>Jumlah</b>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                        <div class="col-md-4">
                            <b>Tanggal</b>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>