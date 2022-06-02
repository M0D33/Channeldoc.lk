<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Report</title>
    <!-- Style Sheets & CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <!-- For the Font Library -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&family=Raleway:wght@300&display=swap" rel="stylesheet">

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
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('AdminDashboard/index') ?>">Dashboard</a>
        </li>
        <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member Profiles
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('AdminDoctorProfiles/index') ?>">Practitioner Profiles</a>
                <a class="dropdown-item"  href="<?php echo site_url('AdminPatientProfiles/index') ?>">Patient Profiles</a>

              </div>
            </li> -->
            <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('AdminPatFb/index') ?>">Manage Feedbacks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('AdminDoctorProfiles/index') ?>">Doctor Profiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo site_url('AdminPatientProfiles/index') ?>">PatientProfiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('AdminManage/index') ?>">
            Admin Management 
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


<br><br>

<div class="container">
<br><br>

<h1> Channeldoc.lk </h1><br>

<h3><u>Issued Admin Details</u></h3>

<div class="row">
           
              <?php
              session();

              $adminID = session()->get('admin_id');
              $adminModel = new \App\Models\adminModel;
              $query = $adminModel->query("SELECT * FROM admin WHERE admin_id = $adminID");
              foreach ($query->getResult() as $row) {

              ?>              
               
                <div class="profile">

                <ul>
                <li>Admin ID: <b> <?php echo $row->admin_id?></b></li>
                <li>Username: <b><?php echo $row->username ?></b></li>
                <li>Type: <b><?php echo $row->Type ?></b></li>
                


                </ul> 
                <?php } ?>
                </div>
</div>
<hr>

<h3><u>Doctor Approval details</u></h3>

<div class="row mb-2">
    
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Approved Doctors</strong>
              
              <div class="table-responsive">
                        <table class="table">
                        <thead >
                                <tr>
                                    
                                    <th>Doctor_id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Government Register Number</th>
                                    <th>Email</th>
                                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $doctorModel = new \App\Models\doctorModel;
                                $query = $doctorModel->query("SELECT * FROM doctor WHERE approval = '1'");
                                foreach ($query->getResult() as $row) {

                                ?>
                                    <tr>
                                        <td><?php echo $row -> doctor_id ?></td>
                                        <td><?php echo $row -> Fname ?></td>
                                        <td><?php echo $row -> Lname ?></td>
                                        <td><?php echo $row -> Govt_RegNo ?></td>
                                        <td><?php echo $row -> Email ?></td>
                                        
                    
                                        
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
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">Doctors have to be approved</strong>
              
              <div class="table-responsive">
                        <table class="table">
                        <thead >
                                <tr>
                                    
                                    <th>Doctor_id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Government Register Number</th>
                                    <th>Email</th>
                                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $doctorModel = new \App\Models\doctorModel;
                                $query = $doctorModel->query("SELECT * FROM doctor WHERE approval = '0'");
                                foreach ($query->getResult() as $row) {

                                ?>
                                    <tr>
                                        <td><?php echo $row -> doctor_id ?></td>
                                        <td><?php echo $row -> Fname ?></td>
                                        <td><?php echo $row -> Lname ?></td>
                                        <td><?php echo $row -> Govt_RegNo ?></td>
                                        <td><?php echo $row -> Email ?></td>
                                        
                                        
                    
                                        
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

<hr>

<h3><u>Registered Patient Details</u></h3>

              <div class="table-responsive">
                        <table class="table">
                        <thead >
                                <tr>
                                    
                                    <th>Patient_id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $patientModel = new \App\Models\employeeModel;
                                $query = $patientModel->query("SELECT * FROM user ");
                                foreach ($query->getResult() as $row) {

                                ?>
                                    <tr>
                                        <td><?php echo $row -> user_id ?></td>
                                        <td><?php echo $row -> fname ?></td>
                                        <td><?php echo $row -> Lname ?></td>
                                        <td><?php echo $row -> age ?></td>
                                        <td><?php echo $row -> Gender ?></td>
                                        <td><?php echo $row -> Email ?></td>
                                        
                    
                                        
                                    </tr>
                                <?php 
                                } 
                                ?> 

                            </tbody>
                            
                            
                                        
                        </table>
                </div>
             


</div>