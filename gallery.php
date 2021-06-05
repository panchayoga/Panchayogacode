<?php include('header.php');?>

  <main id="main">




    <section class="inner-page position-relative">
      <div class="row">
        <div class="col-md-12">
            
          <img src="img/banner-img/gallery-banner.jpg" class="img-fluid">
        </div>
      </div>
    </section>

      <div class="container">
          <div class="row">
              <div class="row">
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="img/gallery/images/2021/Gallery-Pic-01.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="img/gallery/images/2021/Gallery-Pic-01.jpg"
                               alt="Another alt text">
                      </a>
                  </div>                  

                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="img/gallery/images/2021/Gallery-Pic-03.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="img/gallery/images/2021/Gallery-Pic-03.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                         data-image="img/gallery/images/2021/Gallery-Pic-04.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="img/gallery/images/2021/Gallery-Pic-04.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                



                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="img/gallery/images/2021/Gallery-Pic-06.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="img/gallery/images/2021/Gallery-Pic-06.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="img/gallery/images/2021/Ragini_Gallery.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="img/gallery/images/2021/Ragini_Gallery.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb d-none">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                               alt="Another alt text">
                      </a>
                  </div>



                  <div class="col-lg-3 col-md-4 col-xs-6 thumb d-none">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb d-none">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb d-none">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                               alt="Another alt text">
                      </a>
                  </div>
              </div>


              <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="image-gallery-title"></h4>
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                              </button>

                              <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </main><!-- End #main -->
  <?php include('footer.php');?>