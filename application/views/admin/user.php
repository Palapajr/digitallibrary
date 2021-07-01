<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?= base_url() ?>public/assets/js/plugins/datatables/dataTables.bootstrap4.css">

<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/rowReorder.dataTables.min.css">

<!-- Page JS Plugins -->
<script src="<?= base_url() ?>public/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page JS Code -->
<script src="<?= base_url() ?>public/assets/js/pages/be_tables_datatables.min.js"></script>


<!-- Start Content -->
<div class="content">

    <h2 class="content-heading">Tabel Data SiteBook</h2>

        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default"> 
               
                <button type="button" class="btn btn-success mr-5 mb-5 left" id="tomboltambah">
                    <i class="fa fa-plus mr-5"></i>Tambah Data
                </button>

            </div>
            <div class="block-content block-content-full">

                <table class="table table-bordered table-striped table-vcenter js-dataTable-full nowrap" style="width:100%" id="user">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Level</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Access</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->

</div>
<!-- End Content -->

<div class="viewmodal" style="display: none;"></div>

<script>

$(document).ready(function () {

tampildatasitebook();
        //button tambah
        $('#tomboltambah').click(function(e){
        $.ajax({
            url: "<?= site_url('User/formtambah')?>",
            dataType: "json",
            success: function (response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#tambahuser').on('shown.bs.modal', function(e) {
                        $('#nama').focus();
                    })
                    $('#tambahuser').modal('show');
                }
            }
        });
    });
});


function tampildatasitebook() {
    table = $('#datasitebook').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('Sitebook/ambildata') ?>",
            "type": "POST"
        },

        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
}
function edit(nama) {
    $.ajax({
        type: 'post',
        url: "<?= site_url('Sitebook/formedit') ?>",
        data: {
            nama: nama
        },
        dataType: "json",
        success: function(response) {
            if (response.sukses) {
                $('.viewmodal').html(response.sukses).show();
                $('#editsite').on('shown.bs.modal', function(e) {
                    $('#nama').focus();
                })
                $('#editsite').modal('show');
            }
        }
    });
}

function hapus(nama) {
    Swal.fire({
        title: 'Hapus',
        text: `Yakin Menghapus Data Sitebook Dengan Judul ${nama}?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "post",
                url: "<?= site_url('Sitebook/hapus') ?>",
                data: {
                    nama: nama,
                },
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Konfirmasi',
                            text: response.sukses
                        });
                        tampildatasitebook();
                    }
                }
            });
        }
    })
}
</script>