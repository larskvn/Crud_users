<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Shappp - Fantech Gaming</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <style>
    /* Sidebar */
    .sidebar {
      background-color: #fff;
      border-right: 1px solid #e0e0e0;
      padding: 2rem 1rem;
      height: 100vh;
      position: sticky;
      top: 2rem;
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
  <nav class="navbar navbar-light navbar-custom d-flex justify-content-between align-items-center flex-wrap px-3 py-2">
    <div class="d-flex align-items-center">
      <button class="btn btn-link fs-2 me-2" id="toggleSidebar" style="color: #04B4FC;">
        <i class="bi bi-list"></i>
      </button>
      <a class="navbar-brand d-flex align-items-center mb-0" href="../index.php">
        <span class="logo-black">F</span><span class="logo-blue">Cueva</span>
      </a>
    </div>

    <!-- Buscador visible en pantallas grandes -->
    <form class="d-none d-md-flex search-box w-50 mx-3" role="search">
      <div class="input-group">
        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
        <input class="form-control border-start-0" type="search" placeholder="Search" aria-label="Search">
      </div>
      <button class="btn btn-outline-secondary ms-2" type="button">
        <i class="bi bi-funnel"></i>
      </button>
    </form>

    <!-- Iconos de usuario -->
    <div class="d-flex align-items-center gap-3 fs-4" style="color: #04B4FC;">

      <!-- Carrito -->

      <a href="./pages/cart.php" target="_blank" class="position-relative text-decoration-none" style="color: #04B4FC;">
        <i class="bi bi-cart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info text-dark">
          2
        </span>
      </a>


      <!-- Tienda -->
      <a href="#" class="text-decoration-none" style="color: #04B4FC;">
        <i class="bi bi-shop"></i>
      </a>

      <!-- Perfil -->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="color: #04B4FC;">
          <i class="bi bi-person-lines-fill fs-4"></i>
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
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <aside class="col-md-3 sidebar">
        <h5>Filtros</h5>

        <!-- Filtro por Categoría -->
        <h6>Categoría</h6>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="herramientasManual">
          <label class="form-check-label" for="herramientasManual">Herramientas Manuales</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="herramientasElectricas">
          <label class="form-check-label" for="herramientasElectricas">Herramientas Eléctricas</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="materialesConstruccion">
          <label class="form-check-label" for="materialesConstruccion">Materiales de Construcción</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="fontaneria">
          <label class="form-check-label" for="fontaneria">Fontanería</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="pinturas">
          <label class="form-check-label" for="pinturas">Pinturas y Solventes</label>
        </div>


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