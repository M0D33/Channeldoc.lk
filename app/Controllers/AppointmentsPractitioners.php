<?php

namespace App\Controllers;
use App\Models\Appointments;

class AppointmentsPractitioners extends BaseController
{
    public function __construct()
  {
    helper('form');
    helper(['url', 'Login_helper']);
  }
    public function index()
    {
        if (session()->get('doctor_id') == null) {
            return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');
          }
        return view('AppointmentsPractitioners/index.php');
    }
    public function writedb()
    {

        
      session();
      session()->regenerate();
      $doctor_id = session()->get('doctor_id');
      $Comments = $this->request->getPost('Comments');
         echo 'Validation Successful';
         $appointments = new \App\Models\Appointments();
         $queryuser = $appointments->query("Insert into appointments(Comments) values('$Comments')");
//Update status to 1


// ]);
    //  }


    //     $empls = new \App\Entities\empl($this->request->getPost());
    //     $empls->pwd = password_hash($empls->pwd, PASSWORD_DEFAULT);
    //     $model=new \App\Models\employeeModel();
    //     $model->insert($empls);
    //     return redirect()->to('login/index')->with('success', 'User Registration Successful');
    // }
   
     }
    public function approvepatient($appointmentid){
      // session();
      // session()->regenerate();
      // $doctor_id = session()->get('doctor_id');
      $Docs = new \App\Models\Appointments;
      $Docs -> query("UPDATE  appointments SET status = 'Confirmed' WHERE appointmentid = $appointmentid"); // Changes approval
    
      return redirect()->to('AppointmentsPractitioners/index')->with('success', 'Appointment has been approved');;
    }

    public function markdone($appointmentid)
    {
        $doc = new \App\Models\Appointments;
        $doc -> query("UPDATE appointments SET done = '1' WHERE appointmentid = $appointmentid and done = '0'"); // Changes approval

        return redirect()->to('AppointmentsPractitioners/index')->with('success', 'Appointment marked as done');;

    }
    }