<?php
    include("./Config.php");
    $conexion=connectdb();
    session_start();
    if(isset($_SESSION["correo"])){
        header("location: Principal.php");
    }
    elseif(isset($_POST["InicioSesion"])){
        $IniSes="SELECT * FROM usuario WHERE correo LIKE('$_POST[correo]') AND contraseña LIKE('$_POST[contraseña]');";
        $rev=mysqli_query($conexion, $IniSes);
        $cont= mysqli_num_rows($rev);
        if($cont==1){
            $_SESSION["correo"]=$_POST["correo"];
            header("location: ./Principal.php");
        }
        else{
            header("location: InicioSesion.php");
        }
        
    }
    else{
        echo '   
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Iniciar sesión</title>
            </head>
            <body>
                <fieldset style="width:600px">
                <legend>INICIO DE SESION</legend>
                    <form action="./InicioSesion.php" method="POST">
                        <table>
                            <thead>
                                <th><h1>¡¡BIENVENIDO A COYO BIDI!! INICIE SESION PARA CONTINUAR</h1></th>                          
                            </thead>
                            <tbody>
                                <tr>
                                    <label>
                                        <td>Correo: <input type="email" name="correo" required></td>
                                    </label> 
                                </tr>
                                <tr>
                                    <label>
                                        <td>Contraseña: <input type="password" name="contraseña" required></td> 
                                    </label> 
                                </tr>
                                <tr>
                                    <td><input type="submit" name="InicioSesion" value="Iniciar sesión"></td> 
                                </tr>
                                <tr>
                                    <td>¿Todavía no tiene cuenta? Cree una aquí</td> 
                                </tr>
                                <tr>
                                    <td><a href="../Templates/CrearCuenta.html"> Crear cuenta</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </fieldset>
            </body>
            </html>';
    }

?>