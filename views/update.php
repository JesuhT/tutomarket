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
   <title>update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">


</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">TutoMarket</a>

         <form action="search.php" method="get" class="search-form">
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

   <section class="form-container">
      <form id="formLogin" action="/../controllers/action/updateProfile.php" method="post" enctype="multipart/form-data">
         <h3>Update Profile</h3>

         <input data-id="<?php echo $_SESSION["ID_USUARIO"]; ?>" type="hidden" class="idUsuario box" name="idUsuario" readonly>

         <p>Update Name</p>
         <input type="text" name="nombres" placeholder="First Name" maxlength="50" class="box" required>
         <input type="text" name="apellidos" placeholder="Last Name" maxlength="50" class="box" required>

         <p>Update Email</p>
         <input type="email" name="email" placeholder="Email" maxlength="50" class="box" required>

         <p>Student Code</p>
         <input type="number" name="codigo" placeholder="Student Code" class="box" required>

         <p>Phone</p>
         <input type="number" name="celular" placeholder="Phone" class="box" required>

         <p>Biography</p>
         <textarea type="text" name="biografia" placeholder="Biography" class="box"></textarea>

         <p>Program</p>
         <select style="font-size: 18px; height: max-content;" class="form-control programaSelect box" name="programa" required>
            <option disabled selected>Programa</option>
            <!-- PHP: Insertar opciones del programa aquí -->
         </select>

         <p>Update Password</p>
         <input type="hidden" name="old_pass" placeholder="Enter your old password" maxlength="20" class="box">
         <input type="password" name="new_pass" placeholder="Enter your new password" maxlength="20" class="box">
         <input type="password" name="c_pass" placeholder="Confirm your new password" maxlength="20" class="box">

         <p>Update Picture</p>
         <input type="file" name="image" accept="image/*" class="box">
         <img id="currentImage" src="<?php echo $_SESSION["RUTA"]; ?>" alt="Current Image" style="max-width: 100px; display: block; margin-top: 10px;">

         <input type="submit" value="Update Profile" name="submit" class="btn">
      </form>
   </section>

   <script>
      document.querySelector('input[name="image"]').addEventListener('change', function(event) {
         const file = event.target.files[0];
         const preview = document.getElementById('currentImage');
         preview.src = URL.createObjectURL(file);
      });
   </script>



   <!-- custom js file link  -->
   <script src="js/home.js"></script>
   <script src="js/sweetalert2.all.min.js"></script>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/cargarProgramas.js"></script>
   <script src="js/editar-home.js"></script>


</body>

</html>