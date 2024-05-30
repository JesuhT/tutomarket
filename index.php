<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link href="views/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="assets/img/logo.png">
            </div>

            <ul>
                <li><a href="#Home">Inicio</a></li>
                <li><a href="#About">Sobre nosotros</a></li>
                <li><a href="#Menu">Articulos</a></li>
                <li><a href="#Gallary">Monitorias</a></li>
                <li><a href="#Review">Calificaciones</a></li>
            </ul>

            <div class="icon">
                <div class="sign">
                    <a id="ini" href="views/login.php" class="buttom-sign2">Iniciar Sesion<i id="user" class='bx bx-user-plus' ></i></i></a>
                    
                </div>

                <div class="sign">
                    <a href="views/register.php" class="buttom-sign">Registrarse<i class="fa-solid fa-angle-right"></i></a>
                    
                </div>
            </div>

        </nav>

        <div class="main">
            <div class="main-text">
                <div class="men_text">
                    <h1>Consigue <span>Productos</span> <br>y <span>Tutorias</span> rapidisimo</h1>
                </div>
                <p>
                    TutoMarket es la plataforma ideal para estudiantes y personal
                    de nuestra universidad. Aquí puedes encontrar monitorías personalizadas
                    para ayudarte en tus estudios y una sección de ventas donde podrás comprar
                    y vender artículos dentro de la comunidad universitaria. Nuestro objetivo
                    es facilitar el intercambio de conocimientos y recursos, creando un entorno
                    colaborativo y de apoyo mutuo. ¡Explora, aprende y comparte en TutoMarket!
                </p>
                <div class="main_btn">
                    <a href="#">Comprar</a>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>

            <div class="main_img">
                <img src="assets/img/main_img.png">
            </div>
        </div>
    </section>

    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="assets/img/Food-Plate.png">
            </div>

            <div class="about_text">
                <h1><span>Sobre</span>Nosotros</h1>
                <h3>¿Que ofrecemos?</h3>
                <p>
                    Nuestro objetivo es facilitar la conexión entre estudiantes que buscan apoyo académico y aquellos
                    que ofrecen monitorías,
                    financiadas por la universidad. Aquí podrás encontrar fácilmente monitores capacitados que te
                    ayudarán a superar los
                    desafíos académicos de una manera rápida y efectiva.<br><br>
                    Tambien fomentamos el espíritu emprendedor dentro de nuestra universidad.
                    Ofrecemos un espacio donde los estudiantes pueden comprar y vender artículos, promoviendo el
                    comercio justo y apoyando a quienes tienen pequeños negocios o desean vender sus pertenencias.
                    Creemos en
                    la colaboración y el apoyo mutuo como pilares fundamentales de nuestra comunidad universitaria.
                </p>
                <a href="#" class="about_btn">Registrarse</a>
            </div>
        </div>
    </div>



    <!--Menu-->

    <div class="menu" id="Menu">
        <h1>Nuestros <span>Articulos</span></h1>

        <div class="menu_box">
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/libro_calculo.jpg" alt="Libro de Cálculo">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Libro de Cálculo</h2>
                    <p>
                        Un completo libro de cálculo para estudiantes de ingeniería y ciencias.
                    </p>
                    <h3>$45,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/calculadora_cientifica.jpg" alt="Calculadora Científica">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Calculadora Científica</h2>
                    <p>
                        Herramienta esencial para resolver problemas matemáticos y científicos.
                    </p>
                    <h3>$35,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/sueter_universitario.jpg" alt="Suéter Universitario">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Suéter Universitario</h2>
                    <p>
                        Cómodo y elegante suéter con el logo de la universidad.
                    </p>
                    <h3>$50,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/agenda.jpg" alt="Agenda Estudiantil">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Agenda Estudiantil</h2>
                    <p>
                        Mantén tu vida universitaria organizada con esta práctica agenda.
                    </p>
                    <h3>$25,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/botella_agua.jpg" alt="Botella de Agua">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Botella de Agua</h2>
                    <p>
                        Botella reutilizable para mantenerte hidratado durante las clases.
                    </p>
                    <h3>$15,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/cuaderno_universitario.jpg" alt="Cuaderno Universitario">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Cuaderno Universitario</h2>
                    <p>
                        Cuaderno de alta calidad para tomar notas en todas tus clases.
                    </p>
                    <h3>$10,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/maletin.jpg" alt="Maletín Universitario">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Maletín Universitario</h2>
                    <p>
                        Espacioso maletín para llevar tus libros y laptop a la universidad.
                    </p>
                    <h3>$70,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        
            <div class="menu_card">
                <div class="menu_image">
                    <img src="assets/img/taza.jpg" alt="Taza Universitaria">
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2>Taza Universitaria</h2>
                    <p>
                        Taza con el logo de la universidad para tus bebidas favoritas.
                    </p>
                    <h3>$20,000</h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="menu_btn">Comprar</a>
                </div>
            </div>
        </div>
        
    </div>




    <!--Grupos-->

    <div class="gallary" id="Gallary">
        <h1>Grupos de<span>Monitoria</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="assets/img/gallary_1.jpg">

                <h3>Cálculo Diferencial</h3>
                <p>
                    Aprende a derivar funciones y aplicar conceptos a
                    problemas reales. Ideal para estudiantes que buscan
                    fortalecer
                    su comprensión en este pilar de las matemáticas
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

            <div class="gallary_image">
                <img src="assets/img/gallary_2.jpg">

                <h3>Álgebra Lineal</h3>
                <p>
                    Explora el mundo de los vectores, matrices y espacios
                    vectoriales. Entiende las transformaciones lineales y sus aplicaciones en diversas áreas. Perfecto
                    para
                    quienes desean profundizar en las bases matemáticas.
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

            <div class="gallary_image">
                <img src="assets/img/gallary_3.jpg">

                <h3>Física General</h3>
                <p>
                    Sumérgete en los principios básicos de la física. Estudia la mecánica, la termodinámica y el
                    electromagnetismo. Esencial para estudiantes que quieran comprender
                    cómo funciona el mundo físico a su alrededor.
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

            <div class="gallary_image">
                <img src="assets/img/gallary_4.jpg">

                <h3>Ecuaciones Diferenciales</h3>
                <p>
                    Aprende a resolver ecuaciones diferenciales y sus aplicaciones en la modelización de fenómenos
                    naturales y sociales. Imprescindible para aquellos que
                    buscan aplicar las matemáticas en problemas complejos.
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

            <div class="gallary_image">
                <img src="assets/img/gallary_5.jpg">

                <h3>Termodinámica</h3>
                <p>
                    Descubre los principios de la termodinámica y su impacto en los sistemas energéticos.
                    Analiza procesos térmicos y sus aplicaciones prácticas. Ideal para
                    estudiantes interesados en la física y la ingeniería.
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

            <div class="gallary_image">
                <img src="assets/img/gallary_6.jpg">

                <h3>Mecánica</h3>
                <p>
                    Explora los fundamentos de la mecánica clásica,
                    incluyendo la cinemática, dinámica y las leyes de
                    Newton. Aprende a analizar el movimiento de los cuerpos y las fuerzas que actúan sobre ellos.
                    Perfecto para estudiantes que desean entender los principios
                    básicos que rigen el movimiento en el universo.
                </p>
                <a href="#" class="gallary_btn">Ingresar</a>
            </div>

        </div>

    </div>




    <!--Review-->

    <div class="review" id="Review">
        <h1>Customer<span>Review</span></h1>

        <div class="review_box">
            <div class="review_card">

                <div class="review_profile">
                    <img src="assets/img/review_1.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                        blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                        asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Dolores soluta ullam ipsa voluptates
                        repudiandae dignissimos deleniti mollitia eum. Laudantium placeat velit nemo illo
                        pariatur. Fuga aperiam impedit illo atque repellendus!
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="assets/img/review_2.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                        blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                        asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Dolores soluta ullam ipsa voluptates
                        repudiandae dignissimos deleniti mollitia eum. Laudantium placeat velit nemo illo
                        pariatur. Fuga aperiam impedit illo atque repellendus!
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="assets/img/review_3.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                        blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                        asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Dolores soluta ullam ipsa voluptates
                        repudiandae dignissimos deleniti mollitia eum. Laudantium placeat velit nemo illo
                        pariatur. Fuga aperiam impedit illo atque repellendus!
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="assets/img/review_4.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                        blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                        asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Dolores soluta ullam ipsa voluptates
                        repudiandae dignissimos deleniti mollitia eum. Laudantium placeat velit nemo illo
                        pariatur. Fuga aperiam impedit illo atque repellendus!
                    </p>

                </div>

            </div>

        </div>

    </div>






    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallary</p>
                <p>Order</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>johndeo123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> WT Master Code</span></p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="/views/js/jquery-3.7.1.min.js"></script>
    <script src="views/js/scripts.js"></script>



</body>

</html>