
   <div class="container py-4">
        <button type="button" class="btn btn-primary d-flex justify-content-center px-4 py-2 mt-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Agregar Nuevo
        </button>
    </div>

  <!--

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
