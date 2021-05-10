<?php
    session_start();
    $_SESSION['secion']= "seción";
    echo '
    <table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= "../Statics/Logo.png" width= 100 height= 100></td>
                <td></td>
                <td><form action="./InicioSesion.php" method=post></td>
                    <td><input type=submit name=inicio value="INICIAR SESIÓN"></td>
                </form>
                <td><form action="./CrearCuenta.php" method=post></td>
                    <td><input type=submit name=registro value=REGISTRO></td>
                </form>
                <td><form action="./Busca.php" method=post></td>
               <td><input type=submit name=coleccion value=Buscar></td>
            </tr>
        </tbody>
    </table>
    <br>';
    $imagenes=["1"=>"<img src= '../Templates/L1.jpg' width= 400>",
               "2"=>"<img src= '../Templates/L2.jpg' width= 400>",
               "3"=>"<img src= '../Templates/L3.jpg' width=400>",
               "4"=>"<img src= '../Templates/L4.jpg' width= 400>",
               "5"=>"<img src= '../Templates/L5.jpg' width= 400>"];
    $r= rand(1, 5);
    foreach($imagenes as $key=>$value)
    {
        if($r==$key)
        {
            echo $value;
        }
    }
?>