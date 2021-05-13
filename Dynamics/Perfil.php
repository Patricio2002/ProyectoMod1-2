<?php
    session_start();
    if(isset($_SESSION["correo"])){
    include("./encabezado.php");
    $conexion=connectdb();
    //busca los datos del usuario
    $selec="SELECT * FROM usuario JOIN nombre ON usuario.NoCuenta_RFC=nombre.NoCuenta_RFC WHERE correo='$_SESSION[correo]';";  
    $res=mysqli_query($conexion, $selec);
    $arreglo=mysqli_fetch_array($res);
    //se imprimn los datos del usuario
    echo "<fieldset style=width:400px>";
    echo "<legend><h2>Información de Usuario</h2></legend>";
        echo "<table>";
            echo  "<tr>
                <td>nombre: $arreglo[7] $arreglo[8]</td>
            </tr>
            <tr>
                <td>correo: $arreglo[3]</td>
            </tr>
            <tr>
                <td>No. de Cuenta/RFC: $arreglo[1]</td>
            </tr>
            <tr>
                <td>Fecha de nacimiento: $arreglo[2]</td>
            </tr>
            <tr>
                <td>id_usuario: $arreglo[0]</td>
            </tr>";
       echo  "</table>";
    echo "</fieldset>";
    echo '<form action="./Eliminar.php" method="POST">
        <input type="submit" name="eliminar" value="eliminar cuenta">
    </form>';
}
//redirige en caso de no haber inicio de sesion
else{
    header("location: InicioSesion.php");
}
?>
