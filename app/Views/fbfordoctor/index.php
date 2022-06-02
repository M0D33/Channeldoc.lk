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
<br> <br>
  <div class="card" style="margin-left:20px;margin-right:20px">
    <div class="card-header bg-custom" style="color:white">
      My Profile
    </div>
    <div class="card-body">
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('fail'); ?> </div>
      <?php endif ?>

      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div style="margin-top:5px" class="alert alert-success text-muted"> <?= session()->getFlashdata('success'); ?> </div>
      <?php endif ?>
      <h5 class="card-title">Feedback you've got</h5>






      <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Patient's name</th>
                                    <th>Description</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php
 session();
 session()->regenerate();
 $doctor_id = session()->get('doctor_id');
 $doctorModel = new \App\Models\doctorModel();
                                    session();

                                    $fb= new \App\Models\fb;

                                    // Runs query to get approved ads of the user
                                    $query = $fb -> query("SELECT * FROM fb where doctor_id = $doctor_id "); 

                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                        <td><?php echo $row -> fname ?></td>
                                        <td><?php echo $row -> Description ?></td>
                                       
                                        </td>
                                       
                                        
                                    </tr>
                                <?php 
                                } 
                                ?>
                            </tbody>
                        </table>