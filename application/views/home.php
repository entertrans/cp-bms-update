<!-- Slider -->
<div id="main-slider" class="dl-slider">
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(<?= base_url('assets/mockup/core/img/slider-1.jpg') ?>);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">We provide outstanding</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">construction services.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="#" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(<?= base_url('assets/mockup/core/img/slider-2.jpg') ?>);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-top" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2s">We are professional</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2.5s">for building construction.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="#" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(<?= base_url('assets/mockup/core/img/slider-3.jpg') ?>);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-right">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2s">We will be happy to take care</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2.5s">of your construction works.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="#" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./slider -->

<!-- material -->
<section class="blog-section padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
            <!-- <span>From Blog</span> -->
            <h2>Material</h2>
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
            <button type="button" class="btn btn-outline-primary btn-lg"><a href="<?= site_url('service') ?>">View More</a></button>
        </div>
    </div>
</section>
<!-- ./material -->

<!-- jasa konstruksi -->
<section class="blog-section padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
            <!-- <span>From Blog</span> -->
            <h2>Jasa Konstruksi</h2>
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
            <button type="button" class="btn btn-outline-primary btn-lg"><a href="<?= site_url('service') ?>">View More</a></button>
        </div>
    </div>
</section>
<!-- ./jasa konstruksi -->

<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
    $('.view').on('click', function() {
        var id = $(this).data('id');
        window.location.href = "<?= site_url('detail/view/') ?>" + id;
    });

    // $('.hapus_cart').on('click', function() {
    //     var row_id = $(this).attr('id');
    //     $.ajax({
    //         url: "<?= site_url('checkout/hapus_cart/') ?>" + row_id,
    //         type: "POST",
    //         dataType: "JSON",
    //         data: {
    //             row_id: row_id
    //         },
    //         success: function(data) {
    //             location.reload();
    //         }
    //     });
    // });

    // $('#myModal').on('click', '#calc', function() {
    //     var id = $('#idService').val();
    //     var harga = $(this).val();
    //     var qty = $('#qty').val();
    //     var calc = harga * qty;

    //     $('.harga').text('Rp. ' + calc);

    //     var data = {
    //         'id': id,
    //         'qty': qty,
    //         'harga': harga,
    //         'total': calc
    //     };

    //     $('#cart').on('click', function() {
    //         cart(data);
    //     });
    // });

    function numberFormat(bilangan) {
        reverse = bilangan.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    function cartRemove(id) {
        $.ajax({
            url: "<?= site_url('checkout/hapus_cart/') ?>" + id,
            type: "POST",
            dataType: "JSON",
            data: {
                row_id: id
            },
            success: function(data) {
                location.reload();
            }
        });
    }

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