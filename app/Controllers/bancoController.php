<?php
namespace App\Controllers;
use App\Models\bancoModel;

class BancoController {

    public function getAgregarBancoAction(){

        include '../views/agregarBancoView.php';

    }
    public function postAgregarBancoAction($request){
        
        if($request->getMethod() == 'POST'){
        $banco = new bancoModel();
        $postData = $request->getParsedBody();
        $banco->nombre_banco = $postData['nombre_banco'];
        $banco->rif = $postData['rif'];
        $banco->save();
        }
        include '../views/agregarBancoView.php';

    }
}