<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <meta name="keywords" content="footer, address, phone, icons" />

    
      <!-- Font Awesome Icons -->
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"/>
      <!-- Font Awesome  -->
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <title>Dars E Quran</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../images/logo nav-fotor-bg-remover-20230423154939.png" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
   
</head>
<body>
    
    <!-- Navigation Bar -->
    
    <nav class="nav">
        <div class="container">
            <div class="logo">
              <img src="../images/logo nav-fotor-bg-remover-20230423154939.png" alt="">
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                <li><a href="../html/Home.php">Home</a></li>
          <li><a href="../html/About.php">About Us</a></li>
          <li><a href="../html/Corses.php">Courses</a></li>
          <li><a href="../html/Library.php">Our Library</a></li>
          <li><a href="../html/admission.php">Admission</a></li>
          <li><a href="../html/contact.php">Contact Us</a></li>
        
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
  
    <section class="about">
      
    </section>
   
    <div class="text-container">
      <h1 class="animated-heading">About Us</h1>
      <p class="animated-paragraph">Dars-E-Quran has emerged as one of the best Islamic education institutes in the country in a short time. Its Founders were
        group of prominent Islamic scholars who were passionate about spreading the teachings the Quran to the local community.
        The Founder start with minimum resources and try thier best to make a wonderfull world of Islam with treasury of Quranic
        knowledge. Dars-e-Quran has stayed committed to its fundamental goals of equality, accessibility, and excellence.It offers a
        supportive and engaging learning environment that promotes critical thinking, independent thought, and lifelong learning in
        accordance with Islamic Principles, and offers variety of courses and resources for students of various background and level
        of expertise.</p>
    </div>
    <div class="about-container">
      <div class="about-box">
        <!-- <i class="fa fa-desktop"></i> -->
        <i class="fa fa-eye" aria-hidden="true"></i>
        <h2>Our Vision</h2>
        <p>Dars-E-Quran Islamic Institute aims to establish a harmonious and positive Islamic learning environment based on the true Islamic concept of Unity of Ummah that strives to implement Islam in all aspects of an individual's life.</p>
        <ul> <br>
          <li>Our Vision is to enable Students to connect with the divine message of the Quran and live in accordance with its enduring teachings.</li>
          <li>We want to make an individual to live thier life in accordance with Islam</li>
          <li>We aim to establish a learning atmosphere that is inclusive, inviting, and supportive of all students, regardless of their background or level of expertise, since we understand that each person is unique and has their own background, views, and aspirations.</li>
        </ul>
      </div>
      
      <div class="about-box">

        <i class="fa fa-flag" aria-hidden="true"></i>
        <h2>Our Mission</h2>
        <p>Dars-E-Quran Islamic Institute, our mission is to provide Islamic academic education to the students while instilling in them Islamic values, morals and prepare them to become positive role models exhibiting all characteristics of a good Muslim.</p>
        <ul>
          <li>Our mission is to empower people to conduct their lives in accordance with the holy teachings of the Quran by teaching Quranic education</li>
          <li> We are offering a variety of excellent learning opportunities and materials ,Our courses are created to encourage complete understanding of the Quran.</li>
          <li> Our mission is to help individuals develop a deep and meaningful relationship with Quran, and use this relationship as a source of guidance, inspiration, and transformation in their personal & professional lives.</li>
          
        </ul>
      </div>
    </div>
    
       
    
  <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="/js/about.js"></script>
  
  <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>   
  


  <!------------------------ Footer ------------------------>
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color:rgba(0, 0, 0, 0.2)"
             >
      <!-- Left -->
      <div class="me-4">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa fa-whatsapp"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h2 class="text-uppercase fw-bold">Dars-e-Quran</h2>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 155px; background-color: #7c4dff; height: 3px"
                />
            <p class="fs-5">
              Emphasis on the study and interpretation of the Quran and Hadith, the foundational texts of Islam.Respect for diversity and tolerance towards other religions and cultures.Importance of religious and moral education.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold">Our programs</h4>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 120px; background-color: #7c4dff; height: 3px"
                />
          
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">Alimiyyah Fazila Program</a>
            </p>
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">Alimiyyah Program</a>
            </p>
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">Hifz-Ui-Quran & Nazra Program</a>
            </p>
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">Tafseer Course Program</a>
            </p>
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">FIQH Program</a>
            </p>
            <p class="fs-5">
              <a href="../html/Corses.php" class="text-white">Darse Nizami Program</a>
            </p>
            

            
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold">Our Pages</h4>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 85px; background-color: #7c4dff; height: 3px"
                />
            <p>
              <a href="../html/Home.php" class="text-white fs-5">Home</a>
            </p>
            <p>
              <a href="../html/About.php" class="text-white fs-5">About Us</a>
            </p>
            <p>
              <a href="../html/Corses.php" class="text-white fs-5">Programs</a>
            </p>
            <p>
              <a href="../html/Library.php" class="text-white fs-5">Our Library</a>
            </p>
            <p>
              <a href="../html/admission.php" class="text-white fs-5">Admission</a>
            </p>
            <p>
              <a href="../html/contact.php" class="text-white fs-5">Contact Us</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold">Contact</h4>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 70px; background-color: #7c4dff; height: 3px"
                />
            <p class="fs-5"><i class="fas fa-home mr-3"></i> Mandi Bhauddin, Punjab, Pakistan</p>
            <p class="fs-5"><i class="fas fa-envelope mr-3"></i> DarsEQuran@gmail.com</p>
            <p class="fs-5"><i class="fas fa-phone mr-3"></i> + 92 315 7787 885</p>
           
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3 fs-5 "
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
       Dars-E-Quran © 2023 All rights reserved.
      
    </div>
    <!-- Copyright -->
  </footer>
  <!------------------- Footer END-------------------------->

</div>
<!-- End of .container -->

<script src="/js/script.js"></script> 

    </script>

</body>
</html>