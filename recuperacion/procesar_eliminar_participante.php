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

// Procesar la eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Eliminar el participante de la base de datos
    $sql = "DELETE FROM participantes WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Participante eliminado con éxito";
    } else {
        echo "Error al eliminar participante: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
