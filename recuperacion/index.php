<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<h2>Agregar Participante</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <input type="submit" value="Agregar Participante">
    </form>

    <h2>Agregar Categoría</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" required>

        <input type="submit" value="Agregar Categoría">
    </form>
</body>
</html>
    <div class="box"> 
        <span class="borderLine">
            
        </span>
<form   action="inicioSesion.php" method="POST" enctype="multipart/form-data">
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo($_GET['error']);
                ?>
            </p>
        <?php
            }
        ?>
        <h2>Iniciar Sesión</h2>


        <label for="idusuario">usuario</label>
        <div class="inputbox">
        <input  type="text" name="idusuario" id="idusuario" placeholder="Usuario">
        </div>
        <div class="inputbox">
        <label for="contra">Contraseña</label>
        <input  type="password" name="contra" id="contra" placeholder="Contraseña">
        </div>
        <br>
        <a class="link" href="Registrar_usuario.php">¿No tienes cuenta?</a>
        <br>
        <button name="submit" type="submit" class="btn" btn-primary>iniciar sesion</button>
    </form>

    </div>


   
</body>
</html>
