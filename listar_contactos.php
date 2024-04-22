<?php

include_once("conexion.php");


$sql = "SELECT * FROM contactos";
$stmt = $conexion->query($sql);
$contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);

# Cerrar conexión
$conexion = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA de Contactos</title>
</head>
<body>
    <!-- Lista de contactos -->
    <h1>Contactos Registrados</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>telefono</th>
            <th>Correo</th>
        </tr>
        <?php foreach ($contactos as $contacto): ?>
        <tr>
            <td><?php echo $contacto['nombre']; ?></td>
            <td><?php echo $contacto['telefono']; ?></td>
            <td><?php echo $contacto['correo']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br/>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redireccionar con PHP</title>
    </head>
    <body>
        <button onclick="redirectToPage()">Crear Nuevo Contacto</button>
    
        <script>
            function redirectToPage() {
                window.location.href = "Registrar_Contacto.php";
            }
        </script>
    </body>
    </html>
</body>
</html>
