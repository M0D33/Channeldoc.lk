<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css') ?>">


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

 <!-- End Of NavBar -->


<form action=<?php echo site_url('AdminManage/readdb') ?>  method='post' >

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 bg-light pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="https://i.imgur.com/ucirQQf.png" class="image"> </div>
                    <div class="row px-3 text-center justify-content-center">
                        <h3>Channeldoc.lk</h3> 
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <h3 class="mb-1">Create an Admin account</h3>
                    
                    
                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Username</h6>
                            </label> 
                            <input type='text' class="form-control" placeholder="Enter User Name" required='yes' id='username' name='username' required= "yes" value=<?php old('username') ?> >
                        </div>

                    <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label>
                            <input type='password' class="form-control" required='yes' id='password' placeholder="Enter Password" name='password' required= "yes"  >
                             </div>
                    </div>

                    <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Type</h6>
                            </label> 
                            <input type='text' class="form-control" required='yes' placeholder="Enter Type" id='Type' name='Type' required= "yes" value=<?php old('Type') ?> >
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-5"> <button class="btn btn-green text-center mb-1">Create Account</button> </div>
                        <div class="col-md-7"> <small class="text-muted">By creating an account, you understand and agree to Channeldoc.lk's <u>Terms of Service</u>, including the <u>User Agreement</u> and <u>Privacy Policy</u>.</small> </div>
                    </div>
                    

                    <?php if(isset($valid)) { ?>
                     <div class="alert alert-danger" role="alert">
                     <?= $valid->listErrors(); ?>
                    <?php } ?>

                </div>
            </div>
         </form>
        </div>
    </div>
</div>
</div>
  </div>

<br> 
<h2 class="decorated"><span>Admin Profile Summary</span></h2>
<br>

    <!-- Patients l -->
    <div class="card-main">
        <div class="row">
            <div class="col-md-12 mt-5">
                    <div class="card-header">
                        <h4>Admins Registered to the System</h4>
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
                                    <th>Admin ID</th>
                                    <th>Username</th>
                                    <th>Removal</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                    session();

                                    $adminModel = new \App\Models\adminModel;

                                    // Runs query to get the admins in the system
                                    $query = $adminModel -> query("SELECT * FROM admin "); 

                                    foreach ($query -> getResult() as $row){

                                ?>
                                    <tr>
                                        <td><?php echo $row -> admin_id ?></td>
                                        <td><?php echo $row -> username ?></td>
                                        <td>
                                            <a href="<?php echo base_url('AdminManage/deleteUser/'.$row -> admin_id)?>" class="btn btn-danger float-end btn-sm">Delete Profile</a>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>