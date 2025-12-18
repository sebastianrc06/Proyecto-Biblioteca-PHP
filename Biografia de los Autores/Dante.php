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
        <li><a href="../Iniciar_sesion/Biografia/Dante2.php">Iniciar sesion</a></li> 
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
      <center><h2>Dante Alighieri</h2></center><br>
      <p>Dante Alighieri, nacido en Florencia, Italia, en 1265, es uno de los poetas más importantes de la literatura mundial, conocido principalmente por su obra maestra La Divina Comedia. Hijo de un noble, Dante recibió una educación clásica y mostró un temprano interés por la literatura y la filosofía, lo que lo llevó a convertirse en una figura clave del movimiento literario conocido como el Dolce Stil Novo.

<br>La vida de Dante estuvo marcada por la turbulencia política de su tiempo. Se alineó con los guelfos, una facción que apoyaba al Papa en las luchas políticas de la época, lo que resultó en su exilio de Florencia en 1302. Durante su exilio, escribió gran parte de su obra, reflejando su profunda angustia por la situación política y social de Italia. Su experiencia de exilio influyó en su escritura, y en La Divina Comedia, una alegoría de la vida después de la muerte, Dante se embarca en un viaje a través del Infierno, el Purgatorio y el Paraíso. Este poema épico no solo es una obra literaria, sino también un compendio de la filosofía, la teología y la política de su tiempo.

<br>La Divina Comedia está escrita en italiano vernáculo, lo que fue innovador en su época, ya que la literatura se escribía predominantemente en latín. Esta elección ayudó a establecer el italiano como un idioma literario y permitió que su obra alcanzara una audiencia más amplia. A través de sus personajes y paisajes vívidos, Dante explora temas universales como el amor, la justicia, la moralidad y la búsqueda del conocimiento.

<br>Dante también escribió otros trabajos notables, incluidos La Vita Nuova, una colección de poesía y prosa que relata su amor por Beatriz, y Convivio, un tratado filosófico. Su vida estuvo marcada por el amor, la pérdida y la búsqueda de la verdad, lo que se refleja en su obra.

<br>Falleció en 1321 en Rávena, donde pasó sus últimos años en el exilio. A lo largo de los siglos, Dante Alighieri ha sido objeto de admiración y estudio, y su influencia perdura en la literatura, la filosofía y la teología. Su legado continúa inspirando a escritores, artistas y pensadores en todo el mundo, consolidándolo como uno de los pilares fundamentales de la literatura occidental.</p><br><br>
    </div>
    <div class="imagen">
      <img src="../Imagenes de biografia/Portrait_de_Dante.jpg" alt="Griselda Blanco">
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
        <form class="box input-box" action="../Prestamo/18.1_Dante_Bio_Prestamo.php" method="POST">
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