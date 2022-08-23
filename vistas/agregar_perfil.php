<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

/* conexion con mascotas*/
$sql = $con->prepare("SELECT * FROM mascota");
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

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/perfil.css">
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
        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="bx bx-heart"></i>
          <span class="links_name">Match</span>
        </a>
        <span class="tooltip">Match</span>
      </li>
      <li>
        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="bx bx-bookmark-heart"></i>
          <span class="links_name">Guardados</span>
        </a>
        <span class="tooltip">Guardados</span>
      </li>
      <li>
        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="bx bxs-dog"></i>
          <span class="links_name">Mis Mascotas</span>
        </a>
        <span class="tooltip">Mis Mascotas</span>
      </li>
      <li>
        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="bx bx-cog"></i>
          <span class="links_name">Configuración</span>
        </a>
        <span class="tooltip">Configuración</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <div class="name_job">
            <div class="name"><?php echo $id_usuario['nombres'];?></div>
            <div class="job"></div>
          </div>
        </div>
        <button class="btn" type="submit">
          <a href="../clases/cerrar.php"><i class="bx bx-log-out" id="log_out"> </i></a>
        </button>
      </li>
    </ul>
  </div>
  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Aún no has terminado.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        COMPLETA EL REGISTRO
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primario" data-bs-dismiss="modal">Entiendo</button>
      </div>
    </div>
  </div>
</div>
 <section class="perfil-section">
  <div class="perfil">
    <div class="titulos"> Mi Perfil</div>
      <form id="agregar_perfil" enctype="multipart/form-data" class="row g-3 needs-validation justify-content-md-center" novalidate>
        <div class="col-sm">
         <div class="col-md-10">
          <div class="profile-pic-div">
            <img src="<?php echo ruta_usuarios."default.jpg" ?>" id="photo">
            <input name="file" type="file" id="file">
            <label for="file" id="uploadBtn">Editar foto</label>
          </div>
        </div> 
        </div>
        <div class="col-sm ">
        <div class="col-md-10 pb-2">
          <label for="validationCustom01" class="form-label">Nombres:</label>
          <input name="nombres" type="text" class="form-control" id="validationCustom01" value="" required>
          <div class="valid-feedback">
            correcto!
          </div>
          <div class="invalid-feedback">
            Ingrese su nombre
          </div>
        </div>
        <div class="col-md-10 pb-2">
          <label for="validationCustom02" class="form-label">Apellidos:</label>
          <input name="apellidos" type="text" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Ingrese sus apellidos
          </div>
        </div>
        <div class="col-md-10 pb-2">
          <label for="validationCustom03" class="form-label">Teléfono:</label>
          <input name="telefono" type="tel" class="form-control" id="validationCustom03" value="">
        </div>
        <div class="col-md-10 pb-2">              
          <label for="validationCustom04" class="form-label">Correo:</label>
          <input  name="correo" type="email" class="form-control" id="validationCustom04" value="" required>
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Ingrese un correo valido
          </div>
        </div>
        <div class="col-md-10 pb-2">
          <label for="validationCustom05" class="form-label">Contraseña:</label>
          <input name="contraseña" type="text" class="form-control" id="validationCustom05" value="" required>
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Contraseña incorrecta
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="col-md-10 pb-2">
          <label for="validationCustom07" class="form-label">Dirección:</label>
          <input name="direccion" type="text" class="form-control" id="validationCustom07" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-10 pb-2">
          <label for="validationCustom07" class="form-label">Acerca de mi:</label>
            <textarea name="acerca_de_mi" class="form-control" id="validationCustom07" rows="4"></textarea>
        </div>
        <div id="respuesta" class="col-md-10 pb-4">
        </div>
        <div class="col-md-10 pb-4">
        </div>        
        <div class="col-10  text-center ">
          <button class="btn btn-primario" type="submit">Guardar</button>
        </div>
      </div>
      </form>
    </div>


</section> 

      <footer>

      </footer>  
    <script src="../scripts/perfil.js"></script> 
    <script src="../scripts/agregar_perfil.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>