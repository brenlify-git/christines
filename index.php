<?php

include 'admin/config/connection.php';

$sql = "SELECT * FROM branding ORDER BY id DESC LIMIT 1";
$logo = $conn->query($sql);

$sqlMenu = "SELECT * FROM menu_list WHERE dishStatus = 'showed'";
$menu = $conn->query($sqlMenu);

$sqlFeedback = "SELECT * FROM feedbacks";
$feedback = $conn->query($sqlFeedback);

$sqlGallery = "SELECT * FROM imagegallery";
$gallery = $conn->query($sqlGallery);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Christine's Filipino Cuisine</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Christines.png" rel="icon">
  <link href="assets/img/Christines.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i|Sofia|Montserrat:ital,wght@0,300;1,200" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- =======================================================
  * Template Name: Delicious
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



<script>
        // Register keydown event on the document
        $(document).on('keydown', function(event) {
            // Check if the key combination is Alt+C (key code 67)
            if (event.altKey && event.keyCode === 67) {
                // Open the website in a new tab
                window.open('admin/dashboards/dashboard.php', '_blank');
            }
        });
    </script>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>0969 405 0721</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <a href="index.php"><img src="assets/img/Christines.png"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Spotlight</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
      
         
          <li class="dropdown"><a href="#contact"><span>Contact Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#contact">Visit us at</a></li>
              <li><a href="#sendusemail" style="scroll-padding-top: 200px;">Send us a Feedback</a></li>
    
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/s1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
              
                <?php
                while($rows = mysqli_fetch_assoc($logo)):   
                ?>

              
                <h2 class="animate__animated animate__fadeInDown"><?=$rows['brandName']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?=$rows['brandName']; ?> is a family-owned business founded by the Sta. Ana Family, a prominent and respected family in the local community. The concept for the restaurant was sparked by their daughter, Christine Sta. Ana, and they eagerly opened their doors to the public on January 28, 2023, generating great anticipation and enthusiasm among the locals.</p>
                <?php
           endwhile;   
        ?>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/s2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Savor the Flavors of the Philippines</h2>
                <p class="animate__animated animate__fadeInUp">The restaurant specializes in serving authentic Filipino cuisine, offering a wide range of traditional Filipino dishes that are crafted with love and care. The menu is carefully curated to showcase the rich flavors and unique culinary heritage of the Philippines, providing a memorable dining experience for all guests.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/s3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Taste the Extraordinary, Dining Redefined</h2>
                <p class="animate__animated animate__fadeInUp">To enhance the dining experience, Christine's Filipino Cuisine also features live band performances every weekend, creating a vibrant and lively ambiance for diners to enjoy. The restaurant has gained popularity not only among locals but also among food enthusiasts, and it has been featured in various video vlogs and food reviews, further establishing its reputation as a must-visit restaurant in the area.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/slide/s1.jpg");'>
            <a href="https://www.facebook.com/galingbulacan/videos/875434390180840" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content" style="text-align: justify; text-justify: inter-word;">
            <div class="section-title">
            <h2 style="text-align: left;">Our Food Takes<span> the Spotlight</span></h2>
            </div>
              <p>
              Filipinos have always had a deep love and appreciation for food. Our passion for cooking and enjoying meals with loved ones is deeply ingrained in our culture. From traditional family recipes passed down from generation to generation to modern twists on classic dishes, food is an essential part of our daily lives.              </p>
              <p class="fst-italic">
              As time passes, our taste buds crave new and unique flavors that will surprise us. We seek out new culinary experiences that can provide a fresh take on our beloved traditional dishes. This is where Christine's Filipino Cuisine comes in. Their dishes are a perfect blend of traditional Filipino flavors with a modern twist, bringing something new and exciting to the table.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Filipino cuisine is a significant part of our culture and tradition, with a love for cooking and sharing meals.</li>
                <li><i class="bx bx-check-double"></i> As our taste buds crave new experiences, Christine's Filipino Cuisine in Malolos offers a perfect blend of traditional and modern flavors.</li>
                <li><i class="bx bx-check-double"></i> Experience a delicious fusion of old and new at Christine's Filipino Cuisine!</li>
              </ul>
              <p>
              Christine's Filipino Cuisine offers a wide array of dishes that are purely Pinoy-tasting but with a modern twist. From appetizers to desserts, each dish is meticulously prepared to ensure a perfect blend of traditional and contemporary flavors. So come and experience the exciting fusion of old and new flavors at Christine's Filipino Cuisine!
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Choose Our Restaurant for an unparalleled dining experience, where exceptional cuisine, impeccable service, and a captivating ambiance come together to create unforgettable memories.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Exceptional Cuisine</h4>
              <p>Our Restaurant, we take pride in serving exceptional cuisine crafted with the finest ingredients, prepared by skilled chefs who are passionate about creating unique and flavorful dishes that will tantalize your taste buds.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Impeccable Service</h4>
              <p>We believe that exceptional dining experiences go beyond just the food, which is why our attentive and professional staff are dedicated to providing impeccable service that ensures your every need is met, making your time at Our Restaurant a truly enjoyable and hassle-free experience.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Captivating Ambiance</h4>
              <p>Our Restaurant, where a combination of thoughtful decor, warm lighting, and comfortable seating sets the stage for a memorable dining experience. Whether you're celebrating a special occasion or enjoying a casual meal, our captivating ambiance adds an extra touch of magic to your time with us.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>  

        <div class="row menu-container">


        <?php
            while($rowMenu = mysqli_fetch_assoc($menu)):   
        ?>
          <div class="col-lg-6 menu-item filter-<?= $rowMenu['dishCat'] ?>">
            <div class="menu-content">
              <a href="#"><?= $rowMenu['dishName']?></a><span>₱<?= $rowMenu['price'] ?></span>
            </div>
            <div class="menu-ingredients">
            <?= $rowMenu['shortDesc'] ?>
            </div>
          </div>

        <?php
        endwhile;
        ?>
        </div>

      </div>
    </section><!-- End Menu Section -->

   

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                   
                  </div>
                  <p class="fst-italic">
                  Birthday parties are joyous celebrations that mark the anniversary of a person's birth. They are typically filled with excitement, laughter, and a sense of camaraderie among friends and loved ones. While the specifics of birthday parties can vary widely depending on personal preferences, cultural traditions, and age groups.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Birthday parties bring together a diverse group of guests.</li>
                    <li><i class="bi bi-check-circle"></i> Birthday parties often feature a range of activities to entertain guests.</li>
                    <li><i class="bi bi-check-circle"></i> There might be additional entertainment options.</li>
                  </ul>
                  <p>
                  They are filled with happiness, laughter, and a sense of shared joy, creating memories that will be cherished for years to come.  
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                  Private parties are social gatherings organized by individuals or groups for personal celebrations, entertainment, or special occasions.Private parties can be organized for various reasons, including birthdays, anniversaries, engagements, weddings, graduations, housewarmings, and holidays.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Private parties can be organized for various reasons.</li>
                    <li><i class="bi bi-check-circle"></i> Private parties provide an opportunity to celebrate milestones</li>
                    <li><i class="bi bi-check-circle"></i> Comprehensive event planning and coordination for a seamless private party.</li>
                  </ul>
                  <p>
                    It's advisable to familiarize yourself with the local laws and regulations when planning a private party to ensure compliance and a successful event.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Celebrations</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                  We offer customizable packages to suit your preferences and requirements. Whether it's a birthday celebration, anniversary, or any special occasion, we provide the flexibility for you to set your desired packages and inclusions.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Customizable packages tailored to your needs.</li>
                    <li><i class="bi bi-check-circle"></i> Select your desired inclusions for a personalized experience.</li>
                    <li><i class="bi bi-check-circle"></i> Perfect for birthdays, anniversaries, and special occasions.</li>
                  </ul>
                  <p>
                  Customizable packages for personalized private parties, ensuring a unique and memorable experience tailored to your preferences and celebration.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Reach us,<span> Your Feedback is Valued!</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section> -->
    
    <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row g-0">

        <?php
            while($rowMenu = mysqli_fetch_assoc($gallery)):   
        ?>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?= $rowMenu['imagePath'] ?>" class="gallery-lightbox">
                <img src="<?= $rowMenu['imagePath'] ?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        <?php endwhile; ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-5.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Liam Robles</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-6.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-7.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

          <?php
            while($rows = mysqli_fetch_assoc($feedback)):   
    ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3><?= $rows['username'] ?></h3>
                <h4><?= $rows['subject'] ?></h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $rows['message'] ?>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <?php 

