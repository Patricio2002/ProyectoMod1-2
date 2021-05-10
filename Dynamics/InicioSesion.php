<?php
    session_name("Coyo bidi");
    session_start();
    if(isset($_SESSION["inicio"])){
        header("location: Principal.php");
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
                    <form action="Principal.php">
                        <table>
                            <thead>
                                <th><h1>¡¡BIENVENIDO A COYO BIDI!! INICIE SESION PARA CONTINUAR</h1></th>                          
                            </thead>
                            <tbody>
                                <tr>
                                    <label>
                                        <td>Usuario: <input type="text" name="nombre" required></td>
                                    </label> 
                                </tr>
                                <tr>
                                    <label>
                                        <td>Contraseña: <input type="password" name="contraseña required"></td> 
                                    </label> 
                                </tr>
                                <tr>
                                    <td><input type="submit" name="InicioSesion" value="Iniciar sesión"></td> 
                                </tr>
                                <tr>
                                    <td>¿Todavía no tiene cuenta? Cree una aquí</td> 
                                </tr>
                                <tr>
                                    <td><a href="./CrearCuenta.php"> Crear cuenta</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </fieldset>
            </body>
            </html>';
    }

?>