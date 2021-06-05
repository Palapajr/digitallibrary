<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?= base_url() ?>public/assets/js/plugins/datatables/dataTables.bootstrap4.css">
<!-- 
<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/rowReorder.dataTables.min.css"> -->

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
               
                <button type="button" class="btn btn-success mr-5 mb-5 left">
                    <i class="fa fa-plus mr-5"></i>Tambah Data
                </button>

            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="datasitebook">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Link</th>
                            <th class="text-center">create</th>
                            <th class="text-center">create date</th>
                            <th class="text-center">pudate</th>
                            <th class="text-center">pudate date</th
                            <th class="text-center">Action</th>
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
</script>