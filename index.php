<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE INICIO DE SESION</title>
</head>
<body>
    <h1>INICIO</h1>
    
    <h2>INICIO SESION</h2>
    <form action="Iniciar_Session.php" method="POST">
        <input type="text" name="username" placeholder="username" required>
        <br/>
        <input type="text" name="passwords" placeholder="passwords" required>
        <input type="submit" name="btnIniciar" value="iniciar sesion"></input>

    </form>
    
    <br/>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redireccionar con PHP</title>
    </head>
    <body>
        <button onclick="redirectToPage()">Registrar Usuario</button>
    
        <script>
            function redirectToPage() {
                window.location.href = "Registrar.php";
            }
        </script>
    </body>
    </html>

    <br/>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionar con PHP</title>
</head>
<body>
    <button onclick="redirectToPage()">Actualizar Usuario</button>

    <script>
        function redirectToPage() {
            window.location.href = "Actualizar.php";
        }
    </script>
</body>
</html>


<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redireccionar con PHP</title>
    </head>
    <body>
        <button onclick="redirectToPage()">Registrar Usuario Nuevo</button>
    
        <script>
            function redirectToPage() {
                window.location.href = "nuevosusuarios.php";
            }
        </script>
    </body>
    </html>

    <br/>


</body>
</html>