<?php
    session_start();
<<<<<<< HEAD
    if (isset($_SESSION["correo"])){
        //presentación de la página y selección de actividad
        echo '
        <table bgcolor=lightblue>
        <thead></thead>
            <tbody>
                <tr>
                    <td><img src= "../Statics/Logo.png" width= 100 height= 100></td>';
                    echo "<td> $_SESSION[correo]</td>";
                    echo "<td><a href=./Cerrar.php>Salir</a></td>";
                    echo '<td><img src= "../Statics/lupa.png" width= 20 height= 20></td>
                </tr>
            </tbody>
        </table>
        <br>';
        ?>
        <br>
        <form action="./resultados.php" method="POST">
            BUSCAR LIBROS:
            <br><br> <br>
                        Nombre: <input type="text" name="titulo">
                        <br><br>
                        Autor: <input type="text" name="autor" max="50">
                        <br><br>
                        Año de publicación: <input type="number" name="año">
                        <br><br>
                        Categoría: <select name="categoria">
                            <option value="1">Libro de Texto</option>
                            <option value="2">Examen</option>
                            <option value="3">Dicionario</option>
                            <option value="4">Enciclopedia</option>
                            <option value="5">Revista</option>
                            <option value="6">Obra literaria</option>
                        </select>
                        <br><br>
                        <input type="submit" name="subir" value="Buscar">
        </form>
        <?php
        //arreglo para desplegar aleatoriamente un libro
        $imagenes=["1"=>"<img src= '../Statics/L1.jpg' width= 400>",
                "2"=>"<img src= '../Statics/L2.jpg' width= 400>",
                "3"=>"<img src= '../Statics/L3.jpg' width=400>",
                "4"=>"<img src= '../Statics/L4.jpg' width= 400>",
                "5"=>"<img src= '../Statics/L5.jpg' width= 400>"];
        $r= rand(1, 5);
        foreach($imagenes as $key=>$value)
=======
    isset($_SESSION["inicio"]);
    //precentación de la página y selección de actividad
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
                <td><img src= "../Statics/lupa.png" width= 20 height= 20></td>
                <td><form action="./Busca.php" method=post></td>
                    <td><input type=search name=buscador</td>
                    <td><input type=submit name=busca value=VER></td>
                    </form>
            </tr>
        </tbody>
    </table>
    <br>';
    //arreglo para desplegar aleatoriamente un libro
    $imagenes=["1"=>"<img src= '../Statics/L1.jpg' width= 400>",
               "2"=>"<img src= '../Statics/L2.jpg' width= 400>",
               "3"=>"<img src= '../Statics/L3.jpg' width=400>",
               "4"=>"<img src= '../Statics/L4.jpg' width= 400>",
               "5"=>"<img src= '../Statics/L5.jpg' width= 400>"];
    $r= rand(1, 5);
    foreach($imagenes as $key=>$value)
    {
        if($r==$key)
>>>>>>> da42dd44860451a13647d17a93e8b81231bae73a
        {
            if($r==$key)
            {
                echo $value;
            }
        }
    }
    else{
        //header("location: InicioSesion.php");
    }
?> 
