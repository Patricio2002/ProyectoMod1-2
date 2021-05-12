<?php
    session_name("Coyo bidi");
    session_start();
    //Lista de opciones
    echo "
    <table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= '../Statics/Logo.png' width= 100 height= 100></td>
                <td></td>
                <td><form action='./InicioSesion.php' method=post></td>
                    <td><input type=submit name=inicio value=INICIAR SESIÓN></td>
                </form>
                <td><form action='./CrearCuenta.php' method=post></td>
                    <td><input type=submit name=registro value=REGISTRO></td>
                </form>
                <td><form action='./Principal.php' method=post></td>
                    <td><input type=submit name=vuelve value=VOLVER></td>
                    </from>
            </tr>
        </tbody>
    </table>
    <br>";
    //Buscar una coincidencia
    $busca=(isset($_POST["buscador"]) && $_POST["buscador"]!= "") ?$_POST["buscador"]: "No";//variable para que los datos no cambien si no es necesario 
    if($busca == "No")
    {
        echo "
        <table>
        <thead></thead>
            <tbody>
                <tr>
                    <td><img src= '../Statics/lupa.png' width= 20 height= 20></td>
                    <td><form action='./Busca.php' method=post></td>
                        <td><input type=search name=buscador></td>
                        <td><input type=submit name=busca value=VER></td>
                    </form>
                </tr>
            </tbody>
        </table><br>";
    }
    //coincidencias de busqueda
    if(isset($_SESSION["inicio"])&&$busca!= "No")
    {
        echo $busca;
    }
    //redirección si no se ha iniciado seción
    else
    {
        if($busca !="No"&& !$_SESSION["inicio"])
        {
            header("location: ./InicioSesion.php");
        }
    }
?>