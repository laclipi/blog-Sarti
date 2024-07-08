<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css_blog.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="/users/login.php" method="post">
        <input type="text" name="username" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="/users/register.php">Registrarse</a>
</body>
</html>