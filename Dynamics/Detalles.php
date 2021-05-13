<?php
    session_start();
    include("./encabezado.php");
    $conexion=connectdb();
    if(isset($_POST["ver"])){
        echo $_POST['oculto'];
        $detallesUwU="SELECT * FROM libro WHERE id_libro = '$_POST[oculto]';";
        $generoUwU = "SELECT * FROM librohasgenero 
        JOIN genero ON genero.id_genero = librohasgenero.id_genero
        JOIN libro ON libro.id_libro = librohasgenero.id_libro = '$_POST[oculto]';";
        $res=mysqli_query($conexion, $detallesUwU);
        $res2=mysqli_query($conexion, $generoUwU);
        echo "<fieldset style=width:400px>";
        while ($arreglo=mysqli_fetch_array($res)) {
            echo "<img src=$arreglo[2] height=200px>";
            echo "<br>";
            echo "id del libro: $arreglo[0]";
            echo "<br>";
            echo "titulo: $arreglo[1]";
            echo "<br>";
            echo " autor: $arreglo[3]";
            echo "<br>";
            echo " editorial: $arreglo[6]";
            echo "<br>";
            echo " edicion: $arreglo[5]";
            echo "<br>";
            echo " descripcion: $arreglo[8]";
            echo "<br>";

        }
        echo "</fieldset>";
    }
    else{
        header("location: ./Principal.php");
    }
?>