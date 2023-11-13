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

// Procesar el formulario de participantes
if (isset($_POST['nombre']) && isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "INSERT INTO participantes (nombre, email) VALUES ('$nombre', '$email')";
    $conexion->query($sql);
}

// Procesar el formulario de categorías
if (isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categorias (nombre_categoria) VALUES ('$categoria')";
    $conexion->query($sql);
}

// Cerrar la conexión
$conexion->close();

// Redirigir al formulario
header("Location: formulario_concurso.php");
exit();
?>



