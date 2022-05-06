<?php

namespace App\Controllers;

use App\Models\doctorModel;

class Channeldoc extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('Register/index')->with('fail', 'You must be logged in..');
        }
        return view('Channeldoc/index.php');
    }
    public function book($doctor_id, $time, $location){
        $appointments = new \App\Models\Appointments();
        session();
        session()->regenerate();
        $fname = session()->get('fname');
        $status = '0';
        $queryuser = $appointments->query("Insert into appointments (fname, doctor_id, time, location, status) values('$fname','$doctor_id', '$time', '$location', '$status')");
        return redirect()->to('doctordetails/index')->with('success', 'Pending approval by practitioner');
        if (!$queryuser) {
         //echo "fail";
       
   
     }
    }
}
