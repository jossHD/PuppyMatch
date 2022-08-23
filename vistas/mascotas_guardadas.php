<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

/* conexion con raza mascotas*/
$sql = $con->prepare("SELECT * FROM raza_masct");
$sql->execute();
$raza_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con usuarios*/
$sql = $con->prepare("SELECT * FROM usuario");
$sql->execute();
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

$cards_x_div = 4;
/* conexion likes */
$sql1 = $con->prepare("SELECT * FROM likes where idusuario =$usuario");
$sql1->execute();

//contar mascotas por div
$total_likes = $sql1->rowCount();
$divs = $total_likes/$cards_x_div;
$divs = ceil($divs);

/* conexion sesion */
$sql = $con->prepare("SELECT * FROM usuario where idusuario=$usuario");
$sql->execute();
$id_usuario = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mascota.css">
    <link rel="stylesheet" href="../style/style_m.css">
    <title>Doget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />

</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <img src="assets/logo-alt.png" alt="" srcset="" width="20%" class="icon" />

      <div class="logo_name">Doget</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class="bx bx-search"></i>
        <input type="text" placeholder="Search..." />
        <span class="tooltip">Buscar</span>
      </li>
      <li>
        <a href="home.php">
          <i class="bx bx-heart"></i>
          <span class="links_name">Match</span>
        </a>
        <span class="tooltip">Match</span>
      </li>
      <li>
        <a href="mascotas_guardadas.php">
          <i class="bx bx-bookmark-heart"></i>
          <span class="links_name">Guardados</span>
        </a>
        <span class="tooltip">Guardados</span>
      </li>
      <li>
        <a href="mascota.php">
          <i class="bx bxs-dog"></i>
          <span class="links_name">Mis Mascotas</span>
        </a>
        <span class="tooltip">Mis Mascotas</span>
      </li>
      <li>
        <a href="perfil.php">
          <i class="bx bx-cog"></i>
          <span class="links_name">Configuración</span>
        </a>
        <span class="tooltip">Configuración</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <?php 
          
            foreach ($id_usuario as $id_usuario) {
            
          ?>
          <img src="
          <?php 
            echo ruta_usuarios.$id_usuario['img_ruta'];
          ?>
          "
            alt="profileImg" />
          <div class="name_job">
            <div class="name"><?php echo $id_usuario['nombres'];?></div>
            <div class="job"></div>
          </div>
          <?php } ?>
        </div>
        <button class="btn" type="submit">
          <a href="../clases/cerrar.php"><i class="bx bx-log-out" id="log_out"> </i></a>
        </button>
      </li>
    </ul>
  </div>
 <section class="mascotas-section">
  <div class="mascotas-tarjetas ">
    <div class="rows pb-3">
      <span class="titulo">Mascotas Guardadas</span>
    </div>

    <!-- 4 tarjetas -->
    <?php 
      for ($i=0; $i < $divs ; $i++) { 
        
    ?>
    <div class="mascotitas">

    <?php 

    $iniciar = $i*$cards_x_div;
    // echo $iniciar;

    /* conexion clientes */
    $sql = $con->prepare("SELECT * FROM likes where idusuario = $usuario LIMIT :iniciar, :nlikes");
    $sql->bindParam(':iniciar',$iniciar, PDO::PARAM_INT);
    $sql->bindParam(':nlikes',$cards_x_div, PDO::PARAM_INT);
    $sql->execute();
    $likes = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($likes as $like){

      $id_mascota = $like['idmascota'];
        /* conexion con mascotas */
        $sql = $con->prepare("SELECT * FROM mascota where idmascota = $id_mascota");
        $sql->execute();
        $resultado_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($resultado_mascotas as $dato){

    ?>
      <div class="tarjeta-guardadas">
        <div class="tarjeta-image" >
          <img src="<?php echo ruta_mascotas.$dato['img_ruta']?>"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">
            <?php if ($dato['idSexo_masc']=== "m") {
              echo "MACHO";
            } else if ($dato['idSexo_masc']=== "h"){
              echo "HEMBRA";
            } else{
              echo "DESCONOCIDO";
            }
            ?>
            </span>
          <h2 style="align-self: start;"><?php echo $dato['nombre']?></h2>
          <p><?php echo $dato['acerca_de_mi']?></p>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="../clases/eliminar.php?eliminar=likes&idlike=<?php echo $like['idlike']?>" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-success" style="font-size: 16px;" href="<?php echo ruta_whatsapp."983456234" ?>"><i class='bx bxl-whatsapp'></i></a>
          </div>
        </div>
      
      </div>
    <?php } }?>

      </div>
      <?php }?>
    </div>
  </div>



 </section> 

      <footer>

      </footer>  
    <script src="../scripts/mascota.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>