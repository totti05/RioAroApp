<?php 

namespace App\Controllers;

class loginController extends baseController{

    public function getLoginAction($request){
        if($request->getMethod() == 'GET'){

            return $this->renderHTML('contents/loginView.twig'); 
        }
        

    }

}