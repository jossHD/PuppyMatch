<?php

require '../config/config.php';
require '../config/database.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$acerca_de_mi = $_POST['acerca_de_mi'];
$sexo = $_POST['sexo'];
$raza = $_POST['raza'];
$tipo = $_POST['tipo'];

if ($_FILES["file"]["name"] != null ) {

    $file = "img_". date("dHis").$_FILES["file"]["name"];
    $ruta = $_FILES["file"]["tmp_name"];
    $destino = "../vistas/assets/mascotas/".$file;
    copy($ruta,$destino);


    $db = new Database();
    $con = $db->conectar();

    /* conexion con productos */
    $sql = $con->prepare("
    INSERT INTO mascota(nombre,edad,acerca_de_mi,idusuario,idSexo_masc,idraza_masct,idtipo_masct,img_ruta)
    VALUES ('$nombre','$edad','$acerca_de_mi','$usuario','$sexo','$raza','$tipo','$file')
    ");
    $sql->execute();

    echo json_encode('correcto');
}else{
    echo json_encode('error');
}

?>