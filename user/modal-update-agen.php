<div class="modal fade" id="modalUpdateAgen<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateAgenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateAgenLabel">Update Transaksi Agen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="f-modal-update-agen.php" method="POST">
                    <div class="row">
                        <div class="col-md-12" style="display: none;">
                            <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>">
                            <input type="text" name="jenis" class="form-control" value="<?= $data['jenis'] ?>">
                            <input type="text" name="jenis2" class="form-control" value="<?= $data['jenis2'] ?>">
                            <input type="text" class="form-control" name="time_stamp" value="<?= $time_stamp ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <b>Nama Suplayer</b>
                                <input type="text" class="form-control" name="nm_suplayer" id="nm_suplayer" value="<?= $data['nm_suplayer'] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <b>Kontak</b>
                                <input type="text" class="form-control" name="hp" id="hp" value="<?= $data['hp'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <b>Tanggal</b>
                                <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal'] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Masuk</label>
                                <div class="col-sm-8">
                                    <small>Kg</small>
                                    <input class="form-control bg-primary text-dark" name="tbg_masuk" id="tbg_masuk" type="number" value="<?= $data['tbg_masuk'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Keluar</label>
                                <div class="col-sm-8">
                                    <small>Kg</small>
                                    <input class="form-control bg-primary text-dark" name="tbg_keluar" id="tbg_keluar" type="number" value="<?= $data['tbg_keluar'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Kotor</label>
                                <div class="col-sm-8">
                                    <small>Kg</small>
                                    <input class="form-control" name="tbg_kotor" id="tbg_kotor" type="number" value="<?= $data['tbg_kotor'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <div class="col-md-4 mt-5">
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-3 col-form-label">Potongan Wajib</label>
                                <div class="col-sm-3">
                                    <small>Persen</small>
                                    <input class="form-control bg-primary text-dark" name="ptg_persen" id="ptg_persen" type="number" value="<?= $data['ptg_persen'] ?>">
                                </div>
                                <div class="col-sm-3">
                                    <small>Persen #2</small>
                                    <input class="form-control bg-primary text-dark" name="ptg_persen2" id="ptg_persen2" type="number" value="<?= $data['ptg_persen2'] ?>">
                                </div>
                                <div class="col-sm-3">
                                    <small>Kg</small>
                                    <input class="form-control bg-primary text-dark" name="ptg_kg" id="ptg_kg" type="number" value="<?= $data['ptg_kg'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-3 col-form-label">Timbang Bersih</label>
                                <div class="col-sm-9">
                                    <small>Kg</small>
                                    <input class="form-control" name="tbg_bersih" id="tbg_bersih" type="number" value="<?= $data['tbg_bersih'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <small>Rp</small>
                                    <input class="form-control bg-primary text-dark" name="harga" id="harga" type="number" value="<?= $data['harga'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Potong Hutang</label>
                                <div class="col-sm-8">
                                    <small>Rp</small>
                                    <input class="form-control bg-primary text-dark" name="ptg_hutang" id="ptg_hutang" type="number" value="<?= $data['ptg_hutang'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Jumlah Bayar</label>
                                <div class="col-sm-8">
                                    <small>Rp</small>
                                    <input class="form-control text-dark jumlah" name="jumlah" id="jumlah" type="number" value="<?= $data['jumlah'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="form-group">
                                <b>Keterangan</b>
                                <textarea name="ket" id="ket" class="form-control" placeholder="Masukan Catatan Jika Perlu"><?= $data['ket']; ?></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-undo-alt"></i> Batal</button>
                <button type="submit" class="btn btn-outline-primary" name="bsimpan"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#tbg_masuk").keyup(function() {
        var a = parseInt($("#tbg_masuk").val());
        var b = parseInt($("#tbg_keluar").val());
        var c = parseInt($("#tbg_kotor").val());
        var d = Number(document.getElementById('ptg_persen').value);
        var e = Number(document.getElementById('ptg_persen2').value);
        var f = parseInt($("#ptg_kg").val());
        var harga = parseInt($("#harga").val());
        var hutang = parseInt($("#ptg_hutang").val());
        var jumlah = parseInt($("#jumlah").val());
        var ab = a - b;
        var de = d + e;
        var abc = ab * de / 100;
        var abcd = ab - abc;
        var abcde = abcd * harga - hutang;
        $("#tbg_bersih").val(abcd);
        $("#tbg_kotor").val(ab);
        $("#ptg_kg").val(abc);
        $("#jumlah").val(abcde);

    });
    $("#tbg_keluar").keyup(function() {
        var a = parseInt($("#tbg_masuk").val());
        var b = parseInt($("#tbg_keluar").val());
        var c = parseInt($("#tbg_kotor").val());
        var d = Number(document.getElementById('ptg_persen').value);
        var e = Number(document.getElementById('ptg_persen2').value);
        var f = parseInt($("#ptg_kg").val());
        var harga = parseInt($("#harga").val());
        var hutang = parseInt($("#ptg_hutang").val());
        var jumlah = parseInt($("#jumlah").val());
        var ab = a - b;
        var de = d + e;
        var abc = ab * de / 100;
        var abcd = ab - abc;
        var abcde = abcd * harga - hutang;
        $("#tbg_bersih").val(abcd);
        $("#tbg_kotor").val(ab);
        $("#ptg_kg").val(abc);
        $("#jumlah").val(abcde);

    });
    $("#ptg_kg").keyup(function() {
        var a = parseInt($("#ptg_kg").val());
        var b = parseInt($("#tbg_kotor").val());
        var harga = parseInt($("#harga").val());
        var hutang = parseInt($("#ptg_hutang").val());
        var jumlah = parseInt($("#jumlah").val());
        var ab = b - a;
        var abcde = ab * harga;
        $("#tbg_bersih").val(ab);
        $("#jumlah").val(abcde);

    });
