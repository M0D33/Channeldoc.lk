<?php

  namespace App\Controllers;

  class AdminDashboard extends BaseController
  {
    public function index()
    {
        if (session()->get('admin_id') == null) {
            return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');;
          }
 
        return view("AdminDashboard/index");
    }
  }