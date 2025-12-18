<?php
// Incluir la conexión
include '../conexion/conexion_iniciar_sesion.php';

// Incluir PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar Composer (si usas Composer)
require '../Email/Exception.php';
require '../Email/PHPMailer.php';
require '../Email/SMTP.php';

// Definir la variable para el mensaje
$mensaje = '';

// Verificar si el formulario fue enviado
if (isset($_POST['email'], $_POST['libros']) && !empty($_POST['email']) && !empty($_POST['libros'])) {
    // Recibir los datos del formulario
    $email = mysqli_real_escape_string($conexion, $_POST['email']); // Evitar inyecciones SQL
    $libros = $_POST['libros']; // Array de libros seleccionados

    // Guardar el préstamo de cada libro en la base de datos
    foreach ($libros as $libro) {
        $sql = "INSERT INTO usuarios (email, fecha_prestamo, libro) VALUES ('$email', CURRENT_TIMESTAMP, '$libro')";
        if (!mysqli_query($conexion, $sql)) {
            $mensaje = "Error al registrar el préstamo: " . mysqli_error($conexion);
            break;
        }
    }

    // Si se registraron correctamente los préstamos, enviar el correo
    if (empty($mensaje)) {
        // Crear una instancia de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP (Gmail como ejemplo)
            $mail->isSMTP();                                           // Usar SMTP
            $mail->Host = 'smtp.gmail.com';                              // Servidor SMTP de Gmail
            $mail->SMTPAuth = true;                                      // Autenticación SMTP
            $mail->Username = 'poiesis475@gmail.com';                       // Tu correo de Gmail
            $mail->Password = 'ldwqlerltrnnktjy';                           // Tu contraseña de Gmail (o una contraseña de aplicación)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Cifrado TLS
            $mail->Port = 587;                                          // Puerto SMTP de Gmail

            // Remitente y destinatario
            $mail->setFrom('poiesis475@gmail.com', 'BIBLIOTECA JORNAY BOOKS');
            $mail->addAddress($email);                                   // Correo del usuario

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Confirmacion de Prestamo de Libros';
            $messageBody = 'Hola, hemos registrado tu préstamo de libros con éxito. Gracias por utilizar nuestro servicio.<br><br>';
            $messageBody .= 'Detalles del préstamo:<br>' . implode("<br>", $libros) . "<br><br>";
            $mail->Body    = $messageBody;

            // Enviar el correo
            $mail->send();
            $mensaje = "Préstamo registrado con éxito y se ha enviado un correo de confirmación.";
        } catch (Exception $e) {
            $mensaje = "Préstamo registrado con éxito, pero no se pudo enviar el correo. Error de PHPMailer: {$mail->ErrorInfo}";
        }
    }
} else {
    $mensaje = "Por favor, ingresa un correo electrónico y selecciona al menos un libro.";
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir de nuevo a la página de préstamo con el mensaje
header("Location: ../Biografia de los Autores/Carlo_callodi.php?mensaje=" . urlencode($mensaje));
exit();
?>