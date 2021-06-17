<?php
    Class Conexion extends mysqli
    {
        function __construct()
        {
            $servidor="localhost";
            $pass="";
            $user="root";
            $DB="InventarioDiver";

            parent::__construct($servidor,$user,$pass,$DB);
            $this->query("SET NAMES 'utf8'; ");
            $this->connect_error ? die('Error en la conexión') : $error="Conectado a ".$DB;
            echo $error;
        }
    }


?>
