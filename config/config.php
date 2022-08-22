<?php

define("ruta_whatsapp","https://wa.me/");
define("ruta_mascotas", "assets/mascotas/");
define("ruta_usuarios","assets/usuarios/");

session_start();

$usuario = 0;
if (isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}

?>