<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<?php 
  $servicePage = 'service';
  $activePage = 'Remote Infrastructure'; 
?>
<style>
  @media(max-width: 767px) {
     .service_2 .main_propery .col-lg-4 {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .service7_img{
      padding-top: 0rem;padding-left:0rem;
    }
  }
  .service7_img{
      padding-top: 3rem;padding-left:2rem;
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
              <h1 class="title-single">Remote Infrastructure</h1>
              <span class="color-text-a">Enterprise-grade remote Infrastructure services!</span>
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
                Tricky Network Solutions
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
                  <img src="assets/img/services/services_5.jpg" class="property-slider-image" alt="">
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
                      <i class="bi bi-building-fill-gear"></i>
                    </div>
                  </div>
                 
                </div> -->
                <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4 service7_img" >
                        <img src="assets/img/services/service_3_sub_2.jpg" class="img-fluid rounded" alt="cloud_services"/>
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
                  As the IT landscape for businesses evolves, it’s becoming increasingly difficult to manage IT infrastructure from a financial point of view. On the contrary, it’s critical to have a robust IT infrastructure to stay relevant in the current business scenario. 
                  </p>
                </div>
              </div>
              <p class="description">
                  The dependency of Companies on IT is rising with each passing day. As the businesses around the globe are opting for Cloud-based systems, it’s vital to have a remote infrastructure to manage the highly complex IT services. With more sophisticated IT infrastructure comes the higher operating cost.  
                  </p>
                  <br/>
              <p class="description mt-1">
                  To target this issue, we offer stringent Remote Infrastructure that eliminates the need for physical IT system. We help you empower your business by managing multiple networks and servers via a secured remote desktop connection. Our Remote Solutions are designed to deliver unmatched holistic services trimmed for your business at an attractive price. With our dependable system in place, you will be able to divert your work-force and capital towards the more rewarding aspect of your business. 
                  </p>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d offering-title">
                    <h3 class="title-d">What services do we offer?</h3>
                  </div>
                </div>
              </div>

              <ul class="nav nav-pills-a nav-pills mb-3 section-t3 offering" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Network Monitoring and management</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Firewall & VPN management</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Application performance and management</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="row gy-4">
                          <div class="col-lg-12 order-2 order-lg-1">
                              <p>
                              Our dedicated Network monitoring services will detect and inform you about any network breakdown so you can reduce your downtime preventing massive losses. Our systems will deliver top-notch customer satisfaction.
                              </p>
                          </div>
                    </div>
                </div>

                <div class="tab-pane fade mt-2" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                  <!-- <img src="assets/img/plan2.jpg" alt="" class="img-fluid"> -->
                  <div class="row gy-4">
                        <div class="col-lg-12 order-2 order-lg-1">
                            <p>
                            Our tailored Fire-wall Solutions will help you protect your mission-critical data and classified information from threats that are lurking around. Our services will ensure smooth and secure communication and data exchange between remote locations.
                            </p>
                        </div>

                  </div>
                </div>

                <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                  <div class="row gy-4">
                      <div class="col-lg-12 order-2 order-lg-1">
                          <p>
                          With our customer-centric approach, we will ensure that your applications do not encounter any glitches and run smoothly. Our services will help you manage your customer relations more efficiently.
                          </p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
              <div class="title-box-d offering-title mt-5">
                <h3 class="title-d">Benefits of our tailored Remote Infrastructure</h3>
              </div>
             <span class="color-text-a">  <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Reduced capital expenses
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Increased revenue and profitability.
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Multi-vender and Multi-technology support.
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i> Flexible client-server architecture ensures global scalability.
                              </p>
                              <p>
                                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Central data repository for billing accounting and management.
                              </p></span>
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