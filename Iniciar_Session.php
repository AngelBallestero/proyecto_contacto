<?php
include_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnIniciar'])) {
   
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE username = :username AND passwords = :passwords");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
    $stmt->bindParam(':passwords', $passwords, PDO::PARAM_STR);
    $stmt->execute();

   
    if ($stmt->rowCount() > 0) {
        
        session_start();
        echo "Hola " . $username;
        header('Location: listar_contactos.php');
        exit;
    } else {
        echo "No Hay Nigun Usuario Con Estos Datos";
      
    }
}
?>