<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/log-in.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title Sign-In">Iniciar sesión</span>

                <form id="formLogin" action="../controllers/action/login.php" method="POST">
                    <div class="input-field">
                        <input id="Email" type="text" name="email" placeholder="Ingresa tu usuario" autocomplete="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="Contraseña" type="password" name="pswd" placeholder="Contraseña" autocomplete="current-password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Recordarme</label>
                        </div>
                        
                        <a href="#" class="text">¿Olvidaste tu contraseña?</a>
                    </div>

                    <div class="input-field button">
                        <button value="submit">Ingresar</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿Aún no tienes cuenta?
                        <a href="register.php" class="text signup-link">Registrarse</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

     <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/cargarProgramas.js"></script>
     
</body>
</html>