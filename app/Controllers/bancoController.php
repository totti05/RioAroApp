<?php
namespace App\Controllers;
use App\Models\banco;
class BancoController {

    public function getAgregarBancoAction(){
    

        if(!empty($_POST)){
        $banco = new banco();
        $banco->nombre_banco = $_POST['nombre_banco'];
        $banco->rif = $_POST['rif'];
        $banco->save();

        }

        include '../views/agregarBanco.php';

    }
}