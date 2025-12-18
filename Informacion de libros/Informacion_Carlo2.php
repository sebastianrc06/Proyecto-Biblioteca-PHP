<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
  
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
        <li><a href="/PAGE-AVANCE/index2.php">Inicio</a></li>
        <li><a href="../Catalogo/index.php">Catalogo</a></li>
        <li><a href="#">Libros</a></li>
        <li><a href="#">Cuenta</a></li>
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
      <center><h2>Pinocho</h2></center><br>
      <p>Pinocho, el famoso cuento de Carlo Collodi, narra la historia de un trozo de madera que cobra vida y se convierte en un niño de carne y hueso, pero que, a lo largo de su viaje, debe enfrentarse a los desafíos de la vida, el crecimiento personal y la responsabilidad. El relato comienza con Geppetto, un carpintero solitario y bondadoso, quien, al tallar una marioneta de madera, se ve sorprendido al ver cómo ésta cobra vida. A esta marioneta se le da el nombre de Pinocho, y a partir de este momento comienza una serie de desventuras, ya que, a pesar de su naturaleza traviesa, Pinocho ansía ser un niño real. <br><br>
      Pinocho, sin embargo, es un personaje impulsivo, desobediente y, a menudo, engañado por las malas influencias que encuentra en su camino. Se ve tentado por diversos personajes y situaciones, como el Gran Zorro y el Gato, que lo engañan para que se adentre en peligrosas aventuras. A pesar de las enseñanzas que recibe de figuras como el Hada Azul y el Grillo Parlante, Pinocho se encuentra una y otra vez en situaciones que lo alejan de su objetivo: convertirse en un niño real. Cada vez que miente o actúa mal, su nariz crece, un símbolo de las consecuencias de sus malas decisiones. <br><br>
      Sin embargo, a lo largo de la historia, Pinocho va aprendiendo valiosas lecciones sobre la responsabilidad, la honestidad y el amor. Su evolución es gradual; al principio, es un niño que busca satisfacer sus deseos inmediatos sin pensar en las consecuencias, pero conforme enfrenta dificultades, va comprendiendo la importancia de la valentía, la amistad y la obediencia. Su transformación culmina cuando, tras demostrar su nobleza de corazón y su dedicación a su padre, Geppetto, finalmente se convierte en un niño real, cumpliendo así su sueño, pero también simbolizando el triunfo de la madurez sobre la inmadurez.</p>
      </p><br><br>
    </div>
    <div class="imagen">
      <img src="../img/Pinocho2.jpeg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Pinocho2.php" class="arrow-next">&#8594;</a>
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
        <form class="box input-box" action="../Prestamo/7.1_Bill_Bio_Prestamo.php" method="POST">
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