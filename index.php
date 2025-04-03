<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina TIC</title>
    <link rel="stylesheet" href="static/styles.css">
</head>
<body>
    <img src="static/alcaldia.png" class="top-left-image" alt="Logo Alcaldía">
    <div class="container">
        <img src="static/logo.png" class="logo" alt="Logo Oficina TIC">
        
        <h1>Bienvenido a la Oficina TIC</h1>
        <p>Sube archivos, selecciona la oficina y el motivo.</p>
        
        <form action="subir.php" method="post" enctype="multipart/form-data">
            <label for="archivo">Seleccione archivo:</label>
            <input type="file" id="archivo" name="archivo" required>
            <div class="form-group">
                <label for="oficina">Oficina:</label>
                <input type="text" id="oficina" name=" oficina" required>
            </div>

            <label for="motivo">Motivo:</label>
            <select id="motivo" name="motivo" required>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Actualización de Infraestructura">Actualización de Infraestructura</option>
                <option value="Actualización de Lógica de Red">Actualización de Lógica de Red</option>
            </select>

            <button type="submit">Subir Archivo</button>
        </form>

        <a href="ver.php"><button>Ver Archivos</button></a>
    </div>
</body>
</html>
