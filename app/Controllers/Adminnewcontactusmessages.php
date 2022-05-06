<?php

  namespace App\Controllers;

  class Adminnewcontactusmessages extends BaseController
  {
    public function index()
    {
      if (session()->get('admin_id') == null) {
        return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');
      }
        return view("Adminnewcontactusmessages/index");
    }

    public function seeconusmsg()
    {
        $use = new \App\Models\doctorModel;
        $use -> query("UPDATE contactus SET seen = '1' WHERE seen = '0'"); // Changes approval

        return redirect()->to('AdminDashboard/index')->with('success', 'The message has seen');;

    }
  }

?>