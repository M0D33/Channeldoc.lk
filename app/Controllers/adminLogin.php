<?php
namespace App\Controllers;
use CodeIgniter\Entity\Cast\BaseCast;
class Adminlogin extends BaseController
{
    public function index()
    {
        return view("Adminlogin/index");
    }
     public function verifydb()
    {
        $model2 = new \App\Models\AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adms = $model2->where('username', $username)->first();

        if($adms != null && password_verify($password,$adms->password))
        {
           //Login Succcessful
           $session = session(); //initialize session
           $session->regenerate(); // for security reasons
           $session->set('username', $adms->username);
           $session->set('admin_id', $adms->admin_id);

           //return redirect()->to("/Login/loginok")->with('info','Login Successful');
           return redirect()->to("/AdminDashboard/index")->with('info','Login OK'); 
       }
       else
       {
           //Wrong user name or password
           session()->setFlashdata('fail', 'User does not exist or Incorrect password!');
           return redirect()->to("Adminlogin/index")->withInput();
        

       }

    }

    public function logout()
    {
        if (session()->has('admin_id')) {
			session()->remove('admin_id');
			session()->remove('username');
        return redirect()->to("login/index")->with('fail','You are logged out!');
    }
    }
}