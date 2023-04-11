<div class="modal fade" id="modalUpdateUser" tabindex="-1" aria-labelledby="modalUpdateUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateUserLabel">Info User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="f-update-user.php" method="POST">
                    <div class="row">
                        <input type="text" class="form-control" name="id" value="<?= $id_user ?>" style="display:none;">
                        <div class="col-md-12">
                            <b>Nama</b>
                            <input type="text" class="form-control" name="nama" value="<?= $nm_user ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <b>Username</b>
                            <input type="text" class="form-control" name="username" value="<?= $username ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <b>Password</b>
                            <input type="text" class="form-control" name="password" value="<?= $password ?>">
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