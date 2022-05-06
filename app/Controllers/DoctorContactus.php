<?php

namespace App\Controllers;
use App\Models\doctorModel;

class DoctorContactus extends BaseController
{
    public function index()
    {
        if (session()->get('doctor_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }
        return view('DoctorContactus/index.php');
    }

    public function writedb()
    {
        $empls = new \App\Entities\contactus($this->request->getPost());
        $model=new \App\Models\ContactusModel();
        $model->insert($empls);
        return redirect()->to('DoctorContactus/index')->with('success', 'Message has been sent successfully');
    }
    

}

?>