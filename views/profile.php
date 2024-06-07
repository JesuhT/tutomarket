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
   <title>profile</title>

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
         <a href="shop.php"><i class="fa-solid fa-store"></i></i><span>Tienda</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Monitorias</span></a>
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Monitores</span></a>

         <?php if (isset($_SESSION['ID_ROL']) && $_SESSION['ID_ROL'] == 1) : ?>
            <a href="dashboardadmin.php"><i class="fa-solid fa-user-tie"></i><span>Dashboard</span></a>
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

   <section class="user-profile">

      <h1 class="heading">Tu perfil</h1>

      <div class="info">

         <div class="user">
            <img src="<?php echo $_SESSION['RUTA']; ?>" alt="">
            <h3><?php echo $_SESSION["NOMBRE"] . " ";
                           echo $_SESSION["APELLIDO"];
                           ?></h3>
            <p><?php echo $_SESSION['NOMBRE_ROL'] . " "; ?></p>
            <a href="update.php" class="inline-btn">Actualizar perfil</a>
         </div>

         <div class="box-container">

            <div class="box">
               <div class="flex">
                  <i class="fas fa-bookmark"></i>
                  <div>
                     <span>Mis Grupos</span>
                     <p>4</p>
                  </div>
               </div>
               <a href="#" class="inline-btn">Administrar</a>
            </div>

            <div class="box">
               <div class="flex">
                  <i class="fas fa-heart"></i>
                  <div>
                     <span>Mis articulos</span>
                     <p>2</p>
                  </div>
               </div>
               <a href="#" class="inline-btn">Administrar</a>
            </div>

            <div class="box">
               <div class="flex">
                  <i class="fas fa-comment"></i>
                  <div>
                     <span>Tickets</span>
                     <p>1
                     </p>
                  </div>
               </div>
               <a href="#" class="inline-btn">Info</a>
            </div>

         </div>
      </div>

   </section>





   <!-- custom js file link  -->
   <script src="js/home.js"></script>


</body>

</html>