<?php

namespace App\Controllers;

class DocDashAppointPro extends BaseController
{
  
  public function index()
  {
    if (session()->get('doctor_id') == null) {
      return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');
    }
    return view('DocDashAppointPro/index');
  }
}