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
    public function book(){
        $appointments = new \App\Models\Appointments();
        // session();
        // session()->regenerate();
        
        // $fname = session()->get('fname');
        // $status = '0';
        // $queryuser = $appointments->query("INSERT INTO appointments (fname, time, location) values('$fname','$time', $location)");
        // return redirect()->to('Search/index')->with('success', 'Pending approval by practitioner');
        // if (!$queryuser) {
        //  echo "fail";
       
   


        


         $appdoc = new \App\Entities\appdoc($this->request->getPost());
        $model=new \App\Models\AppointmentDoc();
        $model->insert($appdoc);
        return redirect()->to('Doctordetails/index')->with('success', ' Channelled Successful');
        // $queryuser = $appointments->query("INSERT INTO appointments (doctor_id) values('$doctor_id')");

     }
    // }
    public function doctorDetailsPage($id)
  {
        $appointments = new \App\Models\Appointments();

    session();
    
     
    session()->set('doctor_id', $id); 

    return view('doctordetails/index.php');
  }
}
