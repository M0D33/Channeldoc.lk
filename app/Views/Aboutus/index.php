<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" name="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/register_employerStyles.css') ?>" />

  <!-- CSS stylesheet for navigation bar -->
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/navbar.css') ?>" />

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
          <a class="nav-link active" aria-current="page" href= <?php echo site_url('/Home/index') ?>>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/patientProfile/index') ?>>My Profile</a>
        </li>
        <!-- <-- need to add this to other pages --> 
        
        <li class="nav-item">
          <a class="nav-link" href="#">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href= <?php echo site_url('/Search/index') ?>>Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            About Us
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



<br><br><br><br>
<br>
<div class="container">
<div class="col-md-20 blog" >
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            About Us
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Channeldoc.lk</h2>
            <p class="blog-post-meta">February 28, 2022 </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr>
            
          </div><!-- /.blog-post -->

          

</div>
</div>

</body>
</html>