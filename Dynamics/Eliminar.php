<?php
    session_start();
    include("./Config.php");
    $conexion=connectdb();
    if(isset($_POST["eliminar"])){
        $selec="SELECT * FROM usuario JOIN nombre ON usuario.NoCuenta_RFC=nombre.NoCuenta_RFC WHERE correo='$_SESSION[correo]';";
        $res=mysqli_query($conexion, $selec);
        $arreglo=mysqli_fetch_array($res);
        $r="DELETE FROM nombre WHERE NoCuenta_RFC = '$arreglo[1]';"; 
        $res2=mysqli_query($conexion, $r);
        $s="DELETE FROM usuario WHERE correo='$_SESSION[correo]';";
        $re3=mysqli_query($conexion, $s);
        if($re3)
        {
            echo "Se eliminó correctamente";
            header("location: ./cerrar.php");
        }
        else
        {
            echo "No se pudo eliminar el registro";
            echo '<form action="./Principal.php" method="POST">
                <input type="submit" value="VOLVER AL INICIO">
                </form>';
        }
    }
    
?>