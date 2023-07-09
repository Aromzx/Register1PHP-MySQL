<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Registrar Usuarios</title>
</head>
<body>
    <form method="post">
        <h1>Inica Sesión</h1>
        <input type="text" name="name" placeholder="Ingrese un nombre">
        <input type="email" name="email" placeholder="Ingrese su email">
        <input type="submit" name="register">
    </form>
    <?php 
    include("registrar.php");
    ?>
</body>
</html>