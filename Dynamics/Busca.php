<?php
    session_start();
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
            </tr>
        </tbody>
    </table>
    <br>";

    echo "
    <table>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= '../Statics/lupa.png' width= 20 height= 20></td>
                <td><form action='' method=post></td>
                    <td><input type=search name=buscador></td>
                </form>
            </tr>
        </tbody>
    </table><br>";
    echo "
    <table bgcolor=lightblue>
    <thead><th>CATEGORÍAS</th></thead>
        <tbody>
            <tr><td><form action='Busca.php' method=post></td></tr>
                <tr><td><input type=submit name=biol value='Ciencias Biológicas y de la salud'></td></tr>
                <tr><td><input type=submit name=mate value='Ciencias Físico Matemáticas'></td></tr>
                <tr><td><input type=submit name=sociales value='Ciencias sociales'></td></tr>
                <tr><td><input type=submit name=lite value='Literatura'></td></tr>
            </form> 
        </tbody>
    </table>";
    $bio=(isset($_POST["bio"]) && $_POST["bio"]!= "") ?$_POST["bio"]: "No";
    $mate=(isset($_POST["mate"]) && $_POST["mate"]!= "") ?$_POST["mate"]: "No";
    $sociales=(isset($_POST["sociales"]) && $_POST["sociales"]!= "") ?$_POST["sociales"]: "No";
    if($_SESSION['secion']&&$bio!= "No")
    {

    }
    elseif($_SESSION['secion']&&$mate!= "No")
    {
        
    }
    elseif($_SESSION['secion']&&$sociales!= "No")
    {
        
    }
    else
    {
        if(($bio!="No"||$mate!="No"||$sociales!="No")&& !$_SESSION['secion'])
        {
            header("location: ./InicioSesion.php");
        }
    }
?>