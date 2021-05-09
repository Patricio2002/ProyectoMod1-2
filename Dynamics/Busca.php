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
            <tr><td><form action='' method=post></td></tr>
                <tr><td><input type=submit name=biología value='Ciencias Biológicas y de la salud'></td></tr>
                <tr><td><input type=submit name=mate value='Ciencias Físico Matemáticas'></td></tr>
                <tr><td><input type=submit name=sociales value='Ciencias sociales'></td></tr>
                <tr><td><input type=submit name=lite value='Literatura'></td></tr>
            </form> 
        </tbody>
    </table>";
?>