<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    <div class="card">
        <div class="card-header">
            <h3> Dashboard </h3>
        </div>

        <?php 

        session();

        $patientModel = new \App\Models\employeeModel;

        $doctorModel = new \App\Models\doctorModel;


          ?>


        <div class=" flex-d flex-row justify-content-between ml-5 mr-5 mt-4">
            <div class="row mb-4">
                <div class="col-md-3">
                  <div class ="card">
                    <div class="card-body">
                        <i class="fa fa-code-fork"></i>
                        <h5 class="card-title">Patients Registered</h5>
                        <span class="count-numbers" id="jobPostings"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('AdminDashPatientReg/index') ?> class="btn btn-primary">Click</a>
                      
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                <div class ="card">
                    <div class="card-body">
                        <i class="fa fa-ticket"></i>
                        <h5 class="card-title">Doctors Registered</h5>
                        <span class="count-numbers" id="applicantsApplied"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('AdminDashDocReg/index') ?> class="btn btn-primary">Click</a>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">New Contactus Messages</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('Adminnewcontactusmessages/index') ?> class="btn btn-primary">see messages</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">New Feedback Messages</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('Adminnewfeedback/index') ?> class="btn btn-primary">see messages</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <i class="fa fa-users"></i>
                        <div class="card-body">
                          <h5 class="card-title">Manage recieved feedbacks</h5>                      
                        <span class="count-numbers" id="newcontactusmessages"></span>
                        <span class="count-name">View to see</span>
                        <a href=<?php echo site_url('Adminpatfb/index') ?> class="btn btn-primary">see messages</a>
                    </div>
                </div>
            </div>

          

        </div>


    </div>
    <a href=<?php echo site_url('AdminReport/index') ?> class="btn btn-primary"> Generate Report </a> 
    </div>

    

</body>

</html>