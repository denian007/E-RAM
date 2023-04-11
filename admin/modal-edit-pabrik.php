<div class="modal fade" id="modalEditPabrik<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalEditPabrikLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditPabrikLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="f-update-data-pabrik.php" method="POST">
                    <div class="row">
                        <div class="col-md-12" style="display: none;">
                            <input type="text" name="id" class="form-control" value="<?= $data['id'] ?>">
                        </div>
                        <div class="col-md-6">
                            <b>Nama Singkat Pabrik</b>
                            <input type="text" name="nm_pabrik_singkat" class="form-control" value="<?= $data['nm_pabrik_singkat'] ?>">
                        </div>
                        <div class="col-md-6">
                            <b>Nama Lengkap Pabrik</b>
                            <input type="text" name="nm_full_pabrik" class="form-control" value="<?= $data['nm_full_pabrik'] ?>">
                        </div>
                        <div class="col-md-6 mt-3">
                            <b>Nama Manager Pabrik</b>
                            <input type="text" name="nm_manager_pabrik" class="form-control" value="<?= $data['manager_pabrik'] ?>">
                        </div>
                        <div class="col-md-6 mt-3">
                            <b>Biaya Operasional</b>
                            <input type="number" name="uang_jalan" class="form-control" value="<?= $data['uang_jalan'] ?>">
                        </div>
                        <div class="col-md-6 mt-3">
                            <b>Alamat</b>
                            <textarea name="alamat_pabrik" class="form-control" rows="1"><?= $data['alamat_pabrik']; ?></textarea>
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