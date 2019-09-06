<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class participante_actividadModel extends Model  {

    protected $primaryKey = 'id_usuario';
    protected $table = 'participante_actividad';
    public $timestamps = false;


}

?>