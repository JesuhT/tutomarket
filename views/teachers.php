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

   <section class="teachers">

      <h1 class="heading">expert teachers</h1>

      <form action="" method="post" class="search-tutor">
         <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_tutor"></button>
      </form>

      <div class="box-container">

         <div class="box offer">
            <h3>become a tutor</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, itaque ipsam fuga ex et aliquam.</p>
            <a href="register.php" class="inline-btn">get started</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-2.jpg" alt="">
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

         <div class="box">
            <div class="tutor">
               <img src="images/pic-3.jpg" alt="">
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

         <div class="box">
            <div class="tutor">
               <img src="images/pic-4.jpg" alt="">
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

         <div class="box">
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

         <div class="box">
            <div class="tutor">
               <img src="images/pic-6.jpg" alt="">
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

         <div class="box">
            <div class="tutor">
               <img src="images/pic-7.jpg" alt="">
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

         <div class="box">
            <div class="tutor">
               <img src="images/pic-8.jpg" alt="">
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




   <!-- custom js file link  -->
   <script src="js/home.js"></script>


</body>

</html>