<?php
    session_name("Coyo bidi");
    session_start();
    $busca=(isset($_POST["buscador"]) && $_POST["buscador"]!= "") ?$_POST["buscador"]: "No";//variable para que los datos no cambien si no es necesario 
    if($busca != "No"&& $_SESSION["inicio"])
    {
        include("./Config.php");
        $conexion= connectdb();
        if($busca>= '0' && $busca<= '2021' && $_SESSION["inicio"])
        {
            $selec= "SELECT anio FROM libro";
            $chec=  mysqli_query($conexion,$selec);
            while($saca= mysqli_fetch_array($chec))
            {
                echo $saca;
            }
        }
        else
        {
            $buscamin=strtolower($busca);
            $s1= "SELECT categoria FROM libro";
            $c1=  mysqli_query($conexion,$s1);
            while($saca1= mysqli_fetch_array($c1))
            {   if($saca1== $buscamin)
                {
                    echo $saca1;
                }
            }
            $s2= "SELECT autor FROM libro";
            $c2=  mysqli_query($conexion,$s2);
            while($saca2= mysqli_fetch_array($c2))
            {   if($saca2== $buscamin)
                {
                    echo $saca2;
                }
            }
            $s3= "SELECT editorial FROM libro";
            $c3=  mysqli_query($conexion,$s3);
            while($saca3= mysqli_fetch_array($c3))
            {   if($saca3== $buscamin)
                {
                    echo $saca3;
                }
            }
        }
    }
    else
    {
        if(! $_SESSION["inicio"])
        {
            header("location: ./InicioSesion.php");
        }
    }
    echo "<br><br><form action=./Principal.php method=post><input type=submit value=VOLVER></form>";  
?>