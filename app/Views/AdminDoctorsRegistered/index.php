<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Style Sheets & CSS Files -->
    <link rel="stylesheet" href="<?php

use CodeIgniter\Database\Query;

 echo base_url('/assets/css/nav.css') ?>">
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
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
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
 <!-- End Of NavBar -->


<br>
  <div class="container">
  <br> <br>
            


  <div class="row">
		
                    <div class="table-responsive">
                        <table class="table">
                        <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    
                                    <th>Doctor ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    
                                            
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    session();

                                    $newmsg = new \App\Models\doctorModel;

                                    // Runs query to get approved ads of the user
                                    $query = $newmsg -> query("SELECT * FROM doctor WHERE approval = '1' ");; 
                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                            <td><?php echo $row -> doctor_id ?></td>
                                            <td><?php echo $row -> Fname ?></td>
                                            <td><?php echo $row -> Lname ?></td>
                                            <td><?php echo $row -> Gender ?></td>
                                            <td><?php echo $row -> qualification ?></td>
                                            <td><?php echo $row -> areaofexpertise ?></td>
                                            <td><?php echo $row -> district ?></td>
                                            <td><?php echo $row -> placeofwork ?></td>
                                        
                    
                                        
                                    </tr>
                                <?php 
                                } 
                                ?>

                            </tbody>
                            
                            
                                        
                        </table>
                        <a href="<?php echo base_url('Adminnewcontactusmessages/seeconusmsg')?>" class="btn btn-success float-end btn-sm">Mark as read & Go Back</a>
                    </div>
        </div>
       


  </div>

</body>
</html>