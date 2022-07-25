<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php"; 

    class UsuarioControlador{
        
        public static function Alta($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Insertar();
        
        }

        public static function Eliminar($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Eliminar();
        
        }
       

        
    }
    


    
        

        

        


