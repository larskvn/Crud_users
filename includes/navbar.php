<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


    <style>
    .bg-custom {
        background-color: #065A2C !important;
    }
    .btn-custom {
        background-color: #23A6F0 !important;
    }
    .btn-custom:hover {
        background-color: #1c8ed0 !important;
    }
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-custom navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-light" href="../index.php">
            <span style="color: #22C55E">Viaje</span>Seguro
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-light" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#">Rutas</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#">Horarios</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#">Tarifas</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#">Servicios</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="d-flex">
            <a class="btn text-light me-3" href="./pages/dashboard.php">Iniciar Sesión</a>
            <a class="btn text-light btn-custom" href="./pages/register.php">Registrarse</a>
        </div>
    </div>
</nav>



    <!-- Bootstrap JS (Asegúrate de incluirlo) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <!--   <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle"
                    id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Usuario</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configuración</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión</a></li>
                </ul>
            </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>