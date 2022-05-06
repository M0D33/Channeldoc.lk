<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ChannelDoc.lk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

	
</head>
<body>

<?php

$session=session();

//return view("Welcome/index.php");

if($session->has('id'))
{
    echo "Session + Login Successful: Welcome ";
    echo $session->getFlashdata('info');
    echo "<br>Welcome " . $session->fname. ".";
}
?>

 <!-- NavBar -->
 <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Channeldoc.lk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class ="nav-item">
        <?php if(isset($_SESSION['user_id'])){ ?>
        <a class="nav-link" href= <?php echo site_url('/patientProfile/index') ?> >My Profile</a>
        <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Search/index') ?>">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Aboutus/index') ?>">
            About Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Feedback/index') ?>">
           Feedback
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Contactus/index') ?>">
            Contact Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="btn btn-warning" href="tel:110">Call Ambulance</a>  
        </li>
        <ul class ="navbar-nav ms">
        <?php if(isset($_SESSION['user_id'])){ ?>
        <a class="nav-link btn logoutbtn" href= <?php echo site_url('/login/logout') ?> style="text-decoration:none">Logout</a>
        <?php }else{ ?>
       <a class="nav-link btn loginbtn" href=<?php echo site_url('/login/index') ?> style="text-decoration:none">Login</a>
      <?php } ?>
    </ul>
</ul>
      




    </div>
  </div>
</nav>


<!--Banner-->
<section id="banner-main" class="d-flex align-items-center">
    <div class="container" >
      <h1>Welcome to <span>Channeldoc.lk</span></h1>
      <h2>Your one stop solution for all your channelling needs</h2>
      <div class="d-flex">
        <a href=<?php echo site_url('login/index') ?> class="btn-get-started">Get Started</a>
      </div>
    </div>
  </section>

<!--Carousel-->
  <section id="hero-carousel">
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>

  <!-- Wrapper for carousel items -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="img-fluid d-block  w-100" src="<?= base_url('assets/images/sample 3.jpg') ?>" alt="...">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 img-fluid" src="<?= base_url('assets/images/banner.jpg') ?>" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!------ Doctors Section ------>
<section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title">
          <h2>Our Doctors</h2>
          <p>Meet some of our highly rated Doctors!</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"> <img src="<?= base_url('assets/images/doctors-1.jpg') ?>"  class="img-fluid" alt=""></div> 
              <div class="member-info">
                <h4>Dr. Wenuja Jayasinghe</h4>
                <span>Cardiology</span>
                <p>Information about Practitioner</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url('assets/images/doctors-2.jpg') ?>"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Abhiram Rathnayake</h4>
                <span>General Practitioner</span>
                <p>Information about Practitioner</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url('assets/images/doctors-3.jpg') ?>"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Merfah Khalid</h4>
                <span>Psychology</span>
                <p>Information about Practitioner</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url('assets/images/doctors-4.jpg') ?>"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Anzal Ahmed</h4>
                <span>Dermatology</span>
                <p>Information about Practitioner</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Doctors Section -->
    <br>



 <!-- Question Accordion -->
 <section id="questions" class="questions p-5 section-bg">
      <div class="container">
      <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Check what other users have been asking frequently about our echanelling portal</p>
        </div>

        <div class="bg-primary accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header text-black">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
                How do I sign up?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Go to our login section to register and get started today! 
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
                How much does it cost to sign up?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Registration is free of charge! 
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
               Will my personal health information be public?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
               Your privacy is our priority, all your personal data will be shared only with the practitioner 
              </div>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-four"
              >
                How can I meet a practitioner?
              </button>
            </h2>
            <div
              id="question-four"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
               Search for your desired practitioner and open his/her profile and send a request to channel. You will be prompted when the practitioner has accepted your request
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    


 





      


   <!-- Footer -->
   <footer class="footer bg-light text-#28a745 pt-5 pb-3">

<div class = "container text-center text-md-left">
  
<div class="row text-center text-md-left">

<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Channeldoc.lk</h5>
  <p> An e-channelling website, with the goal of making quality healthcare with the best practitioners accessible to anyone anywhere in Sri Lanka </p>
</div>

<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Sitemap</h5>
<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Home</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Channelling</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> About Us</a>
</p>


<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Contact Us</a>
</p>


</div>

<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Useful Links</h5>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> TBD</a>
</p>


</div>

<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
            <p>
                <i class="fas fa-home mr-3"></i> 95b Srimath Anagarika Dharmapala Mawatha, Colombo 00007, Sri Lanka
            </p>
            <p>
                <i class="fas fa-envelope mr-3"></i> channeldoc.lk@gmail.com
            </p>
            <p>
                <i class="fas fa-phone mr-3"></i> (+94) 77 579 2352
            </p>
            
        </div>

</div>

<hr class ="mb-4">

<div class= "row align-item-left ">

<div class="col-md-7 col-lg-8">
<p class = "footer-text"> Copyright&copy; 2022 All rights reserved by: 
<a href="#" >
  <strong class="text-warning">Group 5 </strong>
</a></p>
</div>

<div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">

                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
                
            </div>
            
        </div>
        
    </div>

</div>

</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   



</body>
</html>