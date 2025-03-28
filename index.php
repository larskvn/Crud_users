<?php
include "./includes/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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


    .bg-custom {
        background-color: #184C99 !important;
    }

    .tg-main {
        height: 50vh;
        background: #184C99;
        position: relative;
        z-index: 1;
    }

    .tg-text-title {
        color: #23A6F0;
        font-size: 1rem;
        font-weight: 300;
    }

    .animated-border {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .animated-border::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        border: 2px solid white;
        transition: left 0.3s ease-in-out;
    }

    .animated-border:hover::before {
        left: 0;
    }
</style>

<body>

    <main class="tg-main d-flex justify-content-center p-2 ">
        <div class="row d-flex align-items-center justify-content-between ">
            <div class="col-md-6 ps-5">
                <h4 class="tg-text-title pb-3">Online training</h4>
                <h1 class="text-light">25K+ STUDENTS TRUST US</h1>
                <p class="text-light">
                    We know how large objects will act, but things on a small scale
                </p>
                <div class="d-flex gap-3 ">
                    <a class="btn btn-custom bg-custom text-light animated-border animate__animated animate__bounce" href="#">Get Quote Now</a>
                    <a class="btn btn-outline-light animated-border animate__animated animate__bounce" href="#">Learn More</a>


                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="./assets/image/hero.svg" class="img-fluid" width="80%" alt="Profile Image">
            </div>
        </div>
    </main>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#184C99" fill-opacity="1" d="M0,224L26.7,192C53.3,160,107,96,160,96C213.3,96,267,160,320,192C373.3,224,427,224,480,192C533.3,160,587,96,640,96C693.3,96,747,160,800,165.3C853.3,171,907,117,960,133.3C1013.3,149,1067,235,1120,261.3C1173.3,288,1227,256,1280,229.3C1333.3,203,1387,181,1413,170.7L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
    </svg>
    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Columna Izquierda -->
            <div class="col-md-6 text-start">
                <div class="mb-3">
                    <div style="width: 50px; height: 4px; background-color: red;"></div>
                </div>
                <h2 class="fw-bold">Watch our Courses</h2>
                <p class="text-muted">Problems trying to resolve the conflict between the two major realms of Classical physics:
                    Newtonian mechanics</p>
                <a href="#" class="btn btn-outline-primary">Learn More →</a>
            </div>

            <!-- Columna Derecha -->
            <div class="col-md-6 d-flex flex-column">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm p-4 text-start border-0" style="border-radius: 10px;">
                            <div class="icon-box bg-success text-white rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                ✅
                            </div>
                            <h5 class="fw-bold">Certified Teacher</h5>
                            <div style="width: 30px; height: 3px; background-color: red; margin-top: 5px;"></div>
                            <p class="text-muted">The gradual accumulation of information about</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm p-4 text-start border-0" style="border-radius: 10px;">
                            <div class="icon-box bg-success text-white rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                📊
                            </div>
                            <h5 class="fw-bold">Market Analysis</h5>
                            <div style="width: 30px; height: 3px; background-color: red; margin-top: 5px;"></div>
                            <p class="text-muted">The gradual accumulation of information about</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow-sm p-4 text-start border-0" style="border-radius: 10px;">
                        <div class="icon-box bg-danger text-white rounded-circle p-3 mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            📄
                        </div>
                        <h5 class="fw-bold">Lifetime access</h5>
                        <div style="width: 30px; height: 3px; background-color: red; margin-top: 5px;"></div>
                        <p class="text-muted">The gradual accumulation of information about</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center p-5">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center align-items-center p-5">
            <img src="./assets/image/user_hero.svg" alt="User Hero Image">
        </div>
        <div class="col-md-6 text-start px-5">
            <div style="width: 50px; height: 5px; background-color: red; margin-bottom: 3px;"></div>
            <h2>Watch our Courses</h2>
            <p>
                Problems trying to resolve the conflict between the two major realms of Classical physics:
                Newtonian mechanics.
            </p>
        </div>
    </div>
</div>







    <!-- <div class="container py-4">
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
                        include("../model/conexion.php");
                        // esto es para que se pueda registrar a la persona 
                        include("../controller/register_person.php");
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
                        include("../model/conexion.php");
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
                                    <a href="../controller/modificar_user.php" class="btn btn-sm btn-danger action-btn">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div> -->


    <?php include "./includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>