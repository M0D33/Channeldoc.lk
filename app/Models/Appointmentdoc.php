<?php

namespace App\Models;

class appointmentdoc extends  \CodeIgniter\Model
{
    protected $table = 'appointmentdoc';
    
   protected $allowedFields=['doctor_id','time','location', 'appointmentiddoc'];
    protected $returnType = 'App\Entities\appdoc'; 
}

?>