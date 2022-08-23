<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

/* conexion con mascotas*/
$sql = $con->prepare("SELECT * FROM mascota Except SELECT * FROM mascota WHERE idusuario=$usuario");
$sql->execute();
$resultado_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con mascotas*/
$sql = $con->prepare("SELECT * FROM raza_masct");
$sql->execute();
$raza_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con usuarios*/
$sql = $con->prepare("SELECT * FROM usuario");
$sql->execute();
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion sesion */
$sql = $con->prepare("SELECT * FROM usuario where idusuario=$usuario");
$sql->execute();
$id_usuario = $sql->fetchAll(PDO::FETCH_ASSOC);

if ($usuario === 0) {
  header('Location:login.php');
}

?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Doget</title>
  <link rel="stylesheet" href="../style/home.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- inicio del menú -->
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
  <!-- fin del menú -->

  <section class="home-section">
    <!-- inicio del slide -->
    <div class="slide-container">
      <!-- Inicio de card -->
      <!-- Inicio de conexion -->

      <?php foreach ($resultado_mascotas as $row) {?>
      <div class="wrapper">
        <div class="clash-card barbarian">
          <div class="clash-card__image">
            <img
              src="
              <?php
                echo ruta_mascotas.$row['img_ruta'];
              ?>
              "
              alt="barbarian" />
          </div>
          <div class="clash-card__sexo">
            <?php if ($row['idSexo_masc']=== "m") {
              echo "MACHO";
            } else if ($row['idSexo_masc']=== "h"){
              echo "HEMBRA";
            } else{
              echo "DESCONOCIDO";
            }
            ?>
            <!--Tipo y sexo-->
          </div>
          <div class="clash-card__unit-name"><?php echo $row['nombre']; ?>
            <!--Nombre-->
          </div>
          <div class="clash-card__unit-description">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label">Acerca de mi: </label>
                <p><?php echo $row['acerca_de_mi']; ?></p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Edad: </label>
                <p><?php echo $row['edad']; ?></p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Raza: </label>
                <p><?php
                  foreach ($raza_mascotas as $raza) {
                    if ($row['idraza_masct'] === $raza['idraza_masct']) {
                      echo $raza['raza_masct'];
                    }
                  }
                ?></p>
              </div>
            </div>
          </div>
          <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
            <div class="row">
              <div class="one-third">
                <a name="" id="" class="btn btn-primario" href="../clases/agregar_match.php?agregar=likes&idmascota=<?php echo $row['idmascota'];?>&idusuario=<?php echo $usuario;?>" role="button"><i
                    class='bx bxs-bookmark-heart'></i></a>
                <a name="" id="" class="btn btn-success" href="<?php 
                  foreach ($usuarios as $lista_usuarios) {
                    if ($row['idusuario'] === $lista_usuarios['idusuario']) {
                      echo ruta_whatsapp.$lista_usuarios['telefono'];
                    }
                  }
                ?>" role="button"><i class='bx bxl-whatsapp'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
      <!-- Fin de conexion -->
      <!-- Fin de card -->
      
      <!-- fin del slide-->

  </section>


  <!--Scripts-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js">
  </script>
  <script src="../scripts/home.js"></script>
</body>

</html>