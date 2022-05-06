<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background: linear-gradient(45deg, #28a745 50%, #EEEEEE 50%);
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 10px
}

.card1 {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
}

.logo {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-top: 20px;
    margin-left: 25px
}

.image {
    width: 500px;
    height: 500px
}

.card2 {
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px
}

.login {
    cursor: pointer
}

.text-sm {
    font-size: 14px !important
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 4px;
    margin-bottom: 22px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
    background-color: #ECEFF1
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-green {
    background-color: #28a745;
    width: 100%;
    color: #fff;
    border-radius: 6px
}

.btn-green:hover {
    opacity: 0.8;
    cursor: pointer
}

@media screen and (max-width: 991px) {
    .card1 {
        border-bottom-left-radius: 0px;
        border-top-right-radius: 10px
    }

    .card2 {
        border-bottom-left-radius: 10px;
        border-top-right-radius: 0px
    }
}

    </style>

<form action=<?php echo site_url('Feedback/writedb') ?>  method='post' >

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
                        <div class="col-md-6"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Doctor's ID</h6>
                            </label> 
                            <input type='text' class="form-control" placeholder="Enter the name of the practitioner" required='yes' id='doctor_name' name='doctor_name' required= "yes" >
                        </div>
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
                        <div class="col-md-5"> <button class="btn btn-green text-center mb-1">Submit</button> </div>
                    </div>
                   
                    
                </div>
            </div>
         </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
