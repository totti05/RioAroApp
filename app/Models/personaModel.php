<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class personaModel extends Model {
    
    protected $table = 'persona';
    protected $primaryKey = 'cedula';
    public $incrementing = false;
    protected $keyType = 'string';
   
    


}

?>