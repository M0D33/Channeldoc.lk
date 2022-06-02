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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Channeling/index') ?>">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href= <?php echo site_url('/Search/index') ?>>Doctors</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Aboutus/index') ?>">
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
      <h5 class="card-title">Patient Details</h5>
      <p class="card-text" style="color:#787878">Click on the save changes to update your profile</p>

      <form action="<?php echo site_url('/patientProfile/editProfile') ?>" method="POST" enctype="multipart/form-data">
        <?php
        session();
        session()->regenerate();
        $user_id = session()->get('user_id');
        $employeeModel = new \App\Models\employeeModel();
        $user_info = $employeeModel->where('user_id', $user_id)->first();

        $query_user = $employeeModel->query("Select * from user where user_id = $user_id");
        foreach ($query_user->getResult() as $row) {
          $fname = $row->fname;
          $Lname = $row->Lname;
          $NIC = $row->NIC;
          $Email = $row->Email;
           $Address = $row->Address;
           $district = $row->district;
           $age = $row->age;
          $Gender =  $row->Gender;
          $phonenumber = $row->phonenumber;
      
          // $dob = $row->dob;
      

    
        }

        ?>

       <div class="form-row">
        <div class="row mt-2">
          <div class="form-group col-md-4">
            <label>First Name</label>
            <input class="form-control" type="text" placeholder="First Name" name="fname" id="fname" value = "<?php echo $fname ?>"> 
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group col-md-4">
            <label>Last Name</label>
            <input class="form-control" type="text" placeholder="Last Name" name="Lname" id="Lname" value = "<?php echo $Lname ?>"> 
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group col-md-4">
            <label>NIC</label>
            <input class="form-control" type="text" placeholder="NIC" name="NIC" id="NIC" value = "<?php echo $NIC ?>"> 
            <small class="form-text text-danger"></small>
          </div>
      </div>
          
      <div class="row mt-2">
          <div class="form-group col-md-4">
            <label>Age</label>
            <input type='number' class="form-control" required='yes' id='age' placeholder="Enter age" name='age' required= "yes" value="<?php echo $age ?>"  >
            <small class="form-text text-danger"></small>
          </div>
          
          <div class="form-group col-md-4">
            <label>Address</label>
            <input class="form-control" type="text" placeholder="Address" name="Address" id="Address" value="<?php echo $Address ?>" >
            <small class="form-text text-danger"></small>
          </div>

          <div class="form-group col-md-4">
            <label>District</label>
            <input type='text' class="form-control" required='yes' id='district' placeholder="Enter district" name='district' required= "yes" value="<?php echo $district ?>"  >
            <small class="form-text text-danger"></small>
          </div> 
      </div>
    
    
          
      <div class="row mt-2">
          <div class="form-group col-md-4">
            <label>Contact No</label>
            <input class="form-control" type="tel" placeholder="Contact No" name="phonenumber" id="phonenumber" value="<?php echo $phonenumber ?>">
            <small class="form-text text-danger"></small>
          </div>

       <div class="form-group col-md-4">
            <label>Email</label>
            <input class="form-control" type="email" placeholder="Email" name="Email" id="Email" value="<?php echo $Email ?>"> 
            <small class="form-text text-danger"></small>
          </div>
      </div>
      

       </div>

          <br>
          <div class="form-row">
            <button type="submit" class="btn btn-primary btnlogin" >Save Changes</button>
            <a href="<?php echo base_url('patientProfile/deleteProfile/')?>" style="margin-left:15px" class="btn btn-danger  btn-md">Delete Profile</a>
            <!-- <button style="margin-left:15px;" type="button" class="btn btn-danger btnlogin" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Delete Profile</button> -->
           <!-- <button style="margin-left:15px" href="<?php echo base_url('/patientProfile/deleteProfile')?>" class="btn btn-danger" >Delete Profile</a></button> -->
          
            <?php if(isset($validation)) { ?>
                     <div class="alert alert-danger" role="alert">
                     <?= $validation->listErrors(); ?>
                    <?php } ?>
          </div>
   
      </form>
      </div>
    </div>


    
 
</body>

</html>