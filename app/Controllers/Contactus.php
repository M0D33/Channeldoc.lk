<?php

namespace App\Controllers;
use App\Models\doctorModel;

class Contactus extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }
        return view('Contactus/index.php');
    }

    public function writedb()
    {
        $empls = new \App\Entities\contactus($this->request->getPost());
        $model=new \App\Models\ContactusModel();
        $model->insert($empls);
        return redirect()->to('Contactus/index')->with('success', 'Message has been sent successfully');
    }
    

}

?>