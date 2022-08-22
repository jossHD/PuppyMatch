<?php

require '../config/config.php';
require '../config/database.php';

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$db = new Database();
$con = $db->conectar();

// conexion 
$sql = $con->prepare("
SELECT * FROM usuario where correo='$email'
");
$sql->execute();
$sesion = $sql->fetchAll(PDO::FETCH_ASSOC);

if($email === '' && $contraseña === ''){
    echo json_encode('error');

} else if($email === '' || $contraseña === ''){
    echo json_encode('error');
    
} else if($email != '' && $contraseña != ''){
    
    foreach($sesion as $row ) {
        if($row['correo'] != $email || $row['contraseña'] != $contraseña){
            echo json_encode('invalido');
        }else if ($row['correo'] === $email && $row['contraseña'] === $contraseña) {
            $_SESSION['usuario']=$row['idusuario'];
            echo json_encode('correcto');
        }
    }
}

function cerrar(){
    if (isset($_SESSION['usuario'])){
        $usuario = 0;
    }
}

?>