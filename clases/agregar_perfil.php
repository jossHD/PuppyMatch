<?php

require '../config/config.php';
require '../config/database.php';


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['telefono'];
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
    INSERT INTO usuario(nombres,apellidos,telefono,correo,contraseña,direccion,acerca_de_mi,img_ruta,idsexo_usuario)
    VALUES('$nombres','$apellidos','$telefono','$correo','$contraseña','$direccion','$acerca_de_mi','$file','d')
    ");
    $sql->execute();

    echo json_encode('correcto');

}else{
    
    $db = new Database();
    $conex = $db->conectar();

    /* conexion con productos */
    $sql = $conex->prepare("
    INSERT INTO usuario(nombres,apellidos,telefono,correo,contraseña,direccion,acerca_de_mi,img_ruta,idsexo_usuario)
    VALUES('$nombres','$apellidos','$telefono','$correo','$contraseña','$direccion','$acerca_de_mi','default.jpg','d')
    ");
    $sql->execute();

    echo json_encode('correcto');
}
?>
