<!DOCTYPE html>
<html>
<head>
    <title>Login - Rio Aro App</title>
    <meta charset="utf-8">
    <meta autor = "Raul">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">


</head>

<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="./index.html">CriptoApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./calculadora.html">Calculadora</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./tasas.html">Tasas</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a id="btn_registro" class="btn btn-outline-success active" href="./registro.html" role="button">Registrarse</a>
                <a id="btn_login" class="btn btn-outline-success" href="./login.html" role="button">Iniciar Sesión</a>
            </form>
            </div>
    </nav>

</header>

<body class=" bg-light ">

    <!-- Example row of columns -->
<div class="row">
    <div class="col-md-4">
        <h1>hola login view</h1>
    </div>
    <div class="col-md-4 container">
        <br>
        <br>
        <br>
        <br>
        <form   action="login.php">
        <h3 class="text-center">LOGIN</h3>
        <div class="form-group ">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="nombre" id="" placeholder="coloca nombre">
        </div>
        <div class="form-group">
            <label for="apellido">apellido</label>
            <input type="text" class="form-control" name="apellido" id="" placeholder="coloca apellido">
        </div>
        <div class="form-group">
            <label for="cedula">cedula</label>
            <input type="text" class="form-control" name="cedula" id="" placeholder="coloca cedula">
        </div>
        <div class="form-group">
            <label for="correo">correo</label>
            <input type="text" class="form-control" name="correo" id="" placeholder="coloca correo">
        </div>  
        <button class="btn btn-secondary" role="button" type="submit">iniciar sesion</button>
        </form>
    </div>
    <div class="col-md-4"> 
    </div>    
</div>
            <hr>

        
  
        <script src="<?php echo SERVERURL; ?>/vendor/twbs/bootstrap/dist/js/bootstrap.js"></script> 
        
        
</body>
<footer class="footer ">
    <div class="container">
            <span class="text-muted text-center">Raul App</span>
        </div>
</footer>
</html>