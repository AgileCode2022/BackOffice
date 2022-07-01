<?php

require $_SERVER['DOCUMENT_ROOT'] ."/Api-master/utils/autoload.php";

class BannerControlador{
    public static function InsertarPublicidad($nombre, $imagen, $url){
       
        $p = new BannerModelo();
        $p -> Nombre = $nombre;
        $p -> Imagen = $imagen;
        $p -> Url = $url;
        $p -> InsertarPublicidad();
    }

    public static function EliminarPublicidad($id){
        
        $p = new BannerModelo();
        $p -> Id = $id;
        $p -> EliminarPublicidad();

    }
    public static function ObtenerImagen(){

        $p = new BannerModelo();
        $p -> ObtenerImagen();
    }


    public static function ObtenerPublicidad(){

        $p = new BannerModelo();
        $p -> ObtenerPublicidad();
    }
    
//Nesesito saber como poner json en otro lado.
    public static function EnviarImgenesJson(){
        $banner = new BannerModelo();
        $imagenes = $banner->TraerImagenes();
        header('Content-Type: application/json');
        echo json_encode($imagenes);
    }
}