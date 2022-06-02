<?php

namespace App\Models;

class fb extends  \CodeIgniter\Model
{
    protected $table = 'fb';
    
   protected $allowedFields=['fname','doctor_name','Brief','Description', 'status', 'doctor_id', 'appointmentid'];
    protected $returnType = 'App\Entities\fb'; 
}

?>