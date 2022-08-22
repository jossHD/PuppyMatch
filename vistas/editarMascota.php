<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

$id_mascota = isset($_GET['id_mascota']) ? $_GET['id_mascota'] : '';

/* conexion con mascotas*/
$sql = $con->prepare("SELECT * FROM mascota where idmascota = $id_mascota");
$sql->execute();
$resultado_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con raza mascotas*/
$sql = $con->prepare("SELECT * FROM raza_masct");
$sql->execute();
$raza_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con tipo mascotas*/
$sql = $con->prepare("SELECT * FROM tipo_masct");
$sql->execute();
$tipo_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion sexo mascotas*/
$sql = $con->prepare("SELECT * FROM sexo_mascota");
$sql->execute();
$sexo_mascotas = $sql->fetchAll(PDO::FETCH_ASSOC);

/* conexion con usuarios*/
$sql = $con->prepare("SELECT * FROM usuario");
$sql->execute();
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="../style/numascota.css">
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
    <div class="mascotas-nueva ">
        <div class="titulos">Editar Mascota</div>

        <?php 
          foreach($resultado_mascotas as $dato){
        ?>

        <form id="editar_mascota" enctype="multipart/form-data" class="row g-3 needs-validation justify-content-md-center" novalidate>
            <div class="col-sm">
                <div class="col-md-10">
              <div class="profile-pic-div">
                <img src="<?php echo ruta_mascotas.$dato['img_ruta']?>" id="photo">
                <input type="file" id="file" name="file">
                <label for="file" id="uploadBtn">Editar foto</label>
              </div>
            </div>
            </div>
            <div class="col-sm ">
            <div class="col-md-10 pb-2">
              <label for="validationCustom01" class="form-label">Nombre:</label>
              <input name="nombre" type="text" class="form-control" id="validationCustom01" value="<?php echo $dato['nombre']?>" required>
              <div class="valid-feedback">
                correcto!
              </div>
              <div class="invalid-feedback">
                Ingrese su nombre
              </div>
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom02" class="form-label">Tipo:</label>
              <select name="tipo" type="text" list="value" class="form-control" id="validationCustom02" required>
                <?php foreach ($tipo_mascotas as $tipo) {
                ?>
                <option value="<?php echo $tipo['idtipo_masct']?>"
                <?php 
                  if ($dato['idtipo_masct'] === $tipo['idtipo_masct']) {
                    echo "selected";
                  } else {
                    echo "";
                  }
                ?>><?php echo $tipo['tipo_masct']?></option>
                <?php } ?></select>
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Ingrese el tipo de mascota 
              </div>
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom03" class="form-label">Edad:</label>
              <input name="edad" type="text" class="form-control" id="validationCustom03" value="<?php echo $dato['edad'];?>">
            </div>
            <div class="col-md-10 pb-2">              
              <label for="validationCustom04" class="form-label">Sexo</label>
              <select name="sexo" type="text" class="form-control" id="validationCustom04" required>
              <?php foreach ($sexo_mascotas as $sexo) {
                ?>
                <option value="<?php echo $sexo['idSexo_masc']?>"
                <?php 
                  if ($dato['idSexo_masc'] === $sexo['idSexo_masc']) {
                    echo "selected";
                  } else {
                    echo "";
                  }
                ?>><?php echo $sexo['sexo_masc']?></option>
                <?php }?></select>
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Ingrese el sexo de su mascota
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="col-md-10 pb-2">
              <label for="validationCustom07" class="form-label">Raza:</label>
              <select name="raza" type="text" class="form-control" id="validationCustom07" >
                <?php foreach ($raza_mascotas as $raza) {
                ?>
                <option value="<?php echo $raza['idraza_masct']?>"
                <?php 
                  if ($dato['idraza_masct'] === $raza['idraza_masct']) {
                    echo "selected";
                  } else {
                    echo "";
                  }
                ?>><?php echo $raza['raza_masct']?></option>
                <?php }?></select>
              </select>
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom07" class="form-label">Acerca de mi:</label>
                <textarea name="acerca_de_mi" class="form-control" id="validationCustom07" rows="4" ><?php echo $dato['acerca_de_mi']; ?></textarea>
            </div>
            <div id="respuesta" class="col-md-10 pb-4">
            </div>
            <div class="col-md-10 pb-4">
            </div>
            <div class="col-10  text-center ">
              <button class="btn btn-primario" href="editar_mascota.php?id_mascota=<?php echo $dato['idmascota'];?>" name="submit" type="submit">Guardar</button>
            </div>
          </div>
          </form>
        <?php } ?>
      </div>

 </section> 

      <footer>

      </footer>  
    <script src="../scripts/numascota.js"></script> 
    <script src="../scripts/editar_mascota.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>
