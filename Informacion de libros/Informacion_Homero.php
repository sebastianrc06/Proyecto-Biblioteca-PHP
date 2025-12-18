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
        <li><a href="/PAGE-AVANCE/index.php">Inicio</a></li>
        <li><a href="../Catalogo/index2.php">Catalogo</a></li>
        <li><a href="#">Libros</a></li>
        <li><a href="#">Cuenta</a></li>
        <li><a href="../Iniciar_sesion/Libro_Homero2.php">Iniciar sesion</a></li> 
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
      <center><h2>La Odisea</h2></center><br>
      <p>La Odisea, la famosa epopeya atribuida a Homero, narra el largo y arduo viaje de regreso a casa de Odiseo, rey de Ítaca, después de la Guerra de Troya. La obra comienza con la ausencia de Odiseo, quien ha estado vagando por el mar durante diez años debido a los caprichos de los dioses, especialmente de Poseidón, que lo persigue implacablemente. Su esposa, Penélope, y su hijo, Telémaco, aguardan en Ítaca, mientras que los pretendientes de Penélope tratan de tomar su lugar, despojando el reino de su honor y riquezas. <br><br>
      La historia de La Odisea no solo es una crónica de los viajes de Odiseo, sino también una exploración profunda de la lucha entre el destino y la voluntad humana, y el eterno desafío del ser humano frente a lo divino y lo desconocido. A lo largo de su periplo, Odiseo enfrenta una serie de obstáculos sobrenaturales: el encuentro con los Cíclopes, la seducción de las Sirenas, la ira de Poseidón, y el peligroso reino de los muertos, entre otros. Sin embargo, a pesar de las pruebas, la astucia, la inteligencia y la determinación de Odiseo lo guían, no solo hacia su hogar, sino hacia la restauración de su orden y su familia. <br><br>
      A través de los ojos de Odiseo, el lector es testigo de su sufrimiento y su resiliencia, así como de su creciente comprensión del valor de la humildad y la paciencia. La epopeya destaca la figura del héroe griego, que no es solo fuerte y audaz, sino también reflexivo y estratégico. A lo largo de su largo viaje, Odiseo demuestra que la grandeza no solo reside en la fuerza física, sino también en la capacidad de tomar decisiones difíciles y de sobrevivir ante las adversidades con inteligencia y honor. <br><br>
      Al regresar finalmente a Ítaca, Odiseo se enfrenta a un último desafío: recuperar su hogar y su reino de los pretendientes que han invadido su casa. Con la ayuda de su hijo Telémaco, su fiel sirvienta Eumeo y algunos otros aliados, Odiseo se enfrenta a una confrontación épica en la que la astucia y la destreza del guerrero se imponen a la violencia brutal de los usurpadores. La obra culmina con la restauración del orden, la reunión con Penélope, y la reafirmación de los valores de la lealtad, la justicia y la familia. </p>
    </div>
    <div class="imagen">
      <img src="../img/Odisea2.webp" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Homero.php" class="arrow-next">&#8594;</a>
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