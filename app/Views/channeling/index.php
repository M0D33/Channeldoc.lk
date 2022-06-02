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

<div class="container">
			<div class="row">
				<div class="col-md-12 mt-5 mb-5">
        <div class="col-md-12 mt-5 mb-5">
				<div class="box_general_3 cart">

					<div class="form_title">
						<h3>Your channels:</h3>
						<p>
							Pending channels
						</p>
					</div>
					<div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Doctor ID</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Appoinment ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                        session();

                                        $patientID = session()->get('user_id');
                                                    
                                        $appoinmentModel = new \App\Models\Appointments; 

                                        $query = $appoinmentModel -> query("SELECT * FROM appointments WHERE patid = $patientID and status = 'Confirmation Pending'"); 


                                        foreach ($query -> getResult() as $row) 
                                        {
                                        
                                        ?>

                                            
                                            <tr>
                                            <td><?php echo $row -> doctor_id ?></td>
                                            <td><?php echo $row -> time ?></td>
                                            <td><?php echo $row -> location ?></td>
                                            <td><?php echo $row -> appointmentid ?></td>
                                            
                                            </tr>

                                             <?php } ?>
                                        </tbody>
                                        </table>
                                        </div>
                                        <br>
                            <p>
							Accepted channels
						    </p>
                            <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Doctor ID</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Appoinment ID</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        session();

                                        $patientID = session()->get('user_id');
                                                    
                                        $appoinmentModel = new \App\Models\Appointments; 

                                        $query = $appoinmentModel -> query("SELECT * FROM appointments WHERE patid = $patientID and status = 'Confirmed'"); 


                                        foreach ($query -> getResult() as $row) 
                                        {
                                        
                                        ?>

                                            
                                            <tr>
                                            <td><?php echo $row -> doctor_id ?></td>
                                            <td><?php echo $row -> time ?></td>
                                            <td><?php echo $row -> location ?></td>
                                            <td><?php echo $row -> appointmentid ?></td>
                                            
                                            </tr>

                                             <?php } ?>
                                        </tbody>
                                        </table>
                                        </div>

                                        <br>
                            <p>
							Channel History
						    </p>
                            <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Doctor ID</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Appoinment ID</th>
                                    <th>Request Medical Documents</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        session();

                                        $patientID = session()->get('user_id');
                                                    
                                        $appoinmentModel = new \App\Models\Appointments; 

                                        $query = $appoinmentModel -> query("SELECT * FROM appointments WHERE patid = $patientID and status = 'Confirmed' and done='1'"); 


                                        foreach ($query -> getResult() as $row) 
                                        {
                                        
                                        ?>

                                            
                                            <tr>
                                            <td><?php echo $row -> doctor_id ?></td>
                                            <td><?php echo $row -> time ?></td>
                                            <td><?php echo $row -> location ?></td>
                                            <td><?php echo $row -> appointmentid ?></td>
                                            <?php if($row->req == '0'): ?>
                                            <td><a href="<?php echo base_url('Channeling/req/'.$row -> appointmentid)?>" class="btn btn-success float-end btn-sm">Request</a>
                                            <?php endif; ?>
                                            <?php if($row->req == '1'): 
                                              
                                              $docModel = new \App\Models\pracDocModel; 

                                              $query = $docModel -> query("SELECT * FROM pracdoc WHERE appointment_id='$row->appointmentid'"); 


                                              foreach ($query -> getResult() as $row) 
                                              {
                                              
                                              ?>
                                            <td><a href="../<?php echo $row->doc; ?>" class="btn btn-warning btn-sm">Download Document</a>
                                            <?php } ?>
                                            <?php endif; ?>
                                            </tr>

                                             <?php } ?>
                                        </tbody>
                                        </table>
                                        </div>


        </div>
      </div>
        </div>
      </div>
</div>





</body>
</html>