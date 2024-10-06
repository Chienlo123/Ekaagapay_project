<!DOCTYPE html>
<?php
include_once('admin/includes/config.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query= "insert into `contact_us` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
$sql=mysqli_query($con,$query);

if($sql){

echo "<script>alert('Message Sent Successfully');</script>";
echo "<script>window.location.href='contact.php'</script>";

}else{
echo "<script>alert('Message Sending Failed');</script>";
echo "<script>window.location.href='contact.php'</script>";

}

}


?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Kaagapay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">E-Kaagapay</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Health Concerns</a></li>
          <li><a class="nav-link scrollto" href="#services">Activities</a></li>
          <li><a class="nav-link scrollto" href="#event">Calendar</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="admin/dashboard.php">LOGIN</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <br>
      <h1>We Care for Senior Ones</h1>
      <h2>WELCOME TO </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/Services.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>E-Kaagapay</h3>
            <p class="fst-italic">
               E-Kaagapay aims to provide quality of care and protection our compassionate and caring staff provides around-the-clock personal care, assists with medical needs,and also facilitates strong social connections. The E-Kaagapay is a system that the senior citizen office to electronically manage the records of the senior citizens. Automate the works of recording and keeping the records. It includes with the different health concerns;
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>AVOID CONTACT WITH PEOPLE WHO ARE SICK</li>
              <li><i class="bi bi-check-circle"></i>TAKE SUPPLEMENTS AS NECESSARY</li>
              <li><i class="bi bi-check-circle"></i>WASH YOUR HANDS FREQUENTLY</li>
              <li><i class="bi bi-check-circle"></i>LEARN HOW TO MANAGE STRESS</li>
              <li><i class="bi bi-check-circle"></i>GET PLENTY OF REST</li>
              <li><i class="bi bi-check-circle"></i>LEARN SOMETHING NEW</li>
                 
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
<div class="section-title">
          <span>Health Concerns</span>
          <h2>Health COncerns</h2>
        </div>
        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h5>AVOID CONTACT WITH PEOPLE WHO ARE SICK</h5>
              <img src="assets/img/avoid_contactperson.jpg" class="img-fluid" alt=""><br><br>
              <p> Another way to protect yourself year-round is to avoid being close to people who are sick. This is easier said than done. But if there’s a flu outbreak in your area, limit contact with people who aren’t feeling well and avoid crowded areas until conditions improve. If you must go out, protect yourself by wearing a face mask.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h5>TAKE SUPPLEMENTS AS NECESSARY</h5>
              <img src="assets/img/take_supplements.jpeg" class="img-fluid" alt=""><br><br>
              <p> Some supplements help support a healthy immune system. Before taking a supplement, always ask your doctor if it’s safe, especially if you’re taking a prescription medication. Some supplements they may recommend include calcium, vitamin D, vitamin B6, or vitamin B12. Take supplements or multivitamins as instructed to boost your immune system.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h5>WASH YOUR HANDS FREQUENTLY</h5>
              <img src="assets/img/hands1.png" class="img-fluid" alt="">
              <p><br>
               Washing your hands on a regular basis is another excellent way to stay healthy year-round. Viruses can live on surfaces for up to 24 hours. It’s possible to become ill if you touch a virus-covered surface and contaminate your hands, and then touch your face. Wash your hands with warm soapy water often, and for at least 20 seconds. Avoid touching your nose, face, and mouth with your hands.
              </br><br><br></p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>04</span>
              <h4>LEARN HOW TO MANAGE STRESS</h4>
              <img src="assets/img/manage_stress.jpg" class="img-fluid" alt=""><br><br>
              <p><br>Chronic stress increases your body’s production of the stress hormone cortisol. Too much cortisol can disrupt different functions in your body, including your immune system. To reduce stress, increase physical activity, get plenty of sleep, set reasonable expectations for yourself, and explore relaxing, enjoyable activities.</br><br><br><br><br></p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>05</span>
              <h4>GET PLENTY OF REST</h4>
              <img src="assets/img/rest.jpg" class="img-fluid" alt=""><br><br>
              <p><br>Not only can sleep reduce your stress level, but sleep is how your body repairs itself. For this reason, getting an adequate amount of sleep can result in a stronger immune system, making it easier for your body to fight off viruses. Sleep is also important as you get older because it can improve memory and concentration. Aim for at least seven and a half to nine hours of sleep per night.</br><br><br>
            </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>06</span>
              <h4>LEARN SOMETHING NEW</h4>
              <img src="assets/img/new.jpg" class="img-fluid" alt=""><br><br>
              <p><br>Learn to cook, create art, dance, a new language, or use a computer. Contact the library or community college in your area. Many offer elderly persons cheap or free classes. There may even be classes available online.
              Create or join a book or movie group.

              Try out some new physical activities like yoga
              Learn to play a musical instrument.
              Observe the nearby museums. Many provide free educational programs and group trips.</br></p>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Why Us Section -->

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Activities</span>
          <h2>Activities</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>01 Community garden</h4>
              <p>There’s something truly rewarding about planting seeds, watching them grow, and enjoying the fruits, vegetables, herbs, and flowers produced in the process.  Many seniors enjoy gardening on their own, but in order to add a social aspect, they may want to participate in a community garden, where contributors work in collaboration to grow produce for the benefit of individuals and families in the area.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>02 Elderly Health Care</h4>
              <p>Prevention and control of health problems of elderly necessitates a multifaceted approach incorporating active collaboration of health, social welfare, rural/urban development and legal sectors. A community based geriatric health-care program should start with the development of a comprehensive policy so as to include not only medical aspects, but other determinants as well.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>03 Go Out and Get Moving</h4>
              <p>There may still be things your older adult can take to get their bodies moving even if they aren't very mobile. They can still reap the health and mood benefits whether they're standing or sitting, especially with seated exercises like chair yoga routines. There are additional exercises that may be performed solely on the feet and ankles to minimize swelling or even while using a walker for support.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>04 Spend Time Reading</h4>
              <p>Reading is a great activity for senior citizens. It's a pleasant way to kill time and stimulate the mind. Additionally, it can enhance cognition, lessen stress, enhance sleep, and prevent cognitive deterioration. Your older adult can lose themselves in a well-written novel, peruse photos, or learn about a fascinating new topic whether they like to read physical books, periodicals, use an e-reader, or listen to audiobooks. Organizing a book club among their friends is another method for seniors to enjoy reading and mingling.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>05 Family fun days</h4>
              <p>When family members feel pressured to provide social interaction for lonely seniors, it can put a strain on the relationship.  You can combat this by spreading the love.  Planning family fun days with food, activities, and socialization for all can not only help seniors to stave off loneliness, but also create positive bonding time for the entire family.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4>06 Senior Meetings</h4>
              <p>Some seniors are not particularly savvy when it comes to technology, and they could be missing out on easy opportunities to find new social groups and activities as a result.  If the seniors in your life don’t yet know about the social platform Meetup, you should help them learn to use it to find social groups to join, or to create their own.  For single seniors, dating apps can also be a fun diversion and a way to find love and companionship at any age.</p>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Event Calendar ======= -->
    <section id="event" class="event">
      <div class="container">

        <div class="section-title">
          <span>Event Calendar</span>
          <h2>Event Calendar</h2>

        </div>



  <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23009688&ctz=Asia%2FManila&showTitle=1&showNav=1&showPrint=1&title=E-Kaagapay%20Schedule&src=YWI2NjQ3MDZkNzhmYTg4ZGNlMDM0MWVkM2MzZDE5N2ZjM2M1OWRkMmQxNDI5NmZjNGU3NDA0OWIwYTMzMGFhZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23009688" style="border:solid 1px #777" width="1290" height="680" frameborder="0" scrolling="no"></iframe>



    <!-- ======= Cta Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
        
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Daniw, Victoria, Laguna</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>Ekaagapay@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+639985756483</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="mapouter"><div class="gmap_canvas"><iframe width="550" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Brgy.%20Daniw,%20Victoria,%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:645px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:600px;}</style></div></div>
           
          <div class="col-lg-6">
            <form method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br><br><br>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Cta Section -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Gallery</span>
          <h2>Gallery</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/s1.jpg" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/s2.jpg" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/s3.jpg" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/s4.jpg" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/s5.jpg" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/s6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/s7.jpg" class="img-fluid" alt="">
       
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/s8.jpg" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/s5.jpg" class="img-fluid" alt="">
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E-Kaagapay</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>