<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php";

       
    class OficinaModelo extends Modelo{

        public $Password;
        public $Email;

        public function insertar(){
            
            $sql = "INSERT INTO backoffice (email,password) VALUES (
                '" . $this -> Email . "',
                '" . password_hash($this -> Password,PASSWORD_DEFAULT) . "'
            )";
            $this -> conexion -> query($sql);   
            
        }

        public function Eliminar(){
            $sql = "DELETE FROM backoffice WHERE email ='" . $this -> Email . "'";
            $this -> conexion -> query($sql);
        }

        
        
    }