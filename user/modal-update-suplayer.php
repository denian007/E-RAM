<div class="modal fade" id="modalUpdateSuplayer<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateSuplayerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateSuplayerLabel">Update Data Suplayer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="f-modal-update-suplayer.php" method="POST">
                    <div class="row">
                        <div class="col-md-12" style="display: none;">
                            <b>Jenis</b>
                            <input type="text" class="form-control" name="jenis" value="<?= $data['jenis'] ?>">
                            <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>">
                        </div>
                        <div class="col-md-12">
                            <b>Nama Suplayer</b>
                            <input type="text" class="form-control" name="nm_suplayer" value="<?= $data['nm_suplayer'] ?>">
                        </div>
                        <div class="col-md-12">
                            <b>Kontak/Hp</b>
                            <input type="number" class="form-control" name="hp" value="<?= $data['hp'] ?>">
                        </div>
                        <div class="col-md-12">
                            <b>Alamat</b>
                            <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                        </div>
                        <div class="col-md-12">
                            <b>Panjar TBS/BRD</b>
                            <input type="number" class="form-control" name="panjar_tbs" value="<?= $data['panjar_tbs'] ?>">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>