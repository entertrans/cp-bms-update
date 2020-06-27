<section class="page-header padding">
    <!-- <div class="container">
        <div class="page-content text-center">
            <h2>Checkout form</h2>
            <p>[berisideskripsi singkat tentang apa yang dijual]</p>
        </div>
    </div> -->
</section>
<div class="container">
    <section class="blog-section padding">
        <div class="row mb-5">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>

                    <span class="badge badge-danger badge-pill"><?= count($cart) ?></span>
                </h4>
                <hr class="mb-4">
                <ul class="list-group mb-3">
                    <?php foreach ($cart as $item) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?= $item['name'] ?></h6>
                                <small class="text-muted"><?= $item['qty'] . ' ' . $item['options']['Size'] ?></small>
                            </div>
                            <span class="text-muted"><?= number_format($item['subtotal'], 0, ',', '.') ?></span>
                        </li>
                    <?php endforeach; ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (IDR)</span>
                        <strong><?= number_format($this->cart->total(), 0, ',', '.'); ?></strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Detail Pembayaran</h4>
                <hr class="mb-4">
                <div class="box"></div>
                <form id="formCheckOut" method="post" action="<?= site_url('checkout/send') ?>" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nama" id="nama" autofocus>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="no_telp">No. Telepon / HP</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Pembayaran</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="transfer" checked required>
                            <label class="custom-control-label" for="credit">Bank Transfer</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="cod" required>
                            <label class="custom-control-label" for="debit">Cash on delivery (COD)</label>
                        </div>
                    </div>
                    <div class="row" id="detailCredit">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Atas Nama</label>
                            <input type="text" class="form-control" name="cc-name" id="cc-name" value="Anonymous" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">No. Rekening</label>
                            <input type="text" class="form-control" name="cc-number" id="cc-number" value="12345xxx" readonly>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" id="submit" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </section>


</div>

<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
    $('#debit').on('click', function() {
        $('#detailCredit').css('display', 'none');
    });

    $('#credit').on('click', function() {
        $('#detailCredit').css('display', 'flex');
    });

    $('#submit').on('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Pesanan berhasil disimpan',
            text: 'Jika email tidak diterima mohon untuk konfirmasi via WA +62 091-1234-4231',
            showConfirmButton: true
        }).then(function() {
            window.location.href = "<?= base_url() ?>"
        });
    });
</script>