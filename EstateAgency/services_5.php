<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<?php 
  $servicePage = 'service';
  $activePage = 'IT Facility Management'; 
?>
<style>
  @media(max-width: 991.5px) {
     .service_2 .main_propery .col-lg-4 {
        margin-top: 10px;
        margin-bottom: 10px;
    }
  }
</style>
<body>
  <?php include('navbar.php'); ?>
   
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">IT Facility management</h1>
              <span class="color-text-a">Full-stack IT Facility management services for your business!</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Services</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                IT Facility management
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b service_2">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-10 mb-3 property-slider">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/services/networking_image.webp" class="property-slider-image" alt="">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row main_propery">
          <div class="col-sm-12">
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <!-- <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <i class="bi bi-laptop-fill"></i>
                    </div>
                  </div>
                </div> -->
                <div class="property-summary">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4" style="padding-top: 2rem;padding-left:1rem">
                      <img src="assets/img/services/service_2_sub_1 (2).jpg" class="img-fluid rounded" alt="cloud_services"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-8 section-md-t3 mt-5">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">How can we help?</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                  We offer tailored IT management services for every vertical in the market. We can fine-tune our services as per your business requirements, no matter how big or small you are. We can provide you with technically superior and dedicated IT experts to manage your business with an unmatched proficiency. Our experts are well-trained in every aspect of the IT industry to deliver you 100% customer satisfaction. 
                  </p>
                </div>
              </div>
              <p class="description">
                  Our experts will help you manage your IT infrastructure most efficiently. We will focus on helping you improve your business efficiency for better growth. 
                  </p>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d offering-title">
                    <h3 class="title-d">Benefits of using our IT management services </h3>
                  </div>
                </div>
              </div>

              <div class="row gy-4">
                          <div class="col-lg-8 order-2 order-lg-1">
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We are a single source for your every hardware and software needs
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We offer result-oriented services
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Our work-force will co-ordinate efficiently with your in-house team for better results.
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Our operations and pricing are transparent; we deliver what we promise.
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We believe in growing together, and hence we build long-term relations
                              </p>

                          </div>
                          <div class="col-lg-4 order-1 order-lg-2 text-center mt-4 align-item-center justify-content-center">
                              <img src="assets/img/services/service_5.jpg" alt="" class="img-fluid">
                          </div>
              </div>
          </div>
        </div>

        <div class="row justify-content-center mt-3">
          <div class="col-lg-10 mt-5">
             <span class="color-text-a"><span class="vision font-weight-bold"> We love challenges!</span>
              Every sector of the business offers new challenges, and we love them! Our experts can provide crafted solutions for all your networking and IT-related needs ranging from installation and management of network, routers, switches and servers to efficient handling of day to day systems like laptops, desktops, printers and communication system. No matter what your needs are, we are armed to tackle it effectively!</span>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <script>
     AOS.init();
  </script>
</body>

</html>