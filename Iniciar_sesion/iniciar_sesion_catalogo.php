<?php
session_start();
include('../conexion/conexion_iniciar_sesion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: iniciar_sesion_index.php?error=El Usuario es Requerido");
        exit();
    } elseif (empty($Clave)) {
        header("Location: iniciar_sesion_index.php?error=La clave es Requerida");
        exit();
    } else {
        
        $sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Contraseña = '$Clave'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Clave) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                
                header("Location: ../Catalogo/index.php");
                exit();
            } else {
                header("Location: iniciar_sesion_index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        } else {
            header("Location: iniciar_sesion_index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }
} else {
    header("Location: iniciar_sesion_index.php?error=El usuario o la clave son incorrectas");
    exit();
}
?>