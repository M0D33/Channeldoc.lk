<?php

  namespace App\Controllers;

  class AdminDashPatientReg extends BaseController
  {
    public function index()
    {
        if (session()->get('admin_id') == null) {
            return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');;
          }
 
        return view("AdminDashPatientReg/index");
    }
  }

  ?>