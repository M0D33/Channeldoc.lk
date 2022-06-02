<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" name="">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
          
          <li class="nav-item">
          <a class="btn btn-warning" href="tel:110">Call Ambulance</a>  
        </li>
          <ul class="navbar-nav ms">
            <?php if (isset($_SESSION['user_id'])) { ?>
              <a class="nav-link btn logoutbtn" href=<?php echo site_url('/login/logout') ?> style="text-decoration:none">Logout</a>
            <?php } else { ?>
              <a class="nav-link btn loginbtn" href=<?php echo site_url('/login/index') ?> style="text-decoration:none">Login</a>
            <?php } ?>
          </ul>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5 mb-5">
        <div class="col-md-12 mt-5 mb-5">
          <div class="box_general_3 cart">
            <div class="form_title">
              <h3> Doctor Details </h3>
            </div>

            <div class="row">
           
              <?php
              session();

              $doctorID = session()->get('doctor_id');
              $doctorModel = new \App\Models\doctorModel;
              $query = $doctorModel->query("SELECT * FROM doctor WHERE doctor_id = $doctorID");
              foreach ($query->getResult() as $row) {

              ?>

<!-- <a class="nav-link btn logoutbtn" href=<?php echo site_url('channeling/index/'.$row->doctor_id) ?> style="text-decoration:none">Channel this Doctor</a> -->
                
               
                <div class="profile">

<ul>
  <li>Doctor's ID: <b> <?php echo $row->doctor_id?></b></li>
  <li>Government register number: <b><?php echo $row->Govt_RegNo ?></b></li>
  <li>First Name: <b><?php echo $row->Fname ?></b></li>
  <li>Last Name: <b><?php echo $row->Lname ?></b></li>
  <li>Email: <b><?php echo $row->Email ?></b></li>
  <li>Gender: <b><?php echo $row->Gender ?></b></li>
  <li>Qualification: <b><?php echo $row->qualification ?></b></li>
  <li>Area of expertise: <b><?php echo $row->areaofexpertise ?></b></li>
  <li>District: <b><?php echo $row->district ?></b></li>
  <li>Place of Work: <b><?php echo $row->placeofwork ?></b></li>


</ul> 
<?php } ?>
</div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>






 





<!-- 
  <div class="row">
              <?php
              session();

              $doctorID = session()->get('doctor_id');
              $doctorModel = new \App\Models\appointmentdoc;
              $query = $doctorModel->query("SELECT * FROM appointmentdoc WHERE doctor_id = $doctorID");
              foreach ($query->getResult() as $row) {

              ?>

                <div class="profile">

                  <ul>

                    <li>Time <b><?php echo $row->time ?></b></li>
                    <li>Location <b><?php echo $row->location ?></b></li>
                    <a class="nav-link btn logoutbtn" href=<?php echo site_url('Doctordetails/book/' . $row->doctor_id. $row->time. $row->location) ?> style="text-decoration:none">Book</a>



                  </ul>
                 
                <?php } ?>  




                <form action=<?php echo site_url('Doctordetails/book') ?>  method='post' >

 -->











                
  <div class="row">
		
    <div class="table-responsive">
        <table class="table">
        <thead style = "background-color:#28a745;color:#FFFFFF" >
                <tr>
                    
                    <th>Time</th>
                    <th>Location</th>
                    
                            
                </tr>
            </thead>
            <tbody>
                <?php
  session();

  $doctorID = session()->get('doctor_id');
  $app = new \App\Models\appointmentdoc;
  $query = $app -> query("SELECT * FROM appointmentdoc WHERE doctor_id = $doctorID ");; 
                  
                  

                    // Runs query to get approved ads of the user
                    foreach ($query -> getResult() as $row){

                ?>
                    <tr>
                            <td><?php echo $row -> time ?></td>
                            <td><?php echo $row -> location ?></td>
                          
                        
    
                        
                    </tr>
                <?php 
                } 
                ?>

            </tbody>
            
            
                        
        </table>
    </div>
</div>



</div>











<form action="<?php echo site_url('Doctordetails/book/'.$row->doctor_id) ?>" method="POST" enctype="multipart/form-data">


<div class="col-lg-6">
<div class="card2 card border-0 px-4 py-5">
  <h3 class="mb-1">Enter prefered slot here!</h3>
  <div class="row mt-2">
      <div class="col-md-6"> <label class="mb-1">
              <h6 class="mb-0 text-sm">Time</h6>
          </label> 
          <input type='text' class="form-control" placeholder="Enter time" required='yes' id='time' name='time' required= "yes" >
      </div>
      <div class="col-md-6"> <label class="mb-0">
              <h6 class="mb-0 text-sm">Location</h6>
          </label> 
          <input type='text' class="form-control" required='yes' placeholder="Enter prefered location" id='location' name='location' required= "yes" >
      </div>
     
      <!-- <div class="col-md-6"> <label class="mb-0">
              <h6 class="mb-0 text-sm">Practitioner's ID</h6>
          </label> 
          <input type='text' class="form-control" required='yes' placeholder="Practitioner's ID" id='doctor_id' name='doctor_id' required= "yes" >
      </div> -->
  <!--   -->
  <div class="col-md-5"> <button class="btn btn-success">Submit</button> </div>
  <!-- <a href="<?php echo site_url('Doctordetails/book/' .$row->doctor_id) ?>" class="btn btn-outline-success float-end btn-sm">Book</a> -->

  <input type="hidden" name='status' value="0">


</form>


<?php if (!empty(session()->getFlashdata('success'))) : ?>
                          <div style="margin-top:5px" class="alert alert-success text-muted"> <?= session()->getFlashdata('success'); ?> </div>
                        <?php endif ?>







                        <form action="<?php echo site_url('doctordetails/writedb/'.$row->doctor_id) ?>" method="POST" enctype="multipart/form-data">

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 bg-light pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="<?= base_url('assets/images/user-reg.svg') ?>"  class="image"> </div>
                    <div class="row px-3 text-center justify-content-center">
                        <h4>Channeldoc.lk</h4> <small class="text-muted px-5 mx-1 mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <h3 class="mb-1">Give your feedback here</h3>
                    <div class="row mt-2">
                      
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Feedback Brief</h6>
                            </label> 
                            <input type='text' class="form-control" required='yes' placeholder="Enter the topic of your feedback in brief here" id='Brief' name='Brief' required= "yes"  >
                        </div>
                    </div>


                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Description</h6>
                            </label> 
                            <input type='text' class="form-control" placeholder="Enter description of feedback" required='yes' id='Description' name='Description' required= "yes"  >
                        </div>
                       
                    </div>
                  

                    <div class="row mb-4">
                        <div class="col-md-5"> <button class="btn btn-outline-success text-center mb-1">Submit</button> </div>
                    </div>
                   
                    
                </div>
            </div>
            <input type="hidden" name='status' value="0">

         </form>





         
</body>  