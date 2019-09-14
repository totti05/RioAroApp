<?php 

namespace App\Controllers;

class registroController extends baseController{

    public function getRegistroAction($request){
        if($request->getMethod() == 'GET'){

            return $this->renderHTML('contents/registroView.twig'); 
        }
        

    }

}