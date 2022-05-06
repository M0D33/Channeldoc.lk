<?php

namespace App\Models;

class doctorModel extends  \CodeIgniter\Model
{
    protected $table = 'doctor';
    
   protected $allowedFields=['doctor_id','Fname','Lname','NIC', 'Email','Password','Age','Gender','Address','district', 'Govt_RegNo', 'areaofexpertise', 'qualification', 'placeofwork', 'phonenumber','approval','authFile'];
    protected $returnType = 'App\Entities\doc'; 


}


?>