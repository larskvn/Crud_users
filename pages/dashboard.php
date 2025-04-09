<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user'])) {
  // Si no está logueado, redirige al login
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Dashboard FCueva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #04B4FC;
      --sidebar-bg: #f1f4ff;
      --sidebar-width: 250px;
      --sidebar-collapsed-width: 70px;
      --header-height: 70px;
      --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      --transition-speed: 0.3s;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fc;
      margin: 0;
      min-height: 100vh;
    }

    .sidebar {
      height: 100vh;
      width: var(--sidebar-width);
      position: fixed;
      top: 0;
      left: 0;
      background-color: var(--sidebar-bg);
      border-right: 1px solid #e1e5eb;
      padding-top: var(--header-height);
      transition: all var(--transition-speed);
      z-index: 1040;
      overflow-y: auto;
    }

    .sidebar.collapsed {
      width: var(--sidebar-collapsed-width);
      overflow-x: hidden;
    }

    .sidebar.collapsed .nav-link span,
    .sidebar.collapsed h6 {
      display: none;
    }

    .sidebar.collapsed .nav-link {
      justify-content: center;
      padding: 10px 5px;
    }

    .sidebar.collapsed .logout-section {
      padding: 0.5rem;
    }

    .sidebar h6 {
      font-size: 0.75rem;
      text-transform: uppercase;
      margin-top: 1.5rem;
      margin-left: 1rem;
      color: #6c757d;
      white-space: nowrap;
      transition: all var(--transition-speed);
    }

    .sidebar .nav-link {
      color: #2c3e50;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      font-size: 0.95rem;
      white-space: nowrap;
      transition: all var(--transition-speed);
      margin: 0 10px;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: var(--primary-color);
      color: white;
      border-radius: 5px;
    }

    .sidebar .nav-link i {
      margin-right: 10px;
      font-size: 1.1rem;
      min-width: 20px;
    }

    .main-content {
      margin-left: var(--sidebar-width);
      padding: 20px;
      padding-top: calc(var(--header-height) + 20px);
      transition: margin-left var(--transition-speed);
      min-height: calc(100vh - var(--header-height));
    }

    .main-content.full {
      margin-left: var(--sidebar-collapsed-width);
    }

    .navbar-custom {
      background-color: #fff;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1050;
      height: var(--header-height);
    }

    .navbar-brand {
      font-weight: bold;
      color: var(--primary-color);
      font-size: 1.4rem;
    }

    .logo-blue {
      color: var(--primary-color);
    }

    .logo-black {
      color: #000;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: var(--primary-color);
    }

    .search-box {
      max-width: 300px;
    }

    .logout-section {
      margin-top: auto;
      padding: 1rem;
      border-top: 1px solid #dee2e6;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: var(--card-shadow);
      transition: transform 0.2s;
      margin-bottom: 20px;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-icon {
      font-size: 2rem;
      color: var(--primary-color);
    }

    .card-title {
      font-size: 0.9rem;
      color: #6c757d;
    }

    .card-value {
      font-size: 1.8rem;
      font-weight: bold;
    }

    .card-footer-link {
      color: var(--primary-color);
      text-decoration: none;
      font-size: 0.9rem;
    }

    /* Chart container */
    .chart-container {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: var(--card-shadow);
      height: 100%;
    }

    /* Recent activity */
    .activity-item {
      border-left: 3px solid var(--primary-color);
      padding-left: 15px;
      margin-bottom: 15px;
    }

    .activity-time {
      font-size: 0.8rem;
      color: #6c757d;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .main-content {
        margin-left: 0 !important;
        padding-top: calc(var(--header-height) + 20px);
      }

      .search-box-wrapper {
        padding: 10px 20px;
        text-align: center;
      }

      .search-box {
        width: 100%;
        margin: auto;
      }

      .sidebar {
        left: -100%;
      }

      .sidebar.show {
        left: 0;
      }

      .sidebar.collapsed {
        width: 0;
      }
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h6>General</h6>
    <a href="#" class="nav-link active"><i class="bi bi-grid-1x2"></i> <span>Dashboard</span></a>
    <a href="#" class="nav-link"><i class="bi bi-box-seam"></i> <span>Inventario</span></a>
    <a href="#" class="nav-link"><i class="bi bi-cart3"></i> <span>Sales Orders</span></a>
    <a href="#" class="nav-link"><i class="bi bi-truck"></i> <span>Proveedores</span></a>
    <a href="#" class="nav-link"><i class="bi bi-graph-up-arrow"></i> <span>Movimientos</span></a>

    <h6>Support</h6>
    <a href="#" class="nav-link"><i class="bi bi-info-circle"></i> <span>Ayuda</span></a>
    <a href="#" class="nav-link"><i class="bi bi-gear"></i> <span>Configuración</span></a>

    <div class="logout-section">
      <a href="./logout.php" class="nav-link text-danger"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-light navbar-custom  d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex align-items-center">
      <button class="btn btn-link text-info fs-2 me-2" id="toggleSidebar">
        <i class="bi bi-list"></i>
      </button>
      <a class="navbar-brand d-flex align-items-center mb-0" href="../index.php">
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

    <?php
    // Verificar si el usuario está logueado
    if (!isset($_SESSION['user'])) {
      header("Location: login.php");
      exit();
    }

    // Obtener el nombre de usuario desde la sesión
    $username = $_SESSION['user'];
    ?>
    <!-- User profile dropdown -->
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://via.placeholder.com/40" alt="User" width="40" height="40" class="rounded-circle me-2">
        <span class="d-none d-md-inline"><?php echo $username; ?></span> <!-- Aquí se muestra el username logueado -->
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

  <!-- Main Content -->
  <div class="main-content" id="mainContent">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Dashboard</h2>
        <div class="d-flex">
          <button class="btn btn-outline-secondary me-2">
            <i class="bi bi-download"></i> Exportar
          </button>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-plus"></i> Nuevo
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-seam me-2"></i> Producto</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-cart3 me-2"></i> Orden</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus me-2"></i> Proveedor</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="row mb-4">
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="card-title">VENTAS TOTALES</h6>
                  <h3 class="card-value">$24,780</h3>
                </div>
                <div class="card-icon">
                  <i class="bi bi-currency-dollar"></i>
                </div>
              </div>
              <div class="mt-3">
                <span class="text-success"><i class="bi bi-arrow-up"></i> 12.5%</span> vs mes anterior
              </div>
            </div>
            <div class="card-footer bg-transparent border-top-0">
              <a href="#" class="card-footer-link">Ver detalles <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="card-title">PRODUCTOS</h6>
                  <h3 class="card-value">1,248</h3>
                </div>
                <div class="card-icon">
                  <i class="bi bi-box-seam"></i>
                </div>
              </div>
              <div class="mt-3">
                <span class="text-success"><i class="bi bi-arrow-up"></i> 8.2%</span> vs mes anterior
              </div>
            </div>
            <div class="card-footer bg-transparent border-top-0">
              <a href="#" class="card-footer-link">Ver inventario <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="card-title">ÓRDENES</h6>
                  <h3 class="card-value">356</h3>
                </div>
                <div class="card-icon">
                  <i class="bi bi-cart3"></i>
                </div>
              </div>
              <div class="mt-3">
                <span class="text-danger"><i class="bi bi-arrow-down"></i> 3.1%</span> vs mes anterior
              </div>
            </div>
            <div class="card-footer bg-transparent border-top-0">
              <a href="#" class="card-footer-link">Ver órdenes <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="card-title">PROVEEDORES</h6>
                  <h3 class="card-value">42</h3>
                </div>
                <div class="card-icon">
                  <i class="bi bi-truck"></i>
                </div>
              </div>
              <div class="mt-3">
                <span class="text-success"><i class="bi bi-arrow-up"></i> 5.7%</span> vs mes anterior
              </div>
            </div>
            <div class="card-footer bg-transparent border-top-0">
              <a href="#" class="card-footer-link">Ver proveedores <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="row mb-4">
        <div class="col-lg-8">
          <div class="chart-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5>Ventas mensuales</h5>
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-secondary active">Mensual</button>
                <button class="btn btn-sm btn-outline-secondary">Trimestral</button>
                <button class="btn btn-sm btn-outline-secondary">Anual</button>
              </div>
            </div>
            <!-- Placeholder for chart -->
            <div style="height: 300px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
              <p class="text-muted">Gráfico de ventas mensuales</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="chart-container h-100">
            <h5 class="mb-3">Distribución de ventas</h5>
            <!-- Placeholder for pie chart -->
            <div style="height: 250px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
              <p class="text-muted">Gráfico de distribución</p>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between mb-1">
                <span>Electrónicos</span>
                <span>42%</span>
              </div>
              <div class="progress mb-2" style="height: 8px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
              </div>

              <div class="d-flex justify-content-between mb-1">
                <span>Ropa</span>
                <span>28%</span>
              </div>
              <div class="progress mb-2" style="height: 8px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 28%"></div>
              </div>

              <div class="d-flex justify-content-between mb-1">
                <span>Hogar</span>
                <span>18%</span>
              </div>
              <div class="progress mb-2" style="height: 8px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 18%"></div>
              </div>

              <div class="d-flex justify-content-between mb-1">
                <span>Otros</span>
                <span>12%</span>
              </div>
              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 12%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Activity and Top Products -->
      <div class="row">
        <div class="col-lg-6">
          <div class="chart-container">
            <h5 class="mb-3">Actividad reciente</h5>
            <div class="activity-item">
              <h6>Nuevo pedido #1256</h6>
              <p class="mb-1">Cliente: Juan Pérez - Total: $245.99</p>
              <small class="activity-time">Hace 15 minutos</small>
            </div>
            <div class="activity-item">
              <h6>Producto actualizado</h6>
              <p class="mb-1">Smartphone X - Precio cambiado a $599</p>
              <small class="activity-time">Hace 2 horas</small>
            </div>
            <div class="activity-item">
              <h6>Nuevo proveedor agregado</h6>
              <p class="mb-1">TecnoSuministros S.A.</p>
              <small class="activity-time">Hace 5 horas</small>
            </div>
            <div class="activity-item">
              <h6>Inventario actualizado</h6>
              <p class="mb-1">Se agregaron 50 unidades de Laptop Pro</p>
              <small class="activity-time">Ayer, 4:30 PM</small>
            </div>
            <div class="text-center mt-3">
              <a href="#" class="card-footer-link">Ver toda la actividad <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="chart-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="mb-0">Productos más vendidos</h5>
              <select class="form-select form-select-sm" style="width: auto;">
                <option>Esta semana</option>
                <option>Este mes</option>
                <option>Este trimestre</option>
              </select>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th class="text-end">Ventas</th>
                    <th class="text-end">Ingresos</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Product" class="rounded me-2" width="40">
                        <div>
                          <h6 class="mb-0">Smartphone X</h6>
                          <small class="text-muted">Electrónicos</small>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">156</td>
                    <td class="text-end">$12,480</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Product" class="rounded me-2" width="40">
                        <div>
                          <h6 class="mb-0">Laptop Pro</h6>
                          <small class="text-muted">Electrónicos</small>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">89</td>
                    <td class="text-end">$8,900</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Product" class="rounded me-2" width="40">
                        <div>
                          <h6 class="mb-0">Auriculares BT</h6>
                          <small class="text-muted">Accesorios</small>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">120</td>
                    <td class="text-end">$2,400</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Product" class="rounded me-2" width="40">
                        <div>
                          <h6 class="mb-0">Smart Watch</h6>
                          <small class="text-muted">Wearables</small>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">75</td>
                    <td class="text-end">$3,750</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="Product" class="rounded me-2" width="40">
                        <div>
                          <h6 class="mb-0">Tablet Lite</h6>
                          <small class="text-muted">Electrónicos</small>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">62</td>
                    <td class="text-end">$4,340</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      mainContent.classList.toggle('full');
    });

    // Mobile sidebar toggle
    function handleResize() {
      if (window.innerWidth <= 768) {
        sidebar.classList.add('collapsed');
        mainContent.classList.remove('full');
      }
    }

    // Initial check
    handleResize();

    // Listen for resize events
    window.addEventListener('resize', handleResize);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>