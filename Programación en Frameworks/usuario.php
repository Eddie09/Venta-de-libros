<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
    
   $user1 = "cliente";
   $pass1 = "cliente";
   $user2 = "administrador";
   $pass2 = "administrador";
 
   $error_notif = "¡Contraseña o usuario incorecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
  
 
   switch ($user) {
      case $user1:
         if ($password == $pass1) {
         header("location:index2.php");

         } else {
            echo $error_notif;
         }
      break;
      case $user2:
         if ($password == $pass2) {
         header("location:index1.php");

         } else {
            echo $error_notif;
         }
      break;
      default:
         echo $error_notif;
   }
?>
