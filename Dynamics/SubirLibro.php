<?php
    echo '
    <!DOCTYPE html>
    <html lang="es" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>Subir libro</title>
        </head>
        <body>
            <fieldset>
                <legend><h3>Datos del libro</h3></legend>
                <form action="./SubirLibro.php" method=post></td>
                    Título: <input type="text" name="titulo" required>
                    <br><br>
                    Autor: <input type="text" name="autor" required>
                    <br><br>
                    Editorial: <input type="text" name="editorial" required>
                    <br><br>
                    Año de publicación: <input type="number" name="anio" required>
                    <br><br>
                    Género(s): <input type="text" name="genero" required>
                    <br><br>
                    Ingrese una imágen: <input type="file" name="imagen" required>
                    <input type="submit" value="Subir" required>
                    <input type="reset" value="Borrar">
                </form>
            </fieldset>
        </body>
    </html><br>';

    $t=(isset($_POST["titulo"]) && $_POST["titulo"]!= "") ?$_POST["titulo"]: "Inválido";
    $a=(isset($_POST["autor"]) && $_POST["autor"]!= "") ?$_POST["autor"]: "Inválido";
    $e=(isset($_POST["editoral"]) && $_POST["editorial"]!= "") ?$_POST["editorial"]: "Inválido";
    $an=(isset($_POST["anio"]) && $_POST["anio"]!= "") ?$_POST["anio"]: "Inválido";
    $g=(isset($_POST["genero"]) && $_POST["genero"]!= "") ?$_POST["genero"]: "Inválido";
    $i=(isset($_FILES['imagen'])&& $_FILES['imagen']!= "") ?$_FILES['imagen']: "Inválido";
    if($i!= "Inválido")
    {
        if(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION)== 'jpg' ||pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION)== 'png')
        {
            $exten=pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION);
            $imagen= $_FILES['pintura']['tmp_name'];
        }
        else
        {   

            $invalido= basename($_FILES['imagen']['name']);
            echo "<h1>El archivo $invalido no es válido</h1>";
            echo '<input type="reset" value="Borrar">';
        }
    }
    if($t!= "Inválido")
    {
       
    }
?>