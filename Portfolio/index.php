<?php include 'include/config.php';
$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1 ";
$result  = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $data['name'];?> - <?= $data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/m.ico" rel="icon">
  <link href="assets/img/m.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data['name'];?></a></h1>

      <h2>I'm a passionate <span><?= $data['title']?></span> from <?=$data['place'];?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
         
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
          if($data['twitter']){
            ?>
            <a href="<?=$data['twitter'];?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <?php
          }
        ?>
        <?php
          if($data['facebook']){
            ?>
            <a href="<?=$data['facebook'];?>"target="_blank"  class="facebook"><i class="bi bi-facebook"></i></a>
            <?php
          }
        ?>
        <?php
          if($data['instagram']){
            ?>
            <a href="<?=$data['instagram'];?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <?php
          }
        ?>
        <?php
          if($data['linkedin']){
            ?>
            <a href="<?=$data['linkedin'];?>"target="_blank"  class="linkedin"><i class="bi bi-linkedin"></i></a>
            <?php
          }
        ?>
        <?php
          if($data['github']){
            ?>
            <a href="<?=$data['github'];?>"target="_blank"  class="github"><i class="bi bi-github"></i></a>
            <?php
          }
        ?>
        <?php
          if($data['youtube']){
            ?>
            <a href="<?=$data['youtube'];?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
            <?php
          }
        ?>
</div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/MEE.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?= $data['title']?></h3>
          <p class="fst-italic">
          <?= $data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['dob']));?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $data['website']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91<?= $data['phone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $data['age']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?= $data['certification']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?= $data['email']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                <?php
                if($data['freelance'] == 1){
                  echo "Available";
                }
                else{
                  echo "Not Available";
                }
                ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <?php
                $counter = "SELECT * FROM `counter`";
                $cresult = mysqli_query($con, $counter);
    ?>
<!-- ======= Counts ======= -->
    <div class="counts container">
    <div class="row">

    <?php
                if($cresult -> num_rows > 0){
                  while($row = $cresult -> fetch_assoc()){
    ?>
          <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="<?=$row['pre'];?>" data-purecounter-end="<?=$row['post'];?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title'];?></p>
          </div>
        </div>
        <?php      
                  }
                }
        ?>
      </div>

    </div>
    <!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <!-- <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>End Skills -->

    <!-- ======= PHP SKILLS ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>
      <div class="row">

        <?php
        $skills ="SELECT * FROM `skills`";
        $sresult = mysqli_query($con, $skills);

        if($sresult -> num_rows > 0){
          while($srows = $sresult -> fetch_assoc()){
            ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$srows['icon'];?>" style="color: <?=$srows['color'];?>"></i>
                <h3><?=$srows['title'];?></h3>
              </div>
          </div>
              <?php
          }
        }

        ?>
       
        </div>
      
    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
        <?php

        $quotes = "SELECT * FROM `testimonial`";
        $qresult = mysqli_query($con, $quotes);

        if($qresult -> num_rows > 0){
          while($qrows = $qresult -> fetch_assoc()){
            ?>
            <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?=$qrows['quote'];?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
              <h3><?=$qrows['name'];?></h3>
              <h4><?=$qrows['title'];?></h4>
            </div>
          </div><!-- End testimonial item -->
            <?php
          }
        }
        ?>  
    </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Career Objective</h3>
          <div class="resume-item">
            <p>Brilliant and creative IT professional with Master's degree in Computer Application and passionate about creating customzied solutions. Looking
              to establish a career in the feild of software developer, and wish to work in a growth-oriented company and contribute to the development of the 
              organization while upgrading skills and knowledge.
            </p>
          </div>
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Master of Computer Application</h4>
            <h5>2019 - 2022</h5>
            <p><em>Bhilai Institute of Technology, Durg, CG</em></p>
            <p>Completed the Regular 3yrs degree course in MCA, from 2019-2022 with aggregate 80% marks.</p>
          </div>
          <div class="resume-item">
            <h4>Bachelor of Computer Application</h4>
            <h5>2016 - 2019</h5>
            <p><em>MATS, University, Raipur</em></p>
            <p>Completed the Regular 3yrs degree course in BCA, from 2016-2019 with aggregate 78% marks.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Jr Frontend Developer</h4>
            <h5>Aug, 2022 - Feb, 2023</h5>
            <p><em>SeamlessTomorrow, Durg, CG </em></p>
            <p>
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production all the frontend need of client projects.</li>
            </ul>
            </p>
          </div>
          <h3 class="resume-title">To know more about me.</h3>
          <div class="resume-item">
            <h4>Ping me</h4>
            <p><em>on... </em></p>
            <p>
            <ul>
              <li>mayank.prakash@seamlesstomorrow.com</li>
              <li>One more thing....</li>
              <li>Don't feel troubled, if any social icon isn't working...</li>
              <li>just do mail me...</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>
        <?php
        $services = "SELECT * FROM `services`";
        $seresult = mysqli_query($con, $services);
        ?>
      <div class="row">
       <?php
       if($seresult -> num_rows > 0){
        while($sdata = $seresult->fetch_assoc()){ 
          ?>
          <div class="col-lg-4 col-md-6 mt-5 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="<?=$sdata['icon'];?>"></i></div>
            <h4><a href=""><?=$sdata['title'];?></a></h4>
            <p><?=$sdata['text'];?></p>
          </div>
        </div>
        <?php
        }
       }else{
        echo "No Services Found.";
       }
       ?>
      </div>
    </div>
  </section>
  <!-- End Services Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>
      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address'];?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php
                if($data['twitter']){
                  ?>
                  <a href="<?=$data['twitter'];?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                  <?php
                }
              ?>
              <?php
                if($data['facebook']){
                  ?>
                  <a href="<?=$data['facebook'];?>"target="_blank"  class="facebook"><i class="bi bi-facebook"></i></a>
                  <?php
                }
              ?>
              <?php
                if($data['instagram']){
                  ?>
                  <a href="<?=$data['instagram'];?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                  <?php
                }
              ?>
              <?php
                if($data['linkedin']){
                  ?>
                  <a href="<?=$data['linkedin'];?>"target="_blank"  class="linkedin"><i class="bi bi-linkedin"></i></a>
                  <?php
                }
              ?>
              <?php
                if($data['github']){
                  ?>
                  <a href="<?=$data['github'];?>"target="_blank"  class="github"><i class="bi bi-github"></i></a>
                  <?php
                }
              ?>
              <?php
                if($data['youtube']){
                  ?>
                  <a href="<?=$data['youtube'];?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                  <?php
                }
              ?>
</div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email'];?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+91<?=$data['phone'];?></p>
          </div>
        </div> 
      </div>
      
       
      <?php
      if(isset($_POST['send_message'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        $contact = "INSERT INTO `contact`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
        mysqli_query($con,$contact);
      }
      ?>
      <form action="#" method="post" role="form" class=" mt-4">
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
        </div>
        <!-- <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div> -->
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php
    $details = "SELECT * FROM `compdetails` WHERE `compdetails`.`id`=1";
    $deresult = mysqli_query($con, $details);
    $dedata = mysqli_fetch_assoc($deresult);
    ?>
    Designed by <a href="#" target="_blank"><?=$dedata['company'];?></a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>