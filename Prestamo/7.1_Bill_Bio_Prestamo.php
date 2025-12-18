<?php
// Si ya has procesado el préstamo previamente y deseas mostrar un mensaje de éxito o error
if (isset($_GET['mensaje'])) {
    echo "<p>{$_GET['mensaje']}</p>";
}
?>
<link rel="stylesheet" href="style.css">
<body>
    
    <div class="header">
        <img src="../img/Logo.png" alt="Logo" class="logo">
    </div>
    <form action="7Bill_Bio_Prestamo.php" method="POST">
        <h1 class="prestamo-titulo">Préstamo</h1>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" placeholder="Ingresa tu e-mail" required>
        <hr>
        <h3>Selecciona el libro que deseas tomar prestado:</h3>
        <div class="checkbox-group">
            <label><input type="checkbox" name="libros[]" value="Libro: Paco Yunque"> Paco Yunque</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Bill"> Bill</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Odisea"> Odisea</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Pinocho"> Pinocho</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Harry Potter y el Prisionero de Azkaban"> Harry Potter y el Prisionero de Azkaban</label>
            <label><input type="checkbox" name="libros[]" value="Libro: El Principito"> El Principito</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Romper el Circulo"> Romper el Circulo</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Romeo y Julieta"> Romeo y Julieta</label>
            <label><input type="checkbox" name="libros[]" value="Libro: La Batalla de Ayacucho"> La Batalla de Ayacucho</label>
            <label><input type="checkbox" name="libros[]" value="Libro: Divina Comedia"> Divina Comedia</label>
        </div>
        <div class="button-container">
            <button type="submit">Confirmar Préstamo</button>
        </div>
    </form>  
</body>