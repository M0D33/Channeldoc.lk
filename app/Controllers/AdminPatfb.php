<?php

  namespace App\Controllers;

  class AdminPatfb extends BaseController
  {
    public function index()
    {
      if (session()->get('admin_id') == null) {
        return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');
      }
        return view("AdminPatfb/index");
    }



// Admin User Management 

// Admin approving Practitioner Accounts


// Admin deleting user accounts
public function deleteUser($doctor_id)
{
  

       $Docs = new \App\Models\doctorModel;
        $Docs ->query("
                        DELETE FROM doctor
                        WHERE doctor_id = $doctor_id");
         return redirect()->to('AdminDoctorProfiles/index')->with('fail', 'The Profile has been deleted');;
        
} 
}





