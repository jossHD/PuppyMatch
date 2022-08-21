<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mascota.css">
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
  <div class="mascotas-tarjetas ">
    <div class="rows pb-3">
      <span class="titulo">Mascotas</span>
      <a href="numascota.php" class="btn btn-primario">Añadir mascota</a>
    </div>
    <div class="mascotitas">
      <div class="tarjeta">
        <div class="tarjeta-image" >
          <img src="https://imagenes.elpais.com/resizer/h6Q3Cb9fH8uXM_Fw-r7rionLXVM=/980x980/arc-anglerfish-eu-central-1-prod-prisa.s3.amazonaws.com/public/ZXHWLZPS4AJUEXDFDGRTCN3RMQ.jpg"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Gato hembra</span>
          <h2>Misha</h2>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-warning" href="editarMascota.php" role="button"><i class='bx bxs-edit-alt'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/1420405/pexels-photo-1420405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Perro Hembra</span>
          <h2>Valentina</h2>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-warning" href="#" role="button"><i class='bx bxs-edit-alt'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/1741205/pexels-photo-1741205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Gato Macho</span>
          <h2>Oliver</h2>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-warning" href="#" role="button"><i class='bx bxs-edit-alt'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/58997/pexels-photo-58997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text ">
          <span class="date">Perro Macho</span>
          <h2>Draco</h2>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-warning" href="#" role="button"><i class='bx bxs-edit-alt'></i></a>
          </div>
        </div>
      
      </div>
    </div>
  </div>



 </section> 

      <footer>

      </footer>  
    <script src="scripts/mascota.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>