<?php

require '../config/config.php';
require '../config/database.php';


$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmarcontraseña = $_POST['confirmarcontraseña'];


if ($contraseña != $confirmarcontraseña) {

    echo json_encode('error');

}else{
    
    $db = new Database();
    $con = $db->conectar();

    /* conexion con productos */
    $sql1 = $con->prepare("
    INSERT INTO usuario(nombres,apellidos,telefono,correo,contraseña,direccion,acerca_de_mi,idsexo_usuario,img_ruta)
    VALUES('default','default','default','$correo','$contraseña','default','default','d','default.jpg')
    ");
    $sql1->execute();

    $sql = $con->prepare("
    SELECT * FROM usuario where correo='$correo'
    ");
    $sql->execute();
    $sesion = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($sesion as $row) {
        $_SESSION['usuario']=$row['idusuario'];
    }

    echo json_encode('correcto');
}
?>