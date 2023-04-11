<div class="modal fade" id="modalClearLog" tabindex="-1" aria-labelledby="modalClearLogLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalClearLogLabel">Perhatian !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="f-clear-log.php" method="POST">
                            <button type="submit" class="btn btn-outline-danger btn-block" name="bhapus" <?= $otoritas1; ?>><i class="fa fa-trash"></i> Bersihkan Log</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>