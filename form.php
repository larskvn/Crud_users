 <!-- Contenido Principal -->
 <div class="container py-4 main-container">
        <div class="row g-4">
            <!-- Formulario de Registro -->
            <div class="col-lg-4">
                <div class="card card-form border-0">
                    <div class="card-body p-4">
                        <h3 class="text-center text-primary mb-4">
                            <i class="bi bi-person-plus me-2"></i>Registro de Persona
                        </h3>
                        <form method="POST">
                            <?php
                            include("model/conexion.php");
                            include("controller/register_person.php");
                            ?>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese su nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"
                                    placeholder="Ingrese su apellido" required>
                            </div>
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni"
                                    placeholder="Ingrese su DNI" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="ejemplo@correo.com" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="btnregister">
                                    <i class="bi bi-save me-1"></i> Registrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>