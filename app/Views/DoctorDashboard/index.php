<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" name="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title> My Profile|Practitioner </title>
  <!-- CSS stylesheet for navigation bar -->
  <link rel="stylesheet" href="<?= base_url('assets/css/nav.css') ?>" />

  <!-- For the Font Library -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&family=Raleway:wght@300&display=swap" rel="stylesheet">

  <!-- Scripts for Navbar -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

   <!-- Style Sheets & CSS Files -->
   <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
          <a class="nav-link"href= <?php echo site_url('/doctorProfile/index') ?>>My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/AppointmentsPractitioners/index') ?>>Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/fbfordoctor/index') ?>>Feedbacks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/appsbydocs/index') ?>>Edit My Sessions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/DoctorAboutus/index') ?>">
            About Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/DoctorContactus/index') ?>">
            Contact Us
          </a>         
        </li>
        <ul class ="navbar-nav ms">
        <?php if(isset($_SESSION['doctor_id'])){ ?>
  <a class="nav-link btn logoutbtn" href= <?php echo site_url('/doctorlogin/logout') ?> style="text-decoration:none">Logout</a>
    <?php }else{ ?>
  <a class="nav-link btn loginbtn" href=<?php echo site_url('/doctorlogin/index') ?> style="text-decoration:none">Login</a>
  <?php } ?>
    </ul>
</ul>
  
    </div>
  </div>
</nav>

<br><br>
<div class="container">
  <br> <br>
    <div class="card">
        <div class="card-header">
            <h3> Dashboard </h3>
        </div>


        <div class=" flex-d flex-row justify-content-between ml-5 mr-5 mt-4">
            <div class="row mb-4">
                <div class="col-md-3">
                  <div class ="card">
                    <div class="card-body">
                        <i class="fa fa-code-fork"></i>
                        <h5 class="card-title">New Appointments</h5>
                        <span class="count-numbers" id="jobPostings"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('DocDashNewAppoint/index') ?> class="btn btn-primary">Click</a>
                      
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                <div class ="card">
                    <div class="card-body">
                        <i class="fa fa-ticket"></i>
                        <h5 class="card-title">Appointments in Progress</h5>
                        <span class="count-numbers" id="applicantsApplied"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('DocDashAppointPro/index') ?> class="btn btn-primary">Click</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">Finished Appointments</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('DocDashFinishAppoint/index') ?> class="btn btn-primary">Click</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">Medical Document Requests</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('DocDashDocReq/index') ?> class="btn btn-primary">Click</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">Feedbacks you got</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('fbfordoctor/index') ?> class="btn btn-primary">Click</a>
                    </div>
                </div>
            </div>

                
            </div>

          

        </div>


    </div>
    <br>
    <a href=<?php echo site_url('DoctorReport/index') ?> class="btn btn-primary"> Generate Report </a> 
    </div>




</body>
</html>