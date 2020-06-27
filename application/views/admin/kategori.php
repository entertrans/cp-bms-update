<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 243px;">
    <!-- Main content -->
    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <span class="btn btn-sm btn-primary" onclick="tambah()">Tambah Data</span>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- search -->
                            <div class="row">
                                <form class="form-horizontal col-md-4" method="post" action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-info" type="button"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.seach -->

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nama Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($list->result_array() as $li) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $li['nm_desc'] ?>
                                                <div class="dropdown-divider"></div>
                                                <span><a href="#" onclick="ubah('<?= $li['id_desc'] ?>')">Sunting</a> | <a href="#" class="text-danger" onclick="hapus('<?= $li['id_desc'] ?>')">Hapus</a></span>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade in" id="addModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_kategori" autocomplete="off">
                    <input type="hidden" class="form-control" name="id_kategori" id="id_kategori">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="kategori" id="kategori">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <span class="btn btn-success" onclick="save()">Simpan</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>

<script>
    var method = '';
    $(document).ready(function() {
        $('#tbl_campaign').DataTable({
            'responsive': true,
            'autoWidth': false,
            'searching': false,
            'ordering': false
        });
    });

    function tambah() {
        method = 'add';
        $('#addModal').modal('show');
        $('#form_kategori')[0].reset();
    }

    function ubah(id) {
        method = 'update';
        $('#addModal').modal('show');
        $('#form_kategori')[0].reset();

        $.ajax({
            url: "<?= site_url('admin/kategori/edit/') ?>" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('[name="id_kategori"]').val(data.id_desc);
                $('[name="kategori"]').val(data.nm_desc);
            }
        });
    }

    function save() {
        var url = '';
        if (method == 'add') url = "<?= site_url('admin/kategori/add') ?>";
        else url = "<?= site_url('admin/kategori/update') ?>";

        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: $('#form_kategori').serialize(),
            success: function(data) {
                if (data.status == true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Ketegori berhasil disimpan',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        location.reload();
                    })
                }
            }
        });
    }

    function hapus(id) {
        Swal.fire({
            title: 'Anda yakin ingin menghapus data ini?',
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?= site_url('admin/kategori/delete/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Kategori berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            })
                        }
                    }
                });
            }
        })
    }
</script>