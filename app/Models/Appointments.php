<?php

namespace App\Models;

class Appointments extends  \CodeIgniter\Model
{
    protected $table = 'appointments';
    
   protected $allowedFields=[ 'doctor_id','fname', 'time', 'location', 'status', 'appointmentid', 'patid','done','req'];
    protected $returnType = 'App\Entities\appos'; 


}


?>