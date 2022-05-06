<?php

namespace App\Models;

class Messagemodel extends \CodeIgniter\Model{
	

    protected $table = 'user_messages';
    
    protected $allowedFields=['mid','user_id','doctor_id','sent_massage','receive_message'];
    protected $returnType = 'App\Entities\doc'; 
    protected $returnType1 = 'App\Entities\empl';


}