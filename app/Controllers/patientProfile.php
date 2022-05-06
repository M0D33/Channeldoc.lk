<?php

namespace App\Controllers;

class patientProfile extends BaseController
{
  public function __construct()
  {
    helper('form');
    helper(['url', 'Login_helper']);
  }
  public function index()
  {
    if (session()->get('user_id') == null) {
      return redirect()->to('login/index')->with('fail', 'You must be logged in..');
    }
    return view('patientProfile/index');
  }
  public function editProfile()
  {
    if (session()->get('user_id') == null)  {
      return redirect()->to('login/index')->with('fail', 'You must be logged in..');
    }
    $validation = $this->validate([
      'fname' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Name is Required'
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
      return view('/patientProfile/index', ['validation' => $this->validator]);
    } else {
      $fname = $this->request->getPost('fname');
      $Lname = $this->request->getPost('Lname');
      $Address = $this->request->getPost('Address');
      $Email = $this->request->getPost('Email');
    //   $dob = $this->request->getPost('dob');
      $phonenumber = $this->request->getPost('phonenumber');
  
      session();
      session()->regenerate();
      $user_id = session()->get('user_id');

     

      $employeeModel = new \App\Models\employeeModel();
      $queryuser = $employeeModel->query("UPDATE user
                                          SET 
                                              fname = '$fname',
                                             Lname = '$Lname',
                                             Address = '$Address',
                                             Email = '$Email',
                                             phonenumber = '$phonenumber'
                                             
                                          WHERE user_id = $user_id");
      if (!$queryuser) {
        return redirect()->back()->with('fail', 'Please try again later..');
      }
     else {
        return redirect()->to('patientProfile/index')->with('success', 'Changes made successfully');
      }

  
    }
  }

  public function deleteProfile()
  { 
      session();
      session()->regenerate();
      $user_id = session()->get('user_id');

      $employeeModel = new \App\Models\employeeModel();
      $queryuser = $employeeModel->query("
                                         delete from user
                                          where user_id = $user_id");
       return redirect()->to('login/index')->with('fail', 'Your Profile has been deleted');
      if (!$queryuser) {
        //echo "fail";
      

    }



  }

}
