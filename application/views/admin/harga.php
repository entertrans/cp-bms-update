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
                                    <li class="breadcrumb-item active" aria-current="page">Harga</li>
                                </ol>
                            </nav>

                            <div class="card">
                                <div class="card-body">
                                    <form id="form_produk" method="post" autocomplete="off">
                                        <input type="hidden" class="form-control" name="id_prod" id="id_prod" value="<?= $produk['id'] ?>">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Produk</label>
                                            <div class="col-sm-6">
                                                <input type="text" readonly class="form-control" name="nm_produk" id="nm_produk" value="<?= $produk['nm_produk'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Satuan Produk</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="satuan_produk" id="satuan_produk">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">IDR</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="harga_produk" id="harga_produk">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-sm-6">
                                                <button class="btn btn-success" id="button" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php if ($harga->num_rows() > 0) : ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Satuan</th>
                                                            <th>Harga</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($harga->result_array() as $val) : ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><?= $val['satuan'] ?></td>
                                                                <td>Rp <?= number_format($val['harga'], 0, ',', '.') ?></td>
                                                                <td class="text-center">
                                                                    <span class="btn btn-success btn-xs" onclick="editHarga('<?= $val['id'] ?>', '<?= $val['satuan'] ?>', '<?= $val['harga'] ?>')" title="Ubah Harga"><i class="fas fa-fw fa-edit"></i></span>
                                                                    <span class="btn btn-danger btn-xs" onclick="deleteHarga('<?= $val['id'] ?>')" title="Hapus Harga"><i class="fas fa-fw fa-trash"></i></span>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    <?php endif; ?>
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
    var method = 'add';
    $(document).ready(function() {
        $('#form_produk').submit(function(e) {
            e.preventDefault();
            var url = '';

            if (method == 'add') url = "<?= site_url('admin/produk/simpan_harga') ?>";
            else url = "<?= site_url('admin/produk/ubah_harga') ?>";

            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                data: $(this).serialize(),
                success: function(data) {
                    if (data.status == true) {
                        Swal.fire({
                            title: 'Harga produk telah ' + (method == 'add' ? 'ditambah' : 'diubah'),
                            text: 'Anda ingin ' + (method == 'add' ? 'menambahkan' : 'mengubah') + ' daftar harga produk lain?',
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
                                    title: 'Harga produk berhasil disimpan',
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
    });

    function editHarga(id, satuan, harga) {
        method = 'update';
        $('#id_prod').val(id);
        $('#satuan_produk').attr('readonly', true).val(satuan);
        $('#harga_produk').val(harga);
        $('#button').text('Ubah');
    }

    function deleteHarga(id) {
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
                    url: "<?= site_url('admin/produk/hapus_harga/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Harga produk berhasil dihapus',
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