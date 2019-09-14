<?php 

namespace App\Controllers;

class indexController extends baseController {

    public function getHomeAction($request){
        if($request->getMethod() == 'GET'){
            
            return $this->renderHTML('/contents/homeView.twig'); 
        }
        

    }

    public function getNosotrosAction($request){
        if($request->getMethod() == 'GET'){
            
            return $this->renderHTML('/contents/nosotrosView.twig'); 
        }
        

    }

    public function getContactoAction($request){
        if($request->getMethod() == 'GET'){
            
            return $this->renderHTML('/contents/contactoView.twig'); 
        }
        

    }

}