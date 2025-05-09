<?php
session_start();

// Redirige al dashboard si ya está logueado
if (isset($_SESSION['user'])) {
    header("Location: ../pages/dashboard.php");
    exit();
}

// Validación del login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['username'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    // Credenciales estáticas
    $user_valido = 'admin';
    $pass_valido = 'a123';

    if ($correo === $user_valido && $contrasena === $pass_valido) {
        $_SESSION['user'] = $correo; // Guarda el correo en la sesión
        header("Location: dashboard.php"); // Redirige al dashboard
        exit();
    } else {
        $error = "Credenciales incorrectas."; // Muestra el mensaje de error
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <title>Registro</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .bg-image {
        background: url('../assets/image/bg-register.svg') center/cover no-repeat;
        position: relative;
        overflow: hidden;
    }

    /* Efecto cristal más transparente */
    .glass-effect {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(212, 188, 188, 0);
        /* Más transparente */
        backdrop-filter: blur(1px) brightness(1.05);
        /* Menos blur y poco brillo */
        -webkit-backdrop-filter: blur(8px) brightness(1.05);
        pointer-events: none;
        z-index: 1;
        box-shadow:
            inset 0 0 15px rgba(255, 255, 255, 0.1);
        /* Sombra más suave */
    }

    /* Efecto de reflejo mejorado */
    .glass-effect::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(to bottom right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0) 40%,
                rgba(255, 255, 255, 0.15) 50%,
                rgba(255, 255, 255, 0) 60%,
                rgba(255, 255, 255, 0) 100%);
        transform: rotate(25deg);
        animation: lightReflection 8s infinite ease-in-out;
        z-index: 2;
        opacity: 0.7;
    }

    /* Borde sutil para efecto de vidrio */
    .glass-effect::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 1px solid rgba(255, 255, 255, 0.1);
        pointer-events: none;
        z-index: 3;
    }

    /* Keyframes mejorados para la animación */
    @keyframes lightReflection {
        0% {
            transform: translate(-30%, -30%) rotate(25deg);
        }

        50% {
            transform: translate(30%, 30%) rotate(25deg);
        }

        100% {
            transform: translate(-30%, -30%) rotate(25deg);
        }
    }

    .icon-color {
        color: #534A45
    }

    .icon-color:hover {
        color: #23A6F0;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Columna izquierda (Imagen que ocupa todo su lado) -->
            <div class="col-md p-0 position-relative bg-image">
                <!-- Capa de efecto cristal -->
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="z-index: 2;">
                    <a href="../index.php" class="d-flex justify-content-center align-items-center text-decoration-none ">
                        <img src="../assets/image/logo.svg" alt="logo de la empresa">
                        <h1 class="d-flex m-3 text-white">AIFT</h1>
                    </a>
                    <h3 class="text-light fw-lighter">Artificial Intelligence for Two</h3>
                </div>
                <div class="position-absolute bottom-0 start-50 translate-middle-x text-center text-white" style="z-index: 2;">
                    <ul class="list-unstyled d-flex justify-content-center justify-content-md-start gap-3">
                        <li>
                            <a href="#" class="fs-4 d-inline-flex justify-content-center align-items-center bg-white text-dark border border-5 rounded-3"
                                style="width: 40px; height: 40px;  border-width: 5px;">
                                <i class="bi bi-facebook icon-color"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="fs-4 d-inline-flex justify-content-center align-items-center bg-white text-dark border border-5 rounded-3"
                                style="width: 40px; height: 40px;  border-width: 5px;">
                                <i class="bi bi-instagram icon-color"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="fs-4 d-inline-flex justify-content-center align-items-center bg-white text-dark border border-5 rounded-3"
                                style="width: 40px; height: 40px;  border-width: 5px;">
                                <i class="bi bi-twitter icon-color"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="glass-effect"></div>


            </div>
            <!-- Columna derecha (Formulario) -->
            <div class="col-md-6  text-secudary p-5 d-flex justify-content-center align-items-center">

                <div class="col-md-8 mx-auto bg-white p-3 rounded shadow-sm" style="background-color: rgba(255, 255, 255, 0.8);">
                    <h2 class="text-center">Iniciar sesión</h2>
                    <p class="text-center">Complete los campos para iniciar sesión</p>
                    <hr>
                    <form method="POST">
                        <?php
                        if (isset($error)) {
                            echo "<div class='alert alert-danger text-center'>$error</div>";
                        }
                        ?>

                        <?php
                        include("../model/conexion.php");
                        ?>
                        <div class="mb-3">
                            <label class="col-form-label">Usuario</label>
                            <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" name="contrasena" class="form-control" aria-describedby="passwordHelpBlock" required>
                            <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">

                            <button type="submit" class="btn btn-primary" name="btnregister">Iniciar sesión</button>
                        </div>
                    </form>
                    <hr>
                    <p class="text-center ">¿No tienes una cuenta?<a href="../pages/register.php" style="cursor: pointer; text-decoration: none; transition: 0.3s; font-weight: bold;"
                            onmouseover="this.style.textDecoration='underline'; this.style.color='#0056b3';"
                            onmouseout="this.style.textDecoration='none'; this.style.color='';"> Registrarse</a></p>
                    <!-- Enlace para abrir el modal -->
                    <p class="text-center">
                        ¿Olvidaste tu contraseña?
                        <span class="text-primary" data-bs-toggle="modal" data-bs-target="#recuperarModal" style="cursor: pointer; text-decoration: none; transition: 0.3s; font-weight: bold;"
                            onmouseover="this.style.textDecoration='underline'; this.style.color='#0056b3';"
                            onmouseout="this.style.textDecoration='none'; this.style.color='';">Recuperar contraseña</span>
                    </p>

                    <!-- Modal de Bootstrap -->
                    <div class="modal fade" id="recuperarModal" tabindex="-1" aria-labelledby="recuperarModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="recuperarModalLabel">Recuperar Contraseña</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Introduce tu correo electrónico para recuperar tu contraseña.</p>
                                    <input type="email" class="form-control" placeholder="Correo electrónico">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap JS (necesario para que funcione el modal) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>