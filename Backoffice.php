<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php";

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_POST['agr'])) {
      $sql= OficinaControlador::Alta($email, $password);
      if(!$sql){
        echo '<script language="javascript">alert("Usuario creado con exito"),window.location.href="Backoffice.html"</script>';
      }
    }

    if (isset($_POST['elim'])) {
      $sql = OficinaControlador::Eliminar($email, null);
      if(!$sql){
        echo '<script language="javascript">alert("Usuario eliminado con exito"),window.location.href="Backoffice.html"</script>';
      }
    }

    if (isset($_POST['mostrar'])) {
      function HttpRequest($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);   
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;

      }

      $data = json_decode(HttpRequest("http://192.168.0.142/Api-Autentificacion/mostrarTodosBackoffice.php",true));
      
      echo "<h1>Administrativos registrados: </h1>";
      foreach($data as $p){
        echo "Email: " . $p -> email . " <br />";
          
      }

      
    }

    if (isset($_POST['verificar'])) {
      function HttpRequest($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);   
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;

      }

      $data = json_decode(HttpRequest("http://192.168.0.142/Api-Autentificacion/autenticar.php",true));

      
      
             
          
    }

