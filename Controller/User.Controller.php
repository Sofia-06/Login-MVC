<?php
   class User
   {
      public function Login () 
      {
           $user=$_POST['nombre'];
           $user=$_POST['pass'];

           echo $user."--".$pass;
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