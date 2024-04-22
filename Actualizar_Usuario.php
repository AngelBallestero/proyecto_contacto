<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$username = $_POST['username'];
$passwords = $_POST['passwords'];

$sql = "UPDATE usuarios SET username=:username, passwords=:passwords where nombre=:nombre ";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':username',$username, PDO::PARAM_STR);
$stmt->bindParam(':passwords', $passwords, PDO::PARAM_STR);

try {
    $stmt->execute();
    echo "Contacto agregado exitosamente";
    header('Location: listarusuarios.php');
} catch (PDOException $e) {
    echo "Error al agregar contacto: " . $e->getMessage();
}