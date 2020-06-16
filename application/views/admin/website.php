<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 243px;">
    <!-- Main content -->
    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form id="form_setting" class="form-horizontal" autocomplete="off">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pengaturan Website</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Website</label>
                                    <div class="col-sm-4">
                                        <?= tag_input('text', 'nm_website', 'nm_website') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-4">
                                        <img style="width: 30%" class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-4">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file_upload" id="file_upload">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <?= tag_input('email', 'email', 'email') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kontak</label>
                                    <div class="col-sm-4 input-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone fa-rotate-90"></i></span>
                                            </div>
                                            <?= tag_input('text', 'kontak', 'kontak') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="alamat" id="alamat" cols="10" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">About Us</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="about" id="about" cols="10" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sosial Media</label>
                                    <div class="col-sm-4 input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="fb" id="fb">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-4 input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="twitter" id="twitter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-4 input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="ig" id="ig">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-4">
                                        <button type="button" class="btn btn-outline-primary" id="btn_save"><i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </form>
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
    $('#tbl_campaign').DataTable({
        'responsive': true,
        'autoWidth': false,
        'searching': false,
        'ordering': false
    });
</script>

<script>
    $('#btn_save').on('click', function() {
        // console.log($('#form_setting').serialize());
        // $.ajax({
        //     type: "POST",
        //     url: "<?= site_url('admin/setting/save') ?>",
        //     dataType: "JSON",
        //     data: $('#form_setting').serialize(),
        //     success: function() {
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'success',
        //             title: 'Your work has been saved',
        //             showConfirmButton: false,
        //             timer: 1500
        //         })
        //     }
        // });

        Swal.fire({
            // position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>