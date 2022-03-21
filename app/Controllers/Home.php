<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = new \App\Models\employeeModel;
        $data = $model->findAll();
        return view('welcome_message', ['dfhc' => $data]);
    }
}
