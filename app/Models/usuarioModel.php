<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class usuarioModel extends Model  {

    protected $primaryKey = 'id_usuario';
    protected $table = 'usuario';
    public $timestamps = false;


}

?>