<?php

namespace App\Controllers;

class register extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
       return view('register/index.php');
        
    }
    public function writedb()
    {
        $empls = new \App\Entities\empl($this->request->getPost());
        $empls->pwd = password_hash($empls->pwd, PASSWORD_DEFAULT);
        // print_r($empls);
        //$data2db=[];
        $model=new \App\Models\employeeModel();
        $model->insert($empls);
        return redirect()->to("/Home/index");
    }
}