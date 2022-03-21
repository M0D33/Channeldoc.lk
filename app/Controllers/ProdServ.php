<?php

namespace App\Controllers;

class ProdServ extends BaseController
{
    public function index()
    {
       // return view('welcome_message');


       // echo "Base" . base_url() . '<br>';
       // echo "Site" . site_url();
       /* $data  = "Data from Home Controller";
       $data1 = [1 , 2, 'Three'];
       $data3 = [
        ['id'=>1, 'name' => 'John', 'login' => 'john', 'pwd' => '3245235vv3rc43'  ],
        ['id'=>2, 'name' => 'Jane', 'login' => 'jane', 'pwd' => '3245rer35vv3rc43'],
        ['id'=>3, 'name' => 'Tom', 'login' => 'tom', 'pwd'   => '324523543ert3rc43'],
        ['id'=>4, 'name' => 'Ann', 'login' => 'ann', 'pwd'   => '345ferhy6u5vv3rc43']
       ];
       return view('Home/index.php', ['dfhc' => $data3]); 
       */
       //$model = new \App\Models\employeeModel;
       //$data = $model->findAll();
       return view('Products&Services/index.php'); 

    }
}