<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model {

    protected $primaryKey = 'id_banco';
    protected $table = 'banco';
    public $timestamps = false;
}
?>