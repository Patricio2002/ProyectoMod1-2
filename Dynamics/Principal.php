<?php
    session_start();
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
            </tr>
        </tbody>
    </table>
    <br>';
    ?>
    <br>
    <form action="resultados.php" method="POST">
                    Nombre: <input type="text" name="titulo">
                    <br><br>
                    Autor: <input type="text" name="autor" max="50">
                    <br><br>
                    Editorial: <input type="text" name="editorial">
                    <br><br>
                    Edicion: <input type="number" name="edicion">
                    <br><br>
                    Año de publicación: <input type="number" name="año">
                    <br><br>
                    Seleccione genero(s):
                    terror<input type="radio" name="g1" value=1>
                    Química<input type="radio" name="g2" value=2>
                    Biología<input type="radio" name="g3" value=3>
                    Física<input type="radio" name="g4" value=4>
                    Derecho<input type="radio" name="g5" value=5>
                    <br><br>
                    Medicina<input type="radio" name="g6" value=6>
                    Literatura Clásica<input type="radio" name="g7" value=7>
                    Fantasía<input type="radio" name="g8" value=8>
                    Teología<input type="radio" name="g9" value=9>
                    <br><br>
                    ciencias políticas<input type="radio" name="g10" value=10>
                    Ciencia Ficción<input type="radio" name="g11" value=11>
                    Novela<input type="radio" name="g12" value=12>
                    Ensayo<input type="radio" name="g13" value=13>
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
                    <input type="submit" name="subir" value="Subir">
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
    {
        if($r==$key)
        {
            echo $value;
        }
    }
?> 
