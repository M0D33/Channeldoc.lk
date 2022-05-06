<?php

namespace App\Controllers;

use App\Models\doctorModel;
use App\Models\Appointments;

class Search extends BaseController
{
    public function index()
    {
        if (session()->get('user_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
        }
        return view('Search/index.php');
    }

    public function writedb()
    {
        session();

        $fname = session()->get('fname');
        $appos = new \App\Entities\appos($this->request->getPost());        
        $model = new \App\Models\Appointments();
        $model->insert($appos);
        return redirect()->to('Search/index')->with('success', 'Successful');
    }
}
