<?php

namespace App\Controllers;

class doctorRegister extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
       return view('doctorRegister/index.php');
        
    }
    public function readdb()
    {

  //Validation
  $valid =$this->validate([
    'Fname'=> 'required|max_length[20]',
   'Lname' => 'required|max_length[20]',
   'Email' => 'required|valid_email|is_unique[doctor.Email]',
   'Password' => 'required|min_length[5]|max_length[20]',
    'Age' => 'required|min_length[2]|max_length[10]',
    'NIC' => 'required|min_length[10]|max_length[14]',
    'Govt_RegNo' => 'required|min_length[4]|max_length[10]',
    'areaofexpertise' => 'required|min_length[3]|max_length[100]',
    'Address' => 'required|min_length[15]|max_length[100]',
    'district' => 'required|min_length[6]|max_length[100]',
    'qualification' => 'required|min_length[6]|max_length[100]',
    'phonenumber' => 'required|min_length[10]|max_length[12]',
    // 'authFile' =>    'required|uploaded[authFile]|max_size[authFile, 5000]|ext_in[authFile,pdf]'
]);        

if (!$valid){
 return view('doctorRegister/index',['valid'=>$this->validator]);
 
}
else{
  
 echo 'Validation Successful';
}


        $Docs = new \App\Entities\doc($this->request->getPost());
        $Docs->Password = password_hash($Docs->Password, PASSWORD_DEFAULT);
        $model1=new \App\Models\doctorModel();
        $model1->insert($Docs);
        return redirect()->to("/doctorlogin/index")->with('success', 'User Registration Successful');
    }
}