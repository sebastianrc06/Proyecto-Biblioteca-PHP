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
      <center><h2>Romeo y Julieta</h2></center><br>
      <p>Romeo y Julieta es una de las tragedias más emblemáticas de William Shakespeare, que narra la historia de dos jóvenes enamorados cuya pasión se ve truncada por el odio profundo entre sus familias, los Montesco y los Capuleto. La obra comienza con un enfrentamiento violento entre los sirvientes de ambas familias en las calles de Verona, lo que refleja la enemistad ancestral que existe entre ellas. A pesar de esta violencia, el destino de los jóvenes se cruza en un baile organizado por los Capuleto, donde Romeo, un Montesco, se infiltra y conoce a Julieta, una Capuleto. Desde ese primer encuentro, surge un amor instantáneo, y ambos quedan profundamente enamorados, sin saber inicialmente quiénes son el uno para el otro. <br><br>
      A pesar de la enemistad entre sus familias, Romeo y Julieta deciden casarse en secreto, ayudados por el fraile Lorenzo, quien cree que este matrimonio podría poner fin a la disputa entre las dos casas. Sin embargo, la tragedia comienza a gestarse cuando, en una pelea callejera, el amigo de Romeo, Mercucio, es asesinado por Teobaldo, primo de Julieta. En un arranque de ira, Romeo mata a Teobaldo en venganza, lo que provoca su exilio a Mantua. Mientras tanto, Julieta, quien ya está casada en secreto con Romeo, se ve obligada a casarse con Paris, un noble que le ha sido prometido por su familia. <br> <br>
      Desesperada por evitar este matrimonio forzado y reunirse con su amado, Julieta acude a fraile Lorenzo en busca de ayuda. Él le da una poción que la hará parecer muerta por un tiempo, con la esperanza de que, al despertar, podrá huir con Romeo. Sin embargo, debido a una serie de desventuras, Romeo no recibe la carta que le explica el plan de Julieta. Al creer que su amada está realmente muerta, regresa a Verona y compra veneno para acabar con su vida junto a ella. Al llegar a la tumba de Julieta, Romeo encuentra el cuerpo aparentemente sin vida de su amada y, lleno de desesperación, se quita la vida. Cuando Julieta despierta y encuentra a Romeo muerto, también decide suicidarse con la daga de él. <br><br>

      </p>
    </div>
    <div class="imagen">
      <img src="../img/romeo2.gif" alt="Griselda Blanco">
      <a href="../Informacion de libros/Resumenes de Libros/Resumen_Romeo2.php" class="arrow-next">&#8594;</a>
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