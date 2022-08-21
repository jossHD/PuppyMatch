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
      <span class="titulo">Mascotas Guardadas</span>
    </div>
    <div class="mascotitas">
      <div class="tarjeta-guardadas">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/2253275/pexels-photo-2253275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Perro Macho</span>
          <h2 style="align-self: start;">Odie</h2>
          <p>No puedes comprar amor pero puedes adoptarlo</p>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-success" style="font-size: 16px;" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta-guardadas">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/2820134/pexels-photo-2820134.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Perro Hembra</span>
          <h2>Nara</h2>
          <p>No puedes comprar amor pero puedes adoptarlo</p>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-success" style="font-size: 16px;" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta-guardadas">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/208984/pexels-photo-208984.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text">
          <span class="date">Gato Macho</span>
          <h2>Felix</h2>
          <p>No puedes comprar amor pero puedes adoptarlo</p>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-success" style="font-size: 16px;" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
          </div>
        </div>
      
      </div>
      <div class="tarjeta-guardadas">
        <div class="tarjeta-image" >
          <img src="https://images.pexels.com/photos/68594/pexels-photo-68594.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
        </div>
        <div class="tarjeta-text ">
          <span class="date">Gato Hembra</span>
          <h2>Blanca</h2>
          <p>No puedes comprar amor pero puedes adoptarlo</p>
        </div>
        <div class="row">
          <div class="one-third">
            <a name="" id="" class="btn btn-danger" style="margin-right:5px ;" href="#" role="button"><i class='bx bxs-trash-alt'></i></a>
            <a name="" id="" class="btn btn-success" style="font-size: 16px;" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
          </div>
        </div>
      
      </div>
    </div>
  </div>



 </section> 

      <footer>

      </footer>  
    <script src="../scripts/mascota.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>