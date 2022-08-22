<?php

require '../config/config.php';
require '../config/database.php';

function cerrar(){
    if (isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
    }
}
cerrar();

$url ="http://localhost/doGet/PuppyMatch/vistas/login.php"; // aqui pones la url
$tiempo_espera = 0; // Aquí se configura cuántos segundos hasta la actualización.
//La funcion para la redirección
header("refresh: $tiempo_espera; url=$url");

?>