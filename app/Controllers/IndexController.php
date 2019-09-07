<?php 

namespace App\Controllers;

class IndexController{

    public function indexAction($request){
        if($request->getMethod() == 'GET'){

            include "../views/indexView.php";
        }
        

    }

}