</script>
<script>
    $("#ptg_persen").keyup(function() {
        var a = parseInt($("#tbg_masuk").val());
        var b = parseInt($("#tbg_keluar").val());
        var c = parseInt($("#tbg_kotor").val());
        var d = Number(document.getElementById('ptg_persen').value);
        var e = Number(document.getElementById('ptg_persen2').value);
        var f = parseInt($("#ptg_kg").val());
        var harga = parseInt($("#harga").val());
        var hutang = parseInt($("#ptg_hutang").val());
        var jumlah = parseInt($("#jumlah").val());
        var ab = a - b;
        var de = d + e;
        var abc = ab * de / 100;
        var abcd = ab - abc;
        var abcde = abcd * harga - hutang;
        $("#tbg_bersih").val(abcd);
        $("#tbg_kotor").val(ab);
        $("#ptg_kg").val(abc);
        $("#jumlah").val(abcde);

    });
    $("#ptg_persen2").keyup(function() {
        var a = parseInt($("#tbg_masuk").val());
        var b = parseInt($("#tbg_keluar").val());
        var c = parseInt($("#tbg_kotor").val());
        var d = Number(document.getElementById('ptg_persen').value);
        var e = Number(document.getElementById('ptg_persen2').value);
        var f = parseInt($("#ptg_kg").val());
        var harga = parseInt($("#harga").val());
        var hutang = parseInt($("#ptg_hutang").val());
        var jumlah = parseInt($("#jumlah").val());
        var ab = a - b;
        var de = d + e;
        var abc = ab * de / 100;
        var abcd = ab - abc;
        var abcde = abcd * harga - hutang;
        $("#tbg_bersih").val(abcd);
        $("#tbg_kotor").val(ab);
        $("#ptg_kg").val(abc);
        $("#jumlah").val(abcde);

    });
    $("#ptg_hutang").keyup(function() {
        var a = parseInt($("#ptg_hutang").val());
        var b = parseInt($("#jumlah").val());
        var ab = b - a;
        $("#jumlah").val(ab);
    });
    $("#harga").keyup(function() {
        var a = parseInt($("#harga").val());
        var b = parseInt($("#tbg_bersih").val());
        var ab = b * a;
        $("#jumlah").val(ab);
    });
</script>