<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>


    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    
    

            <form class="datos" action="upload.php" method="POST" enctype="multipart/form-data">

                <h1>ingrese sus datos</h1>

                <div class="form-group">
                    <label for="nombre">nombre</label>
                    <input id="email" name="email" type="text" required="required" class="form-control">
                </div>

                <div class="form-group">
                    <label for="idusuario">Nombre de Usuario</label>
                    <input id="idusuario" name="idusuario" type="text" required="required" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input id="email" name="email" type="email" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="contra">Contraseña</label>
                    <input id="contra" name="contra" type="password" class="form-control" required="required">
                </div>

                <label class="btn" for="custom-file-input">Suba una foto:</label>
                <input id="custom-file-input" name="file" type="file" class="form-control" required="required">
                
                <input type="submit" class="btn" name="Enviar" value="upload"  >
            </form>
</body>
</html>