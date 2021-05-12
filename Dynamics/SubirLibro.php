<?php
     include("./Config.php");
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
        //verifca que el libro sea PDF
        if($rev[1]=="pdf"){
            //lo cambia a la carpeta donde se guardarán los libros
            move_uploaded_file($arch, "../libro/$name");
            // revisa que la imagen sea pdf
            if($rev2=='jpg'||$rev2=='png'||$rev2=='jpeg'){
                move_uploaded_file($arch2, "../statics/$name");
                //sube a base de datos conimagen
                $libro="INSERT INTO libro (titulo, Img_libro, autor, anio, edicion, editorial, categoria, descripcion, libro, mayor18) VALUES ('$_POST[titulo]','../statics/$name', '$_POST[autor]', '$_POST[año]', '$_POST[edicion]', '$_POST[editorial]', '$_POST[categoria]', '$_POST[descripcion]', '../libro/$name', '$_POST[m18]');";
                $res2=mysqli_query($conexion, $libro);
            }
            else{
                //sube a base de datos sin imagen
                $libro="INSERT INTO libro (titulo, autor, anio, edicion, editorial, categoria, descripcion, libro, mayor18) VALUES ('$_POST[titulo]', '$_POST[autor]', '$_POST[año]', '$_POST[edicion]', '$_POST[editorial]', '$_POST[categoria]', '$_POST[descripcion]', '../libro/$name', '$_POST[m18]');";
                $res=mysqli_query($conexion, $libro);

            }
            header("location: ./Principal");
        }

    }
    else{
        header("location: ../Templates/SubirLibro.php");
    }
?>