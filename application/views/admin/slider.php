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

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="15%">Slider</th>
                                        <th width="50%">Judul</th>
                                        <th>Kategori</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($slider as $dt) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td width="100px">
                                                <img class="img-fluid img-thumbnail" src="<?= base_url('assets/mockup/core/img/slider/') . $dt['photo_slider'] ?>">
                                            </td>
                                            <td>
                                                <?= $dt['judul_slider'] ?>
                                                <div class="dropdown-divider"></div>
                                                <span><?= $dt['desc_slider'] ?></span>
                                            </td>
                                            <td><?= $dt['kt_slider'] ?></td>
                                            <td class="text-center">
                                                <?php if ($dt['aktifkan'] == 1) : ?>
                                                    <p class="btn btn-warning btn-xs opsiSlide" data-id="<?= $dt['id_slider'] ?>" style="cursor: pointer;">Sembunyikan</p>
                                                <?php else : ?>
                                                    <p class="btn btn-info btn-xs opsiSlide" data-id="<?= $dt['id_slider'] ?>" style="cursor: pointer;">Tampilkan</p>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <p class="btn btn-danger btn-xs" onclick="removeSlide('<?= $dt['id_slider'] ?>')" style="cursor: pointer;">Hapus</p>
                                                <!-- <span><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapusSlider<?= $dt['id_slider'] ?>">Hapus</a> -->
                                                <!-- <?php if ($dt['aktifkan'] == 1) {
                                                        ?>
                                                    <a href="#" style="margin-top: 5px" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#tampilkanSlider<?= $dt['id_slider'] ?>">Sembunyikan</a>
                                                <?php } else { ?>
                                                    <a href="#" style="margin-top: 5px" class="btn btn-success btn-xs" data-toggle="modal" data-target="#tampilkanSlider<?= $dt['id_slider'] ?>">Tampilkan</a>
                                                <?php } ?> -->
                                            </td>
                                        </tr>

                                        <!-- <div class="modal fade" id="hapusSlider<?= $dt['id_slider'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        </div> -->
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
        'searching': true,
        'ordering': false
    });

    function removeSlide(id) {
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
                    url: "<?= site_url('admin/slider/hapus/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Slider berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Slider tidak bisa dihapus',
                                text: 'Minimal harus ada 1 slider pada tabel',
                                showConfirmButton: true
                            })
                        }
                    }
                });
            }
        })
    }

    $('.opsiSlide').on('click', function() {
        var opsi = 0; // sembunyikan
        var id = $(this).data('id');
        var text = $(this).text();
        if (text == 'Tampilkan') opsi = 1; // tampilkan

        Swal.fire({
            icon: 'question',
            title: $(this).text() + ' slider ini?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tentu Saja',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?= site_url('admin/slider/aktifkan/') ?>" + id + "/" + opsi,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Slider berhasil di' + text.toString().toLowerCase(),
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Slider tidak bisa di' + text.toString().toLowerCase(),
                                text: 'Minimal harus ada 1 slider yang ditampilkan',
                                showConfirmButton: true
                            })
                        }
                    }
                });
            }
        })
    });
</script>