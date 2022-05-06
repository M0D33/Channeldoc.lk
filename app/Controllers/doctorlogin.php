<?php
namespace App\Controllers;
use CodeIgniter\Entity\Cast\BaseCast;
class doctorlogin extends BaseController
{
    public function index()
    {
        return view("doctorlogin/index");
    }
     public function verifydb()
    {
       

        $Email = $this->request->getPost('Email');
        $Password = $this->request->getPost('Password');
         $approval= $this->request->getPost('approval');

        $model1 = new \App\Models\doctorModel();
        $docs = $model1->where('Email', $Email)->first();

        if($docs != null && password_verify($Password,$docs->Password))
        {
           //Login Succcessful
           $session = session(); //initialize session
           $session->regenerate(); // for security reasons
           $session->set('name', $docs->Fname);
           $session->set('doctor_id', $docs->doctor_id);
           $session->set('approval', $docs->approval);


           $doctor_id =session()-> get('doctor_id');

            if ($docs->approval == 0){
                session()->setFlashdata('info', 'Your account is pending approval');
                return redirect()->to("doctorlogin/index")->withInput();
            
            } else if ($docs->approval == 1){
                return redirect()->to("doctorProfile/index")->with('info', 'Login Successful');

     
       }
    }
       else
       {
           //Wrong user name or password
           session()->setFlashdata('fail', 'Invalid Email or Incorrect Password!');
           return redirect()->to("doctorlogin/index")->withInput();
        

       }

    
}

    public function logout()
    {
        if (session()->has('doctor_id')) {
			session()->remove('doctor_id');
			session()->remove('name');
        return redirect()->to("doctorlogin/index")->with('fail','You are logged out!');
    }
    }
    }

