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
        <li><a href="../Iniciar_sesion/Libro_Harry2.php">Iniciar sesion</a></li> 
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
      <center><h2>Harry Potter y el Prisionero de Azkaban</h2></center><br>
        <p>Harry Potter y el prisionero de Azkaban es la tercera entrega de la serie de Harry Potter, que profundiza en el misterio y la oscuridad del pasado de Harry, mientras se enfrenta a nuevas amenazas en su tercer año en la escuela de magia de Hogwarts. La historia comienza con Harry regresando a su casa en los Dursley para las vacaciones de verano, donde es tratado con indiferencia y abuso, como es habitual. Sin embargo, durante una discusión con su tía Marge, Harry pierde el control y usa magia para hacerla inflar como un globo, lo que provoca su huida de la casa de los Dursley. <br><br>
        Tras este incidente, Harry es rescatado por Ron, Hermoine y sus hermanos, quienes lo llevan a la casa de los Weasley. Aquí, Harry se entera de un nuevo peligro: un prisionero de Azkaban, Sirius Black, ha escapado de la prisión mágica y se cree que está buscando a Harry. La huida de Sirius Black pone en alerta a todo el mundo mágico, ya que su escape implica que algo oscuro y peligroso se acerca. <br><br>
        A lo largo del curso escolar, Harry, junto a sus amigos Ron y Hermione, se enfrenta a varios desafíos mientras trata de descubrir la verdad sobre la conexión entre Sirius Black y sus padres, Lily y James Potter. La historia toma un giro inesperado cuando Harry descubre que Sirius Black no es el villano que todos pensaban, sino que en realidad es su padrino y fue injustamente encarcelado por un crimen que no cometió. La verdad sobre la traición de Peter Pettigrew, quien fue el verdadero traidor que entregó a los Potter a Voldemort, cambia el curso de la vida de Harry y su comprensión del pasado. <br><br>
        Además de este misterio, Harry Potter y el prisionero de Azkaban introduce a los Dementores, unas criaturas oscuras que custodian la prisión de Azkaban y que tienen la capacidad de consumir las almas de las personas. Los Dementores se convierten en una amenaza constante para Harry, ya que son capaces de hacerle revivir sus peores recuerdos, incluidos los de la muerte de sus padres. En un acto heroico, Harry aprende a conjurar un Patronus, una forma mágica de defenderse de los Dementores, gracias a la ayuda de su profesor de Defensa Contra las Artes Oscuras, Remus Lupin. <br>
        Al final de la historia, Harry enfrenta un dilema moral y se enfrenta a la difícil decisión de salvar a Sirius Black de un destino injusto, eligiendo luchar por la verdad, incluso cuando eso lo pone en riesgo. El libro termina con Harry enfrentando la realidad de que el mundo mágico está más oscuro y peligroso de lo que imaginaba, pero con la esperanza de que la justicia, aunque difícil de alcanzar, es posible.
        </p>
    </div>
    <div class="imagen">
      <img src="../img/harry2.jpg" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Harry.php" class="arrow-next">&#8594;</a>
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