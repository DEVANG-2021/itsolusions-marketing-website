<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<?php 
  $servicePage = 'service';
  $activePage = 'Hardware on Demand'; 
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
              <h1 class="title-single">Hardware On Demand</h1>
              <span class="color-text-a">One-stop-shop for your every Computer Hardware need!</span>
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
                Hardware on Demand
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b section_2">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-10 mb-3 property-slider">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/services/service_2_sub_1 (1).jpg" class="property-slider-image" alt="">
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
                      <i class="bi bi-motherboard-fill"></i>
                    </div>
                  </div>
                </div> -->
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4 service4_img" >
                      <img src="assets/img/services/service_4_sub.jpg" class="img-fluid rounded " alt="cloud_services"/>
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
                  No enterprise can operate effectively without robust Computer hardware. Selecting a dependable computer hardware supplier is a challenging task in the market. With computer hardware suppliers dotting every nook and corner of the streets, it’s a tough call to take!
                  </p>
                 
                </div>
              </div>
              <p class="description">
                  We offer everything from LCDs, LEDs, CPU cabinets, Desktops, Laptops, Printers, Routers, Switches, Servers and every other peripheral device you can think of. Along with hardware supply, we offer installation and management of the same for your smooth business operations. 
                  </p>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d offering-title">
                    <h3 class="title-d">Why choose us? </h3>
                  </div>
                </div>
              </div>

              <div class="row gy-4">
                  <div class="col-lg-12 order-2 order-lg-1">
                      <p>
                        <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We offer full-stack services.
                      </p>
                      <p>
                        <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We have technicians with thorough experience in installing and managing a variety of Computer and Networking hardware.
                      </p>
                      <p>
                        <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>We offer prompt technical support for issues.
                      </p>
                      <p>
                        <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i> We follow the changing digital trend and provide cutting-edge tools to ensure high productivity of your business
                      </p>
                      <p>
                        <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Our pricing is highly competitive as compared to the market.
                      </p>

                  </div>
                  <div class="col-lg-8 order-1 order-lg-2 text-center mt-4 align-item-center justify-content-center">
                      <img src="assets/img/features/features-5.svg" alt="" class="img-fluid">
                  </div>
              </div>
          </div>
        </div>

        <div class="row justify-content-center mt-3">
          <div class="col-lg-10 mt-5">
             <span class="color-text-a"> Your <span class="vision font-weight-bold">Computer hardware supplier</span> should be readily available 24×7, should be prompt in delivering quality products and must have on-call support. The supplier should be skilled enough to understand your business needs properly and offer relevant solutions. Often, it happens that customers end up spending more on unnecessary hardware. So, it’s better to choose a well-established and hardened computer hardware supplier like us!</span>
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