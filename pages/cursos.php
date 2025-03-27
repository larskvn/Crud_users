<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud php y mysql</title>
</head>
<style>
    body {
        padding-top: 56px;
        background-color: #f8f9fa;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .card-form {
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .table-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .action-btn {
        min-width: 80px;
        margin: 2px;
    }

    @media (max-width: 992px) {
        .main-container {
            flex-direction: column;
        }

        .card-form {
            width: 100% !important;
            margin-bottom: 20px;
        }
    }
</style>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-people-fill me-2"></i>RegistroPersonas
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door me-1"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-info-circle me-1"></i> Acerca de
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-gear me-1"></i> Administración
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus me-2"></i>Registros</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-card-list me-2"></i>Reportes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-graph-up me-2"></i>Estadísticas</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configuración</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <div class="container py-4">
        <button type="button" class="btn btn-primary d-flex justify-content-center px-4 py-2 mt-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Agregar Nuevo
        </button>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Personas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">

                        <?php
                        // esto es para que se pueda conectar a la base de datos y se pueda enviar los datos de la persona 
                        include("model/conexion.php");
                        // esto es para que se pueda registrar a la persona 
                        include("controller/register_person.php");
                        ?>

                        <div class="mb-3">
                            <label class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">DNI</label>
                            <input type="text" class="form-control" name="dni" placeholder="Ingrese su DNI">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fecha" placeholder="Ingrese su fecha de nacimiento">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electrónico">
                        </div>


                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="btnregister">Send User</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="container py-4 main-container">
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0">
                    <i class="bi bi-people-fill text-primary me-2"></i>Lista de Personas
                </h4>
                <div>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-printer"></i> Imprimir
                    </button>
                    <button class="btn btn-sm btn-outline-success">
                        <i class="bi bi-file-excel"></i> Exportar
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Fecha Nac.</th>
                            <th scope="col">Correo</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("model/conexion.php");
                        $sql = $conexcion->query("SELECT * FROM persona");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id_persona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= date('d/m/Y', strtotime($datos->fecha_nac)) ?></td>
                                <td><?= $datos->correo ?></td>
                                <td class="text-center">
                                    <a href="modificar_user.php" class="btn btn-sm btn-warning action-btn">Editar</a>
                                    <a href="/pages/eliminar_user" class="btn btn-sm btn-danger action-btn">Eliminar</a>                                
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>