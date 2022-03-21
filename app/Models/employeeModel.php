<?php

namespace App\Models;

class employeeModel extends  \CodeIgniter\Model
{
    protected $table = 'user';
    
   protected $allowedFields=['fname','lname','Email','Title','Gender','placeofwork','areaofexpertise','qualification','Address','NIC','district','Govt_RegNo','phonenumber','pwd','age'];
    protected $returnType = 'App\Entities\empl'; 
}

?>