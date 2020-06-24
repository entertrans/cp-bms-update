<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.4
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<!-- <script src="<?= base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script> -->
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="<?= base_url('assets/admin/dist/js/demo.js') ?>"></script> -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/jquery-mapael/maps/usa_states.min.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/admin/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/admin/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- PAGE SCRIPTS -->
<?php if ($this->uri->segment(2) == 'beranda') { ?>
    <script src="<?= base_url('assets/admin/dist/js/pages/dashboard2.js') ?>"></script>
<?php } ?>

<?php
$menu = $this->uri->segment(2);
$submenu = $this->uri->segment(3);

// if ($submenu != '') {
//     echo "<script>$('#setting').parents().addClass('menu-open')</script>";
//     echo "<script>$('#setting').addClass('active')</script>";
//     echo "<script>$('#" . strtolower($submenu) . "').addClass('active')</script>";
// } else {
//     echo "<script>$('#" . strtolower($menu) . "').addClass('active')</script>";
// }

echo "<script>$('#" . strtolower($menu) . "').addClass('active')</script>";
?>

</body>

</html>