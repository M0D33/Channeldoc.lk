<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|Patient Profiles </title>
	
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">


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
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member Profiles
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('AdminDoctorProfiles/index') ?>">Practitioner Profiles</a>
                <a class="dropdown-item"  href="<?php echo site_url('AdminPatientProfiles/index') ?>">Patient Profiles</a>

              </div>
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
<br> <br> <br>
<div class="card">
    <div class="card-header">
      <h2> Patient Profiles Summary </h2>
    </div>
  </div>
    </div>

    <!-- Patients l -->
    <div class="card">
        <div class="row">
            <div class="col-md-12 mt-5">
             
                    <div class="card-header">
                        <h4>Patients Registered to the System</h4>
                    </div>
                    <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('success'); ?> </div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div style="margin-top:5px" class="alert alert-danger text-muted"> <?= session()->getFlashdata('fail'); ?> </div>
                   <?php endif ?>
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Account ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>E-mail</th>
                                    <th>Contact Number</th>
                                    <th>NIC</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>Approval</th>
                                    <th>Removal</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                    session();

                                    $employeeModel = new \App\Models\employeeModel;

                                    // Runs query to get approved ads of the user
                                    $query = $employeeModel -> query("SELECT * FROM user "); 

                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                        <td><?php echo $row -> user_id ?></td>
                                        <td><?php echo $row -> fname ?></td>
                                        <td><?php echo $row -> Lname ?></td>
                                        <td><?php echo $row -> Gender ?></td>
                                        <td><?php echo $row -> Email ?></td>
                                        <td><?php echo $row -> phonenumber ?></td>
                                        <td><?php echo $row -> NIC ?></td>
                                        <td><?php echo $row -> Address ?></td>
                                        <td><?php echo $row -> district ?></td>
                                        <td>
                                            <a href="<?php echo base_url('AdminPatientProfiles/approveUser/'.$row -> user_id)?>" class="btn btn-success float-end btn-sm">Approve Profile</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('AdminPatientProfiles/deleteUser/'.$row -> user_id)?>" class="btn btn-danger float-end btn-sm">Delete Profile</a>
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






    <!--Footer-->
  
<!--js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>