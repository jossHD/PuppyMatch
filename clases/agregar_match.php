<?php

require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

if ($_GET['agregar'] == 'likes') {
    
    $idusuario =  $_GET['idusuario'];
    $idmascota =  $_GET['idmascota'];

    /* conexion con categorías */
    $sql = $con->prepare("
    INSERT INTO likes(idusuario,idmascota)
    VALUES('$idusuario','$idmascota')
    ");
    $sql->execute();

    header('Location:../vistas/home.php');
}

?>