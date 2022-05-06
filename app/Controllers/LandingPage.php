<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        $model = new \App\Models\employeeModel;
        $data = $model->findAll();
        return view('LandingPage/index');
    }
}
    