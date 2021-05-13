<?php
    include ("./config.php");
    $enca="SELECT tipoUsuario FROM usuario WHERE correo = '$_SESSION[correo]';";
    $row=mysqli_fetch_array($enca);
    $usuario=implode("", $row);
    
    if($usuario > 1){

    }
    if($usuario > 2){
        
    }
?>