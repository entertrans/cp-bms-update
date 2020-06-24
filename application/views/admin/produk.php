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
                                <span class="btn btn-sm btn-primary" onclick="addData()">Tambah Data</span>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- search -->
                            <div class="row">
                                <form class="form-horizontal col-md-4" method="post" action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Cari nama produk" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                                        <th width="13%">Foto Produk</th>
                                        <th width="30%">Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Detail Harga</th>
                                        <th class="text-center">Pengaturan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($produk->result_array() as $prod) :
                                        $foto = str_replace('.mp4', '.jpg', $prod['video']);
                                        $harga = $this->db->get_where('tbl_produk_harga', ['id_prod' => $prod['id']])->result_array(); ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <img style="cursor: pointer;" class="img-fluid img-thumbnail" src="<?= base_url('assets/mockup/core/img/produk/' . $foto) ?>" alt="<?= $prod['nm_produk'] ?>" data-id="<?= $prod['id'] ?>" data-video="<?= $prod['video'] ?>">
                                            </td>
                                            <td>
                                                <?= $prod['nm_produk'] ?>
                                                <div class="dropdown-divider"></div>
                                                <?= $prod['deskripsi'] ?>
                                            </td>
                                            <td><?= $prod['nm_desc'] ?></td>
                                            <td>
                                                <?php foreach ($harga as $hrg) {
                                                    echo '<p>Rp ' . number_format($hrg['harga'], 0, ',', '.') . ' / ' . $hrg['satuan'] . '</p>';
                                                } ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= site_url('admin/produk/media/' . $prod['id']) ?>" class="btn btn-info btn-xs">Media</a>
                                                <a href="<?= site_url('admin/produk/harga/' . $prod['id']) ?>" class="btn btn-warning btn-xs">Harga</a>
                                            </td>
                                            <td class="text-center">
                                                <p class="btn btn-success btn-xs" onclick="editProduk('<?= $prod['id'] ?>')" style="cursor: pointer;">Ubah</p>
                                                <p class="btn btn-danger btn-xs" onclick="removeProduk('<?= $prod['id'] ?>')" style="cursor: pointer;">Hapus</p>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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

<!-- Modal detail foto -->
<div class="modal fade in" id="photoModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col md-12">
                        <div class="display"></div>
                    </div>
                </div>
                <div class="row grid"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="addModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_produk" autocomplete="off">
                    <input type="hidden" class="form-control" name="id_produk" id="id_produk">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nm_produk" id="nm_produk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="kategori" id="kategori">
                                <?php $list = $this->db->get('tbl_produk_kategori')->result_array();
                                foreach ($list as $li) : ?>
                                    <option value="<?= $li['id_desc'] ?>"><?= $li['nm_desc'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea>
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

        $('img').on('click', function() {
            var id = $(this).data('id');
            var video = $(this).data('video');

            $('#photoModal').modal('show');
            $('.modal-title').text($(this).attr('alt'));

            $.ajax({
                url: "<?= site_url('admin/produk/get_foto/') ?>" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += `<div class="col-md-2"><img class="img-fluid img-thumbnail" id="img-list" src="../assets/mockup/core/img/produk/` + data[i].nm_foto + `" data-foto="` + data[i].nm_foto + `" data-video="` + video + `" style="height: 100px; width: 100%; cursor: pointer;"></div>`;
                    }

                    $('.display').html('<img src="../assets/mockup/core/img/produk/' + data[0].nm_foto + '" style="height: 380px; width: 100%">')
                    $('.grid').html(html);
                }
            });
        });

        $('.modal-body').on('click', '#img-list', function() {
            var foto = $(this).data('foto');
            var video = $(this).data('video');;
            var fotoname = foto.split('.');
            var videoname = video.split('.');

            $.ajax({
                url: "<?= base_url('assets/mockup/core/video/') ?>" + video,
                type: "HEAD",
                success: function() {
                    if (fotoname[0] == videoname[0]) {
                        $('.display').html(`<div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= base_url('assets/mockup/core/video/') ?>` + video + `" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>`);
                    } else {
                        $('.display').html(`<img src="<?= base_url('assets/mockup/core/img/produk/') ?>` + foto + `" style="height: 380px; width: 100%">`);
                    }
                },
                error: function() {
                    $('.display').html(`<img src="<?= base_url('assets/mockup/core/img/produk/') ?>` + foto + `" style="height: 380px; width: 100%">`);
                }
            });
        });
    });

    function addData() {
        method = 'add';
        $('#addModal').modal('show');
        $('#form_produk')[0].reset();
    }

    function editProduk(id) {
        method = 'update';
        $('#addModal').modal('show');
        $('#form_produk')[0].reset();

        $.ajax({
            url: "<?= site_url('admin/produk/edit/') ?>" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('[name="id_produk"]').val(data.id);
                $('[name="nm_produk"]').val(data.nm_produk);
                $('[name="kategori"]').val(data.id_prod_kategori);
                $('[name="deskripsi"]').val(data.deskripsi);
            }
        });
    }

    function save() {
        var url = '';
        if (method == 'add') url = "<?= site_url('admin/produk/add') ?>";
        else url = "<?= site_url('admin/produk/update') ?>";

        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: $('#form_produk').serialize(),
            success: function(data) {
                if (data.status == true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Produk berhasil disimpan',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        location.reload();
                    })
                }
            }
        });
    }

    function removeProduk(id) {
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
                    url: "<?= site_url('admin/produk/delete/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Produk berhasil dihapus',
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