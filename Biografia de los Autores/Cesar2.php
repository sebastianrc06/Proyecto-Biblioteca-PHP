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
      <center><h2>Cesar Vallejo</h2></center><br>
      <p>César Vallejo (1892-1938) fue un poeta, dramaturgo y ensayista peruano, reconocido como uno de los más grandes exponentes de la poesía en lengua española del siglo XX. Nació el 16 de marzo en Santiago de Chuco, un pequeño pueblo en la sierra peruana, en una familia de condiciones humildes. Desde joven, Vallejo mostró interés por la literatura y la poesía, y a lo largo de su vida, su obra reflejó una profunda sensibilidad hacia el sufrimiento humano y la injusticia social. <br>Vallejo se trasladó a Trujillo para estudiar en la Universidad Nacional de Trujillo, donde se formó en la enseñanza y comenzó a escribir. En 1919, publicó su primer libro de poesía, Los Heraldos Negros, que contenía una serie de poemas que abordaban el dolor, la pérdida y la soledad. Este libro, aunque recibió críticas mixtas, fue el inicio de su reconocimiento como poeta. <br>En 1922, Vallejo lanzó Trilce, una obra innovadora que rompió con las convenciones poéticas de la época. Trilce es conocido por su lenguaje experimental, su estructura fragmentada y su capacidad para evocar emociones complejas. Este libro consolidó su reputación como un poeta vanguardista y marcó un hito en la literatura hispanoamericana.
<br>A lo largo de la década de 1920, Vallejo vivió en París, donde se relacionó con destacados escritores y artistas de la vanguardia europea, y se involucró en movimientos políticos y sociales. Su compromiso con la izquierda y su preocupación por la lucha de los trabajadores se reflejaron en su obra literaria. <br>En este período, también escribió obras de teatro y ensayos, así como artículos sobre temas sociales y políticos.La vida de Vallejo estuvo marcada por la adversidad. Experimentó la pobreza y la alienación, y fue testigo de la opresión social en su país y en el mundo. <br>Su poesía se convierte en un medio para expresar su dolor personal y su solidaridad con los oprimidos. En 1931, publicó Los Espíritus Vengadores y, en 1939, tras su muerte, se publicaron obras póstumas como Poemas Humanos, que contienen algunas de sus reflexiones más profundas sobre la existencia y el sufrimiento humano. <br>A pesar de su éxito y reconocimiento en el ámbito literario, Vallejo vivió gran parte de su vida en la pobreza y la lucha. Murió en París el 15 de abril de 1938, a la edad de 46 años. Su legado perdura en la literatura y la cultura latinoamericana, y su obra sigue siendo estudiada, celebrada y traducida en todo el mundo. <br>Vallejo no solo dejó una huella indeleble en la poesía, sino que también se convirtió en un símbolo de la lucha por la justicia social y los derechos humanos. Su voz poética, cargada de angustia y esperanza, resuena con fuerza hasta el día de hoy. </p><br><br>
    </div>
    <div class="imagen">
      <img src="../Imagenes de biografia/vallejo_cesar.jpg" alt="Griselda Blanco">
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
        <form class="box input-box" action="../Prestamo/5.1Cesar_Bio_Prestamo.php" method="POST">
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