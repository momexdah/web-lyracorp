<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #555;
            color: white;
            padding: 15px;
            width: 200px;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
        }

        nav a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #777;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .user-info {
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h1>Panel de Administración</h1>
</header>

<nav>
    <a href="#">Inicio</a>
    <a href="#">Usuarios</a>
    <a href="#">Configuración</a>
    <a href="#">Cerrar Sesión</a>
</nav>

<div class="content">
    <h1>Bienvenido al Panel de Administración</h1>

    <?php if(isset($_SESSION['identity'])): ?>
        <div class="user-info">
            <h3><?=$_SESSION['identity']->usuario?></h3>
            <!-- Otras información del usuario si es necesario -->
        </div>
    <?php endif; ?>

    <!-- Contenido dinámico del panel de administración -->
</div>

</body>
</html>
