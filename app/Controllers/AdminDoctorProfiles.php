<?php

  namespace App\Controllers;

  class AdminDoctorProfiles extends BaseController
  {
    public function index()
    {
      if (session()->get('admin_id') == null) {
        return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');
      }
        return view("AdminDoctorProfiles/index");
    }



// Admin User Management 

// Admin approving Practitioner Accounts
public function approveUser($doctor_id)
{
  // Gets the database

  $Docs = new \App\Models\doctorModel;
  $Docs -> query("UPDATE  doctor SET approval = '1' WHERE doctor_id = $doctor_id"); // Changes approval

  return redirect()->to('AdminDoctorProfiles/index')->with('success', 'The Profile has been approved');;


}


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





