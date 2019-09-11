<?php 

namespace App\Controllers;

class loginController{

    public function getLoginAction($request){
        if($request->getMethod() == 'GET'){

            include "../views/loginView.php";
        }
        

    }

}