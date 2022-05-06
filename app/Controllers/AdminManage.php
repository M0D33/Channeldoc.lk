<?php

namespace App\Controllers;

class AdminManage extends BaseController
{
    public function index()
    {
        if (session()->get('admin_id') == null) {
            return redirect()->to('Adminlogin/index')->with('fail', 'You must be logged in..');
          }
       return view('AdminManage/index.php');
        
    }
    public function readdb()
    {

        $adms = new \App\Entities\adm($this->request->getPost());
        $adms->password = password_hash($adms->password, PASSWORD_DEFAULT);
        $model2=new \App\Models\adminModel();
        $model2->insert($adms);
        return redirect()->to("/AdminManage/index")->with('success', 'Admin Added Successfuly');;
    }
    
    // Admin deletes user accounts
    public function deleteUser($admin_id)
    {
      
         $Docs = new \App\Models\adminModel;
            $Docs ->query("
                            DELETE FROM admin
                             WHERE admin_id = $admin_id");
             return redirect()->to('AdminManage/index')->with('fail', 'The Profile has been deleted');;
           
    } 



} 