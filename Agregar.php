<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php";


$nombre = $_POST['nombre'];
$nombreImagen = $_FILES['imagen']['name'];
$tipoImagen = $_FILES['imagen']['type'];
$tamanioImagen = $_FILES['imagen']['size'];
$url = $_POST['url'];

if ($tamanioImagen <= 15000000) {
    if ($tipoImagen == "image/jpeg" || $tipoImagen == "image/jpg" || $tipoImagen == "image/png") {
        $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . "/BackOffice/imagenes/";
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaDestino.$nombreImagen);
    }else{
        echo "solo imagenes con extencion jpg, jpeg, png...";
    }
}else{
    echo "Maximo 15 MB";
}


BannerControlador::InsertarPublicidad($nombre, $nombreImagen, $url);
echo '<script language="javascript">alert("Se guardo la publicidad en base de datos"),window.location.href="/BackOffice/Index.html"</script>';
//header('location:Index.html');
