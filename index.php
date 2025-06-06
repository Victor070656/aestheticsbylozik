<?php
include_once("functions.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <!-- /Added by HTTrack -->
  <title>Aesthetics By Lozik</title>
  <!-- meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords"
    content="Aesthetics, Aestheticsbylozik, Skincare, Skincare Products, Body Treatments, Cosmetic Solutions, Cosmetics, Beauty, Confidence" />
  <meta name="description"
    content="Welcome to Aestheticsbylozik. Here, we combine expert skincare, body treatments, and cosmetic solutions to help you look good, feel better, and own your glow — because beauty starts with confidence." />
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <!-- all css -->
  <style>
    :root {
      --primary-color: #f76b6a;
      --secondary-color: #f76b6a;

      --btn-primary-border-radius: 0.25rem;
      --btn-primary-color: #fff;
      --btn-primary-background-color: #f76b6a;
      --btn-primary-border-color: #f76b6a;
      --btn-primary-hover-color: #fff;
      --btn-primary-background-hover-color: #f76b6a;
      --btn-primary-border-hover-color: #f76b6a;
      --btn-primary-font-weight: 500;

      --btn-secondary-border-radius: 0.25rem;
      --btn-secondary-color: #00234d;
      --btn-secondary-background-color: transparent;
      --btn-secondary-border-color: #00234d;
      --btn-secondary-hover-color: #fff;
      --btn-secondary-background-hover-color: #f76b6a;
      --btn-secondary-border-hover-color: #f76b6a;
      --btn-secondary-font-weight: 500;

      --heading-color: #000;
      --heading-font-family: "Poppins", sans-serif;
      --heading-font-weight: 700;

      --title-color: #000;
      --title-font-family: "Poppins", sans-serif;
      --title-font-weight: 400;

      --body-color: #000;
      --body-background-color: #fff;
      --body-font-family: "Poppins", sans-serif;
      --body-font-size: 14px;
      --body-font-weight: 400;

      --section-heading-color: #000;
      --section-heading-font-family: "Poppins", sans-serif;
      --section-heading-font-size: 48px;
      --section-heading-font-weight: 600;

      --section-subheading-color: #000;
      --section-subheading-font-family: "Poppins", sans-serif;
      --section-subheading-font-size: 16px;
      --section-subheading-font-weight: 400;
    }

    .banner-bg {
      background-image: url("assets/images/banner/bg.png");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .client-experiences {
      background-color: #e8f4f8;
      padding: 60px 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
      color: #2c7a7b;
      font-size: 2.5rem;
      font-weight: 300;
      text-align: center;
      margin-bottom: 10px;
    }

    .section-subtitle {
      color: #666;
      text-align: center;
      margin-bottom: 50px;
      font-size: 1rem;
    }

    .treatment-gallery {
      margin-bottom: 50px;
    }

    .treatment-item {
      text-align: center;
      margin-bottom: 30px;
    }

    .treatment-image {
      width: 100%;
      height: 120px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
      background: linear-gradient(45deg, #d4a574, #c9956b);
    }

    .treatment-label {
      color: #2c7a7b;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .testimonial-card {
      background: white;
      border: 2px solid #b8d4d6;
      border-radius: 10px;
      padding: 25px;
      margin-bottom: 20px;
      min-height: 200px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .quote-mark {
      color: #2c7a7b;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .testimonial-text {
      color: #666;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 15px;
      flex-grow: 1;
    }

    .client-name {
      color: #2c7a7b;
      font-size: 0.9rem;
      font-weight: 600;
      text-align: right;
    }

    .view-more {
      text-align: center;
      margin-top: 30px;
    }

    .view-more a {
      color: #2c7a7b;
      text-decoration: none;
      font-size: 0.9rem;
    }
  </style>

  <link rel="stylesheet" href="assets/css/vendor.css" />
  <link rel="stylesheet" href="assets/css/style.css" />


</head>

<body>
  <div class="body-wrapper">


    <!-- include header.php -->
    <?php
    include("components/header.php");
    ?>
    <!-- include header.php end -->

    <main id="MainContent" class="content-for-layout ">
      <!-- slideshow start -->
      <div class="slideshow-section position-relative banner-bg">
        <div class="slideshow-active activate-slider" data-slick='{
                    "slidesToShow": 1, 
                    "slidesToScroll": 1, 
                    "dots": true,
                    "arrows": true,
                    "responsive": [
                        {
                        "breakpoint": 768,
                        "settings": {
                            "arrows": false
                        }
                        }
                    ]
                }'>
          <div class="slide-item slide-item-bag position-relative">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-md-6 py-5">
                  <div class="content-box slide-content py-4">
                    <span class="animate__animated animate__fadeInUp mb-3 text-uppercase"
                      data-animation="animate__animated animate__fadeInUp">Heal | relax | rejuvenate</span>
                    <h2 class="slide-heading heading_48 animate__animated animate__fadeInUp mb-3"
                      data-animation="animate__animated animate__fadeInUp">
                      Welcome To <br> Aesthetics By Lozik
                    </h2>
                    <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                      data-animation="animate__animated animate__fadeInUp lh-base">
                      Here, we combine expert skincare, body treatments, and cosmetic solutions to help you look good,
                      feel better, and own your glow—because beauty starts with confidence.
                    </p>
                    <a class="btn btn-success mt-0 slide-btn animate__animated animate__fadeInUp" href="shop.php"
                      data-animation="animate__animated animate__fadeInUp">SHOP
                      NOW</a>
                    <a class="btn btn-outline-success  animate__animated animate__fadeInUp" href="booking.php"
                      data-animation="animate__animated animate__fadeInUp">Book
                      Appointment</a>
                  </div>

                </div>
                <div class="col-md-6">
                  <img class="img-fluid w-75 mx-auto shadow" src="assets/images/web/banner.png" alt="slide-1"
                    style="border-radius: 15px;" />
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item slide-item-bag position-relative">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-md-6 py-5">
                  <div class="content-box slide-content py-4">
                    <h2 class="slide-heading heading_48 animate__animated animate__fadeInUp mb-3"
                      data-animation="animate__animated animate__fadeInUp">
                      Medical-Grade Aesthetics, <br> Personalized for You
                    </h2>
                    <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                      data-animation="animate__animated animate__fadeInUp lh-base">
                      Experience advanced skin solutions tailored to your unique needs.
                    </p>
                    <a class="btn btn-success mt-0 slide-btn animate__animated animate__fadeInUp" href="shop.php"
                      data-animation="animate__animated animate__fadeInUp">Explore Our Products</a>
                    <a class="btn btn-outline-success  animate__animated animate__fadeInUp" href="booking.php"
                      data-animation="animate__animated animate__fadeInUp">Book
                      Appointment</a>
                  </div>

                </div>
                <div class="col-md-6">
                  <img class="img-fluid w-75 mx-auto" src="assets/images/banner/03_.jpeg" alt="slide-1"
                    style="border-radius: 15px;" />
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item slide-item-bag position-relative">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-md-6 py-5">
                  <div class="content-box slide-content py-4">
                    <h2 class="slide-heading heading_48 animate__animated animate__fadeInUp mb-3"
                      data-animation="animate__animated animate__fadeInUp">
                      From Acne to Confidence <br> Tola's Story
                    </h2>
                    <p class="slide-subheading heading_18 animate__animated animate__fadeInUp"
                      data-animation="animate__animated animate__fadeInUp lh-base">
                      After 10 years of struggling, I got my beauty back in 3 months
                    </p>
                    <a class="btn btn-success mt-0 slide-btn animate__animated animate__fadeInUp" href="shop.php"
                      data-animation="animate__animated animate__fadeInUp">SHOP
                      NOW</a>
                    <a class="btn btn-outline-success  animate__animated animate__fadeInUp" href="booking.php"
                      data-animation="animate__animated animate__fadeInUp">Book
                      Appointment</a>
                  </div>

                </div>
                <div class="col-md-6">
                  <img class="img-fluid w-75 mx-auto" src="assets/images/banner/01.jpeg" alt="slide-1"
                    style="border-radius: 15px;" />
                </div>
              </div>
            </div>


          </div>

        </div>
        <div class="activate-arrows"></div>
        <div class="activate-dots dot-tools"></div>
      </div>
      <!-- slideshow end -->

      <section class="py-5 bg-white">
        <div class="container">

          <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Why Choose Us</h2>
            <p class="text-muted fs-5">Discover the benefits of our services designed to heal, relax, and rejuvenate
              your body and soul.</p>
          </div>

          <div class="row text-center g-4">
            <!-- Heal -->
            <div class="col-md-4">
              <div class="p-4 border rounded h-100 shadow-sm">
                <div class="mb-3">
                  <img src="assets/images/web/heal.png" alt="Heal Icon" class="img-fluid" style="height: 80px;">
                </div>
                <h5 class="fw-bold text-dark mb-2">Heal</h5>
                <p class="text-muted">Restore your skin and body with expert treatments designed to address concerns
                  like acne, scars, and aging signs, promoting overall wellness.</p>
              </div>
            </div>

            <!-- Relax -->
            <div class="col-md-4">
              <div class="p-4 border rounded h-100 shadow-sm">
                <div class="mb-3">
                  <img src="assets/images/web/relax.png" alt="Relax Icon" class="img-fluid" style="height: 80px;">
                </div>
                <h5 class="fw-bold text-dark mb-2">Relax</h5>
                <p class="text-muted">Experience deep relaxation through soothing massages, facials, and body treatments
                  that melt away stress and tension.</p>
              </div>
            </div>

            <!-- Rejuvenate -->
            <div class="col-md-4">
              <div class="p-4 border rounded h-100 shadow-sm">
                <div class="mb-3">
                  <img src="assets/images/web/rejuvenate.png" alt="Rejuvenate Icon" class="img-fluid"
                    style="height: 80px;">
                </div>
                <h5 class="fw-bold text-dark mb-2">Rejuvenate</h5>
                <p class="text-muted">Revitalize your skin and body with advanced aesthetic procedures that enhance your
                  natural beauty and leave you feeling refreshed.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container py-5 ">
        <div class="row align-items-center mb-2">
          <div class="col-md-5 mb-4 mb-md-0">
            <img src="assets/images/web/image.png" alt="Signature Aesthetic Lounge"
              style="border-radius: 15px; aspect-ratio: 1/1; object-fit: cover;" class="img-fluid shadow ">
          </div>
          <div class="col-md-7 text-md-start text-center">
            <h2 class="fw-bold text-success mb-3">Elevate Your Glow at Our Signature Aesthetic Lounge</h2>
            <p class="text-muted fs-5">At Aestheticsbylozik, we begin your journey to radiant skin with a personalized
              consultation—virtual or in-person. Our experts assess your skin type, concerns, and sensitivities to
              tailor the best treatments for you. Whether you’re dealing with breakouts or refining your skincare
              routine, we provide expert guidance to help you achieve your skin goals. Book your consultation today!</p>
          </div>
        </div>
      </section>


      <!-- trusted badge start -->
      <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
          <div class="container">
            <div class="row justify-content-center trusted-row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-trust-1 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/1.png" alt="icon-1" />
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading">
                      International Delivery
                    </h2>
                    <p class="text_16 trusted-subheading trusted-subheading-2">
                      Global delivery available
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-trust-2 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/2.png" alt="icon-2" />
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading">
                      Customer Support 24/7
                    </h2>
                    <p class="text_16 trusted-subheading trusted-subheading-2">
                      Instant access to support
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-trust-3 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/3.png" alt="icon-3" />
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading">
                      100% Secure Payment
                    </h2>
                    <p class="text_16 trusted-subheading trusted-subheading-2">
                      We ensure secure payment!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- trusted badge end -->



      <!-- banner end -->

      <!-- featured collection start -->
      <div class="featured-collection-section mt-100 mb-5 home-section overflow-hidden">
        <div class="container">
          <div class="section-header text-center">
            <p class="section-subheading">WHAT'S NEW</p>
            <h2 class="section-heading">The Latest Drop</h2>
          </div>

          <div class="row justify-content-center">
            <?php
            $getPopularProducts = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 4");

            if (mysqli_num_rows($getPopularProducts) > 0):
              while ($popular = mysqli_fetch_assoc($getPopularProducts)):
                $discount;
                if ($popular["discount"] > 0) {
                  $discount = $popular["price"] - ($popular["price"] * ($popular["discount"] / 100));
                }


                ?>
                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                  <div class="product-card shadow-sm">
                    <div class="product-card-img">
                      <a class="hover-switch" href="product.php?pid=<?= $popular["productid"]; ?>">
                        <img class="primary-img" src="uploads/<?= $popular["image"]; ?>"
                          style="aspect-ratio: 16/9; width: 100%; object-fit: cover; background-color: #fff; "
                          alt="product-img" />
                      </a>

                      <div class="product-badge">
                        <!-- <span class="badge-label badge-new rounded">Featured</span>
                      <span class="badge-label badge-percentage rounded">-44%</span> -->
                      </div>

                      <div class="product-card-action product-card-action-2 justify-content-center">


                        <a href="addtowish.php?pid=<?= $popular["productid"]; ?>" class="action-card action-wishlist">
                          <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                              fill="#00234D" />
                          </svg>
                        </a>

                        <a href="addtocart.php?pid=<?= $popular["productid"]; ?>" class="action-card action-addtocart">
                          <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                              fill="#00234D" />
                          </svg>
                        </a>
                      </div>
                    </div>
                    <div class="product-card-details px-2 pb-2">

                      <h3 class="product-card-title text-truncate">
                        <a class="" href="product.php?pid=<?= $popular["productid"]; ?>"><?= $popular["name"]; ?></a>
                      </h3>
                      <?php if ($popular["discount"] > 0): ?>
                        <div class="product-card-price">
                          <span class="card-price-regular">₦<?= $discount; ?></span>
                          <span class="card-price-compare text-decoration-line-through">₦<?= $popular["price"]; ?></span>
                        </div>
                      <?php else: ?>
                        <div class="product-card-price">
                          <span class="card-price-regular">₦<?= $popular["price"]; ?></span>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php
              endwhile;
            endif;
            ?>
          </div>
          <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
            <a class="btn btn-success" href="shop.php">VIEW ALL</a>
          </div>
        </div>
      </div>
      <!-- featured collection end -->

      <!-- Services Section -->
      <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
          <!-- Section Header -->
          <div class="row">
            <div class="col-12 text-center mb-5">
              <h2 class="display-5 fw-bold text-success mb-4 position-relative">
                The best of our services
                <span class="position-absolute start-50 translate-middle-x"
                  style="bottom: -15px; width: 60px; height: 4px; background: #f8a91a; border-radius: 2px;"></span>
              </h2>
              <p class="lead text-muted mb-4" style="max-width: 600px; margin: 0 auto;">
                At AestheticsbyLock, we offer a range of advanced aesthetic treatments designed to enhance your natural
                beauty and well-being.
              </p>
              <!-- Certification Badge -->
              <div class="">
                <div class="col-md-6 mx-auto">
                  <img src="assets/images/services/Cpd-certified-Success-Lozik-e1742856338455-1.png" alt=""
                    class="w-100 shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- Services Grid -->
          <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                      style="width: 50px; height: 50px;">
                      <span class="fw-bold">01</span>
                    </div>
                    <div class="bg-light rounded-3 p-3 flex-grow-1 text-center">
                      <i class="fas fa-spa text-success" style="font-size: 2rem;"></i>
                    </div>
                  </div>
                  <h4 class="text-success fw-semibold mb-3">Facials and Chemical Peels for radiant skin</h4>
                  <p class="text-muted mb-0">Our customized facial treatments are designed to target specific skin
                    concerns—whether acne, aging, hyperpigmentation, uneven skin tone, or dullness, refreshed and
                    radiant.</p>
                </div>
              </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                      style="width: 50px; height: 50px;">
                      <span class="fw-bold">02</span>
                    </div>
                    <div class="bg-light rounded-3 p-3 flex-grow-1 text-center">
                      <i class="fas fa-hands text-success" style="font-size: 2rem;"></i>
                    </div>
                  </div>
                  <h4 class="text-success fw-semibold mb-3">Soothing Massages for relaxation and rejuvenation</h4>
                  <p class="text-muted mb-0">Experience total relaxation with our range of massage therapies designed to
                    melt away stress, ease muscle tension, and promote blood circulation.</p>
                </div>
              </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                      style="width: 50px; height: 50px;">
                      <span class="fw-bold">03</span>
                    </div>
                    <div class="bg-light rounded-3 p-3 flex-grow-1 text-center">
                      <i class="fas fa-leaf text-success" style="font-size: 2rem;"></i>
                    </div>
                  </div>
                  <h4 class="text-success fw-semibold mb-3">Body Treatments for pampering and skin renewal</h4>
                  <p class="text-muted mb-0">Pamper your body with treatments designed to exfoliate dead skin cells,
                    improve skin tone, and leave your skin feeling silky smooth.</p>
                </div>
              </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                      style="width: 50px; height: 50px;">
                      <span class="fw-bold">04</span>
                    </div>
                    <div class="bg-light rounded-3 p-3 flex-grow-1 text-center">
                      <i class="fas fa-magic text-success" style="font-size: 2rem;"></i>
                    </div>
                  </div>
                  <h4 class="text-success fw-semibold mb-3">Keloid Removal and Laser Treatments for skin correction</h4>
                  <p class="text-muted mb-0">Struggling with stubborn keloids or unwanted skin imperfections? Our
                    non-invasive keloid removal techniques and advanced laser treatments are designed to correct skin
                    irregularities safely and effectively.</p>
                </div>
              </div>
            </div>

            <!-- Service 5 -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                      style="width: 50px; height: 50px;">
                      <span class="fw-bold">05</span>
                    </div>
                    <div class="bg-light rounded-3 p-3 flex-grow-1 text-center">
                      <i class="fas fa-syringe text-success" style="font-size: 2rem;"></i>
                    </div>
                  </div>
                  <h4 class="text-success fw-semibold mb-3">Botox and Fillers for anti-aging and facial enhancement</h4>
                  <p class="text-muted mb-0">Smooth out wrinkles, restore lost volume, and redefine your features with
                    our Botox and dermal filler treatments. Performed by skilled professionals, these procedures enhance
                    your facial features while maintaining a natural, youthful look—no overdone appearance here.</p>
                </div>
              </div>
            </div>

            <!-- CTA Card -->
            <div class="col-lg-6">
              <div class="card h-100 border-0 shadow-sm bg-success text-white" style="border-radius: 20px;">
                <div class="card-body p-4 d-flex flex-column justify-content-center align-items-center text-center">
                  <i class="fas fa-calendar-alt mb-3" style="font-size: 3rem; opacity: 0.8;"></i>
                  <h4 class="fw-semibold text-white mb-3">Ready to Transform Your Look?</h4>
                  <p class="mb-4 opacity-75">Book your consultation today and discover the perfect treatment for your
                    unique needs.</p>
                  <a href="#" class="btn btn-light btn-sm px-4 py-2 fw-semibold">BOOK APPOINTMENT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- single banner start -->
      <section class="position-relative text-center mt-100 text-white"
        style="background: url('assets/images/web/08.webp') no-repeat center center/cover; min-height: 300px;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: .85;"></div>

        <!-- Content -->
        <div class="position-relative d-flex flex-column justify-content-center align-items-center h-100 py-5">
          <h2 class="fw-bold text-light display-5">Discover Your Perfect Product</h2>
          <p class="lead px-3 px-md-5" style="max-width: 600px; text-align: center;">
            Discover a wide range of premium skincare products designed to rejuvenate, protect, and enhance your natural
            beauty. From cleansers to serums, find the perfect solution for your skin's unique needs.
          </p>
          <a href="shop.php" class="btn btn-light rounded-pill px-4 py-2 mt-2">Explore our Products</a>
        </div>
      </section>

      <!-- single banner end -->

      <section class="client-experiences">
        <div class="container">
          <h2 class="section-title fw-bold">Client Experiences</h2>
          <p class="section-subtitle">Real Experiences. Real Results.</p>

          <!-- Treatment Gallery -->
          <div class="treatment-gallery">
            <div class="row">
              <div class="col-6 col-md-3">
                <div class="treatment-item">
                  <img class="treatment-image" src="assets/images/web/exp3.png">
                  <div class="treatment-label">Non-surgical rhinoplasty</div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="treatment-item">
                  <img class="treatment-image" src="assets/images/web/exp1.png">
                  <div class="treatment-label">Dermal fillers (liquid bbl)</div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="treatment-item">
                  <img class="treatment-image" src="assets/images/web/exp4.png">
                  <div class="treatment-label">Acne Treatment</div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="treatment-item">
                  <img class="treatment-image" src="assets/images/web/exp2.png">
                  <div class="treatment-label">Post acne scar</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonials -->
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="testimonial-card">
                <div class="quote-mark">"</div>
                <div class="testimonial-text">
                  Aesthetically looks completely transformed my skin. My face is clearer, brighter, and I feel more
                  confident. Their team is professional and super attentive!
                </div>
                <div class="client-name">- Christina K.</div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonial-card">
                <div class="quote-mark">"</div>
                <div class="testimonial-text">
                  Their facials are top-notch! I always leave feeling refreshed and glowing. Best skincare center in
                  Owerri, hands down.
                </div>
                <div class="client-name">- Chioba A.</div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonial-card">
                <div class="quote-mark">"</div>
                <div class="testimonial-text">
                  I struggled with keloids for years until I found them. The keloid treatment was gentle and the results
                  are amazing. Highly recommend!
                </div>
                <div class="client-name">- Adah N.</div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- instagram start -->
      <div class="instagram-section mt-100 overflow-hidden home-section">
        <div class="instagram-inner">
          <div class="container">
            <div class="section-header text-center">
              <div class="section-icon">
                <svg width="54" height="54" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                    fill="#00234D" />
                </svg>
              </div>
              <h2 class="section-heading">Our Services</h2>
              <p class="section-subheading">
                Explore our range of expert skincare and body treatments. Book an appointment today to experience
                personalized care.
              </p>
            </div>
            <div class="instagram-container position-relative mt-48">
              <div class="common-slider" data-slick='{
                                "slidesToShow": 4, 
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": true,
                                "responsive": [
                                  {
                                    "breakpoint": 1281,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                  },
                                  {
                                    "breakpoint": 768,
                                    "settings": {
                                      "slidesToShow": 2
                                    }
                                  }
                                ]
                            }'>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/Facials-1-1.jpg" alt="img" class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/Laser-Tattoo-Removal-1.jpg" alt="img"
                        class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/Cosmetic-fillers-1-1.jpg" alt="img"
                        class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/Mesotherapy-2-1-1.jpg" alt="img"
                        class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/Microneedling-1-1.jpg" alt="img"
                        class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper">
                      <img src="assets/images/services/IMG_0895-1.jpg" alt="img" class="instagram-card-img rounded"
                        style="aspect-ratio: 3/4; width: 100%; object-fit: cover; " />
                    </a>
                  </div>
                </div>
                <!-- <div class="instagram-slick-item" data-aos="fade-up" data-aos-duration="700">
                  <div class="instagram-card">
                    <a class="instagram-img-wrapper" >
                      <img src="assets/img/instagram/s1.jpg" alt="img" class="instagram-card-img rounded" />
                    </a>
                  </div>
                </div> -->
              </div>
              <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <p class="fs-5">Book an <b>appointment</b> today </p>
        <a href="booking.php" class="btn btn-success">Book Apointment &rarr; </a>
      </div>
      <!-- instagram end -->

      <!-- newsletter start -->
      <!-- <div class="newsletter-section mt-100 overflow-hidden">
        <div class="newsletter-inner">
          <div class="position-relative">
            <img class="single-banner-img" src="assets/img/newsletter/2.jpg" alt="slide-1" />

            <div class="content-absolute">
              <div class="container height-inherit d-flex align-items-center justify-content-center">
                <div class="content-box py-4">
                  <div class="newsletter-content newsletter-content-2 text-center">
                    <div class="newsletter-header">
                      <p class="newsletter-subheading heading_24">
                        News Letter
                      </p>
                      <h2 class="newsletter-heading heading_42">
                        Subscribe to our newsletter
                      </h2>
                    </div>
                    <div class="newsletter-form-wrapper">
                      <form action="#" class="newsletter-form d-flex align-items-center rounded">
                        <input class="newsletter-input bg-transparent border-0" type="email"
                          placeholder="Enter your e-mail" autocomplete="off" />
                        <button class="newsletter-btn rounded" type="submit">
                          <svg width="17" height="14" viewBox="0 0 17 14" fill="#fff"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.11539 -0.000488604L7.50417 1.99951L11.5769 5.59951L0.500001 5.59951L0.500001 8.19951L11.7049 8.19951L7.50417 11.4995L8.70513 13.9995L16.5 7.19951L9.11539 -0.000488604Z"
                              fill="#FEFEFE" />
                          </svg>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- newsletter end -->


    </main>

    <!-- include footer -->
    <?php
    include("components/footer.php");
    ?>
    <!-- include footer end -->



    <!-- all js -->
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/main.js"></script>
  </div>
</body>

<!-- Mirrored from spreethemesprevious.github.io/bisum/html/index-shoe.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:07 GMT -->

</html>