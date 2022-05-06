<?php

namespace App\Models;

class adminModel extends  \CodeIgniter\Model
{
    protected $table = 'admin';
    
   protected $allowedFields=['admin_id','username','password','Type'];
    protected $returnType = 'App\Entities\adm'; 
}

?>