<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Panel de Administración</title>
    <style>
        body {
            height: 100vh;
            overflow: hidden;
        }

        #sidebar {
            height: 100%;
            position: fixed;
            transition: all 0.3s;
        }

        #sidebar .active {
            background-color: #007bff;
        }

        #sidebar .nav-link {
            padding: 10px 15px;
            color: #333;
            border-radius: 0;
            transition: all 0.3s;
        }

        #sidebar .nav-link:hover {
            background-color: #f8f9fa;
            color: #FFF;
            background: #0c5460;
            border-radius: 15px;
        }

        .submenu {
            margin-left: 20px;
        }

        .user-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <!-- Inicio -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (empty($_GET['controller'])) ? 'active' : ''; ?>" href="#">
                            Inicio
                        </a>
                    </li>
                    <!-- Mantenimientos -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] === 'mantenimientos') ? 'active' : ''; ?>"
                           data-bs-toggle="collapse" href="#mantenimientosMenu">
                            Mantenimientos
                        </a>
                        <div class="collapse <?php echo (isset($_GET['controller']) && $_GET['controller'] === 'mantenimientos') ? 'show' : ''; ?>"
                             id="mantenimientosMenu">
                            <ul class="nav flex-column submenu">
                                <!-- Categorias -->
                                <li class="nav-item">
                                    <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] === 'Servicios') ? 'active' : ''; ?>"
                                       data-bs-toggle="collapse" href="#categoriasMenu">
                                        Servicios
                                    </a>
                                    <div class="collapse <?php echo (isset($_GET['controller']) && $_GET['controller'] === 'Servicios') ? 'show' : ''; ?>"
                                         id="categoriasMenu">
                                        <ul class="nav flex-column submenu">
                                            <!-- Listar -->
                                            <li class="nav-item">
                                                <a class="nav-link <?php echo (isset($_GET['action']) && $_GET['action'] === 'listar') ? 'active' : ''; ?>"
                                                   href="#">
                                                    Listar
                                                </a>
                                            </li>
                                            <!-- Registrar -->
                                            <li class="nav-item">
                                                <a class="nav-link <?php echo (isset($_GET['action']) && $_GET['action'] === 'registrar') ? 'active' : ''; ?>"
                                                   href="<?=base_url?>usuarios/mantenimientos/servicios/registrar" >
                                                    Registrar
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] === 'mantenimientos') ? 'active' : ''; ?>" href="<?=base_url?>usuarios/logout">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h1>Bienvenido al Panel de Administración</h1>

            <?php if(isset($_SESSION['identity'])): ?>
                <div class="user-info">
                    <h3><?=$_SESSION['identity']->usuario?></h3>
                    <p>
                        <?= "<pre>" . var_dump($_SESSION) . "</pre>" ?>
                        <?=var_dump($_SESSION['admin'])?>
                    </p>
                    <!-- Otras información del usuario si es necesario -->
                </div>
            <?php endif; ?>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
