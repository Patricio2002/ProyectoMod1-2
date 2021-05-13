<<?php
    include("./Config.php");
   if($_POST["Crear"==NULL)){
       header("location: ../Templates/CrearCuenta.html");
   }
   //conecta a base de datos
   $conexion=connectdb();
   //agrega los datos a la tabla de nombre
   $registro1 = "INSERT INTO nombre VALUES ('$_POST[RFC]', '$_POST[nombre]', '$_POST[apellidos]');";
   $res=mysqli_query($conexion, $registro1);
   //agrega los datos a la tabla de usuario
   $rest="INSERT INTO usuario (NoCuenta_RFC, nacimiento, correo, contraseña, id_tipoUsuario) VALUES ('$_POST[RFC]', '$_POST[fecha]', '$_POST[correo]', '$_POST[contraseña]', '$_POST[tipo]');";
   echo $rest;
   echo "<br>";
   $res2=mysqli_query($conexion, $rest);
   header("location: IniciSesion.php");
   echo "<br>";
?>