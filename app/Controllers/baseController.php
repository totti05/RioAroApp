<?php
namespace App\Controllers;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use Zend\Diactoros\Response\HtmlResponse;


class baseController{
    protected $templateEngine;

     public function __construct(){

        $loader = new FilesystemLoader('../views');
        $this->templateEngine = new Environment($loader, [
            'cache' => 'false',
            'debug' => 'true'
         ]);
    }
    
    public function renderHTML($fileName, $data = []){
       return new HtmlResponse($this->templateEngine->render($fileName, $data)); 
    }
    
   

}