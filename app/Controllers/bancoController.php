<?php
namespace App\Controllers;
use App\Models\bancoModel;

class BancoController extends baseController{

    public function getAgregarBancoAction(){

        return $this->renderHTML('agregarBancoView.twig');

    }
    public function postAgregarBancoAction($request){
        
        if($request->getMethod() == 'POST'){
        $banco = new bancoModel();
        $postData = $request->getParsedBody();
        $banco->nombre_banco = $postData['nombre_banco'];
        $banco->rif = $postData['rif'];
        $banco->save();
        }
        return $this->renderHTML('agregarBancoView.twig');

    }
}