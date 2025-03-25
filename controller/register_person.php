<?php

if (isset($_POST['btnregister'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['fecha']) && !empty($_POST['correo'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        $sql = $conexcion->prepare("INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $nombre, $apellido, $dni, $fecha, $correo);

        if ($sql->execute()) {
            echo '<div class="alert alert-success"> Persona registrado correctamente</div>';
    
        } else {
            echo '<div class="alert alert-danger"> Error al registrar la persona: ' . $sql->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning"> Todos los campos son obligatorios</div>';
    }
}
?>