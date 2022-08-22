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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PuppyMatch</title>
</head>
<body>
    <section class="img-form">
            <div class="row align-items-center">
              <div class="col">
                <form id="inicia_sesion" class="row g-3 needs-validation justify-content-around" novalidate>
                    <div class="col-md-12 text-center">
                        <img src="../assets/logo.png" alt="" srcset="" class="logo pb-3">
                        <h4><b>Iniciar Sesión</b></h2>
                    </div>
                    <div class="col-md-8 ">

                      <label for="validationCustom01" class="form-label">Correo</label>
                      <input type="email" class="form-control" id="validationCustom01"  name="email" required>
                      <div class="valid-feedback">
                        Correcto!
                      </div>
                      <div class="invalid-feedback">
                        Ingrese un correo valido
                      </div>
                    </div>
                    <div class="col-md-8">
                      <label for="validationCustom02" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="validationCustom02" name="contraseña" value="" required>
                      <div class="valid-feedback">
                        Correcto!
                      </div>
                      <div class="invalid-feedback">
                        Contraseña incorrecta
                      </div>
                    </div>
                  
                    <div class="col-md-8" id="respuesta">
                    </div>

                    <div class="col-12 text-center">
                      <button class="btn btn-primario" name="submit" type="submit">Ingresar</button>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-secundario" href="register.php">Registrarse</a>
                      </div>
                  </form>
              </div>
            
              <div class="col-md-6 img-log">
                
              </div>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="../scripts/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>