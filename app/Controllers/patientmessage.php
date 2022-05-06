<?php

namespace App\Controllers;
use App\Models\doctorModel;

class patientmessage extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }
        return view('patientchat/index');
    }

    
	public function getfk($mid)
    {
        session();
        $n = new \App\Models\MessageModel;
        $n -> addForeignKey('user_id','user','user_id');
        $n -> addForeignKey('doctor_id','doctor','doctor_id');
        
        return view('patientmessage/index');
        
    }

    

}

?>