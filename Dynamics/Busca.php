<?php
    session_name("Coyo bidi");
    session_start();
    $busca=(isset($_POST["buscador"]) && $_POST["buscador"]!= "") ?$_POST["buscador"]: "No";//variable para que los datos no cambien si no es necesario 
    if($busca != "No"&& $_SESSION["inicio"])
    {
        include("./Config.php");
        $conexion= connectdb();
        if($busca>= '0' && $busca<= '2021' && $_SESSION["inicio"])//si la busqueda es un año
        {
            $selec= "SELECT anio FROM libro";
            $chec=  mysqli_query($conexion,$selec);
            while($saca= mysqli_fetch_array($chec))//regresará todas las coincidencias
            {
                echo $saca;
            }
        }
        else//si no es un nnúmero
        {
            $buscamin=strtolower($busca);//regresa la cadena de la búsqueda convertida a minúscula
            $s1= "SELECT categoria FROM libro";//busca coincidencias en categoría
            $c1=  mysqli_query($conexion,$s1);
            while($saca1= mysqli_fetch_array($c1))
            {   if($saca1== $buscamin)
                {
                    echo $saca1;
                }
            }
            $s2= "SELECT autor FROM libro";//busca coincidencias en autor
            $c2=  mysqli_query($conexion,$s2);
            while($saca2= mysqli_fetch_array($c2))
            {   if($saca2== $buscamin)
                {
                    echo $saca2;
                }
            }
            $s3= "SELECT editorial FROM libro";//busca coincidencias en editorial
            $c3=  mysqli_query($conexion,$s3);
            while($saca3= mysqli_fetch_array($c3))
            {   if($saca3== $buscamin)
                {
                    echo $saca3;
                }
            }
            $s4= "SELECT titulo FROM libro";//busca coincidencias en libro
            $c4=  mysqli_query($conexion,$s4);
            while($saca4= mysqli_fetch_array($c4))
            {   if($saca4== $buscamin)
                {
                    echo $saca4;
                }
            }
        }
    }
    else//si el usuario no ha iniciado seción
    {
        if(! $_SESSION["inicio"])
        {
            header("location: ./InicioSesion.php");
        }
    }
    echo "<br><br><form action=./Principal.php method=post><input type=submit value=VOLVER></form>";  
?>