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
        <li><a href="../Iniciar_sesion/Libro_Valleo2.php">Iniciar sesion</a></li> 
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
      <center><h2>Paco Yunque</h2></center><br>
      <p>La historia de Paco Yunque, escrita por César Vallejo, nos transporta a un pueblo peruano donde las profundas desigualdades sociales se reflejan incluso en el ambiente escolar. Desde su primer día de clases, Paco Yunque, un niño humilde y tímido, se encuentra expuesto a una serie de abusos y humillaciones que marcan su vida. Hijo de una familia campesina pobre, Paco llega a la escuela acompañado por su madre, quien trabaja como empleada doméstica en la casa de los Grieve, una familia rica y poderosa. Al igual que otros personajes de Vallejo, Paco representa la vulnerabilidad y el sufrimiento de las personas de origen humilde en una sociedad marcada por la injusticia. <br>
      <br> Al entrar al salón, Paco se enfrenta a una dinámica de poder que rápidamente lo sitúa en una posición de indefensión. Allí encuentra a Humberto Grieve, hijo del terrateniente inglés y símbolo de la arrogancia y el privilegio de los poderosos. Humberto, acostumbrado a dominar a quienes lo rodean, usa su posición para intimidar a Paco y a otros compañeros desde el primer momento. “Tú harás lo que yo diga”, le advierte con frialdad, mientras el resto de los niños observa en silencio. Paco, intimidado y sin saber cómo defenderse, se somete a las humillaciones de Humberto en un silencio obligado por el miedo. <br><br>
      El ambiente hostil se ve exacerbado por la actitud del maestro, quien no solo conoce la influencia de la familia Grieve en el pueblo, sino que también muestra un favoritismo evidente hacia Humberto. Los abusos de este son ignorados, e incluso alentados de manera implícita, creando una atmósfera de impunidad. Para Paco, el aula, que debería ser un espacio de aprendizaje y respeto, se convierte en un lugar de angustia donde no existe la justicia. Sus compañeros, temerosos de la represalia, se mantienen al margen, mientras Paco sufre en soledad el peso de un sistema educativo que, en lugar de protegerlo, lo oprime. <br><br>
      Uno de los momentos cruciales ocurre cuando el profesor asigna una tarea de redacción. Paco, quien desea hacer un buen trabajo y espera ser reconocido, se esfuerza en completar la tarea con cuidado y esmero. En esas líneas, plasma su historia y sus pensamientos con la esperanza de recibir algún tipo de aprobación. Sin embargo, Humberto, fiel a su carácter dominante y sin ningún remordimiento, se apropia del trabajo de Paco. En un acto de arrogancia y crueldad, le arrebata la redacción y se la entrega al maestro como si fuera suya. <br><br>
    </p>
    </div>
    <div class="imagen">
      <img src="../img/Paco2.jpg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Paco.php" class="arrow-next">&#8594;</a>
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
        <form class="box input-box" action="../Prestamo/Resumen1/Paco.php" method="POST">
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