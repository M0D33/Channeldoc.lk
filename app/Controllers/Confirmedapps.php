<?php

namespace App\Controllers;

use App\Models\Appointments;

class Confirmedapps extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
        }
        return view('confirmedapps/index.php');
    }
   
}
