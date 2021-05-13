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
    //revisa que se haya ingresado titulo
    if($_POST['titulo']!=NULL){
        $a=1;
        $A="SELECT * FROM libro WHERE titulo LIKE('$_POST[titulo]')";
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
<<<<<<< HEAD
    $cont= mysqli_num_rows($res);
    if($cont>0){
        while($row=mysqli_fetch_array($res)){
            echo "libro";
        }
    }
    else{
        echo "no se encontraron coincidencias";
    }
=======
   $libro=mysqli_fetch_array($res);
    echo $buscar;
>>>>>>> e9fb99d0e65c01c4e82d09a4927d1b20d1718064
>>>>>>> b734dcd9cc87caf4fc58e3093532a0b7e29b8d5c
?>