<?php

  namespace App\Controllers;

  class AdminPatientProfiles extends BaseController
  {
    public function index()
    {
      if (session()->get('admin_id') == null) {
        return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');
      }
        return view("AdminPatientProfiles/index");
    }



//ADMIN USER ACCOUNT MANAGEMENT 

// Admin approves User Accounts
public function approveUser($user_id)
{
  // Gets the database

  $Docs = new \App\Models\employeeModel;
  $Docs -> query("UPDATE  user SET approval = '1' WHERE user_id = $user_id"); // Changes approval

  return redirect()->to('AdminPatientProfiles/index')->with('success', 'The Profile has been approved');


}


// Admin deletes user accounts
public function deleteUser($user_id)
{

       $Docs = new \App\Models\employeeModel;
        $Docs ->query("
                         DELETE FROM user
                         WHERE user_id = $user_id");
         return redirect()->to('AdminPatientProfiles/index')->with('fail', 'The Profile has been deleted');
        if (!$queryuser) {  
      
}
} 
  }





