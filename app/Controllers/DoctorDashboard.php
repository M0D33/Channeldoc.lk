<?php

  namespace App\Controllers;

  class DoctorDashboard extends BaseController
  {
    public function index()
    {
        if (session()->get('doctor_id') == null) {
            return redirect()->to('Doctorlogin/index')->with('fail', 'You must be logged in..');;
          }
 
        return view("DoctorDashboard/index");
    }
  }