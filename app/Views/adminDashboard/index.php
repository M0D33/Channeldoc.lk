<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!--NavBar-->
    <header>
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
          <a class="nav-link" href="#">Profile management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Apointment history
          </a>         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Statistic
          </a>         
        </li>
        <ul class ="navbar-nav ms">
        <button class="btn" type="submit">Pofile</button>
</ul>
</ul>
      
    </div>
  </div>
</nav>
    </header>
    <!--Body-->
    <section>
    
    <!--Admin Cards-->
        <div class="container p-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Appointment history</h5>
                        <p class="card-text"></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="#" class="btn btn-primary">click here</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Management</h5>
                        <p class="card-text"></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="#" class="btn btn-primary">click here</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    <div class="container p-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Profile Name</th>
                    <th scope="col">Profile created date</th>
                    <th scope="col">Profile type</th>
                    <th scope="col">Profile status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Dr.Mark</th>
                    <td>02/07/2022</td>
                    <td>Practitioner</td>
                    <td>Active</td>
                    </tr>
                    <tr>
                    <th scope="row">Jacob</th>
                    <td>07/08/2022</td>
                    <td>Patient</td>
                    <td>Active</td>
                    </tr>
                    <tr>
                    <th scope="row">Larry</th>
                    <td>12/05/2022</td>
                    <td>Patient</td>
                    <td>Active</td>
                    </tr>
                    <tr>
                    <th scope="row">Dr.Ben</th>
                    <td>16/05/2022</td>
                    <td>Practitioner</td>
                    <td>Deactivated</td>
                    </tr>
                    <tr>
                    <th scope="row">Allen</th>
                    <td>09/11/2022</td>
                    <td>Patient</td>
                    <td>Active</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>








    <!--Footer-->
    <footer class="footer bg-light text-#28a745 pt-5 pb-3">

<div class = "container text-center text-md-left">
  
<div class="row text-center text-md-left">

<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Channeldoc.lk</h5>
  <p> Information about Channeldoc.lk </p>
</div>

<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Sitemap</h5>
<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Home</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Channelling</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> About Us</a>
</p>


<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> Contact Us</a>
</p>


</div>

<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Useful Links</h5>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> stuff2</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> stuff2</a>
</p>

<p> 
<a class="footer-link" href="#" class="text-dark" style="text-decoration:none;"> stuff2</a>
</p>


</div>

<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
<h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
            <p>
                <i class="fas fa-home mr-3"></i> 95b Srimath Anagarika Dharmapala Mawatha, Colombo 00007, Sri Lanka
            </p>
            <p>
                <i class="fas fa-envelope mr-3"></i> channeldoc.lk@gmail.com
            </p>
            <p>
                <i class="fas fa-phone mr-3"></i> (+94) 77 579 2352
            </p>
            
        </div>

</div>

<hr class ="mb-4">

<div class= "row align-item-left ">

<div class="col-md-7 col-lg-8">
<p class = "footer-text"> Copyright&copy; 2022 All rights reserved by: 
<a href="#" style="text-decoration: none;>
  <strong class="text-warning">Group 5 </strong>
</a></p>
</div>

<div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">

                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn-floating btn-sm text-dark" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
                
            </div>
            
        </div>
        
    </div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>