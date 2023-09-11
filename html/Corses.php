<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
  <meta name="keywords" content="footer, address, phone, icons" />


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Font Awesome  -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Dars E Quran</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="icon" href="../images/logo nav-fotor-bg-remover-20230423154939.png" type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>


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

  <section class="course-nav-pic">
    <h3 class="landing-text">"The ink of the scholar is more sacred than the blood of the martyr." </h3>
  </section>


  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>

  <!-- Function used to shrink nav bar removing paddings and adding black background -->
  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
      } else {
        $('.nav').removeClass('affix');
      }
    });
  </script>



  <div class="Ccontainer">

    <h3 class="Cheading">Our Programs</h3>

    <div class="box-container">

      <div class="box">
        <img src="../images/course 1.PNG" alt="">
        <h3>Alimiyyah Fazila</h3>
        <p>

          &#10023; Arabic Literature <br>
          &#10023;Logic (Mantiq) <br>
          &#10023;Islamic Theology (‘Aqidah) <br>
          &#10023; Principles of Islamic(Fiqh usal) <br>
          &#10023;Fiqh (Jurisprudence)<br>
          &#10023;Hadith (Prophetic Traditions)<br>
          &#10023;Usul al-Tafsir (Principles of Exegesis)<br>
          &#10023;Tafsir al-Qur’an (Exegesis) <br>
          &#10023;Sirah (Prophetic Biography) <br>
          &#10023;Arabic Literature <br>
          &#10023; Arabic Grammar,Syntax<br>
          &#10023;Sciences of Hadith <br>
        </p>
        <!-- <ul>
          <i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 3 Years

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 2.PNG" alt="">
        <h3>Alimiyyah Fazila</h3>
        <p>

          &#10023; Logic (Mantiq) <br>
          &#10023; Islamic Theology (‘Aqidah) <br>
          &#10023;Principles of Islamic (Fiqh Usul) <br>
          &#10023;Fiqh (Jurisprudence)<br>

          &#10023; Hadith (Prophetic Traditions) <br>
          &#10023;Usul al-Tafsir (Principles of Exegesis) <br>
          &#10023; Tafsir al-Qur’an (Exegesis) <br>
          &#10023;Sirah (Prophetic Biography) <br>
          &#10023;Arabic Literature <br>
          &#10023; Sciences of Hadith<br>
          &#10023;Arabic Grammar Syntax<br>
        </p>
        <!-- <ul>
          <i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 6 Years

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 3.PNG" alt="">
        <h3>Hifz-ul-Quran & Nazra Program</h3>
        <p>
          &#10023;Read Quran with proper pronunciation.Understand meaning of each word and verse of Quran.Develop basic
          understanding of Arabic grammar and vocabulary <br>
          &#10023;Memorize the entire Quran in its original Arabic language.Develop a strong connection with the Quran
          and establish a lifelong.learn the rules of Tajweed (pronunciation)
        </p>
        <!-- <ul>
          <li><i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 2 Years </li>

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 4.PNG" alt="">
        <h3>Tafseer Course Program</h3>
        <p>
          &#10023; Develop in-depth understanding of the Quran and its message, context, and historical background. <br>
          &#10023; Makki and Madani chapters are there in the Holy Quran <br>
          &#10023; The cause of punishing past Ummah <br>
          &#10023; Methodology of Quranic interpretation <br>
          &#10023;To study the various themes, topics, and styles of the Quran and their relevance to contemporary
          issues

        </p>
        <!-- <ul>
          <li><i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 10 Month </li>

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 5.PNG" alt="">
        <h3>FIQH Program</h3>
        <p>

          &#10023;Complete book of Bahar e Shariat which will make you an Islamic jurisprudent. <br>
          &#10023;Complete knowledge about Taharat and Salah. <br>
          &#10023;Rulings about fasting, pilgrimage, Zakat. <br>
          &#10023;Rulings about selling and buying in detail and many other things about which to attain knowledge is
          compulsory.
        </p>
        <!-- <ul>
          <li><i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 6 Month</li>

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 6.PNG" alt="">
        <h3>Darse Nizami Program</h3>
        <p>

          &#10023;  Holy Quran & its commentary <br>
          &#10023;  Hadees & its Usool <br>
          &#10023;  Fiqh & its Usool <br>
          &#10023;  Balaghat (Rhetoric), Mantiq and many other sciences as well in detail <br>
          &#10023;  To gain an understanding of Sufism, its principles, and practices. <br>
          &#10023; Knowledge of Islamic theology and belief system <br>
          &#10023; To learn the methodology of Islamic scholarship and research
        </p>
        <!-- <ul>
          <li><i class="fa fa-calendar" aria-hidden="true"></i> Course Duration: 3 Years </li>

        </ul> -->
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>
      <div class="box">
        <img src="../images/course 7.PNG" alt="">
        <h3>Hajj and Umrah Program</h3>
        <p>
          &#10023; To gain a comprehensive understanding of the rites and rituals of Hajj and Umrah. <br>
          &#10023; To study the historical and religious significance of Hajj and Umrah in Islam. <br>
          &#10023; To prepare for the physical and spiritual demands of the Hajj and Umrah journey, including the importance of physical fitness and self-discipline. <br>
        </p>
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

      <div class="box">
        <img src="../images/course 8.PNG" alt="">
        <h3>Arabic Grammar Program</h3>
        <p><br>
          &#10023; You will learn about Nahw (Syntax)<br>
          &#10023;  You will also learn about Sarf (Phonology)<br>
          &#10023;  The details of Arabic grammar’s rules, their understanding with usage and many other things <br>
          &#10023; To learn the basic vocabulary of the Arabic language and its common usage.To prepare for advanced studies in the Arabic language and literature
        </p>
        <a href="../html/admission.php" class="btn">Enroll Now</a>
      </div>

    </div>

  </div>




  <!------------------------ Footer ------------------------>
  <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color:rgba(0, 0, 0, 0.2)">
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
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 155px; background-color: #7c4dff; height: 3px" />
            <p class="fs-5">
              Emphasis on the study and interpretation of the Quran and Hadith, the foundational texts of Islam.Respect
              for diversity and tolerance towards other religions and cultures.Importance of religious and moral
              education.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold">Our programs</h4>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 120px; background-color: #7c4dff; height: 3px" />

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
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; background-color: #7c4dff; height: 3px" />
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
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 70px; background-color: #7c4dff; height: 3px" />
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
    <div class="text-center p-3 fs-5 " style="background-color: rgba(0, 0, 0, 0.2)">
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