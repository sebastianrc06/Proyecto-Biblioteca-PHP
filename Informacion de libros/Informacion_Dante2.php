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
      <center><h2>La Divina Comedia</h2></center><br>
        <p>La Divina Comedia es la obra maestra de Dante Alighieri, una de las piezas más importantes de la literatura mundial. Publicada a principios del siglo XIV, esta obra épica y alegórica narra el viaje espiritual de Dante a través del Infierno, el Purgatorio y el Paraíso, acompañado por su amada Beatriz y, en la primera parte, por el poeta romano Virgilio. A través de su descenso y ascenso por estos tres reinos, Dante no solo presenta una visión teológica y filosófica del más allá, sino también una profunda reflexión sobre la moralidad, la justicia, la fe y el destino humano. <br><br>
        La obra comienza con Dante, el propio autor, perdido en un oscuro bosque, simbolizando su confusión espiritual. A través de su viaje, busca la salvación, una alegoría del alma que busca redención y la eterna vida junto a Dios. Es entonces cuando aparece Virgilio, el poeta romano que, por su sabiduría y virtud, lo guía a través de las profundidades del Infierno. A lo largo de la travesía, Dante presencia el tormento eterno de los condenados, quienes sufren de acuerdo con los pecados cometidos durante su vida. El Infierno está dividido en nueve círculos, donde cada uno está destinado a un tipo específico de pecado, y los condenados son castigados de manera que refleja sus faltas. <br><br>
        En la segunda parte, El Purgatorio, Dante y Virgilio ascienden una montaña que simboliza la purificación del alma. Aquí, las almas están en proceso de arrepentimiento, purificando sus pecados antes de alcanzar el Paraíso. En esta parte, se encuentran aquellos que, aunque han cometido faltas, tienen la esperanza de la salvación. Dante, movido por su propia reflexión, observa cómo estas almas sufren con la esperanza de un futuro mejor, una visión de penitencia y redención. <br><br>
        Finalmente, en el Paraíso, Beatriz se convierte en la guía de Dante, llevándolo por los cielos, donde encuentra las almas benditas. En este reino, los justos son recompensados con la visión de Dios, experimentando la luz divina y la paz eterna. A medida que avanza por los cielos, Dante reflexiona sobre la naturaleza de la fe, el amor divino y la perfección humana. La obra culmina en la visión beatífica de Dios, representado en una luz deslumbrante que encapsula la unidad perfecta del universo. <br><br>
        A través de su viaje, La Divina Comedia ofrece una profunda meditación sobre la condición humana, las virtudes y los vicios, la justicia divina y la búsqueda de la salvación. Cada parte de la obra está impregnada de alegorías filosóficas y teológicas que abordan las cuestiones de la moral, el destino y el libre albedrío, mientras que los numerosos personajes históricos, mitológicos y literarios que aparecen dan una dimensión cultural y política al relato.
      </p>
    </div>
    <div class="imagen">
      <img src="../img/Divina2.jpg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Divina2.php" class="arrow-next">&#8594;</a>
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