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

        
         //Validation
         $valid =$this->validate([
            'fname'=> 'required|max_length[20]',
           'Lname' => 'required|max_length[20]',
           'Email' => 'required|valid_email|is_unique[user.Email]',
           'pwd' => 'required|min_length[5]|max_length[20]',
            'age' => 'required|min_length[2]|max_length[10]',
            'NIC' => 'required|min_length[10]|max_length[14]|is_unique[user.NIC]',
            'Address' => 'required|min_length[15]|max_length[100]',
            'district' => 'required|min_length[6]|max_length[100]',
            'phonenumber' => 'required|min_length[10]|max_length[12]'
        ]);        

        if (!$valid){
         return view('register/index',['valid'=>$this->validator]);
         
     }
     else{
         echo 'Validation Successful';

     }


        $empls = new \App\Entities\empl($this->request->getPost());
        $empls->pwd = password_hash($empls->pwd, PASSWORD_DEFAULT);
        $model=new \App\Models\employeeModel();
        $model->insert($empls);
        return redirect()->to('login/index')->with('success', 'User Registration Successful');
    }
}