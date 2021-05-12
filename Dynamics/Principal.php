<?php
    session_start();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coyo bidi</title>
    </head>
    <body>
    <table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= "../Statics/Logo.png" width= 100 height= 100></td>';
                echo "<td></td>";
                if(isset($_SESSION["inicio"])){ 
                    $_SESSION["usuario"]=$_POST["nombre"].$_POST["apellidos"];
                    echo "<td>$_SESSION[usuario]</td>";
                    echo "<td><form action=./Cuenta.php method=post></td>";
                        echo "<td><input type=submit name=Cuenta value=Cuenta></td>";
                    echo "</form>";
                    
                }
                else{
                    header("location: InicioSesion.php");
                }
            echo '</tr>
        </tbody>
    </table>
    <br>';
    ?>
    <br>
    <form action="resultados.php">
        Buscar libro: <input type="text" name="titulo" placeholder="ingrese titulo">;
        <br><br>
        <input type="submit">
    </form>
    <?php
    //arreglo para desplegar aleatoriamente un libro
    $imagenes=["1"=>"<img src= '../Statics/L1.jpg' width= 400>",
               "2"=>"<img src= '../Statics/L2.jpg' width= 400>",
               "3"=>"<img src= '../Statics/L3.jpg' width=400>",
               "4"=>"<img src= '../Statics/L4.jpg' width= 400>",
               "5"=>"<img src= '../Statics/L5.jpg' width= 400>"];
    $r= rand(1, 5);
    foreach($imagenes as $key=>$value)
    {
        if($r==$key)
        {
            echo $value;
        }
    }
?> 
