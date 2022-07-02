<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/BackOffice/utils/autoload.php";
    
    $id = $_POST['id'];

    BannerControlador::EliminarPublicidad($id);
    echo '<script language="javascript">alert("La publicidad de elimino con exito"),window.location.href="/BackOffice/Index.html"</script>';
    
    
