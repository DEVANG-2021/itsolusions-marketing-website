<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<?php 
  $servicePage = 'service';
  $activePage = 'Data Management (NAS)'; 
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
              <h1 class="title-single">Data Management (NAS)</h1>
              <span class="color-text-a">NAS solutions that you can rely on!</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                Data Management (NAS)
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
            <div class="col-lg-10 mb-5">
              <span class="color-text-a service_intro">Data storage and access is the most critical part of any business. Without a robust data storage and acquisition system in place, no enterprise can serve its customers effectively. Inefficient customer services might lead to hefty financial losses. Small and medium scale companies are more vulnerable to such issues due to a variety of reason:</span>
              <br/>
              <p>
                <i class="bi bi-x mx-2 mt-4" style="color: red;"></i>Budget constraints.
              </p>
              <p>
                <i class="bi bi-x mx-2" style="color: red;"></i>Lack of robust IT infrastructure.
              </p>
              <p>
                <i class="bi bi-x mx-2" style="color: red;"></i>Lack of proper IT staff
              </p>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10 mb-3 property-slider">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide ">
                  <img src="assets/img/services/data.jpg" class="property-slider-image" alt="">
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
                <!-- <div class="property-price d-flex justify-content-center foo mt-5">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <i class="bi bi-database-fill-gear"></i>
                    </div>
                  </div>
                </div>   -->
                <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4 service7_img" >
                        <img src="assets/img/services/database.webp" class="img-fluid rounded" alt="cloud_services"/>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-8 section-md-t3 mt-5">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">A personal Cloud for you!</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                  To address the woes of these small and medium scale companies, we are offering dependable Network Assisted Storage(NAS) solutions. NAS are storage devices that allow various systems to store and retrieve data from a central location. This is just like having your own cloud storage, without any risks of data leaks or security breaches. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d offering-title">
                    <h3 class="title-d">Benefits of using our NAS for small and medium businesses</h3>
                  </div>
                </div>
              </div>
              
              <div class="row justify-content-center">
          <div class="col-lg-12">
             <span class="color-text-a">  
              <p>
                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>They are easy to install and easy to operate, without any dedicated IT support staff.
              </p>
              <p>
                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Installations and operational costs are highly affordable.
              </p>
              <p>
                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Safe and secure data storage at a centralized location that offers easy accessibility of your data.
              </p>
              <p>
                <i class="bi bi-check-circle-fill mx-2" style="color: var(--primary-color);"></i>Superior privacy as the storage device is located in your premises 
              </p>
          </span>
          </div>
      </div>

          </div>

        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10 mt-5">
             <span class="color-text-a"><span class="vision font-weight-bold">Our NAS </span>solutions are designed as per your business needs, making it an extremely efficient way of storing confidential data. We utilize top quality drives from leading manufactures like Qnap, Synology and Asustor to ensure a dependable system with easy access and security.</span>
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