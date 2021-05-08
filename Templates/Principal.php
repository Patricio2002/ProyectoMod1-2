<?php
    session_start();
    $_SESSION['']= "seción";
    echo "<form action='./ResultadosApp.php' method=post>
    <table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
               <td></td><td></td><td></td>
               <td><img src= 'Logo.png' width= 100 height= 100></td>
               <td></td>
               <td><form action='./ResultadosApp.php' method=post></td>
               <td></td><td></td><td></td>
               <td><input type=submit name=inicio value=INICIO></td>
               <td></td><td></td><td></td>
               <td><input type=submit name=registro value=REGISTRO></td>
               <td></td><td></td><td></td>
               <td><input type=submit name=coleccion value=SECCIONES></td>
               <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        </tbody>
    </table>
    </form>";
    $imagenes=["1"=>"<img src= 'L1.jpg' width= 500 height= 500>",
               "2"=>"<img src= 'L2.jpg' width= 500 height= 500>",
               "3"=>"<img src= 'L3.jpg' width= 500 height= 500>",
               "4"=>"<img src= 'L4.jpg' width= 500 height= 500>",
               "5"=>"<img src= 'L5.jpg' width= 500 height= 500>"];
    $r= rand(1, 5);
    foreach($imagenes as $key=>$value)
    {
        if($r==$key)
        {
            echo $value;
        }
    }
?>