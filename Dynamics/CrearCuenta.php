<?php
    session_name("Coyo bidi");
    session_start();
    $nombre=0;
    $apellidos=0;
    $fecha=0;
    $correo=0;
    $noCuenta=0;
    $RFC=0;
    $contraseña=0;
    $continuar=0;

    if(isset($_SESSION["inicio"])){
        header("location: Principal.php");
    }
    else{
            echo "<!DOCTYPE html>";
            echo "<html lang=en>";
            echo "<head>";
            echo  "<meta charset=UTF-8>";
                echo "<meta http-equiv=X-UA-Compatible content=IE=edge>";
                echo "<meta name=viewport content=width=device-width, initial-scale=1.0>";
                echo "<title>Crear cuenta</title>";
            echo "</head>";
            echo "<body>";
                echo "<fieldset style=width:400px>";
                echo" <legend>Crear cuenta</legend>";
                if (isset($_POST["tipo"])){
                    echo "<form action=Principal.php method=POST>";
                        if($_POST["tipo"]=="A"){
                            $nombre="alumno";
                            $apellidos="alumno";
                            $fecha="alumno";
                            $correo="alumno";
                            $noCuenta="alumno";
                            $RFC="alumno";
                          $contraseña="alumno";
                        }
                        elseif($_POST["tipo"]=="B"){
                            $nombre="profesor";
                            $apellidos="profesor";
                            $fecha="profesor";
                            $correo="profesor";
                            $noCuenta="profesor";
                            $RFC="profesor";  
                            $contraseña="profesor";                 
                        }
                           
                        elseif($_POST["tipo"]=="C"){
                            $nombre="Bibliotecario";
                            $apellidos="Bibliotecario";
                            $fecha="Bibliotecario";
                            $correo="Bibliotecario";
                            $noCuenta="Bibliotecario";
                            $RFC="Bibliotecario";
                            $contraseña="Bibliotecario";
                        }
                        elseif($_POST["tipo"]=="D"){ 
                            $nombre="Admin";
                            $apellidos="Admin";
                            $fecha="Admin";
                            $correo="Admin";
                            $noCuenta="Admin";
                            $RFC="Admin";
                            $contraseña="Admin";
                        }
                        echo "nombre: <input type=text name=nombre required>";
                        echo "<br><br>";
                        echo "Apellidos:<input type=text name=apellidos required>";
                        echo "<br><br>";
                        echo "Fecha de nacimiento:<input type=date name=fecha required>";
                        echo "<br><br>";
                        echo "correo electronico:<input type=email name=correo required>";  
                        echo "<br><br>"; 
                        if($_POST["tipo"]=="A"){
                            echo "Número de cuenta (sin guión):<input type=number name=noCuenta required>";
                        }
                        else{
                            echo "RFC:<input type=text name=RFC required>";
                        }
                        echo "<br><br>";  
                            echo "Contraseña:<input type=password name=contraseña required>";
                        echo "<br>"; 
                        $_SESSION["inicio"]=1;
                        echo "<input type=submit name=Crear value=Crear cuenta>";
                    echo "</form>";
                    }
                else{
                    echo "<h2>Seleccione su cuenta</h2>";
                    echo "<form action=CrearCuenta.php method=POST>";
                        echo "<select name=tipo>";
                            echo "<option value=A>Alumno</option>";
                            echo "<option value=B>Profesor</option>";
                            echo "<option value=C>Bibliotecario</option>";
                            echo "<option value=D>Administrador</option>";
                        echo "</select>";
                        echo "<br>";
                        echo "<input type=submit value=Continuar>";
                    echo "</form>";
                }
            echo "</fieldset>";
            echo "</body>";
            echo "</html>";
    }

?>