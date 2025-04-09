<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Shappp - Fantech Gaming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem 2rem;
        }

        .navbar-brand {
            color: #04B4FC;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .search-input {
            width: 350px;
            border-radius: 10px;
        }

        .dropdown-toggle {
            border-radius: 10px;
        }

        /* Sidebar */
        .sidebar {
            background-color: #fff;
            border-right: 1px solid #e0e0e0;
            padding: 2rem 1rem;
            height: 100vh;
            position: sticky;
            top: 0;
        }

        .sidebar h6 {
            margin-top: 1rem;
            font-weight: 600;
        }

        .form-check {
            margin-bottom: 0.5rem;
        }

        /* Product Cards */
        .product-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 20px;
            padding: 1rem;
            transition: 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .product-img {
            height: 140px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .price {
            color: #f4511e;
            font-weight: bold;
        }

        .badge-city {
            font-size: 0.75rem;
            background-color: #eee;
            color: #333;
            border-radius: 8px;
            padding: 0.2rem 0.5rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-custom px-3 d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center">
            <button class="btn btn-link text-info fs-2 me-2" id="toggleSidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand d-flex align-items-center mb-0" href="#">
                <span class="logo-black">F</span><span class="logo-blue">Cueva</span>
            </a>
        </div>

        <!-- Visible en pantallas grandes -->
        <form class="d-none d-md-flex search-box" role="search">
            <div class="input-group">
                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
        </form>

        <!-- User profile dropdown -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://via.placeholder.com/40" alt="User" width="40" height="40" class="rounded-circle me-2">
                <span class="d-none d-md-inline">Nombre de usuario</span> <!-- Aquí se muestra el username logueado -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Perfil</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Configuración</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="./pages/login.php"><i class="bi bi-box-arrow-right me-2"></i> Iniciar sesión</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <aside class="col-md-3 sidebar">
                <h5>Filtros</h5>
                <h6>Ciudad</h6>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="jakarta"><label class="form-check-label" for="jakarta">DKI Jakarta</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="bogor"><label class="form-check-label" for="bogor">Bogor</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="bandung"><label class="form-check-label" for="bandung">Bandung</label></div>

                <h6>Condición</h6>
                <div class="form-check"><input class="form-check-input" type="radio" name="condicion" id="nuevo"><label class="form-check-label" for="nuevo">Nuevo</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" name="condicion" id="usado"><label class="form-check-label" for="usado">Usado</label></div>

                <h6>Color</h6>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="color-rojo"><label class="form-check-label" for="color-rojo">Rojo</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="color-blanco"><label class="form-check-label" for="color-blanco">Blanco</label></div>

                <h6>Otros</h6>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="oficial"><label class="form-check-label" for="oficial">Tienda oficial</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="nuevo-rel"><label class="form-check-label" for="nuevo-rel">Nuevo lanzamiento</label></div>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 p-4">
                <h4>Productos Fantech Gaming</h4>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

                    <?php
                    $productos = [
                        ["nombre" => "Fantech VX7 Mouse", "precio" => 727999, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Jakarta"],
                        ["nombre" => "Mousepad ATOM MP905", "precio" => 53000, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Bogor"],
                        ["nombre" => "Fantech MP902 RGB", "precio" => 539999, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Depok"],
                        ["nombre" => "Teclado K613L Fighter", "precio" => 780000, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Jakarta"],
                        ["nombre" => "Combo Gaming DAREDEVIL", "precio" => 1250000, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Bogor"],
                        ["nombre" => "Auriculares HG23", "precio" => 399000, "img" => "https://via.placeholder.com/200x140", "ciudad" => "Jakarta"],
                    ];

                    foreach ($productos as $p) {
                        echo '
            <div class="col">
              <div class="product-card text-center">
                <img src="' . $p["img"] . '" class="product-img w-100" alt="' . $p["nombre"] . '">
                <h6 class="mt-2">' . $p["nombre"] . '</h6>
                <div class="price">Rp ' . number_format($p["precio"], 0, ',', '.') . '</div>
                <span class="badge-city">' . $p["ciudad"] . '</span>
                <button class="btn btn-sm btn-danger w-100 mt-2">Agregar al carrito</button>
              </div>
            </div>';
                    }
                    ?>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>