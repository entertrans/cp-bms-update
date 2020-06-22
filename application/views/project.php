        <section class="page-header padding">
        	<div class="container">
        		<div class="page-content text-center">
        			<h2>DOKUMENTASI</h2>
        			<p>ini adalah Beberapa Project yang telah selesai</p>
        		</div>
        	</div>
        </section>
        <style>
          .modal-footer{
            padding-top: 0px;
          }
          .modal-content{
            margin-top: 50px;
          }
        </style>
        <section class="projects-section padding">
         <div class="container">

          <div class="row">
            <?php foreach ($dokumentasi as $dt) {
             ?>
             <div class="col-lg-4 col-sm-6 padding-15 dokBox moreBox" style="display: none;">
              <div class="project-item">
                <div class="col-md">
                  <div class="row">
                    <!-- src="<?= base_url('assets/mockup/core/img/slider/') . $dt['photo_slider'] ?>" -->
                    <!-- <?= base_url('assets/mockup/core/img/dokumentasi/') . $dt['photo_dok'] ?> -->
                    <a href="<?= base_url('assets/mockup/core/img/dokumentasi/') . $dt['photo_dok'] ?>" data-toggle="lightbox" data-title="<?= $dt['pr_title'] ?>" data-footer="<?= $dt['pr_desc'] ?>">
                      <img style="background-image: url(<?= base_url('assets/mockup/core/img/dokumentasi/') . $dt['photo_dok'] ?>);background-size: cover;
                      background-repeat: no-repeat;
                      background-position: center;" src="<?= base_url('assets/mockup/core/img/frame-kosong.png')  ?>" class="img-fluid" alt="projects">
                    </a>
                  </div>
                </div>
                <div class="projects-content">
                  <a href="#" class="category">Project PT.abc</a>
                  <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="section-heading text-center mt-40 wow fadeInUp" data-wow-delay="100ms">
        <button id="loadMore" type="button" class="btn btn-outline-primary btn-lg">View More</button>
      </div>
    </section>
    <?php $this->load->view('mockup/layout/core/js'); ?>

    <script>
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();

      });
    </script>
    <script>
      $( document ).ready(function () {
        $(".moreBox").slice(0, 6).show();
        if ($(".dokBox:hidden").length != 0) {
          $("#loadMore").show();
        }   
        $("#loadMore").on('click', function (e) {
          e.preventDefault();
          $(".moreBox:hidden").slice(0, 6).slideDown();
          if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
          }
        });
      });
    </script>

    <!-- backup -->
<!-- <div class="col-lg-4 col-sm-6 padding-15">
        <div class="project-item">
         <img src="<?= base_url('assets/mockup/core/img/project-3.jpg') ?>" alt="projects">
         <div class="overlay"></div>
         <a href="<?= base_url('assets/mockup/core/img/project-3.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
         <div class="projects-content">
          <a href="#" class="category">Project PT.abc</a>
          <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
        </div>
      </div>
    </div> -->