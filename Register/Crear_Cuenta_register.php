<?php
session_start();
include('../conexion/conexion_register.php');

if(isset($_POST['btnregistrar'])){
    if(strlen($_POST['Usuario']) >= 1 && strlen($_POST['user-name']) >= 1 && strlen($_POST['Clave']) >= 1 ){
        $usuario = $_POST['Usuario'];
        $clave = $_POST['Clave'];
        $nombre = $_POST['user-name'];
        
        // Verificar si el usuario ya existe
        $checkQuery = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
        $checkResult = mysqli_query($conex, $checkQuery);
        
        if(mysqli_num_rows($checkResult) > 0) {
            echo "El usuario ya está registrado";
        } else {
            // Si no existe, proceder con el registro
            $consulta = "INSERT INTO usuarios(Usuario, Contraseña, Nombre_Completo) VALUES ('$usuario','$clave','$nombre')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){

                header("Location:../Iniciar_sesion/iniciar_sesion_index.php");
                exit();
            } else {
                echo "No te pudiste registrar";
            }
        }
    }
}
?>






























    //if(!empty($_POST["btnregistrar"])){
    //    if(!empty($_POST["Usuario"]) and !empty($_POST["user-name"]) and !empty($_POST["Clave"])){
     //       $usuario = $_POST["Usuario"];
      //      $clave=$_POST["Clave"];
       //     $nombre_completo=$_POST["user-name"];
            
        
     //       $sql=$conexion->query(" insert into usuarios (Usuario,Contraseña,Nombre_Completo)values('$usuario','$clave','$nombre_completo')");
      //      if ($sql==1){
       //         echo '<div clas="alert alert-success">Persona registrado correctamente</div>';
        //    }else{
        //        echo '<div class="alert alert-danger ">Error al registrar persona</div>';
      //      }
     //   }else{
      //      echo "Algunos de los campos estan vacio";
    //    }
    //}


//?>