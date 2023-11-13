<?php
// Consulta para obtener participantes
$sql = "SELECT id, nombre, email FROM participantes";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>{$row['nombre']} - {$row['email']} - <a href='editar_participante.php?id={$row['id']}'>Editar</a></p>";
    }
} else {
    echo "No hay participantes.";
}
?>
<?php
// Consulta para obtener participantes
$sql = "SELECT id, nombre, email FROM participantes";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>{$row['nombre']} - {$row['email']} - <a href='eliminar_participante.php?id={$row['id']}'>Eliminar</a></p>";
    }
} else {
    echo "No hay participantes.";
}
?>
