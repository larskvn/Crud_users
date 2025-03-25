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
        background-color: gray;
    }
</style>

<body>

    <div class="container-fluid d-flex align-items-start vh-100">
        <div class="card shadow-lg p-52 mt-5" style="width: 28rem;">

            <form class="p-4" method="POST">
                <h3 class="text-center text-primary mb-4">Registro de Persona</h3>
                <?php
                include("model/conexion.php");
                include("controller/register_person.php");


                ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" >
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" >
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su DNI" >
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" >
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" >
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="btnregister">Registrar</button>
                </div>
            </form>
        </div>


        <div class="col-8 p-4">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    include("model/conexion.php");
                    $sql = $conexcion->query("SELECT * FROM persona");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->id_persona ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->dni ?></td>
                            <td><?= $datos->fecha_nac ?></td>
                            <td><?= $datos->correo ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    <?php }
                    ?>




                    <!-- Agregar más filas según sea necesario -->
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>