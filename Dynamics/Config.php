<?php
    define("DBUSER","root");
    define("DBHOST","localhost");
    define("PASSWORD","");
    define("DB","coyobidi");

    function connectdb (){
        $con=mysqli_connect(DBHOST, DBUSER, PASSWORD,DB);
        if(!$con){
            echo "no se pudo acceder a la base de datos";
        }
        return $con;
    }

?>