<?php

namespace App\Models;

class Appointments extends  \CodeIgniter\Model
{
    protected $table = 'appointments';
    
   protected $allowedFields=[ 'doctor_id', 'time', 'location'];
    protected $returnType = 'App\Entities\appos'; 


}


?>