<?php

namespace App\Models;

class ContactusModel extends \CodeIgniter\Model{
	

    protected $table = 'contactus';
    
    protected $allowedFields=['cid','name','email','message','seen'];
    protected $returnType = 'App\Entities\contactus'; 
   


}