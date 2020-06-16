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
                                <span class="btn btn-sm btn-primary">Tambah Data</span>
                                <span class="btn btn-sm btn-warning">Permohonan <span class="badge badge-danger"><?= rand(1,10) ?></span></span>
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
                                <div class="col-md-2 p-0">
                                    <span class="btn btn-sm btn-outline-info" id="export"><i class="fas fa-download"></i> Export</span>
                                </div>
                            </div>
                            <!-- /.seach -->

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Dibuat</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 100; $i++) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td style="width: 8%">
                                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300">
                                            </td>
                                            <td>
                                                Anonymous
                                                <?= $i % 2 == 0 ? '<i class="fas fa-check-circle text-info"></i>' : '' ?>
                                                <div class="dropdown-divider"></div>
                                                <span><a href="#">Sunting</a> | <a href="#" class="text-danger">Hapus</a> | <a href="#">Tampil</a></span>
                                            </td>
                                            <td>Username</td>
                                            <td>anonymous@email</td>
                                            <td><?= tgl_indo(date('Y-m-d')) ?></td>
                                            <td class="text-center"><?= $i % 2 == 0 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-secondary">Unactive</span>' ?></td>
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

<?php $this->load->view('admin/layout/footer'); ?>

<script>
    $('#tbl_campaign').DataTable({
        'responsive': true,
        'autoWidth': false,
        'searching': false,
        'ordering': false
    });
</script>