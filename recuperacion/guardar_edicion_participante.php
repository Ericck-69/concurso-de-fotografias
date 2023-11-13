<?php
// Conexión a la base de datos (ajusta los detalles según tu entorno)
$host = 'localhost';
$usuario = 'tu_usuario';
$contrasena = 'tu_contrasena';
$base_datos = 'concurso_fotografias';

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Procesar el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Actualizar datos en la base de datos
    $sql = "UPDATE participantes SET nombre='$nombre', email='$email' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Cambios guardados con éxito";
    } else {
        echo "Error al guardar cambios: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>
