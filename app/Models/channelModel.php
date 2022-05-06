<?php

namespace App\Models;

class channelModel extends  \CodeIgniter\Model
{
    protected $table = 'channel';
    
   protected $allowedFields=['doctor_id','user_id','select_mode','Date','approval'];
    protected $returnType = 'App\Entities\chan'; 


}


?>