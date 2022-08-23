<?php

require '../config/config.php';
require '../config/database.php';


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$acerca_de_mi = $_POST['acerca_de_mi'];

if ($_FILES["file"]["name"] != null ) {

    $file = "img_". date("dHis").$_FILES["file"]["name"];
    $ruta = $_FILES["file"]["tmp_name"];
    $destino = "../vistas/assets/usuarios/".$file;
    copy($ruta,$destino);


    $db = new Database();
    $conex = $db->conectar();

    /* conexion con productos */
    $sql = $conex->prepare("
    update usuario set nombres='$nombres',apellidos='$apellidos',telefono='$telefono',
    direccion='$direccion',acerca_de_mi='$acerca_de_mi', img_ruta='$file'
    where idusuario='$usuario';
    ");
    $sql->execute();

    echo json_encode('correcto');

}else{
    
    $db = new Database();
    $conex = $db->conectar();

    /* conexion con productos */
    $sql = $conex->prepare("
    update usuario set nombres='$nombres',apellidos='$apellidos',telefono='$telefono',
    direccion='$direccion',acerca_de_mi='$acerca_de_mi'
    where idusuario='$usuario';
    ");
    $sql->execute();

    echo json_encode('correcto');
}
?>
