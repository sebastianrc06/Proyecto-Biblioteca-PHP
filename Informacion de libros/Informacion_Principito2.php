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
      <center><h2>Principito</h2></center><br>
      <p>El Principito, una de las obras más conocidas de la literatura universal, es un relato poético y filosófico que narra las experiencias de un joven príncipe que viaja por el universo. La historia comienza cuando un aviador se ve obligado a hacer un aterrizaje forzoso en el desierto del Sahara, donde se encuentra con un niño pequeño que le pide dibujarle un cordero. A lo largo de sus conversaciones, el aviador descubre que este niño no es un niño común, sino un príncipe de un pequeño asteroide llamado B-612. <br><br>
      El Principito le cuenta al aviador su historia, que abarca su vida en su planeta natal, donde cuida de una pequeña flor que él ama profundamente. En su asteroide, el príncipe se encuentra solo, pero su amor por la flor es sincero, aunque también tiene dudas sobre su importancia. Después de dejar su hogar, el Principito viaja por varios otros planetas, cada uno habitado por un adulto que representa diferentes aspectos de la vida humana. Encuentra a un rey que se cree dueño de todo, a un vanidoso que busca la admiración constante, a un bebedor que se ahoga en la culpa, a un farolero que sigue órdenes sin cuestionar, y a un geógrafo que nunca ha visto el mundo que describe. <br><br>
      Cada uno de estos personajes representa un tipo de adultismo que el Principito no comprende, pues su visión del mundo es pura, sincera y abierta a la belleza de las pequeñas cosas. En su viaje, el Principito también conoce a un zorro, quien le enseña una de las lecciones más profundas del libro: "Lo esencial es invisible a los ojos." A través de su relación con el zorro, el Principito aprende que el verdadero amor y la amistad no pueden ser vistos o medidos de manera material, sino que se comprenden a través de los sentimientos y el compromiso. <br><br>
      La lección final del Principito tiene lugar cuando regresa al desierto y encuentra una serpiente que lo puede llevar de vuelta a su hogar, pero a costa de su vida. El príncipe decide despedirse del aviador, pues sabe que es el momento de regresar a su flor y a su hogar. La obra termina con el aviador recordando a su amigo el Principito, mientras mantiene la esperanza de que, de alguna manera, el príncipe sigue vivo, regresando a su planeta para cuidar de su amada flor.</p>
    </div>
    <div class="imagen">
      <img src="../img/Principito2.jpg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Principito2.php" class="arrow-next">&#8594;</a>
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