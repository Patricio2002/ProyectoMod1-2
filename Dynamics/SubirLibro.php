<?php
     include("./Config.php");
     $array=array();
     $conexion=connectdb();
     //revisa que se haya enviado algo
    if(isset($_FILES["libro"])){
        //extrae su nombre y direccion 
        $name=$_FILES['libro']['name'];
        $arch=$_FILES['libro']['tmp_name'];
        //separa el nombre del libro de la extensión a través del punto
        $rev=explode(".", $name);
        //verifica que hayan subido imagen de portada
        if(isset($_FILES["portada"])){
            $name2=$_FILES['portada']['name'];
            $arch2=$_FILES['portada']['tmp_name'];
            $rev2=explode(".", $name2);  
        }
        if(isset($_POST["g1"])){
            array_push($array, $_POST["g1"]);
        }
        if(isset($_POST["g2"])){
            array_push($array, $_POST["g2"]);
        }
        if(isset($_POST["g3"])){
            array_push($array, $_POST["g3"]);
        }
        if(isset($_POST["g4"])){
            array_push($array, $_POST["g4"]);
        }
        if(isset($_POST["g5"])){
            array_push($array, $_POST["g5"]);
        }
        if(isset($_POST["g6"])){
            array_push($array, $_POST["g6"]);
        }
        if(isset($_POST["g7"])){
            array_push($array, $_POST["g7"]);
        }
        if(isset($_POST["g8"])){
            array_push($array, $_POST["g8"]);
        }
        if(isset($_POST["g9"])){
            array_push($array, $_POST["g9"]);
        }
        if(isset($_POST["g10"])){
            array_push($array, $_POST["g0"]);
        }
        if(isset($_POST["g11"])){
            array_push($array, $_POST["g11"]);
        }
        if(isset($_POST["g12"])){
            array_push($array, $_POST["g12"]);
        }
        if(isset($_POST["g13"])){
            array_push($array, $_POST["g13"]);
        }
        //verifca que el libro sea PDF
        if($rev[1]=="pdf"){
            //lo cambia a la carpeta donde se guardarán los libros
            move_uploaded_file($arch, "../libro/$name");
            // revisa que la imagen sea pdf
            if($rev2=='jpg'||$rev2=='png'||$rev2=='jpeg'){
                move_uploaded_file($arch2, "../statics/$name");
                //sube a base de datos conimagen
                $libro="INSERT INTO libro (titulo, Img_libro, autor, anio, edicion, editorial, categoria, descripcion, libro, mayor18) VALUES ('$_POST[titulo]', '../statics/$name', '$_POST[autor]', '$_POST[año]', '$_POST[edicion]', '$_POST[editorial]', '$_POST[categoria]', '$_POST[descripcion]', '../libro/$name', '$_POST[m18]');";
                $res2=mysqli_query($conexion, $libro);
            }
            else{
                //sube a base de datos sin imagen
                $libro="INSERT INTO libro (titulo, autor, anio, edicion, editorial, categoria, descripcion, libro, mayor18) VALUES ('$_POST[titulo]', '$_POST[autor]', '$_POST[año]', '$_POST[edicion]', '$_POST[editorial]', '$_POST[categoria]', '$_POST[descripcion]', '../libro/$name', '$_POST[m18]');";
                $res=mysqli_query($conexion, $libro);

            }
            //saca el id del libro que se ha subido
            $idlibro="SELECT id_libro FROM libro WHERE libro LIKE('../libro/$name');";
            $res4=mysqli_query($conexion, $idlibro);
            //lo ingresa al arreglo
            $row=mysqli_fetch_array($res4);
            // asigna el valor a de genero e id_libro a la tabla librohas genero
            for ($i=0; $i < count($array); $i++) { 
                $genero="INSERT INTO librohasgenero (id_libro, id_genero) VALUES('$row[0]', '$array[$i]');";
                $res3=mysqli_query($conexion, $genero);
            }   
            header("location: ./Principal.php");
        }

    }
    else{
        header("location: ../Templates/SubirLibro.html");
    }
?>