<?php 

namespace App\Controllers;

class indexController extends baseController {

    public function indexAction($request){
        if($request->getMethod() == 'GET'){
            
            return $this->renderHTML('indexView.twig'); 
        }
        

    }

}