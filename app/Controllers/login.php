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
           $session->set('name', $empls->name);
           $session->set('id', $empls->id);

           //return redirect()->to("/Login/loginok")->with('info','Login Successful');
           return redirect()->to("/employeeinfo/index")->with('info','Login OK'); 
       }
       else
       {
           //Wrong user name or password
           //return redirect()->to("Login/loginnotok")->with('info','Login name or password mismatch!');
           

echo '<script type="text/javascript">

            window.onload = function () { alert("Login data incorrect"); }

</script>';


       }

    }

    public function logout()
    {
        $session=session();
        $session->destroy();
        return redirect()->to("Home/index");//->with('info','Login name or password mismatch!');
    }
}