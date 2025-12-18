<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>

  <link rel="stylesheet" href="style2.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap">
  
  <!-- FontAwesome para los iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <header>
    <div class="footer-logo">
        <img src="../img/Logo.png">
    </div>
    <nav>
      <ul>
        <li><a href="/PAGE-AVANCE/index.php">Inicio</a></li>
        <li><a href="../Catalogo/index2.php">Catalogo</a></li>
        <li><a href="#">Libros</a></li>
        <li><a href="#">Cuenta</a></li>
        <li><a href="../Iniciar_sesion/Biografia/William2.php">Iniciar sesion</a></li>  
      </ul>
    </nav>
    <div class="social-container">
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <i class="fa-brands fa-square-google-plus"></i>
      <i class="fa-brands fa-square-x-twitter"></i>
      <i class="fa-brands fa-square-facebook"></i>
    </div>
  </header>
<br><br>
  <div class="container">
    <div class="texto">
      <center><h2>William Shakespeare</h2></center><br>
      <p>William Shakespeare fue un dramaturgo, poeta y actor inglés, considerado uno de los más grandes escritores de la literatura universal. Nació el 23 de abril de 1564 en Stratford-upon-Avon, Inglaterra, y se le conoce como el "Bardo de Avon". Su obra abarca una amplia variedad de géneros, incluidos dramas, comedias y poemas, y ha influido profundamente en el desarrollo del teatro y la literatura.

<br>Shakespeare se casó en 1582 con Anne Hathaway, con quien tuvo tres hijos. Durante su vida, se trasladó a Londres, donde comenzó su carrera teatral. A partir de la década de 1590, se convirtió en una figura prominente en el mundo del teatro, escribiendo y actuando en diversas obras. Su éxito lo llevó a convertirse en copropietario del Globe Theatre, donde se representaron muchas de sus obras más famosas.

<br>Entre sus dramas más célebres se encuentran Hamlet, Romeo y Julieta, Otelo, Macbeth y El sueño de una noche de verano. Sus obras exploran temas universales como el amor, la traición, la ambición y la condición humana, y se caracterizan por su rica caracterización, diálogos memorables y complejas tramas. Shakespeare también escribió una serie de sonetos que abordan el amor, la belleza y el paso del tiempo, consolidando su reputación como poeta.

<br>A pesar de su éxito, la vida personal de Shakespeare sigue siendo en parte un misterio. Falleció el 23 de abril de 1616 en su ciudad natal. Su legado perdura, y su obra ha sido traducida a todos los idiomas y adaptada en innumerables formas en el cine, el teatro y la literatura. La influencia de Shakespeare en el idioma inglés es también notable; muchas de sus frases y expresiones se han integrado en el uso cotidiano.

<br>La obra de Shakespeare no solo ha resistido la prueba del tiempo, sino que sigue siendo relevante en la actualidad, siendo estudiada y representada en todo el mundo. Su habilidad para capturar la esencia de la experiencia humana y su profunda comprensión de la naturaleza humana lo han consagrado como uno de los más grandes dramaturgos de todos los tiempos. </p><br><br>
    </div>
    <div class="imagen">
      <img src="../Imagenes de biografia/Shakespeare.jpg" alt="Griselda Blanco">
    </div>
  </div>

  <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">JORNAY BOOK'S</span>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Compañía</li>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Sobre nosotros</a></li>
          <li><a href="#">Contacta con nosotros</a></li>
          <li><a href="#">Nuestros socios</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Cuenta</li>
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Mi cuenta</a></li>
          <li><a href="#">Preferencias</a></li>
          <li><a href="#">Compra</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Libros</li>
          <li><a href="#">Categorías</a></li>
          <li><a href="#">Autores</a></li>
          <li><a href="#">Ediciones</a></li>
          <li><a href="#">Editorial</a></li>
        </ul>
        <form class="box input-box" action="../Prestamo/20.1_Romeo_Prestamo.php" method="POST">
          <li class="link_name">¿Quieres tomar prestado un libro?</li>
          <li><button type="submit" class="btn-prestamo">RealizarPréstamo</button></li>
        </form>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2024 <a href="#">JORNAY BOOK'S</a> Reservados todos los derechos</span>
        <span class="policy_terms">
          <a href="#">Política de privacidad</a>
          <a href="#">Términos y condiciones</a>
        </span>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>