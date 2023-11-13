<?php
// Obtener el ID del participante desde la URL
$participante_id = $_GET['id'];

// Consulta para obtener los datos del participante
$sql = "SELECT id, nombre, email FROM participantes WHERE id = $participante_id";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $participante = $result->fetch_assoc();
} else {
    echo "Participante no encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Participante</title>
</head>
<body>
    <h2>Editar Participante</h2>
    <form action="guardar_edicion_participante.php" method="post">
        <input type="hidden" name="id" value="<?php echo $participante['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $participante['nombre']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $participante['email']; ?>" required>

        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>
