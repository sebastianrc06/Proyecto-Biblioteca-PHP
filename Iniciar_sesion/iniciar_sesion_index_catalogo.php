<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_iniciar_sesioon.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <form action="iniciar_sesion_catalogo.php" method="post">
        <center><h1>INICIAR SESIÓN</h1></center>
        <hr>
        <?php
        if(isset($_POST['error'])){
            ?>
            <p class="error">
                <?php
                  echo $_POST['error']  
                ?>
            </p>
        <?php
        }
        ?>

        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario" required>
        <hr>
        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="Clave" placeholder="Ingrese su contraseña" required>
        <hr>
        <div class="button-container">
            <button type="submit">Iniciar Sesión</button>
            <a href="../Register/Crear_cuenta.php">Crear cuenta</a>
        </div>
        <div class="header">
            <img src="../img/Logo.png" alt="Logo" class="logo">
        </div>
    </form>
</body>
</html>