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
                                <!-- <span class="btn btn-sm btn-warning">Permohonan <span class="badge badge-danger"><?= rand(1, 10) ?></span></span> -->
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
                                    <span class="btn btn-sm btn-outline-info" id="filter"><i class="fas fa-calendar-alt"></i> Filter</span>
                                    <span class="btn btn-sm btn-outline-info" id="export"><i class="fas fa-download"></i> Export</span>
                                </div>
                            </div>
                            <!-- /.seach -->

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Satuan</th>
                                        <!-- <th>Dibuat</th> -->
                                        <th>Harga</th>
                                        <!-- <th>Berakhir</th> -->
                                        <!-- <th class="text-center">Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 100; $i++) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                <div class="dropdown-divider"></div>
                                                <span><a href="#">Sunting</a> | <a href="#" class="text-danger">Hapus</a> | <a href="#">Tampil</a></span>
                                            </td>
                                            <td><?= $i%2 == 0 ? 'Jasa Kontraktor' : 'Material' ?></td>
                                            <td><?= $i%2 == 0 ? 'Hari' : 'Kubik' ?></td>
                                            <!-- <td><?= tgl_indo(date('Y-m-d')) ?></td> -->
                                            <td>Rp. <?= number_format(rand(100000, 2000000), 0, ',', '.') ?></td>
                                            <!-- <td><?= tgl_indo(date('Y-m-d')) ?></td>
                                            <td class="text-center"><?= $i % 2 == 0 ? '<p class="badge badge-success">Active</p>' : '<p class="badge badge-secondary">Pending</p>' ?></td> -->
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