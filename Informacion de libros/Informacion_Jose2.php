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
      <center><h2>La Batalla de Ayacucho</h2></center><br>
      <p>La batalla de Ayacucho es una obra histórica escrita por José Augusto de Izcue que narra la victoria crucial del ejército patriota sobre las fuerzas realistas en la Batalla de Ayacucho, librada el 9 de diciembre de 1824. Esta batalla marcó el fin de la Guerra de Independencia en Perú y, en gran medida, en América del Sur, consolidando la independencia de las naciones sudamericanas frente al dominio colonial español. <br><br>
      El libro se centra en el relato de los últimos días de la lucha por la independencia, especialmente en los preparativos y el desarrollo de la batalla misma. El autor describe con gran detalle la organización y la estrategia de las fuerzas patriotas, lideradas por el general Antonio José de Sucre, quien desempeñó un papel crucial en la victoria. A través de la narrativa, se presentan las tensiones y los desafíos que enfrentaron los patriotas para derrotar a un ejército realista bien entrenado y numeroso, al mando del virrey La Serna. <br><br>
      Izcue hace uso de una prosa descriptiva y épica para capturar el fervor y el heroísmo de los combatientes, tanto de los patriotas como de los realistas, quienes lucharon con gran valentía, aunque por diferentes ideales. A través de los personajes históricos y ficticios que intervienen en la narración, la obra pone de manifiesto el sacrificio, el sufrimiento y la determinación que caracterizaron esta crucial confrontación. El libro también subraya la importancia de la unidad de las fuerzas patriotas, la colaboración de diversas naciones sudamericanas y el papel decisivo de la batalla en el establecimiento de la independencia de América Latina. <br><br>
      A medida que se desarrolla la historia, Izcue no solo detalla las tácticas militares empleadas en la batalla, sino que también describe el contexto social y político que condujo a los últimos enfrentamientos. La división entre los realistas y patriotas no era solo un conflicto militar, sino también una lucha por el futuro de América del Sur, por la soberanía y la autodeterminación de los pueblos sudamericanos.</p>
    </div>
    <div class="imagen">
      <img src="../img/Ayacucho2.jpg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Ayacucho2.php" class="arrow-next">&#8594;</a>
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