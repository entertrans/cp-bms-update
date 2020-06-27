<style>
    .page-header{
        background-image: url(<?= base_url('assets/mockup/core/img/service.jpg') ?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
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
                    <div class="row blog-wrap material">
                        <?php $qry = "select * from tbl_produk a inner join (select * from tbl_produk_foto group by id_produk) b on a.id = b.id_produk where a.id_prod_kategori = 1 limit 3";
                        $data = $this->db->query($qry)->result_array();
                        foreach ($data as $dt) : ?>
                            <div class="col-lg-4 col-sm-6 sm-padding pb-4">
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
                        <button type="button" class="btn btn-outline-primary btn-lg" onclick="ctr_material()">View More</button>
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
                    <div class="row blog-wrap konstruksi">
                        <?php $qry = "select * from tbl_produk a inner join (select * from tbl_produk_foto group by id_produk) b on a.id = b.id_produk where a.id_prod_kategori = 2 limit 3";
                        $data = $this->db->query($qry)->result_array();
                        foreach ($data as $dt) : ?>
                            <div class="col-lg-4 col-sm-6 sm-padding pb-4">
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
                        <button type="button" class="btn btn-outline-primary btn-lg" onclick="ctr_kontruksi()">View More</button>
                    </div>
                </div>
            </section>
            <!-- ./jasa konstruksi -->

        </div>
    </div>
</section>

<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
    $('.blog-wrap').on('click', '.view', function() {
        var id = $(this).data('id');
        window.location.href = "<?= site_url('detail/view/') ?>" + id;
    });

    var count_material = 1;
    var count_kontruksi = 1;

    function ctr_material() {
        count_material = count_material + 1;

        $.ajax({
            url: "<?= site_url('service/list_produk/1/') ?>" + count_material * 3,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += `<div class="col-lg-4 col-sm-6 sm-padding pb-4">
                    <div class="blog-item box-shadow">
                    <div class="blog-thumb">
                    <img src="<?= base_url('assets/mockup/core/img/border.png') ?>" alt="` + data[i].nm_produk + `" style=" width: 400px; height: 250px;background-image: url(<?= base_url('assets/mockup/core/img/produk/') ?>` + data[i].nm_foto + `);background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="middle">
                    <div class="btn btn-outline-primary btn-lg view" data-id="` + data[i].id + `"><i class="fa fa-fw fa-eye"></i></div>
                    </div>
                    </div>
                    <div class="blog-content">
                    <h3>` + data[i].nm_produk + `</h3>
                    <p>[deskripsi-singkat]</p>
                    </div>
                    </div>
                    </div>`;
                }

                $('.material').html(html);
            }
        });
    }

    function ctr_kontruksi() {
        count_kontruksi = count_kontruksi + 1;

        $.ajax({
            url: "<?= site_url('service/list_produk/2/') ?>" + count_kontruksi * 3,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += `<div class="col-lg-4 col-sm-6 sm-padding pb-4">
                    <div class="blog-item box-shadow">
                    <div class="blog-thumb">
                    <img src="<?= base_url('assets/mockup/core/img/border.png') ?>" alt="` + data[i].nm_produk + `" style=" width: 400px; height: 250px;background-image: url(<?= base_url('assets/mockup/core/img/produk/') ?>` + data[i].nm_foto + `);background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="middle">
                    <div class="btn btn-outline-primary btn-lg view" data-id="` + data[i].id + `"><i class="fa fa-fw fa-eye"></i></div>
                    </div>
                    </div>
                    <div class="blog-content">
                    <h3>` + data[i].nm_produk + `</h3>
                    <p>[deskripsi-singkat]</p>
                    </div>
                    </div>
                    </div>`;
                }

                $('.konstruksi').html(html);
            }
        });
    }
</script>