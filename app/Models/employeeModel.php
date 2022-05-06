<?php

namespace App\Models;

class employeeModel extends  \CodeIgniter\Model
{
    protected $table = 'user';
    
   protected $allowedFields=['user_id','fname','Lname','Email','Title','Gender','Address','NIC','district','phonenumber','pwd','age'];
    protected $returnType = 'App\Entities\empl'; 


}

?>