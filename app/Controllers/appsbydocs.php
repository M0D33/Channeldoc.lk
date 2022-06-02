<?php

  namespace App\Controllers;

  class appsbydocs extends BaseController
  {
    public function index()
    {
      if (session()->get('doctor_id') == null) {
        return redirect()->to('doctorregister/index')->with('fail', 'You must be logged in..');
      }
        return view("appsbydocs/index");
    }



// Admin User Management 

// Admin approving Practitioner Accounts



// Admin deleting user accounts
public function deleteslot($appointmentiddoc)
{
  

       $Docs = new \App\Models\appointmentdoc;
        $Docs ->query("
                        DELETE FROM appointmentdoc
                        WHERE appointmentiddoc = $appointmentiddoc");
         return redirect()->to('appsbydocs/index')->with('success', 'The slot has been deleted');;
        
} 
}





