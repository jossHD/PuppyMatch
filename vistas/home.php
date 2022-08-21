<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>PuppyMatch</title>
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
      <img src="../assets/logo-alt.png" alt="" srcset="" width="20%" class="icon" />

      <div class="logo_name">PuppyMatch</div>
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
  <!-- fin del menú -->

  <section class="home-section">
    <!-- inicio del slide -->
    <div class="slide-container">
      <!-- Inicio de card -->
      <div class="wrapper">
        <div class="clash-card barbarian">
          <div class="clash-card__image">
            <img
              src="https://www.purina-latam.com/sites/g/files/auxxlc391/files/styles/social_share_large/public/Purina%C2%AE%20Como%20disciplinar%20a%20tu%20gato.jpg?itok=V7Gs6wt3"
              alt="barbarian" />
          </div>
          <div class="clash-card__sexo">
            Gato Macho
            <!--Tipo y sexo-->
          </div>
          <div class="clash-card__unit-name">Michi
            <!--Nombre-->
          </div>
          <div class="clash-card__unit-description">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label">Acerca de mi: </label>
                <p>Soy un gato muy cariñoso.</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Edad: </label>
                <p>6 meses</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Raza: </label>
                <p>Desconocido</p>
              </div>
            </div>
          </div>
          <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
            <div class="row">
              <div class="one-third">
                <a name="" id="" class="btn btn-primario" href="#" role="button"><i
                    class='bx bxs-bookmark-heart'></i></a>
                <a name="" id="" class="btn btn-success" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin de card -->
      <!-- Inicio de card -->
      <div class="wrapper">
        <div class="clash-card barbarian">
          <div class="clash-card__image">
            <img
              src="https://fotografias.lasexta.com/clipping/cmsimages02/2019/01/25/DB41B993-B4C4-4E95-8B01-C445B8544E8E/98.jpg?crop=4156,2338,x0,y218&width=1900&height=1069&optimize=high&format=webply"
              alt="barbarian" />
          </div>
          <div class="clash-card__sexo">
            Gato Macho
            <!--Tipo y sexo-->
          </div>
          <div class="clash-card__unit-name">Michi
            <!--Nombre-->
          </div>
          <div class="clash-card__unit-description">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label">Acerca de mi: </label>
                <p>Soy un gato muy cariñoso.</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Edad: </label>
                <p>6 meses</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Raza: </label>
                <p>Desconocido</p>
              </div>
            </div>
          </div>
          <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
            <div class="row">
              <div class="one-third">
                <a name="" id="" class="btn btn-primario" href="#" role="button"><i
                    class='bx bxs-bookmark-heart'></i></a>
                <a name="" id="" class="btn btn-success" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin de card -->
      <!-- Inicio de card -->
      <div class="wrapper">
        <div class="clash-card barbarian">
          <div class="clash-card__image">
            <img src="https://static.dw.com/image/58956274_303.jpg" alt="barbarian" />
          </div>
          <div class="clash-card__sexo">
            Gato Macho
            <!--Tipo y sexo-->
          </div>
          <div class="clash-card__unit-name">Michi
            <!--Nombre-->
          </div>
          <div class="clash-card__unit-description">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label">Acerca de mi: </label>
                <p>Soy un gato muy cariñoso.</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Edad: </label>
                <p>6 meses</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Raza: </label>
                <p>Desconocido</p>
              </div>
            </div>
          </div>
          <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
            <div class="row">
              <div class="one-third">
                <a name="" id="" class="btn btn-primario" href="#" role="button"><i
                    class='bx bxs-bookmark-heart'></i></a>
                <a name="" id="" class="btn btn-success" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin de card -->
      <!-- Inicio de card -->
      <div class="wrapper">
        <div class="clash-card barbarian">
          <div class="clash-card__image">
            <img
              src="https://www.fundacion-affinity.org/sites/default/files/el-gato-necesita-tener-acceso-al-exterior.jpg"
              alt="barbarian" />
          </div>
          <div class="clash-card__sexo">
            Gato Macho
            <!--Tipo y sexo-->
          </div>
          <div class="clash-card__unit-name">Michi
            <!--Nombre-->
          </div>
          <div class="clash-card__unit-description">
            <div class="row">
              <div class="col-md-12">
                <label class="form-label">Acerca de mi: </label>
                <p>Soy un gato muy cariñoso.</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Edad: </label>
                <p>6 meses</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Raza: </label>
                <p>Desconocido</p>
              </div>
            </div>
          </div>
          <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
            <div class="row">
              <div class="one-third">
                <a name="" id="" class="btn btn-primario" href="#" role="button"><i
                    class='bx bxs-bookmark-heart'></i></a>
                <a name="" id="" class="btn btn-success" href="#" role="button"><i class='bx bxl-whatsapp'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
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