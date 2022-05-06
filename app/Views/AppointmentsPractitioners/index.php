<!-- <div class="row">
                                        <?php 
                                        session();

                                        $doctorID = session()->get('doctor_id');
                                                    
                                        $doctorModel = new \App\Models\doctorModel; 

                                        $query = $doctorModel -> query("SELECT * FROM doctor WHERE doctor_id = $doctorID"); 


                                        foreach ($query -> getResult() as $row) 
                                        {
                                        
                                        ?>

                                            <div class="profile">

                                            <ul>

                                                <li>Government register number: <b><?php echo $row -> Govt_RegNo?></b></li>
                                                <li>First Name: <b><?php echo $row -> Fname ?></b></li>
                                                <li>Last Name: <b><?php echo $row -> Lname ?></b></li>
                                                <li>Email: <b><?php echo $row -> Email ?></b></li>
                                                <li>Gender: <b><?php echo $row -> Gender ?></b></li>
                                                <li>Qualification: <b><?php echo $row -> qualification ?></b></li>
                                                <li>Area of expertise: <b><?php echo $row -> areaofexpertise ?></b></li>
                                                <li>District: <b><?php echo $row -> district ?></b></li>
                                                <li>Place of Work: <b><?php echo $row -> placeofwork ?></b></li>
                                                

                                            </ul>
                                            <?php } ?>
                                            </div>
                                            <a class="nav-link btn logoutbtn" href= <?php echo site_url('channeling/index/'.$row->doctor_id) ?> style="text-decoration:none">Channel this Doctor</a>

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


 -->

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href="#doctors">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            About Us
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
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




<br>

<br>
<br>
</var>


<form class="contact" action="<?php echo site_url('/AppointmentsPractitioners/writedb')?>" method="post">

 <?php 
                                        session();

                                        $doctorID = session()->get('doctor_id');
                                                    
                                        $doctorModel = new \App\Models\Appointments; 

                                        $query = $doctorModel -> query("SELECT * FROM appointments WHERE doctor_id = $doctorID"); 


                                        foreach ($query -> getResult() as $row) 
                                        {
                                        
                                        ?>

                                            <div class="card-body">

                                            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead style = "background-color:#28a745; color:#FFFF" >
                                <tr>
                                    <th>ID</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                                 
                                    
                                </tr>
                                
                           </thead>
                                            <tr>
                                            <td><?php echo $row -> doctor_id ?></td>
                                            <td><?php echo $row -> time ?></td>
                                            <td><?php echo $row -> location ?></td>

                                       
                                            </tr>
                                             <?php } ?>
                                           
                                            <div class="row mt-2">
                                           
                        <div class="col-md-6"> <label class="mb-0">
                       
                             </div>
                            
                    </div>
                    
                    <br>
                   
                    <!-- <?php if(isset($valid)) { ?>
                     <div class="alert alert-danger" role="alert">
                     <?= $valid->listErrors(); ?>
                    <?php } ?> -->

                    </form>

                 