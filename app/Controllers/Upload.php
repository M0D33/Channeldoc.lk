<?php

// namespace App\Controllers;

// use App\Models\doctorModel;
// use App\Models\Appointments;

class Upload extends CI_Controller
{
    public function index()
    {
       $this->load->view('Uploadstwo/index');
    }
    public function upload_file(){
        $config['allowed_types'] = 'jpg|png';
        $config['upload_path']="./uploads/";
        $this->load->library('upload', $config);
        if ($this->upload->dp_upload('image')){
             print_r($this->upload->display_errors());
        }
        else{
            print_r($this->upload->display_errors());
        }
    }
}
