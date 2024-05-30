<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link href="css/register.css" rel="stylesheet" />

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title>
</head>

<body>
    <div class="container">
        <header>Registration</header>

        <form id="registroForm" action="../controllers/action/signup.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Personales</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombres</label>
                            <input type="text" name="name" placeholder="Ingresa tus Nombres">
                        </div>

                        <div class="input-field">
                            <label>Apellidos</label>
                            <input type="text" name="lastname" placeholder="Ingresa tus Apellidos">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Correo electrónico">
                        </div>

                        <div class="input-field">
                            <label>Celular</label>
                            <input type="number" name="phone" placeholder="Ingresa tu numero">
                        </div>

                        <div class="input-field">
                            <label>Tipo de usuario</label>
                            <select name="user-type">
                                <option disabled selected hidden>Tipo de usuario</option>
                                <option value="2">Estudiante corriente</option>
                                <option value="3">Vendedor</option>
                                <option value="4">Monitor</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>Codigo estudiantil</label>
                            <input type="text" name="student-code" placeholder="Escribe tu codigo de estudiante">
                        </div>
                        <div class="input-field">
                            <label>Programa</label>
                            <select class="programaSelect" id="programa" name="programa">
                                <option value="" disabled selected hidden>Programa</option>
                            </select>
                        </div>
                        <div class="input-field long-text">
                            <label>Biografia</label>
                            <textarea id="biografia" name="biografia" placeholder="Agrega información adicional" rows="4" cols="50"></textarea>
                        </div>
                        <div class="input-field long-text">

                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Detalles de usuario</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre de usuario</label>
                            <input type="text" name="username" placeholder="Elige un nombre de usuario">
                        </div>

                        <div class="input-field">
                            <label>Contraseña</label>
                            <input type="password" name="pswd" placeholder="Ingresa una Contraseña" >
                        </div>
                        <div class="input-field">
                            <label>Confirmar Contraseña</label>
                            <input type="password" name="confirm-pswd" placeholder="Confirma la Contraseña" >
                        </div>

                    </div>
                    <div class="buttons">

                        <div>
                            <a style="width:6rem" class="backBtn" href="login.php" style="color: #ffff; text-decoration: none;">
                                <span class="btnText">Back</span>
                            </a>

                        </div>

                        <button class="sumbit" value="submitt">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/cargarProgramas.js"></script>
</body>

</html>