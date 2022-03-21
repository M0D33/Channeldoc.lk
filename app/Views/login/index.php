<!DOCTYPE html>
<title>Sign in</title>
<meta name="description" content="The small framework with powerful features">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
	background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
align-items: center;
margin-left: 10px;	
}

</style>
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
</div>
</ul>
</div>
</nav>
<br>
<br>
<br>
<h1>Login</h1>

<form action=<?php echo site_url('Login/readdb') ?>  method='post' >
	<p>
		<p>
		<label for='Email'>Email</label>
		<input type='text' class="form-control" placeholder="Email" required='yes' id='Email' name='Email' value=<?php old('Email') ?> >
		
		</p><p>
		<label for='pwd'>Password</label>
		<input type='password' class="form-control" placeholder="Password" required='yes' id='pwd' name='pwd' >
	</p>	
	<input type='submit' class="btn" name='Login'>
</form>

<a href=<?php echo site_url('Home/index') ?>>Home</a>
<br>
<a href="<?php echo site_url('register/index')?>">Dont have an account?Register here..</a>   
  </div>
