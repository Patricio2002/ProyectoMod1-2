<?php
<<<<<<< HEAD
    //Inicio
    echo '
    <table bgcolor=lightblue>
    <thead></thead>
        <tbody>
            <tr>
                <td><img src= "../Statics/Logo.png" width= 100 height= 100></td>
                <td></td>
                <h2>
                    <td>V</td>
                    <td>I</td>
                    <td>S</td>
                    <td>T</td>
                    <td>A</td>
                    <td></td>
                    <td>D</td>
                    <td>E</td>
                    <td>T</td>
                    <td>A</td>
                    <td>L</td>
                    <td>L</td>
                    <td>A</td>
                    <td>D</td>
                    <td>A</td>
                </h2>
                <td><form action="./Busca.php" method=post></td>
                    <td><input type=submit name=registro value=VOLVER></td>
                </form>
            </tr>
        </tbody>
    </table>
    <br>';//Opción de regresar
=======
    session_start();
    include("./encabezado.php");
    $array2=array();
    $a=0;
    $i=0;
    $c=0;
    $d=0;
    $e=0;
    if($_POST['titulo']!=NULL){
        $a=1;
        $A="SELECT * FROM libro WHERE titulo LIKE('$_POST[titulo]')";
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
>>>>>>> e9fb99d0e65c01c4e82d09a4927d1b20d1718064
?>