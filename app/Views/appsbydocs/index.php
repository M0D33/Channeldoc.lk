<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard|Practitioner Profiles </title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap css -->

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
          <a class="nav-link" href="#">
            Contact Us
          </a>         
        </li>
        <ul class ="navbar-nav ms">
        <?php if(isset($_SESSION['admin_id'])){ ?>
        <a class="nav-link btn logoutbtn" href= <?php echo site_url('/Adminlogin/logout') ?> style="text-decoration:none">Logout</a>
         <?php }else{ ?>
         <a class="nav-link btn loginbtn" href=<?php echo site_url('/Adminlogin/index') ?> style="text-decoration:none">Login</a>
         <?php } ?>
    </ul>
</ul>
      
    </div>
  </div>
</nav>

<br> <br> <br>
<br> 
<h2 class="decorated"><span>Edit your slots here</span></h2>
<br>
<?php if (!empty(session()->getFlashdata('success'))) : ?>
                          <div style="margin-top:5px" class="alert alert-success text-muted"> <?= session()->getFlashdata('success'); ?> </div>
                        <?php endif ?>
                        
    <!-- Practitioner Accounts Awaiting Approval -->
    <div class="card">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Your slots</h4>
                    </div>
                    <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('success'); ?> </div>
      <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('fail'); ?> </div>
      <?php endif ?>
                        <div class="table-responsive">
                        <table class="table ">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Time</th>
                                    <th>Location</th>                             
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

session();

$doctorID = session()->get('doctor_id');
            
$doctorModel = new \App\Models\Appointments; //Change to appointmentdoc!!!!!!

$query = $doctorModel -> query("SELECT * FROM appointmentdoc WHERE doctor_id = $doctorID");

                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                        <td><?php echo $row -> time ?></td>
                                        <td><?php echo $row -> location ?></td>
                                       
                                       
                                        <td>
                                            <a href="<?php echo base_url('appsbydocs/deleteslot/'.$row -> appointmentiddoc)?>" class="btn btn-danger float-end btn-sm">Delete Slot</a>
                                        </td>
                                        
                                    </tr>
                                <?php 
                                } 
                                ?>

                            </tbody>
                        </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </html>