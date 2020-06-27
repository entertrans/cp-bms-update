<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT Bintang Muria Sejati | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/adminlte.min.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>

<body class="hold-transition login-page">
    <h4 class="text-center">
        <img class="rounded-circle m-2" style="width: 50px" src="<?= base_url('assets/mockup/core/img/logo.jpeg') ?>">
        PT Bintang Muara Sejati
    </h4>

    <div class="login-box">
        <!-- Material form login -->
        <div class="card">
            <!--Card content-->
            <div class="card-body px-lg-6">
                <?php if (!empty($this->session->flashdata('msg'))) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('admin/login/auth') ?>" method="post">
                    <div class="input-group input-group-md mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>

                    <div class="input-group input-group-md mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <!-- Remember me -->
                    <!-- <div class="d-flex justify-content-around">
                        <div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                    </div> -->

                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                    <!-- Social login -->
                    <p class="text-center">copyright &copy; <?= date('Y'); ?> - All Right Reserved</p>
                    <!-- <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-github"></i>
                    </a> -->

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form login -->

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/tether.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/headroom.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/smooth-scroll.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/venobox.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/slick.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/waypoints.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/odometer.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/vendor/wow.min.js"></script>
        <script src="<?= base_url() ?>assets/mockup/core/js/main.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
</body>

</html>