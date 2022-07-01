<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-master/utils/autoload.php";
    
    $id = $_POST['id'];

    BannerControlador::EliminarPublicidad($id);
    echo '<script language="javascript">alert("La publicidad de elimino con exito"),window.location.href="/Api-master/Index.html"</script>';
    
    
