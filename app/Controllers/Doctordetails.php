<?php

namespace App\Controllers;

use App\Models\doctorModel;

class Doctordetails extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
        }
        return view('doctordetails/index.php');
    }
    public function book($doctor_id){
        // session();
        // session()->regenerate();
        
        // $fname = session()->get('fname');
        // $status = '0';
        // $queryuser = $appointments->query("INSERT INTO appointments (fname, time, location) values('$fname','$time', $location)");
        // return redirect()->to('Search/index')->with('success', 'Pending approval by practitioner');
        // if (!$queryuser) {
        //  echo "fail";
       
   

        session();
        session()->regenerate();
        $fname = session()->get('fname');
        
        session();
        session()->regenerate();
        $patid = session()->get('user_id');

        $time = $this->request->getPost('time');

        $location = $this->request->getPost('location');  

        // $status = $this->request->getPost('status'); 
        $status = 'Confirmation Pending';   

        $appointment = new \App\Models\Appointments();
        $queryuser = $appointment->query("Insert into appointments (doctor_id, fname, time, location, status, patid) values('$doctor_id', '$fname', '$time', '$location', '$status', '$patid')");

        // $appdoc = new \App\Entities\appdoc($this->request->getPost());
        // $model=new \App\Models\AppointmentDoc();
        // $model->insert($appdoc);
        return redirect()->to('Doctordetails/index')->with('success', 'Sent for confirmation');
        // $queryuser = $appointments->query("INSERT INTO appointments (doctor_id) values('$doctor_id')");

     }
    // }
    public function writedb($doctor_id)
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





      // $fbs = new \App\Entities\fb($this->request->getPost());
      // $model=new \App\Models\fb();
      // $model->insert($fbs);
      // return redirect()->to('Feedback/index')->with('success', 'Feedback entered Successfully');
//Update status to 1


// ]);
    //  }


    //     $empls = new \App\Entities\empl($this->request->getPost());
    //     $empls->pwd = password_hash($empls->pwd, PASSWORD_DEFAULT);
    //     $model=new \App\Models\employeeModel();
    //     $model->insert($empls);
    //     return redirect()->to('login/index')->with('success', 'User Registration Successful');
    // }
    







    
    session();
    session()->regenerate();
    $fname = session()->get('fname');
    
   


    $Description = $this->request->getPost('Description');  

    // $status = $this->request->getPost('status'); 
    $status = '0';   

    $fb = new \App\Models\fb();
    $queryuser = $fb->query("Insert into fb (doctor_id, fname, status ,Description) values('$doctor_id', '$fname','$status', '$Description')");
    return redirect()->to('doctordetails/index')->with('success', 'Your feedback will be sent to the practitioner after the approval of the admin.');

     }
    public function doctorDetailsPage($id)
  {
        $appointments = new \App\Models\Appointments();

    session();
    

    session()->set('doctor_id', $id); 

    return view('doctordetails/index.php');
  }
  
}
