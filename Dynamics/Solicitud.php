
<?php
    session_start();
    include("./encabezado.php");
if(isset($_SESSION["correo"])){
    echo '<html lang="es" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>Subir libro</title>
        </head>
        <body>
            <fieldset>
                <legend><h3>Datos del libro</h3></legend>
                    <form action="../Dynamics/SubirLibro.php" method="POST" enctype="multipart/form-data">
                        Nombre: <input type="text" name="titulo" required>
                        <br><br>
                        Autor: <input type="text" name="autor" max="50" value="Anonimo">
                        <br><br>
                        Editorial: <input type="text" name="editorial" required>
                        <br><br>
                        Año de publicación: <input type="number" name="año" required>
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
            </fieldset>
        </body>
    </html>';
}
else{
    header("location: ./InicioSesion.php");
}
?>