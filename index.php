<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Shappp - Fantech Gaming</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/css/sidebar.css">


</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-light navbar-custom  d-flex justify-content-between align-items-center flex-wrap">
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
        <span class="d-none d-md-inline"></span> <!-- Aquí se muestra el username logueado -->
      </a>

      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Perfil</a></li>
        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Configuración</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item text-danger" href="./logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
      </ul>
    </div>
  </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>