endwhile;

?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Contact us with any questions or feedback. We're here to help and value your input. Use the contact information or form below to reach out to us. Thank you for choosing to communicate with us.</p>
        </div>
      </div>
      <div class="map" id="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.587592035368!2d120.82674571526162!3d14.848386374935956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339653550fb988f5%3A0x2e87556713bcfa1a!2sChristine&#39;s%20Filipino%20Cuisine!5e0!3m2!1sen!2sus!4v1680969871264!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="sample"  id="sendusemail" style="margin-bottom: 90px;"> </div>
      <div class="container mt-" >

        <div class="info-wrap" >
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
          <div class="row">
             <div class="col-lg-12">


          <div class="card border-0">
            <div class="card-body">

            <form action="send.php" method="post" class="row g-3">
              <div class="col-6">
                  <label for="inputAddress5" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Juan Dela Cruz"
                    required>
                </div>

                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="juandelcruz@gmail.com"
                    required>
                </div>

                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Food Review"
                    required>
                </div>

                <div class="col-12>
                  <label for="inputAddress5" class="form-label">Message</label>
                  <textarea type="number" class="form-control" id="message" name="message" style="height:100px"></textarea>
                  
                </div>
           
          
          <div class="text-center">
                  <button type="submit" class="btn btn-warning text-light" name="send">Send Feedback</button>
                </div>
              </form><!-- End Multi Columns Form -->
        </div>


      

        
         

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Christine's Filipino Cuisine</h3>
      <p></p>
      <div class="social-links">
       
        <a href="https://www.facebook.com/CHRISTINESFILIPINO" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>