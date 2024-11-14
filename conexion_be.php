<?php

$conexion = mysqli_connect("localhost", "root", "1234", "login_register_db");

if($conexion){
    echo 'Conectado existosamente a la base de datos';
} 

else{
    echo 'No se ha podido conectar a la base de datos';
}


?>