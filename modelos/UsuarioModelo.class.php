<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php";


    class UsuarioModelo extends Modelo{
        
        public $Email;
        public $Password;

            
        public function insertar(){
            
            $sql = "INSERT INTO usuario (email,password) VALUES (
                '" . $this -> Email . "',
                '" . password_hash($this -> Password,PASSWORD_DEFAULT) . "'
            )";
            $this -> conexion -> query($sql);
            
        }

        
        public function Eliminar(){
            $sql = "DELETE FROM usuario WHERE email ='" . $this -> Email . "'";
            $this -> conexion -> query($sql);
        }
       
    }