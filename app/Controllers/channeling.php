<?php

namespace App\Controllers;
use App\Models\doctorModel;

class Channeling extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }
        return view('Channeling/index.php');
    }
    
    public function req($appointmentid)
    {
        $doc = new \App\Models\Appointments;
        $doc -> query("UPDATE appointments SET req = '1' WHERE appointmentid = $appointmentid "); // Changes approval

        return redirect()->to('Channeling/index')->with('success', 'Appointment marked as done');;

    }
}
?>