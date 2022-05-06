<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practitioner Register</title>
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

<form action=<?php echo site_url('doctorRegister/readdb') ?> enctype="multipart/form-data" method='post' >

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 bg-light pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="<?= base_url('assets/images/doc-reg.svg') ?>" class="image"> </div>
                    <div class="row px-3 text-center justify-content-center">
                        <h4>Channeldoc.lk</h4> <p class="text px-5 mx-1 mx-lg-5">Welcome to Channeldoc.lk! After filling out our registration form, please email our team channeldoclkhelp@gmail.com with proof of your qualifactions in a zip file. Your account will go through an approval process within 24 hours after which you will be notified and be able to access your account. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <h3 class="mb-1">Create your Practitioner account</h3>
                    <p class="mb-4 text-sm">Already have an account? <a class="text-primary login" href="<?php echo site_url('doctorlogin/index')?>"> Login </p> </a>
                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">First Name</h6>
                            </label> 
                            <input type='text' class="form-control" placeholder="Enter First Name" required='yes' id='Fname' name='Fname' required= "yes" value=<?php old('f_name') ?> >
                        </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Last Name</h6>
                            </label> 
                            <input type='text' class="form-control" required='yes' placeholder="Enter Last Name" id='Lname' name='Lname' required= "yes" value=<?php old('L_name') ?> >
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">NIC (National Identity Card)</h6> </label> 
                                <input type='nic' class="form-control" required='yes' id='NIC' placeholder="Enter NIC" name='NIC' required= "yes"  >
                             </div>
                         <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Date Of Birth</h6>
                            </label>
                            <input type='date' class="form-control" id='dob' name='dob' placeholder="Enter Date of Birth" name='x'  >
                             </div> 
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Email Address</h6> </label> 
                                <input type='text' class="form-control" required='yes' id='Email' placeholder="Enter Email" name='Email' required= "yes" value=<?php old('email') ?> >
                             </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label>
                            <input type='password' class="form-control" required='yes' id='Password' placeholder="Enter Password" name='Password' required= "yes"  >
                             </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Age</h6> </label> 
                                <input type='number' class="form-control" required='yes' id='Age' placeholder="Enter age" name='Age' required= "yes"  >
                             </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Gender</h6>
                            </label>
                            <select class="form-select" name="Gender" id="Gender">
                            <option selected>Option...</option>
                            <option value="Male"  >M</option>
                            <option value="Female" >F</option>
                            </select>
                             </div>
<!-- iqbal below -->
                             <div class="row mt-2">
                            <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Area Of Expertise</h6> </label> 
                                <select class="form-select" name="areaofexpertise" id="areaofexpertise">
                            <option selected>Option...</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="ENT">E.N.T(Ear Nose & Throat)</option>
                            <option value="Physician">Physician</option>
                            <option value="Gynaecology">Gynaecology</option>
                            <option value="Neurology">Neurology</option>
                            </select>
                             </div>

                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Qualification</h6>
                            </label>
                            <input type='text' class="form-control" required='yes' id='qualification' placeholder="Enter Qualification" name='qualification' required= "yes"  >
                             </div>
                    </div>

                             <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Address</h6> </label> 
                                <input type='text' class="form-control" required='yes' id='Address' placeholder="Enter address" name='Address' required= "yes"  >
                             </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">District</h6>
                            </label>
                            <input type='text' class="form-control" required='yes' id='district' placeholder="Enter district" name='district' required= "yes"  >
                             </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Place of Work</h6> </label> 
                                <input type='text' class="form-control"  id='placeofwork' placeholder="Enter Place of work(if any)" name='placeofwork'  >
                             </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Phone Number</h6>
                            </label>
                            <input type='number' class="form-control" required='yes' id='phonenumber' placeholder="Enter Phone Number" name='phonenumber' required= "yes"  >
                             </div>
                    </div>

                     <!-- <div class="row mt-2">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Upload documents</h6> </label> 
                                <input type='file' class="form-control" id='authFile' name='authFile' required='yes'>
                             </div> -->
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Government Registration Number</h6>
                            </label>
                            <input type='text' class="form-control" required='yes' id='Govt_RegNo' placeholder="Enter Government Registration Number" name='Govt_RegNo' required= "yes"  >
                             </div>
                    </div>

                    <input type="hidden" name='approval' value="0">

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
