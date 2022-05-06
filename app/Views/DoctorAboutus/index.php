<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" name="">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- For the Font Library -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&family=Raleway:wght@300&display=swap" rel="stylesheet">

  <!-- Scripts for Navbar -->
  <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />


</head>

<body>


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
          <a class="nav-link" href="<?php echo site_url('/DoctorDashboard/index') ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/doctorProfile/index') ?>>My Profile</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="#">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href="#">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/AppointmentsPractitioners/index') ?>">
           Appointments
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/AppointmentsPractitioners/index') ?>">
           Appointments
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/DoctorAboutus/index') ?>">
            About Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Contact Us
          </a>         
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
<!-- <p style="background-image: src="<?= base_url('assets/images/img123.jpg') ?>"> -->
<br> <br> <br>
<div class="container">
    <div class="card" style="margin-left:20px;margin-right:20px">
    <div class="card-header bg-custom" style="color:white">
      Contact Us
    </div>
		<div class="col-md-12 mt-5 mb-5">
        
            <div class = "contact-section">
                    <div class= "contact-info">
                  
                        <div><p class="text-center"><i class ="fas fa-map-marker-alt"></i> 95b Srimath Anagarika Dharmapala Mawatha, Colombo 00007, Sri Lanka</p></div>
                        <div><p class="text-center"><i class ="fas fa-envelope"></i> channeldoc.lk@gmail.com</p></div>
                        <div><p class="text-center"><i class ="fas fa-phone"></i> (+94) 77 579 2352</p></div>
                    
                    </div>
                    <hr>
                    <hr>
                    <br>
                    <div class="card-body">
                      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                          <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('fail'); ?> </div>
                        <?php endif ?>

                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                          <div style="margin-top:5px" class="alert alert-success text-muted"> <?= session()->getFlashdata('success'); ?> </div>
                        <?php endif ?>
                    
                    <form class="contact" action="<?php echo site_url('/DoctorContactus/writedb')   ?>" method="post">
                    <div class="form-row">
                    <div class="row mt-2">
                    <div class="form-group col-md-4">
                    <p class="text-center">
                    <label>Your Name: </label>
                        <input type="text" id="name" name="name" class = "text-box" placeholder="Your Name" required="yes"></p>
                    </div>
                    <div class="form-group col-md-4">
                    <p class="text-center">
                    <label>Email: </label>
                        <input type="email" id="email" name="email" class = "text-box" placeholder="Your Email" required="yes"></p>
                    </div>
                    <br><br>
                    
                    <label>Massage: </label>
                        <textarea  id="message" name="message" rows="5" placeholder="Your Message" required="yes"></textarea>
                        <input type="hidden" name='seen' value="0">

                        <input type="submit" name="submit" class="btn btn-primary mb-2" value = "send">
                        </div>
                    </div>
                    </form>
                    </div>
                
               
            </div>
       
        </div>
    
        </div>
</div>


</body>
</html>