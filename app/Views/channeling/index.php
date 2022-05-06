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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href= <?php echo site_url('/patientProfile/index') ?>>My Profile</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/channeling/index') ?>">Channelling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollto" href= <?php echo site_url('/Search/index') ?>>Doctors</a>
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
						<h3>Your Details</h3>
						<p>
							Add your basic details
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Jhon">
								</div>
							</div>
							
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3>Extra information</h3>
						<p>
							Add your previous medical report
						</p>
					</div>
					<div class="step">

                        <form action="/finddoc/images/upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />

                                <input type="submit">
                            </div>
                        </form>
					</div>
					<hr>
					<!--End step -->



					<!--End step -->
					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<label>
								<input type="checkbox" name="policy_terms" id="policy_terms"> I accept terms and conditions and general policy.
							</label>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
          <div class="form-group">
							<div class="title">
								<h3>Doctor Details</h3>
							</div>
							
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
              
              </div>
							<hr>
							<a href="confirm.html" class="btn_1 full-width">Confirm and pay</a>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
        </div>
			</div>





</body>