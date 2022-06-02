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
public function deleteUser($appid)
{
  

       $Docs = new \App\Models\fb;
        $Docs ->query("DELETE FROM fb
        WHERE appid = $appid");
         return redirect()->to('AdminPatfb/index')->with('success', 'The complaint has been deleted and it will not be shown to the doctor');;
        
} 
}





