<?php
// Obtener el ID del participante desde la URL
$participante_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Participante</title>
</head>
<body>
    <h2>¿Estás seguro de que deseas eliminar este participante?</h2>
    <form action="procesar_eliminar_participante.php" method="post">
        <input type="hidden" name="id" value="<?php echo $participante_id; ?>">
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
