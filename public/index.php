<?php 
//unicamente para el desarrollo
//--------------------------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//--------------------------------------------

require_once("../vendor/autoload.php");

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use App\Controllers\{indexController,bancoController};

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'rioaro',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_spanish_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$indexController = new indexController();
$bancoController = new bancoController();

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/RioAroApp/', [
    'controller' => $indexController, 
    'action'  => 'indexAction'
]);
$map->get('agregarBanco', '/RioAroApp/banco/agregar', [
    'controller' => $bancoController, 
    'action'  => 'getAgregarBancoAction'
]);

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);

if(!$route){

    echo 'no route';
}else{
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];
    
    $controller = new $controllerName;
    $controller->$actionName();
    
}

?>
