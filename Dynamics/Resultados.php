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
        $A=("SELECT * FROM libro WHERE titulo LIKE('$_POST[titulo]')");
        array_push($array2, $A);
    }
    //revisa si se ingresó autor
    if($_POST['autor']!=NULL){
        $c=1;
        if($a==1){
            $C="AND autor LIKE('$_POST[autor]')";
        }
        //resultado si es primera categoría ingresada
        else{
            $C="SELECT * FROM libro WHERE autor LIKE('$_POST[autor]')";
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
        $e=0;
        if($a=1||$b==1||$c==1){
            $E="AND categoria LIKE('$_POST[categoria]')";
        }
        //resultado si es primera categoría ingresada
        else{
            $E="SELECT * FROM libro WHERE categoria LIKE('$_POST[categoria]')";
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
        while($row=mysqli_fetch_array($res)){
            echo "libro";
        }
    }
    else{
        echo "no se encontraron coincidencias";
    }
   $libro=mysqli_fetch_array($res);
    echo $buscar;
?>