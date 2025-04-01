<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update</title>
</head>

<body>

    <div class="col-md-4 mx-auto mt-5">
        <div class="modal-body">
            <form method="POST">
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


                <div class="modal-footer d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary"> Close</a>
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary" name="btnregister">Send User</button>
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>