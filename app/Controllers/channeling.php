<?php

namespace App\Controllers;
use App\Models\doctorModel;

class channeling extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }
        return view('channeling/index.php');
    }
    
   
}
?>