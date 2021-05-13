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
    if($_POST['titulo']!=NULL){
        $a=1;
        $A=("SELECT * FROM libro WHERE titulo LIKE('$_POST[titulo]')");
        array_push($array2, $A);
    }
    if($_POST['autor']!=NULL){
        $c=1;
        if($a==1){
            $C="AND autor LIKE('$_POST[autor]')";
        }
        else{
            $C="SELECT * FROM libro WHERE autor LIKE('$_POST[autor]')";
        }
        array_push($array2, $C);
    }
    if($_POST['año']!=NULL){
        $d=1;
        if($a==1 || $b == 1){
            $D="AND anio LIKE('$_POST[año]')";
        }
        else{
            $D="SELECT * FROM libro WHERE anio LIKE('$_POST[año]')";
        }
        array_push($array2, $D);
    }
    if($_POST['categoria']!=NULL){
        $e=0;
        if($a=1||$b==1||$c==1){
            $E="AND categoria LIKE('$_POST[categoria]')";
        }
        else{
            $E="SELECT * FROM libro WHERE categoria LIKE('$_POST[categoria]')";
        }
        array_push($array2, $E);
    }
    array_push($array2, ";");
    $buscar=implode(" ", $array2);
    $res=mysqli_query($conexion, $buscar);
   $libro=mysqli_fetch_array($res);
    echo $buscar;
?>