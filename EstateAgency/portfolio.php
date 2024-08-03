<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<?php $activePage = 'portfolio'; ?>
<body>

  <!-- ======= Property Search Section ======= -->
  <?php include('navbar.php'); ?>

  <main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Portfolio</h1>
              <span class="color-text-a">Explore our amazing portfolio with different filtering options</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Portfolio
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

   <!-- Portfolio -->
    <section id="portfolio" class="portfolio aos-init aos-animate" data-aos="fade-up">

      <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app" class="">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding" class="">Branding</li>
              <li data-filter=".filter-books" class="">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container" style="position: relative; height: 1677px;">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
              <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>App 1</h4>
                  <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product" style="position: absolute; left: 372px; top: 0px;">
              <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding" style="position: absolute; left: 0px; top: 279.5px;">
              <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books" style="position: absolute; left: 372px; top: 279.5px;">
              <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 559px;">
              <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>App 2</h4>
                  <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product" style="position: absolute; left: 372px; top: 559px;">
              <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding" style="position: absolute; left: 0px; top: 838.5px;">
              <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books" style="position: absolute; left: 372px; top: 838.5px;">
              <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 1118px;">
              <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>App 3</h4>
                  <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product" style="position: absolute; left: 372px; top: 1118px;">
              <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding" style="position: absolute; left: 0px; top: 1397.5px;">
              <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books" style="position: absolute; left: 372px; top: 1397.5px;">
              <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
              </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

          </div>

      </div>

    </section>

    <div class="mt-5"></div>
  </main>

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>

</body>

</html>