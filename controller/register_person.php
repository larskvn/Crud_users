<?php

if (isset($_POST['btnregister'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && 
    !empty($_POST['dni']) && !empty($_POST['fecha']) && !empty($_POST['correo'])) {
        $nombre = mysqli_real_escape_string($conexcion,$_POST['nombre']);
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexcion->query("INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) VALUES ('$nombre', 
        '$apellido', '$dni', '$fecha', '$correo')");
        

        //$sql = $conexcion->prepare("INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) VALUES (?, ?, ?, ?, ?)");
        //$sql->bind_param("sssss", $nombre, $apellido, $dni, $fecha, $correo);

        if ($sql==1) {
            echo '<div class="alert alert-success"> Persona registrado correctamente</div>';
    
        } else {
            echo '<div class="alert alert-danger"> Error al registrar la persona: ' . $sql->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning"> Todos los campos son obligatorios</div>';
    }
}
?>


 <?php
// Registrar usuario
//if (isset($_POST['registrar'])) {
   /* // Validar que todos los campos estén presentes
    $required_fields = ['nombre', 'apellido', 'correo', 'user', 'pass'];
    $missing_fields = array_diff($required_fields, array_keys($_POST));
    
    if (!empty($missing_fields)) {
        echo '<div class="alert alert-warning">Todos los campos son obligatorios</div>';
        exit;
    }

    // Obtener y sanitizar datos
    $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
    $apellido = mysqli_real_escape_string($conexion, trim($_POST['apellido']));
    $correo = mysqli_real_escape_string($conexion, trim($_POST['correo']));
    $usuario = mysqli_real_escape_string($conexion, trim($_POST['user']));
    $password = $_POST['pass'];

    // Validaciones adicionales
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger">El correo electrónico no es válido</div>';
        exit;
    }

    if (strlen($password) < 8) {
        echo '<div class="alert alert-danger">La contraseña debe tener al menos 8 caracteres</div>';
        exit;
    }

    // Verificar si el usuario ya existe (usando sentencia preparada)
    $sqluser = "SELECT id FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sqluser);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo '<div class="alert alert-warning">El usuario ya existe</div>';
        exit;
    }
    $stmt->close();

    // Encriptar contraseña de forma segura
    $password_encriptada = password_hash($password, PASSWORD_BCRYPT);

    // Insertar información del usuario (usando sentencia preparada)
    $sqlusuario = "INSERT INTO usuarios(Nombre, Apellido, Correo, Usuario, Password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sqlusuario);
    $stmt->bind_param("sssss", $nombre, $apellido, $correo, $usuario, $password_encriptada);
    
    if ($stmt->execute()) {
        echo '<div class="alert alert-success">Registro exitoso</div>';
        // Redirigir después de 2 segundos
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        echo '<div class="alert alert-danger">Error al registrarse: ' . $conexion->error . '</div>';
    }
    $stmt->close();
}
?>*/