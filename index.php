<?php
    //include('Autoload.php');
    //include('Inventario.Controller.php');

    include('Controller/User.Controller.php');
    include('Controller/Inventario.Controller.php');

    if(isset($_GET['class']) && isset($_GET['method']))
    {
        $class=$_GET['class'];
        $method=$_GET['method'];
    }
    else
    {
        $class="Home";
        $method="Inicio";
    }

    if (class_exists($class) && method_exists($class, $method))
    {
           $C =new $class();
           $c->$method();
    }
    else
    {
       echo "clase o metodo no existe";
    }

?>