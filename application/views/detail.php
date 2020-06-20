<div class="jumbotron jumbotron-fluid" style="height: 400px;">
    <div class="container text-center">
        <h1 class="display-4"><?= $detail['nm_produk'] ?></h1>
    </div>
</div>

<section class="blog-section">
    <div class="container p-4">
        <div class="row" style="position: relative; top: -250px;">
            <div class="col-lg-8 col-sm-8 pb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="display">
                            <img src="<?= base_url('assets/mockup/core/img/produk/') . $foto[0]['nm_foto'] ?>" style="height: 380px">
                        </div>

                        <div class="row pt-2">
                            <?php foreach ($foto as $ft) : ?>
                                <div class="col-sm-2 pr-1">
                                    <img src="<?= base_url('assets/mockup/core/img/produk/') . $ft['nm_foto'] ?>" class="img-thumbnail" data-file="<?= $ft['nm_foto'] ?>" style="cursor: pointer;">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="row pt-5">
                            <div class="col-lg-10 col-sm-10">
                                <h4>Deskripsi</h4>
                                <p><?= $detail['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 pb-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Detail Produk</h2>
                        <?php foreach ($harga->result_array() as $hrg) : ?>
                            <div class="row">
                                <div class="col-sm">
                                    <h4><i class="fa fa-fw fa-check-circle"></i> <?= "Rp " . number_format($hrg['harga'], 0, ',', '.') . " / " . $hrg['satuan'] ?></h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <hr>
                        <form id="form_order" method="POST" autocomplete="off">
                            <input type="hidden" name="id_prod" id="id_prod" value="<?= $detail['id'] ?>">
                            <input type="hidden" name="nm_prod" id="nm_prod" value="<?= $detail['nm_produk'] ?>">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="qty_order">Qty</label>
                                    <input type="text" class="form-control" name="qty_order" id="qty_order">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="unit_order">Unit</label>
                                    <select class="form-control" name="unit_order" id="unit_order">
                                        <?php foreach ($harga->result_array() as $hrg) : ?>
                                            <option value="<?= $hrg['satuan'] ?>"><?= $hrg['satuan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="jumbotron jumbotron-fluid" style="height: 400px;">
    <div class="container text-center">
        <h1 class="display-4">Daftar Harga</h1>
    </div>
</div>

<section class="blog-section">
    <div class="container p-4">
        <div class="row justify-content-center" style="position: relative; top: -250px;">
            <?php foreach ($harga->result_array() as $li) : ?>
                <div class="col-lg-4 col-sm-4 pb-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title text-center">Per <?= $li['satuan'] ?></h3>
                            <h2 class="card-title text-center">Rp <?= number_format($li['harga'], 0, ',', '.') ?></h2>
                            <hr>
                            <h6 class="card-subtitle mb-2 text-muted">Cara Pembayaran</h6>
                            <div class="row">
                                <div class="col-sm">
                                    <i class="fa fa-fw fa-check-circle"></i> Transfer Bank
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <i class="fa fa-fw fa-check-circle"></i> Cash On Delivery
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <span class="btn btn-outline-primary" onclick="order('<?= $li['id_prod'] ?>, <?= $li['satuan'] ?>')">Pesan Sekarang</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<!-- Modal -->
<!-- <div class="modal fade in" id="modalImage" tabindex="-1" role="dialog" aria-labelledby="modalImageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div> -->

<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
    $("#form_order").submit(function(e) {
        e.preventDefault();
        // console.log($(this).serialize());

        $.ajax({
            url: "<?= site_url('service/order') ?>",
            type: $(this).attr('method'),
            dataType: "JSON",
            data: $(this).serialize(),
            success: function(result) {
                if (result.status == true) {
                    swal({
                            title: "Pesanan berhasil disimpan",
                            text: "Apakah anda ingin melanjutkan belaja lagi?",
                            icon: "success",
                            buttons: {
                                cancel: "Tidak",
                                confirm: "Tentu Saja",
                            },
                            dangerMode: false,
                        })
                        .then((isConfirm) => {
                            if (isConfirm) {
                                window.location.href = '<?= base_url() ?>';
                            } else {
                                $('#form_order')[0].reset();
                            }
                        });
                } else {
                    swal("Kesalahan!", "Qty produk belum ditambahkan", "error");
                }
            }
        });
    });

    $('img').on('click', function() {
        var file = $(this).data('file');
        var video = "<?= $detail['video'] ?>";
        var filename = file.split('.');
        var videoname = video.split('.');

        $.ajax({
            url: "<?= base_url('assets/mockup/core/video/') ?>" + video,
            type: "HEAD",
            success: function() {
                if (filename[0] == videoname[0]) {
                    $('.display').html(`<div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="<?= base_url('assets/mockup/core/video/') ?>` + video + `" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>`);
                } else {
                    $('.display').html(`<img src="<?= base_url('assets/mockup/core/img/produk/') ?>` + file + `" style="height: 380px">`);
                }
            },
            error: function() {
                $('.display').html(`<img src="<?= base_url('assets/mockup/core/img/produk/') ?>` + file + `" style="height: 380px">`);
            }
        });
    });
</script>