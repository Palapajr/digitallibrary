<div class="modal fade" id="modaltambahtesting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data Testing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Testing/simpandata', ['class' => 'formsimpan'])?>
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" id="nis" class="form-control" maxlength="10">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <select name="jenkel" id="jenkel" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai Raport IND</label>
                    <div class="col-sm-4">
                        <input type="text" name="rapor_ind" id="rapor_ind" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai USBN IND</label>
                    <div class="col-sm-4">
                        <input type="text" name="usbn_ind" id="usbn_ind" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai Raport ING</label>
                    <div class="col-sm-4">
                        <input type="text" name="rapor_ing" id="rapor_ing" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai USBN ING</label>
                    <div class="col-sm-4">
                        <input type="text" name="usbn_ing" id="usbn_ing" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai Raport MTK</label>
                    <div class="col-sm-4">
                        <input type="text" name="rapor_mtk" id="rapor_mtk" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai USBN MTK</label>
                    <div class="col-sm-4">
                        <input type="text" name="usbn_mtk" id="usbn_mtk" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai Raport IPA</label>
                    <div class="col-sm-4">
                        <input type="text" name="rapor_ipa" id="rapor_ipa" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai USBN IPA</label>
                    <div class="col-sm-4">
                        <input type="text" name="usbn_ipa" id="usbn_ipa" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai Raport IPS</label>
                    <div class="col-sm-4">
                        <input type="text" name="rapor_ips" id="rapor_ips" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai USBN IPS</label>
                    <div class="col-sm-4">
                        <input type="text" name="usbn_ips" id="usbn_ips" class="form-control" maxlength="2">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Minat</label>
                    <div class="col-sm-6">
                        <select name="minat" id="minat" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="MIPA">MIPA</option>
                            <option value="IPS">IPS</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Nilai IQ</label>
                    <div class="col-sm-4">
                        <input type="text" name="nilai_iq" id="nilai_iq" class="form-control" maxlength="3">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nobp" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-4">
                        <input type="text" name="kelas" id="kelas" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-success">
                    <i class="fa fa-check"></i> Simpan
                </button>
            </div>
        <?= form_close() ?>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.formsimpan').submit(function(e) {
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        $('.pesan').html(response.error).show();
                    }

                    if (response.sukses) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.sukses
                        });
                        tampildatatesting();
                        $('#modaltambahtesting').modal('hide');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>