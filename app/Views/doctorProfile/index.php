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
      <h5 class="card-title">Practitioner Details</h5>
      <p class="card-text" style="color:#787878">Click on the save changes to update your record</p>

      <form action="<?php echo site_url('/doctorProfile/editProfile') ?>" method="POST" enctype="multipart/form-data">
        <?php
        session();
        session()->regenerate();
        $doctor_id = session()->get('doctor_id');
        $doctorModel = new \App\Models\doctorModel();
        $user_info = $doctorModel->where('doctor_id', $doctor_id)->first();

        $query_user = $doctorModel->query("Select * from doctor where doctor_id = $doctor_id");
        foreach ($query_user->getResult() as $row) {
          $Fname = $row->Fname;
          $Lname = $row->Lname;
          $NIC = $row->NIC;
          $Email = $row->Email;
           $Address = $row->Address;
           $district = $row->district;
           $Age = $row->Age;
          $Gender =  $row->Gender;
          $phonenumber = $row->phonenumber;
          $areaofexpertise = $row-> areaofexpertise;
          $placeofwork = $row->placeofwork;
          $qualification =$row-> qualification;
        }

        ?>


        <div class="form-row">
        <div class="row mt-2">

          <div class="form-group col-md-4">
            <label>First Name</label>
            <input class="form-control" type="text" placeholder="First Name" name="Fname" id="Fname" value = "<?php echo $Fname ?>"> 
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
            <input type='number' class="form-control" required='yes' id='Age' placeholder="Enter age" name='Age' value= "<?php echo $Age ?>"  >
            <small class="form-text text-danger"></small>
          </div>
          
          <div class="form-group col-md-4">
            <label>Address</label>
            <input class="form-control" type="text" placeholder="Address" name="Address" id="Address" value="<?php echo $Address ?>">
            <small class="form-text text-danger"></small>
          </div>

          <div class="form-group col-md-4">
            <label>District</label>
            <input type='text' class="form-control" required='yes' id='district' placeholder="Enter district" name='district' required= "yes" value="<?php echo $district ?>" >
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
      
          <div class="form-group col-md-4">
            <label>areaofexpertise</label>
            <input class="form-control" type="text" placeholder="areaofexpertise" name="areaofexpertise" id="areaofexpertise" value = "<?php echo $areaofexpertise ?>"> 
            <small class="form-text text-danger"></small>
          </div>
      </div>
     
      <div class="row mt-2">

          <div class="form-group col-md-4">
            <label>placeofwork</label>
            <input class="form-control" type="text" placeholder="placeofwork" name="placeofwork" id="placeofwork" value = "<?php echo $placeofwork ?>"> 
            <small class="form-text text-danger"></small>
          </div>

          <div class="form-group col-md-4">
            <label>qualification</label>
            <input class="form-control" type="text" placeholder="qualification" name="qualification" id="qualification" value = "<?php echo $qualification ?>"> 
            <small class="form-text text-danger"></small>
          </div>
      </div>
          
       </div>

          <br>
          <div class="form-row">
          <button type="submit" class="btn btn-primary btnlogin" >Save Changes</button>
          <a href="<?php echo base_url('doctorProfile/deleteProfile/')?>" style="margin-left:15px" class="btn btn-danger  btn-md">Delete Profile</a>

          <!-- <button style="margin-left:15px;" type="button" class="btn btn-danger btnlogin" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Delete Profile</button> -->
          
            <?php if(isset($validation)) { ?>
                     <div class="alert alert-danger" role="alert">
            </div> 
                     <?= $validation->listErrors(); ?>
                    <?php } ?>
          </div>
   
      </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('/doctorProfile/deleteProfile') ?>" method="POST">
        <p>  Your account will be deleted permanently. Are you sure you want to continue?</p>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Yes, I'm Sure</button>
      </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
  </div>

  <form action="<?php echo site_url('/doctorProfile/writedb') ?>" method="POST" enctype="multipart/form-data">

  <div class="form-row">
        <div class="row mt-2">

          <div class="form-group col-md-4">
            <label>Times Available</label>
            <input class="form-control" type="text" placeholder="Available times" name="time" id="time" >
            <label>Location</label>
            <input class="form-control" type="text" placeholder="Location" name="location" id="location" >
            <!-- <label>ID</label>
            <input class="form-control" type="text" placeholder="Enter your ID" name="doctor_id" id="doctor_id" > -->
            <small class="form-text text-danger"></small>
            <button type="submit" class="btn btn-primary btnlogin" >Submit</button>

          </div>
          </div>
          </div>
  </form>
 
</body>

</html>