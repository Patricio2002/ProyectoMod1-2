<?php
    session_start();
    if (isset($_SESSION["correo"])){
        //presentación de la página y selección de actividad
        include("./encabezado.php");
        ?>
        <br>
        <form action="./resultados.php" method="POST">
            BUSCAR LIBROS:
            <br><br> <br>
                        Titulo: <input type="text" name="titulo">
                        <br><br>
                        Autor: <input type="text" name="autor" max="50">
                        <br><br>
                        Año de publicación: <input type="number" name="año">
                        <br><br>
                        Categoría: <select name="categoria">
                            <option value="0">Seleccione una categoria</option>
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
