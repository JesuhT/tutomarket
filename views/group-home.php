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
   <title>watch</title>

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
            <a href="mygroups.php"><i class="fas fa-users"></i><span>Mis Grupos</span></a>
         <?php endif; ?>

         <a href="contact.php"><i class="fas fa-headset"></i><span>Contactanos</span></a>
      </nav>

   </div>

   <section class="watch-video">

      <div class="video-container">
         <div class="video">

         </div>
         <h3 class="title" style="font-size: 25px;">Titulo grupo</h3>
         <div class="info" style="justify-content: space-between;">
            <div class="part1" style="display: flex;">
               <p class="date"><i class="fas fa-calendar"></i><span>22-10-2022</span></p>
               <p class="date"><i class="fas fa-heart" style="margin-left: 20px;"></i><span>Integrantes</span></p>
            </div>
            <div class="part2" style="margin:0 20px;">
               <div class="tutor">
                  <img src="images/pic-(idmonitor).jpg" alt="">
                  <div>
                     <h3>nombremonitor</h3>
                     <span>rol</span>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </section>

   <section class="comments">

      <h1 class="heading">Anuncios</h1>

      <div class="box-container">

         <div class="box">
            <div class="user">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>john deo</h3>
                  <span>22-10-2022</span>
               </div>
            </div>
            <div class="comment-box">awesome tutorial!
               keep going!</div>
         </div>

      </div>

   </section>
   <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 4) : ?>


      <footer class="footer">
         <div class="comments">
            <form action="" id="form-nuevo-anuncio" class="add-comment" style="display:flex;flex-direction: row; justify-content: center; align-items: center;">
               <h3>Nueva publicación</h3>
               <textarea name="comment_box" id="comment_box" placeholder="Escribe algo aquí" required maxlength="1000" cols="30" rows="10"></textarea>
               <input type="submit" value="add comment" class="inline-btn" name="add_comment" style="margin-left: 15px;">
            </form>
         </div>
      </footer>
   <?php endif; ?>
   <!-- custom js file link  -->
   <script src="js/home.js"></script>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/sweetalert2.all.min.js"></script>
   <script src="js/group-home.js"></script>
   <script src="js/group-home-anuncios.js"></script>
   <script src="js/agregar-anuncios.js"></script>
</body>

</html>