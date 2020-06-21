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
<!--         <div class="projects-section padding">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <a href="<?= base_url('assets/mockup/core/img/project-1.jpg') ?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                <img src="<?= base_url('assets/mockup/core/img/project-1.jpg') ?>" class="img-fluid">
                        </a>
                </div>
        </div>
</div>
</div> -->
<section class="projects-section padding">
       <div class="container">
              <div class="row">
                    <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="project-item">
                                <div class="col-md">
                                        <div class="row">
                                                <a href="<?= base_url('assets/mockup/core/img/project-1.jpg') ?>" data-toggle="lightbox" data-title="A random title" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod">
                                                    <!-- <img src="https://unsplash.it/600.jpg?image=250" class="img-fluid"> -->
                                                    <img src="<?= base_url('assets/mockup/core/img/project-1.jpg') ?>" class="img-fluid" alt="projects">
                                            </a>
                                    </div></div>
                                    <div class="projects-content">
                                      <a href="#" class="category">Project PT.abc</a>
                                      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
                              </div>
                      </div>
              </div>
              <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="project-item">
                     <img src="<?= base_url('assets/mockup/core/img/project-2.jpg') ?>" alt="projects">
                     <div class="overlay"></div>
                     <a href="<?= base_url('assets/mockup/core/img/project-2.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
                     <div class="projects-content">
                      <a href="#" class="category">Project PT.abc</a>
                      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
              </div>
      </div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
     <img src="<?= base_url('assets/mockup/core/img/project-3.jpg') ?>" alt="projects">
     <div class="overlay"></div>
     <a href="<?= base_url('assets/mockup/core/img/project-3.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
     <div class="projects-content">
      <a href="#" class="category">Project PT.abc</a>
      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
     <img src="<?= base_url('assets/mockup/core/img/project-4.jpg') ?>" alt="projects">
     <div class="overlay"></div>
     <a href="<?= base_url('assets/mockup/core/img/project-4.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
     <div class="projects-content">
      <a href="#" class="category">Project PT.abc</a>
      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
     <img src="<?= base_url('assets/mockup/core/img/project-5.jpg') ?>" alt="projects">
     <div class="overlay"></div>
     <a href="<?= base_url('assets/mockup/core/img/project-5.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
     <div class="projects-content">
      <a href="#" class="category">Project PT.abc</a>
      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
     <img src="<?= base_url('assets/mockup/core/img/project-6.jpg') ?>" alt="projects">
     <div class="overlay"></div>
     <a href="<?= base_url('assets/mockup/core/img/project-6.jpg') ?>" class="view-icon  img-popup"> <i class="fas fa-expand"></i></a>
     <div class="projects-content">
      <a href="#" class="category">Project PT.abc</a>
      <h3><a href="#" class="tittle">Kepulauan Seribu</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="section-heading text-center mt-40 wow fadeInUp" data-wow-delay="100ms">
  <button type="button" class="btn btn-outline-primary btn-lg">View More</button>
</div>
</section>
<?php $this->load->view('mockup/layout/core/js'); ?>

<script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();

        });
</script>