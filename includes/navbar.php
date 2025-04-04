<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-nav .nav-link,
        .btn-link,
        .btn {
            font-size: 14px;
            font-weight: 700;
            /* Bold */
        }

        .bg-custom {
            background-color: #22C55E !important;
        }
        .btn-custom {
        background-color: #23A6F0 !important;
        border: none;
        color: white;
        font-size: 14px;
        font-weight: 700;
        padding: 8px 16px;
        border-radius: 6px;
        transition: 0.3s;
    }

    .btn-custom:hover {
        background-color: #1c8ed0 !important; /* Color más oscuro al pasar el mouse */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-custom navbar-dark shadow-sm fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold text-light" href="../index.php">Get In Touch</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5 " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- LOGIN / JOIN US -->
            <div class="d-flex">
                <a class="btn  text-light me-3" href="./pages/login.php">Login</a>
                <a class="btn text-light  btn-custom" href="./pages/register.php">REGISTRARSE</a>
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