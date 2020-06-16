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
                                    <span class="btn btn-sm btn-outline-info" id="report"><i class="fas fa-print"></i> Report</span>
                                </div>
                            </div>
                            <!-- /.seach -->

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">Campaign</th>
                                        <th rowspan="2">Volunteer</th>
                                        <th rowspan="2">Donatur</th>
                                        <th class="text-center" colspan="2">Donasi</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Terkumpul</th>
                                        <th class="text-center">Target</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 100; $i++) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                                            <div class="dropdown-divider"></div>
                                            <span><a href="#">Salurkan</a></span>
                                            </td>
                                            <td><a href="#">Anonymous</a></td>
                                            <td><?= number_format(rand(0,10000), 0, ',', '.') ?></td>
                                            <td>Rp. <?= number_format(rand(), 0, ',', '.') ?></td>
                                            <td>Rp. <?= number_format(rand(), 0, ',', '.') ?></td>
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