<?php
    include("./Config.php");
    $conexion=connectdb();
    $enca="SELECT id_tipoUsuario FROM usuario WHERE correo = '$_SESSION[correo]';";
    $res=mysqli_query($conexion, $enca);
    $row=mysqli_fetch_array($res);
    echo '<table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= "../Statics/Logo.png" width= 100 height= 100></td>';
                echo "<td width=200px> $_SESSION[correo]</td>";
                echo "<td width=50px><a href=./Principal.php> Inicio </a></td>";
                echo "<td width=70pc><a href=./Perfil.php> Mi Perfil </a></td>";
                echo "<td width=100pc><a href=./Solicitud.php> Solicitar libros </a></td>";
    
    if($row[0] > 1){
        echo "<td width=90px><a href=../Templates/SubirLibro.html>Subir libro</a></td>";
    }
    if($row[0] > 2){
        
    }
    echo "<td><a href=./Cerrar.php>Salir</a></td>";
    echo '<td><img src= "../Statics/lupa.png" width= 20 height= 20></td>';
    echo '</tr>
        </tbody>
    </table>';
?>