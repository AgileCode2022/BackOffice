<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-master/modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-master/modelos/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-master/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-master/controladores/$clase.class.php";
        }
        
    });

    require_once $_SERVER['DOCUMENT_ROOT'] . "/Api-master/config.php";
    
    //if(!conexion){
      //  session_start();
    //*/
   
