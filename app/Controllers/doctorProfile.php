<?php

namespace App\Controllers;

class doctorProfile extends BaseController
{
  public function __construct()
  {
    helper('form');
    helper(['url', 'Login_helper']);
  }
  public function index()
  {
    if (session()->get('doctor_id') == null) {
      return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');;
    }
    return view('doctorProfile/index');
  }
  public function editProfile()
  {
    if (session()->get('doctor_id') == null)  {
      return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');;
    }
    $validation = $this->validate([
      'Fname' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'First Name is Required'
        ]
      ],
      'Lname' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Last Name is Required'
        ]
      ],
      'Address' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Address is Required'
        ]
      ],
      'Email' => [
        'rules' => 'required|valid_email',
        'errors' => [
          'required' => 'Email is Required',
          'valid_email' => 'Must be a valid Email Address'
        ]
      ],
      'phonenumber' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Contact No is required'
        ]
      ],
      // 'dob' => [
      //   'rules' => 'required',
      //   'errors' => [
      //     'required' => 'Date of Birth is Required'
      //   ]
      // ],
    
    ]);

    if (!$validation) {
      //echo "Validation Error";
      return view('/doctorProfile/index', ['validation' => $this->validator]);
    } else {
      $Fname = $this->request->getPost('Fname');
      $Lname = $this->request->getPost('Lname');
      $NIC = $this->request->getPost('NIC');
      $Address = $this->request->getPost('Address');
      $Email = $this->request->getPost('Email');
      $district = $this->request->getPost('district');
      $Govt_RegNo = $this->request->getPost('Govt_RegNo');
      $Age = $this->request->getPost('Age');
      $Gender = $this->request->getPost('Gender');
      $areaofexpertise = $this->request->getPost('areaofexpertise');
      $placeofwork = $this->request->getPost('placeofwork');
      $qualification = $this->request->getPost('qualification');


    //   $dob = $this->request->getPost('dob');
      $phonenumber = $this->request->getPost('phonenumber');
      $Password = $this->request->getPost('Password');

      session();
      session()->regenerate();
      $doctor_id = session()->get('doctor_id');

     

      $doctorModel = new \App\Models\doctorModel();
      $queryuser = $doctorModel->query("UPDATE doctor
                                          SET 
                                              Fname = '$Fname',
                                             Lname = '$Lname',
                                             NIC ='$NIC',
                                             Address = '$Address',
                                             district = '$district',
                                             Email = '$Email',
                                             phonenumber = '$phonenumber',
                                             Age = '$Age',
                                             Gender = '$Gender',
                                             areaofexpertise = '$areaofexpertise',
                                             placeofwork = '$placeofwork',
                                             qualification = '$qualification'

                                          WHERE doctor_id = $doctor_id");
      if (!$queryuser) {
        return redirect()->back()->with('fail', 'Please try again later..');
      }
     else {
        return redirect()->to('doctorProfile/index')->with('success', 'Changes made successfully');
      }

    }
  }

  public function deleteProfile()
  { 
      session();
      session()->regenerate();
      $doctor_id = session()->get('doctor_id');

      $doctorModel = new \App\Models\doctorModel();
      $queryuser = $doctorModel->query("
                                         delete from doctor  
                                          where doctor_id = $doctor_id");
       return redirect()->to('doctorProfile/index')->with('fail', 'Your Profile has been deleted');
      if (!$queryuser) {
        //echo "fail";
      

    }
  }
  public function writedb(){
    session();
    session()->regenerate();
    $doctor_id = session()->get('doctor_id');
    $time = $this->request->getPost('time');
    $location = $this->request->getPost('location');
    $appointmentdoc = new \App\Models\appointmentdoc();
    $queryuser = $appointmentdoc->query("Insert into appointmentdoc (doctor_id, time, location) values('$doctor_id', '$time', '$location')");
     
     return redirect()->to('doctorProfile/index')->with('success', 'User Registration Successful');
     if (!$queryuser) {
      //echo "fail";
    

  }
  }

}