<?php
    session_start();
    include("./encabezado.php");
    $conexion=connectdb();
    $array2=array();
    $a=0;
    $i=0;
    $c=0;
    $d=0;
    $e=0;
    //revisa que se haya ingresado titulo
    if($_POST['titulo']!=NULL){
        $a=1;
<<<<<<< HEAD
        $A=("SELECT * FROM libro WHERE titulo LIKE('$_POST[titulo]')");
=======
        $A="SELECT * FROM libro WHERE titulo LIKE(%'$_POST[titulo]'%)";
>>>>>>> 669b6e58d0183952f8c101dadcfab74a6f959d7c
        array_push($array2, $A);
    }
    //revisa si se ingresó autor
    if($_POST['autor']!=NULL){
        $c=1;
        if($a==1){
            $C="AND autor LIKE(%'$_POST[autor]'%)";
        }
        //resultado si es primera categoría ingresada
        else{
            $C="SELECT * FROM libro WHERE autor LIKE(%'$_POST[autor]'%)";
        }
        array_push($array2, $C);
    }
    //revisa si se ingresó año
    if($_POST['año']!=NULL){
        $d=1;
        if($a==1 || $c == 1){
            $D="AND anio LIKE('$_POST[año]')";
        }
        //resultado si es primera categoría ingresada
        else{
            $D="SELECT * FROM libro WHERE anio LIKE('$_POST[año]')";
        }
        array_push($array2, $D);
    }
    //revisa si se ingresó categoria
    if($_POST['categoria']!=NULL){
        $e=1;
        if($a==1 || $c == 1 || $d == 1){
            $E="AND categoria LIKE('$_POST[categoria]')";
        }
        //resultado si es primera categoría ingresada
        else{
            $E= "SELECT * FROM libro WHERE categoria LIKE('$_POST[categoria]')";
        }
        array_push($array2, $E);
    }
    //dentro de los arreglos se va metiendo la busqueda de filtros
    array_push($array2, ";");
    //vuelve el arreglo cadena
    $buscar=implode(" ", $array2);
    //almacena datos
    $res=mysqli_query($conexion, $buscar);
    $cont= mysqli_num_rows($res);
    if($cont>0){
        while($arreglo=mysqli_fetch_array($res)){
            echo "<img src=$arreglo[2] height=200px>";
            echo "<br>";
            echo "id del libro: $arreglo[0]";
            echo "<br>";
            echo "titulo: $arreglo[1]";
            echo "<br>";
            echo " autor: $arreglo[3]";
            echo "<br>";
            echo " año: $arreglo[4]";
            echo "<br>";
            echo "<form action='./Detalles.php' method=POST>";
                echo '<input type=submit name=ver value="ver mas">';
                echo "<input type=hidden name=oculto value=$arreglo[0]>";
            echo "</form>";
            echo "<br><br>";
        }
    }
    else{
        echo "no se encontraron coincidencias";
    }
<<<<<<< HEAD
   $libro=mysqli_fetch_array($res);
    echo $buscar;
=======
>>>>>>> 669b6e58d0183952f8c101dadcfab74a6f959d7c
?>