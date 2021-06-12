<?php
    function CargadorClase($class)
    {
        if(is_file('Controller/'.$class.'.Controller.php'))
        {
            include('Controller/'.$class'.Controller.php');
        }
        else if (is_file('Model/'.$class.'.controller.php'))
        {
            include ('Model/'.$class.'.Controller.php');
        }
        else if (is_file('Framework/Smarty/'.$class.'.class.php'))
        {
            include ('Framework/Smarty/'.$class.'.class.php');
        }
    }
    spl_autoload_register('Cargadorclase');
?>