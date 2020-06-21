<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Service</h2>
            <p>[berisideskripsi singkat tentang apa yang dijual]</p>
        </div>
    </div>
</section>

<section class="blog-section padding">
    <ul class="nav nav-pills nav-tabs mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-material-tab" data-toggle="pill" href="#pills-material" role="tab" aria-controls="pills-material" aria-selected="true">
                <h3>Material</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-jasa-tab" data-toggle="pill" href="#pills-jasa" role="tab" aria-controls="pills-jasa" aria-selected="false">
                <h3>Jasa Konstruksi</h3>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-material" role="tabpanel" aria-labelledby="pills-material-tab">

            <!-- material -->
            <section class="blog-section padding">
                <div class="container">
                    <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">

                        <!-- <span>From Blog</span> -->
                    </div>
                    <div class="row blog-wrap">
                        <?php $qry = "select * from tbl_produk a inner join (select * from tbl_produk_foto group by id_produk) b on a.id = b.id_produk where a.id_prod_kategori = 1 limit 3";
                        // $this->db->select('*')->from('tbl_produk a')->join('tbl_produk_foto b', 'a.id = b.id_produk', 'left')->where(['a.id_prod_kategori' => 1]);
                        $data = $this->db->query($qry)->result_array();
                        foreach ($data as $dt) : ?>
                            <div class="col-lg-4 col-sm-6 sm-padding">
                                <div class="blog-item box-shadow">
                                    <div class="blog-thumb">
                                        <img src="<?= base_url('assets/mockup/core/img/border.png') ?>" alt="<?= $dt['nm_produk'] ?>" style=" width: 400px; height: 250px;background-image: url(<?= base_url('assets/mockup/core/img/produk/') . $dt['nm_foto'] ?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                        <div class="middle">
                                            <div class="btn btn-outline-primary btn-lg view" data-id="<?= $dt['id'] ?>"><i class="fa fa-fw fa-eye"></i></div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h3><?= $dt['nm_produk'] ?></h3>
                                        <p>[deskripsi-singkat]</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-heading text-center mt-40 wow fadeInUp" data-wow-delay="100ms">
                        <button type="button" class="btn btn-outline-primary btn-lg">View More</button>
                    </div>
                </div>
            </section>
            <!-- ./material -->

        </div>
        <div class="tab-pane fade" id="pills-jasa" role="tabpanel" aria-labelledby="pills-jasa-tab">

            <!-- jasa konstruksi -->
            <section class="blog-section padding">
                <div class="container">
                    <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
                        <!-- <span>From Blog</span> -->
                    </div>
                    <div class="row blog-wrap">
                        <?php $qry = "select * from tbl_produk a inner join (select * from tbl_produk_foto group by id_produk) b on a.id = b.id_produk where a.id_prod_kategori = 2 limit 3";
                        // $this->db->select('*')->from('tbl_produk a')->join('tbl_produk_foto b', 'a.id = b.id_produk', 'left')->where(['a.id_prod_kategori' => 2]);
                        $data = $this->db->query($qry)->result_array();
                        foreach ($data as $dt) : ?>
                            <div class="col-lg-4 col-sm-6 sm-padding">
                                <div class="blog-item box-shadow">
                                    <div class="blog-thumb">
                                        <!-- <?= base_url('assets/mockup/core/img/produk/') . $dt['video'] ?>" alt="<?= $dt['nm_produk'] ?> -->
                                        <img src="<?= base_url('assets/mockup/core/img/border.png') ?>" style="width: 400px; height: 250px;background-image: url(<?= base_url('assets/mockup/core/img/produk/') . $dt['nm_foto'] ?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
                                        <div class="middle">
                                            <div class="btn btn-outline-primary btn-lg view" data-id="<?= $dt['id'] ?>"><i class="fa fa-fw fa-eye"></i></div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h3><?= $dt['nm_produk'] ?></h3>
                                        <p>[deskripsi-singkat]</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-heading text-center mt-40 wow fadeInUp" data-wow-delay="100ms">
                        <button type="button" class="btn btn-outline-primary btn-lg">View More</button>
                    </div>
                </div>
            </section>
            <!-- ./jasa konstruksi -->

        </div>
    </div>
</section>


<!-- The Modal -->
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-md-4">
                        <div id="imgWarp"></div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="title"></h3>
                        <h5 class="harga"></h5>
                        <p class="desc"></p>
                        <h5>Pilihan</h5>
                        <form id="formOrder">
                            <div class="row">
                                <input type="hidden" id="idService">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="qty" id="qty">
                                    </div>
                                </div>
                                <label class="col-sm-1 col-form-label pl-0">Qty</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control" id="satuan"></select>
                                    </div>
                                </div>
                                <label class="col-sm-1 col-form-label pl-0">Satuan</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" onclick="cart()" class="fa fa-fw fa-shopping-cart"></i> Add to Cart</button>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
    $('.view').on('click', function() {
        var id = $(this).data('id');
        $('#myModal').modal('show');
        $.ajax({
            url: "<?= site_url('welcome/find/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var produk = data.produk;
                var satuan = data.satuan;
                var imgUrl = "assets/mockup/core/img/produk/" + produk.video
                var css = {
                    'height': '200px',
                    'background-image': 'url(' + imgUrl + ')',
                    'background-position': 'center',
                    'background-repeat': 'no-repeat',
                    'background-size': 'cover'
                }

                // $('.modal-title').text(data.nm_produk);
                $('#imgWarp').css(css);
                $('#idService').val(produk.id);
                $('.title').text(produk.nm_produk);
                // $('.harga').text('Rp. -');
                var text = '';
                for (var i = 0; i < satuan.length; i++) {
                    text += satuan[i].satuan + ' - Rp. ' + numberFormat(satuan[i].harga) + '<br>';
                }
                $('.desc').html('<p>Desc ' + produk.nm_produk + '<br>' + text + '</p>');

                var html = '';
                for (var i = 0; i < satuan.length; i++) {
                    html += '<option value="' + satuan[i].harga + '">' + satuan[i].satuan + '</option>';
                }
                $('#satuan').html(html);
            }
        });
    });

    function numberFormat(bilangan) {
        reverse = bilangan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    // function cartRemove(id) {
    //     $.ajax({
    //         url: "<?= site_url('checkout/hapus_cart/') ?>" + id,
    //         type: "POST",
    //         dataType: "JSON",
    //         data: {
    //             row_id: id
    //         },
    //         success: function(data) {
    //             location.reload();
    //         }
    //     });
    // }

    function cart() {
        var id = $('#idService').val();
        var name = $('.title').text();
        var harga = $('#satuan').val();
        var satuan = $('#satuan option:selected').text();
        var qty = $('#qty').val();

        if (qty < 1) {
            alert('Harap masukan jumlah Qty');
            return;
        } else {
            var data = {
                'id': id,
                'qty': qty,
                'name': name,
                'harga': harga,
                'satuan': satuan
            };
        }
        // console.log(data);

        $.ajax({
            url: "<?= site_url('welcome/order') ?>",
            type: "POST",
            dataType: "JSON",
            data: data,
            success: function(data) {
                if (data.status) {
                    alert('Data berhasil ditambahkan ke keranjang');
                    $('#myModal').modal('hide');
                    $('#formOrder')[0].reset();
                    location.reload();

                } else {
                    alert('Data tidak berhasil ditambahkan ke keranjang');
                }
            }
        });
    }
</script>