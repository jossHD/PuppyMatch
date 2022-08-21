<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/numascota.css">
    <link rel="stylesheet" href="../style/style_m.css">
    <title>Puppy Match</title>
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
      <img src="../assets/logo-alt.png" alt="" srcset="" width="20%" class="icon">
     
        <div class="logo_name">PuppyMatch</div>
        <i class='bx bx-menu' id="btn" ></i>
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
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Woman_1.jpg/768px-Woman_1.jpg"
            alt="profileImg" />
          <div class="name_job">
            <div class="name">María Garcia</div>
            <div class="job"></div>
          </div>
        </div>
        <button class="btn" type="submit">
          <i class="bx bx-log-out" id="log_out"> </i>
        </button>
      </li>
    </ul>
  </div>
 <section class="mascotas-section">
    <div class="mascotas-nueva ">
        <div class="titulos"> Nueva Mascota</div>
        <form class="row g-3 needs-validation justify-content-md-center" novalidate>
            <div class="col-sm">
                <div class="col-md-10">
              <div class="profile-pic-div">
                <img src="https://media.istockphoto.com/vectors/backup-data-sign-line-icon-or-logo-cloud-sync-or-cloud-refresh-data-vector-id1291624160?b=1&k=20&m=1291624160&s=612x612&w=0&h=01H0hWwjV4kwrZdwWyeORMk-apVgA5cduEqcO2aFvqg=" id="photo">
                <input type="file" id="file">
                <label for="file" id="uploadBtn">Editar foto</label>
              </div>
            </div>
            </div>
            <div class="col-sm ">
            <div class="col-md-10 pb-2">
              <label for="validationCustom01" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
              <div class="valid-feedback">
                correcto!
              </div>
              <div class="invalid-feedback">
                Ingrese su nombre
              </div>
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom02" class="form-label">Tipo:</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required>
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Ingrese el tipo de mascota 
              </div>
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom03" class="form-label">Edad:</label>
              <input type="number" class="form-control" id="validationCustom03" >
            </div>
            <div class="col-md-10 pb-2">              
              <label for="validationCustom04" class="form-label">Sexo</label>
              <input type="text" class="form-control" id="validationCustom04" value="" required>
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
              <input type="text" class="form-control" id="validationCustom07" value="" >
            </div>
            <div class="col-md-10 pb-2">
              <label for="validationCustom07" class="form-label">Acerca de mi:</label>
                <textarea class="form-control" id="validationCustom07" rows="4"></textarea>
            </div>
            <div class="col-md-10 pb-4">
            </div>
            <div class="col-10  text-center ">
              <button class="btn btn-primario" type="submit">Añadir mascota</button>
            </div>
          </div>
          </form>
      </div>

 </section> 

      <footer>

      </footer>  
    <script src="../scripts/numascota.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>
