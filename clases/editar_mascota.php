<?php

require '../config/config.php';
require '../config/database.php';

$id_mascota = isset($_GET['id_mascota']) ? $_GET['id_mascota'] : '';

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
    $conex = $db->conectar();

    /* conexion con productos */
    $sql = $conex->prepare("
    update mascota set edad='$edad',acerca_de_mi='$acerca_de_mi',idSexo_masc='$sexo',
    idraza_masct='$raza',idtipo_masct='$tipo', img_ruta='$file'
    where idmascota='$id_mascota';
    ");
    $sql->execute();

    echo json_encode('correcto');

}else{
    
    $db = new Database();
    $conex = $db->conectar();

    /* conexion con productos */
    $sql = $conex->prepare("
    update mascota set edad='$edad',acerca_de_mi='$acerca_de_mi',idSexo_masc='$sexo',
    idraza_masct='$raza',idtipo_masct='$tipo'
    where idmascota='$id_mascota';
    ");
    $sql->execute();

    echo json_encode('correcto');
}
?>
