<?php
   class User
   {
      public function Login () 
      {
           $persona = Usuario();
           $user=$_POST['nombre'];
           $pass=$_POST['pass'];

           $dato=$persona->BuscarUsuario($user,$pass);
           //var_dump($dato);
           $vec=mysqli_fetch_assoc($dato);
           echo "<br />";
           //var_dump($vec);

           //echo $user."--".$pass;

           if($dato->num_rows==1)
           {
              $smarty->assign('$nombre', 'Inventario');
              $smarty->display('Inventario.tpl');
              //echo "User okey";
           }
           else
           {
            $smarty->display('Home.tpl');
              //echo "No user";
           }
      }
      public function Update()
      {
           echo"en update";
      }
      public function Delet ()
      {
            echo"en delet"; 
      }
   {
?>