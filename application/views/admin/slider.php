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
                                <span class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahSlider">Tambah Data</span>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- search -->
                            <div class="row">
                                <form class="form-horizontal col-md-4" method="post" >
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
                                        <th width="20px">#</th>
                                        <th width="80px">Photo</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($slider as $dt) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td width="180px"><img style="width: 50px;" src="<?= base_url('assets/mockup/core/img/slider/') . $dt['photo_slider'] ?>">
                                            </td>
                                            <td><?= $dt['kt_slider'] ?></td>
                                            <td><?= $dt['judul_slider'] ?></td> 
                                            <td><?= $dt['desc_slider'] ?></td> 
                                            <th><span><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapusSlider<?= $dt['id_slider'] ?>">Hapus</a>
                                                <?php if ($dt['aktifkan']==1) {
                                                 ?>
                                                 <a href="#" style="margin-top: 5px" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#tampilkanSlider<?= $dt['id_slider'] ?>">Sembunyikan</a>
                                             <?php } else { ?>
                                                <a href="#" style="margin-top: 5px" class="btn btn-success btn-xs" data-toggle="modal" data-target="#tampilkanSlider<?= $dt['id_slider'] ?>">Tampilkan</a>
                                            <?php } ?>
                                        </span>
                                    </th>
                                </tr>


                                <div class="modal fade" id="tampilkanSlider<?= $dt['id_slider'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tampilkan Slider</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <form action="<?= site_url('admin/slider/aktifkan') ?>" method="post" enctype="multipart/form-data">
                                      <div class="modal-body">
                                          <div class="form-group row">
                                            <input type="hidden" name="id" value="<?= $dt['id_slider'] ?>">
                                            <div class="col-sm">
                                             <img style="width: 100%;" src="<?= base_url('assets/mockup/core/img/slider/') . $dt['photo_slider'] ?>">
                                         </div>
                                     </div>


                                     <div class="form-check-inline">
                                      <label class="form-check-label" for="radio1">
                                        <input type="radio" class="form-check-input" id="radio1" name="aktifslider" value="0" checked>Sembunyikan
                                    </label>
                                </div>
                                <div class="form-check-inline">

                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="aktifslider" value="1">Tampilkan
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="hapusSlider<?= $dt['id_slider'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="<?= site_url('admin/slider/hapus') ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                  <div class="form-group row">
                    <input type="hidden" name="id" value="<?= $dt['id_slider'] ?>">
                    <input type="hidden" name="filephoto" value="<?= $dt['photo_slider'] ?>">
                    <div class="col-sm">
                     <img style="width: 100%;" src="<?= base_url('assets/mockup/core/img/slider/') . $dt['photo_slider'] ?>">
                 </div>

             </div>
             <div class="form-group row">
                 <div class="col-sm text-center">
                     Anda Yakin Ingin Menghapus Slider Ini??
                 </div>
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
<div class="modal fade" id="tambahSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <form action="<?= site_url('admin/slider/add') ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Gambar</label>
            <div class="col-sm-8">
                <input type="file" class="form-control-file" name="xfile">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Kategori</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Masukan Kategori" name="kategori">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Judul</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" placeholder="Masukan Judul" name="judul">
      </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Deskripsi</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="3" name="deskripsi"></textarea>
  </div>
</div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
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
        'searching': false,
        'ordering': false
    });
</script>