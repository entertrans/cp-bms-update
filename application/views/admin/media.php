<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 243px;">
    <!-- Main content -->
    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= site_url('admin/produk') ?>">Produk</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Media</li>
                                </ol>
                            </nav>

                            <div class="card">
                                <div class="card-body">
                                    <form>
                                    <!-- <form action="<?= site_url('admin/produk/simpan_media') ?>" method="post" enctype="multipart/form-data"> -->
                                        <input type="hidden" class="form-control" name="id_prod" id="id_prod" value="<?= $produk['id'] ?>">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Produk</label>
                                            <div class="col-sm-6">
                                                <input type="text" readonly class="form-control" name="nm_produk" id="nm_produk" value="<?= $produk['nm_produk'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Media Produk</label>
                                            <div class="col-sm-6">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="media_produk" id="media_produk" value="">
                                                    <label class="custom-file-label">Choose file...</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-sm-6">
                                                <button class="btn btn-success" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

<?php $this->load->view('admin/layout/footer'); ?>

<script>
    $('#media_produk').change(function(e) {
        var fileName = e.target.files[0].name;
        $(this).next('.custom-file-label').html(fileName);
    });

    $('form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "<?= site_url('admin/produk/simpan_media') ?>",
            type: "POST",
            dataType: "JSON",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                if (data.status == true) {
                    Swal.fire({
                        title: 'Media produk telah ditambah',
                        text: 'Anda ingin menambahkan daftar media produk lagi?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#17a2b8',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Tentu',
                        cancelButtonText: 'Tidak'
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Media produk berhasil disimpan',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.href = "<?= site_url('admin/produk') ?>"
                            })
                        }
                    })
                }
            }
        });
    });
</script>