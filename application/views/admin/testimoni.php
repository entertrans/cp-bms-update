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
                                <span class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahTesti">Tambah Data</span>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="15%">Nama Lengkap</th>
                                        <th>Ulasan</th>
                                        <th>Rating</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1; ?>
                                        <?php foreach ($testimonial as $dt) {
                                        ?>
                                            <td><?= $no++  ?></td>
                                            <td class="text-center">
                                                <img class="img-fluid img-thumbnail" src="<?= base_url('assets/mockup/core/img/testimoni/') . $dt['photo_testi'] ?>">
                                            </td>
                                            <td>
                                                <?= $dt['nm_testi'] .' || ' . $dt['jbt_testi'] ?>
                                                <div class="dropdown-divider"></div>
                                                <?= $dt['desc_testi']  ?>
                                            </td>
                                            <td class="text-right"><?= $dt['bintang'] ?> <i class="fa fa-fw fa-star fa-sm"></i></td>
                                            <td class="text-center"><a href="#"><span class="badge badge-danger" data-toggle="modal" data-target="#hapusTestimoni<?= $dt['id_testimonial'] ?>">Hapus</span></a>
                                            </td>
                                    </tr>


                                    <div class="modal fade" id="hapustestimoni<?= $dt['id_testimonial'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus testimoni</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= site_url('admin/testimoni/hapus') ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <input type="hidden" name="id" value="<?= $dt['id_testimonial'] ?>">
                                                            <input type="hidden" name="filephoto" value="<?= $dt['photo_testi'] ?>">
                                                            Anda Yakin Ingin Menghapus testimoni Ini??
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

<!-- Modal Tambah-->
<div class="modal fade" id="tambahTesti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('admin/testimoni/add') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Gambar</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control-file" name="xfile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Bintang</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="bintang">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>

<script>
    $('#tbl_campaign').DataTable({
        'responsive': true,
        'autoWidth': false,
        'searching': true,
        'ordering': false
    });
</script>