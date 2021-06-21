<div class="modal fade" id="editsite" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white">Edit Data Sitebook</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Sitebook/updatedata', ['class' => 'formsimpan'])?>
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
            
                <div class="form-group row">
                    <div class="col-6">
                        <div class="form-material">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
                            <input type="hidden" name="nama_lama" value="<?= $nama?>">
                            <label for="nama">Judul Site</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-material">
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori ?>">
                            <label for="kategori">Kategori Site</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="form-material">
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $keterangan ?></textarea>
                            <label for="keterangan">Keterangan Singkat</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-material">
                            <input type="text" class="form-control" id="link" name="link" value="<?= $link ?>">
                            <label for="link">Link Website</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-alt-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
                        tampildatasitebook();
                        $('#editsite').modal('hide');
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