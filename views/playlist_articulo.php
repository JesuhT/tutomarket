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
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">TutoMarket</a>

         <form action="shop.php" method="get" class="search-form">
            <input type="text" name="idArticulo" placeholder="Buscar..." maxlength="50">
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
            <a href="mygroups.php"><i class="fas fa-users"></i><span>Mis Grupos</span></a>
         <?php endif; ?>

         <a href="contact.php"><i class="fas fa-headset"></i><span>Contactanos</span></a>
      </nav>

   </div>

   <section id="grupo-info" class="playlist-details">

      <h1 class="heading">Detalles del grupo</h1>

      <div class="row">

         <div class="column">


            <div class="thumb">
               <img src="images/thumb-1.png" alt="">
               <span>10 videos</span>
            </div>
         </div>
         <div class="column">
            <div class="tutor">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>(nombre del monitor)</h3>
                  <span>(Fecha)</span>
               </div>
            </div>

            <div class="details">
               <h3>(nombre monitoria)</h3>
               <p>(descripcion)</p>
               <a href="teacher_profile.php" class="inline-btn">Ingresar</a>
            </div>
         </div>
      </div>

   </section>

   <section class="playlist-videos">

      <h1 class="heading">playlist videos</h1>

      <div class="box-container">

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-1.png" alt="">
            <h3>complete HTML tutorial (part 01)</h3>
         </a>

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-2.png" alt="">
            <h3>complete HTML tutorial (part 02)</h3>
         </a>

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-3.png" alt="">
            <h3>complete HTML tutorial (part 03)</h3>
         </a>

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-4.png" alt="">
            <h3>complete HTML tutorial (part 04)</h3>
         </a>

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-5.png" alt="">
            <h3>complete HTML tutorial (part 05)</h3>
         </a>

         <a class="box" href="group-home.php">
            <i class="fas fa-play"></i>
            <img src="images/post-1-6.png" alt="">
            <h3>complete HTML tutorial (part 06)</h3>
         </a>

      </div>

   </section>




   <!-- custom js file link  -->
   <script src="js/home.js"></script>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/sweetalert2.all.min.js"></script>
   <script src="js/playlist_articulo.js"></script>
</body>

</html>