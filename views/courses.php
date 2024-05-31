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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">TutoMarket</a>

         <form action="search.php" method="post" class="search-form">
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
         <a href="courses.php"><i class="fa-solid fa-store"></i></i><span>Tienda</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Monitorias</span></a>
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Monitores</span></a>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 1) : ?>
            <a href="dashboardadmin.php"><i class="fa-solid fa-user-tie"></i><span>Dashboard</span></a>
         <?php endif; ?>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 3) : ?>
            <a href="myarticles.php"><i class="fas fa-newspaper"></i><span>Mis Artículos</span></a>
         <?php endif; ?>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 4) : ?>
            <a href="mygroups.php"><i class="fas fa-users"></i><span>Mis Grupos</span></a>
         <?php endif; ?>

         <a href="contact.php"><i class="fas fa-headset"></i><span>Contactanos</span></a>
      </nav>

   </div>

   <section class="courses">

      <h1 class="heading">Grupos de Monitoria</h1>

      <div id="Grupos-box" class="box-container">

         <div class="box">
            <div class="tutor">
               <img src="images/pic-2.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-1.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete HTML tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-3.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-2.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete CSS tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-4.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-3.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete JS tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-5.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-4.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete Boostrap tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-6.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-5.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete JQuery tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-7.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-6.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete SASS tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-8.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-7.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete PHP tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-9.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-8.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete MySQL tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-1.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-9.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete react tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

      </div>

   </section>





   <!-- custom js file link  -->
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/home.js"></script>
   <script src="js/home_grupos.js"></script>


</body>

</html>