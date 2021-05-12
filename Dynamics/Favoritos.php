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
               <td><form action="./principal.php" method=post></td>
               <td><input type=submit name=coleccion value=Buscar></td>
               </from>
            </tr>
        </tbody>
    </table>';
    echo "<H2>FAVORITOS</H2>";
    if(isset($_POST["InicioSesion"]))
    {
        include("./Config.php");
        $conexion=connectdb();
        $fav="SELECT * FROM libro LEFT JOIN favorito ON libro.id_libro=favorito.id_libro;";
        $checa=mysqli_query($conexion, $fav);
        $arreglo= mysqli_fetch_array($checa);
        while($arreglo= mysqli_fetch_array($checa))
        {
            echo "<table border='1'>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>";
        }
    }
?>