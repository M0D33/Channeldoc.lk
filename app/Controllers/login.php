<?php
namespace App\Controllers;
use CodeIgniter\Entity\Cast\BaseCast;
class login extends BaseController
{
    public function index()
    {
        return view("login/index");
    }
     public function readdb()
    {
        $model = new \App\Models\employeeModel();

        $Email = $this->request->getPost('Email');
        $pwd = $this->request->getPost('pwd');

        $empls = $model->where('Email', $Email)->first();

        if($empls != null && password_verify($pwd,$empls->pwd))
        {
           //Login Succcessful
           $session = session(); //initialize session
           $session->regenerate(); // for security reasons
           $session->set('fname', $empls->fname);
           $session->set('user_id', $empls->user_id);

           //return redirect()->to("/Login/loginok")->with('info','Login Successful');
           return redirect()->to("/patientProfile/index")->with('info','Login OK'); 
       }
       else
       {
           //Wrong user name or password
           session()->setFlashdata('fail', 'Incorrect Password!');
           return redirect()->to("login/index")->withInput();
           

       }

    }

    public function logout()
    {
        if (session()->has('user_id')) {
			session()->remove('user_id');
			session()->remove('fname');
        return redirect()->to("login/index")->with('fail','You have been logged out!');
    }
}
}