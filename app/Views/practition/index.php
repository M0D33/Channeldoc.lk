<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-5 pb-3 bg-white from-wrapper">

<div class= "container">
<h1>Practitioner Register</h1>
<hr>



<form action=<?php echo site_url('practition/writedb') ?>  method='post' >




<div class="row">
  <div class="col">
    <div class="form-group">
      <label  for='title'>Title</label>
      <input type='text' class="form-control" required='yes' placeholder="Enter Title" id='Title' name='Title' value=<?php old('Title') ?> >		
    </div>
  </div>  
  <div class="col">
    <div class="form-group">
        <label  for='firstname'>First Name</label>
        <input type='text' class="form-control" placeholder="Enter First Name" required='yes' id='fname' name='fname' required= "yes" value=<?php old('f_name') ?> >
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label  for='lastname'>Last Name</label>
      <input type='text' class="form-control" required='yes' placeholder="Enter Last Name" id='Lname' name='Lname' required= "yes" value=<?php old('L_name') ?> >
    </div>
  </div>
</div>

<div class="row">
<div class="col">
    <div class="form-group">
        <label for='NIC'>NIC</label>
        <input type='nic' class="form-control" required='yes' id='NIC' placeholder="Enter NIC" name='NIC' required= "yes"  >
    </div> 
  </div> 
  <div class="col">
    <div class="form-group">
        <label  for='email'>Email</label>
        <input type='text' class="form-control" required='yes' id='Email' placeholder="Enter Email" name='Email' required= "yes" value=<?php old('email') ?> >
    </div>
  </div>
  <div class="col">
    <div class="form-group">
        <label for='password'>Password</label>
        <input type='password' class="form-control" required='yes' id='pwd' placeholder="Enter Password" name='pwd' required= "yes"  >
    </div> 
  </div> 
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for='age'>Age</label>
      <input type='number' class="form-control" required='yes' id='age' placeholder="Enter age" name='age' required= "yes"  >
    </div> 
  </div>

  <div class="col">
  <label for='Gender'>Gender </label>
    <div class="input-group mb-3">
      <select class="form-select" id="Gender">
        <option selected>Option...</option>
        <option value="1">M</option>
        <option value="2">F</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for='Govt_RegNo'>Government Registration Number</label>
    <input type='text' class="form-control" required='yes' id='Govt_RegNo' placeholder="Enter Government Registration Number" name='Govt_RegNo' required= "yes"  >
  </div> 


  <div class="form-group">
    <label for='areaofexperise'>Area of expertise</label>
    <input type='text' class="form-control" required='yes' id='areaofexperise' placeholder="Enter Area of Expertise" name='areaofexperise' required= "yes"  >
  </div> 

  <div class="form-group">
    <label for='qualification'>Qualification</label>
    <input type='text' class="form-control" required='yes' id='qualification' placeholder="Enter Qualification" name='qualification' required= "yes"  >
  </div> 
  
  <div class="form-group">
    <label for='placeofwork'>Place of Work</label>
    <input type='text' class="form-control" required='yes' id='placeofwork' placeholder="Enter Place of work(if any)" name='placeofwork' required= "yes"  >
  </div>


  <div class="form-group">
      <label for='phoneNumber'>Phone Number</label>
      <input type='number' class="form-control" required='yes' id='phonenumber' placeholder="Enter Phone Number" name='phonenumber' required= "yes"  >
  </div> 
</div>





		<?php if(isset($valid)) { ?>
  <div class="alert alert-danger" role="alert">
  <?= $valid->listErrors(); ?>
  <?php } ?>

<button type='submit' class="btn btn-primary" name='Register'>Register</button>
<div class="form-check">
<a href="<?php echo site_url('login/index')?>"> Already have an account? Click here to Login!</a>   
  </div>
  </div>
  <a href="<?php echo site_url('register/index')?>"> REGISTRATION FOR PATIENT</a>   
  </div>
</form>
</div>
</div>
</div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>