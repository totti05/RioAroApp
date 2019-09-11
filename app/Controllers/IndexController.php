<?php 

namespace App\Controllers;

class IndexController extends baseController {

    public function indexAction($request){
        if($request->getMethod() == 'GET'){
            
            echo $this->renderHTML("../views/indexView.twig"); 
        }
        

    }

}