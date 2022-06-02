<?php

  namespace App\Controllers;

  class fbfordoctor extends BaseController
  {
    public function index()
    {
      if (session()->get('doctor_id') == null) {
        return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');
      }
        return view("fbfordoctor/index");
    }



//ADMIN USER ACCOUNT MANAGEMENT 

// Admin approves User Accounts

  }