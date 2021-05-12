<?php
    session_start();
    isset($_SESSION["inicio"]);
    //precentación de la página
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
               </from>
            </tr>
        </tbody>
    </table>
    <br>';
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
