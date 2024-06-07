<?php
session_start();
if (!isset($_SESSION['ID_USUARIO'])) {
   // Redirige a login.php después de 2 segundos
   echo '<script>
        setTimeout(function() {
            window.location = "login.php";
        }, 2000);
    </script>';
   exit; // Asegura que no se procese más código PHP
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">TutoMarket</a>

         <form action="courses.php" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="Buscar..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>

         <div class="profile">
            <img src="<?php echo $_SESSION['RUTA']; ?>" class="image" alt="">
            <h3 class="name"><?php echo $_SESSION["NOMBRE"] . " ";
                              echo $_SESSION["APELLIDO"];
                              ?></h3>
            <p class="role"><?php echo $_SESSION['NOMBRE_ROL'] . " "; ?></p>
            <a href="profile.php" class="btn">Ver perfil</a>
            <div class="flex-btn">
               <a href="contact.php" class="option-btn">Soporte</a>
               <a href="../controllers/action/logout.php" class="option-btn">Cerrar sesion</a>
            </div>
         </div>

      </section>

   </header>

   <div class="side-bar">

      <div id="close-btn">
         <i class="fas fa-times"></i>
      </div>

      <div class="profile">
         <img src="/assets/img/people/pic-2.jpg" class="image" alt="">
         <h3 class="name"><?php echo $_SESSION["NOMBRE"] . " ";
                           echo $_SESSION["APELLIDO"];
                           ?></h3>
         <p class="role"><?php echo $_SESSION['NOMBRE_ROL'] . " "; ?></p>
         <a href="profile.php" class="btn">Ver perfil</a>
      </div>

      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
         <!-- <a href="about.php"><i class="fas fa-question"></i><span>Información</span></a> -->
         <a href="shop.php"><i class="fa-solid fa-store"></i></i><span>Tienda</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Monitorias</span></a>
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Monitores</span></a>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 1) : ?>
            <a href="dashboardadmin.php"><i class="fa-solid fa-user-tie"></i><span>Dashboard</span></a>
         <?php endif; ?>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 3) : ?>
            <a href="myarticles.php"><i class="fas fa-newspaper"></i><span>Mis Artículos</span></a>
         <?php endif; ?>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] != 1) : ?>
            <a href="mygroups_estudiante.php"><i class="fas fa-users"></i><span>Mis Grupos</span></a>
         <?php endif; ?>
         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 4) : ?>
            <a href="mygroups.php"><i class="fas fa-users"></i><span>Administrar Grupos</span></a>
         <?php endif; ?>

         <a href="contact.php"><i class="fas fa-headset"></i><span>Contactanos</span></a>
      </nav>

   </div>

   <section class="teachers">

      <h1 class="heading">Grupos a los que haces parte</h1>

      <form action="" method="post" class="search-tutor">
         <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_tutor"></button>
      </form>

      <div id="content-a" class="box-container">

         <div class="box offer card">
            <h3>¿Quieres crear un nuevo grupo?</h3>
            <p>Aqui podras crear tu grupo de monitorias de manera fácil</p>
            <a href="#" id="linkCrearGrupo" class="inline-btn">Crear grupo</a>
         </div>
         <div class="box card">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div>
                  <h3>john deo</h3>
                  <span>developer</span>
               </div>
            </div>
            <p>total playlists : <span>4</span></p>
            <p>total videos : <span>18</span></p>
            <p>total likes : <span>1208</span></p>
            <a href="teacher_profile.php" class="inline-btn">view profile</a>
         </div>
      </div>

   </section>
   <section class="form-container">
      <form id="formCrearGrupo" class="hide" action="/../../controllers/action/crearGrupo.php" method="post">
         <h3>Crear Grupo</h3>

         <!-- Aquí puedes incluir cualquier campo adicional necesario para crear el grupo -->
         <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['ID_USUARIO']; ?>" class="box" readonly>

         <p>Materia</p>
         <input type="text" name="materia" placeholder="Materia del Grupo" maxlength="132" class="box" required>

         <p>Descripción</p>
         <textarea name="descripcion" placeholder="Descripción del Grupo" class="box" required></textarea>

         <p>Imagen del Grupo</p>
         <input type="file" name="imagenGrupo" accept="image/*" class="box">

         <input type="submit" value="Crear Grupo" name="submit" class="btn">
      </form>
   </section>





   <!-- custom js file link  -->
   <script src="js/home.js"></script>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/sweetalert2.all.min.js"></script>
   <script src="js/mygroups.js"></script>



</body>

</html>