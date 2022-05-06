<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    width: 300px;
    height: 300px
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

<form action=<?php echo site_url('Adminlogin/verifydb') ?>  method='post' >

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 bg-light pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="<?= base_url('assets/images/user-profile.svg') ?>" class="image"> </div>
                    <div class="row px-3 text-center justify-content-center">
                        <h4>Channeldoc.lk</h4> <small class="text-muted px-5 mx-1 mx-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <h3 class="mb-1">Login to your Admin account</h3>
                   
                    <div class="row mt-2">
                    <div class="row px-4"> <label class="mb-0">
                            <h6 class="mb-1 text-sm">Username </h6>
                        </label> 
                        <input type='text' class="form-control" placeholder="username" required='yes' id='username' name='username' value=<?php old('username') ?> >
                    </div>
                    </div>
                    <div class="row mt-2">
                    <div class="row px-4"> <label class="mb-0">
                            <h6 class="mb-1 text-sm">Password</h6>
                        </label> 
                        <input type='password' class="form-control" placeholder="Password" required='yes' id='password' name='password' >
                    </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-5"> <button class="btn btn-green text-center mb-1">Login</button></div>
                        <div>
                         <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                         <div class="alert alert-danger text-muted"> <?= session()->getFlashdata('fail'); ?> </div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                         <div class="alert alert-danger text-muted"> <?= session()->getFlashdata('success'); ?> </div>
                        <?php endif ?>
                         </div>
                    </div>

                  

                </div>
            </div>
         </form>
        </div>
    </div>
</div>
</body>
