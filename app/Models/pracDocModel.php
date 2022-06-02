<?php

namespace App\Models;

class pracDocModel extends  \CodeIgniter\Model
{
    protected $table = 'pracDoc';
    protected $allowedFields = ['id', 'appointment_id', 'doc'];
    protected $returnType = 'App\Entities\practitionerDoc';  


    public function addPracDoc($postID, $filename2) 
    {
        $this->query("INSERT INTO `pracdoc`(`appointment_id`, `doc`) VALUES ('$postID','$filename2')");
        // $result = $query->getResultArray();
        return true;
    }

   
}