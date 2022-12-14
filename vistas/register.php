<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Doget</title>
</head>
<body>
    <section class="img-form">
            <div class="row align-items-center">
              <div class="col-md-6 img-reg">
                
              </div>
              <div class="col">
                <form id="validar_contraseña" class="row g-3 needs-validation justify-content-around" novalidate>
                    <div class="col-md-12 text-center">
                        <img src="assets/logo.png" alt="" srcset="" class="logo pb-3">
                        <h4><b>Registrarse</b></h2>
                    </div>
                    <div class="col-md-8 ">

                      <label  class="form-label">Correo</label>
                      <input name="correo" type="email" class="form-control"  value="" required>
                      <div class="valid-feedback">
                        Correcto!
                      </div>
                      <div class="invalid-feedback">
                        Ingrese un correo valido
                      </div>
                    </div>
                    <div class="col-md-8">
                      <label  class="form-label">Contraseña</label>
                      <input name="contraseña" type="password" class="form-control" value="" required>
                      <div class="valid-feedback">
                        Contrseña segura!
                      </div>
                      <div class="invalid-feedback">
                        Ingresa una contraseña valida
                      </div>
                    </div>
                    <div class="col-md-8">
                      <label  class="form-label">Repetir contraseña</label>
                      <input name="confirmarcontraseña" type="password" class="form-control"  value="" required>
                      <div class="valid-feedback">
                        Contrseña segura!
                      </div>
                      <div class="invalid-feedback">
                        Ingresa una contraseña valida
                      </div>
                    </div>
                    <div id="respuesta" class="col-md-8">
                    </div>
                  
                    <div class="col-12 text-center">
                      <button class="btn btn-primario" type="submit">Registrarse</button>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-secundario" href="login.php">Iniciar sesión</a>
                      </div>
                  </form>
              </div>
            
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="../scripts/validar_contraseña.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>