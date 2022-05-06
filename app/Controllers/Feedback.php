<?php

namespace App\Controllers;
use App\Models\fb;

class Feedback extends BaseController
{
    public function __construct()
  {
    helper('form');
    helper(['url', 'Login_helper']);
  }
    public function index()
    {
        if (session()->get('fname') == null) {
            return redirect()->to('Register/index')->with('fail', 'You must be logged in..');
          }
        return view('Feedback/index.php');
    }
    public function writedb()
    {

        
      // session();
      // session()->regenerate();
      // $fname = session()->get('fname');
      // $doctor_name = $this->request->getPost('doctor_name');
      // $Brief = $this->request->getPost('Brief');
      // $Description = $this->request->getPost('Description');
      //    $fb = new \App\Models\fb();
      //    $queryuser = $fb->query("Insert into fb(fname, doctor_name, Brief, Description) values('$fname, $doctor_name, $Brief, $Description')");
      //    return redirect()->to('Feedback/index')->with('success', 'Feedback Successful');
      //    if (!$queryuser) {
      //     //echo "fail";
        
    
      // }





      $fbs = new \App\Entities\fb($this->request->getPost());
      $model=new \App\Models\fb();
      $model->insert($fbs);
      return redirect()->to('Feedback/index')->with('success', 'Feedback entered Successfully');
//Update status to 1


// ]);
    //  }


    //     $empls = new \App\Entities\empl($this->request->getPost());
    //     $empls->pwd = password_hash($empls->pwd, PASSWORD_DEFAULT);
    //     $model=new \App\Models\employeeModel();
    //     $model->insert($empls);
    //     return redirect()->to('login/index')->with('success', 'User Registration Successful');
    // }
    
     }}