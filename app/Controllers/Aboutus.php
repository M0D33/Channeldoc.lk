<?php

namespace App\Controllers;

class Aboutus extends BaseController
{
  
  public function index()
  {
    if (session()->get('user_id') == null) {
      return redirect()->to('login/index')->with('fail', 'You must be logged in..');
    }
    return view('Aboutus/index');
  }
}