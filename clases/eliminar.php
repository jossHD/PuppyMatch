<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

if ($_GET['eliminar'] == 'likes') {
    
    $idlike = $_GET['idlike'];

    /* conexion con categorías */
    $sql = $con->prepare("
    DELETE FROM likes WHERE idlike=$idlike");
    $sql->execute();

    header('Location:../vistas/mascotas_guardadas.php');
}

if ($_GET['eliminar'] == 'mascota') {
    
    $idmascota = $_GET['idmascota'];

    /* conexion con categorías */
    $sql = $con->prepare("
    DELETE FROM mascota WHERE idmascota=$idmascota");
    $sql->execute();

    header('Location:../vistas/mascotas_guardadas.php');
}

?>