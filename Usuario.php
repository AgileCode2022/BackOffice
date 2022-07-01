<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-master/utils/autoload.php";

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_POST['agr'])) {
        $sql= UsuarioControlador::Alta($email, $password);
        if(!$sql){
          echo '<script language="javascript">alert("Usuario creado con exito"),window.location.href="Usuario.html"</script>';
        }
      }
      
      if (isset($_POST['elim'])) {
          $sql = UsuarioControlador::Eliminar($email, $password);
          if(!$sql){
            echo '<script language="javascript">alert("Usuario eliminado con exito"),window.location.href="Usuario.html"</script>';
          }
      }