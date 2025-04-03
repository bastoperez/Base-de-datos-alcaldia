<?php
include "includes/config.php";

$sql = "SELECT * FROM documentos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos Subidos</title>
    <link rel="stylesheet" href="static/styles.css">
    
</head>
<body>
    <div class="container">
        <h1>Archivos Subidos</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Oficina</th>
                <th>Motivo</th>
                <th>Descargar</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($row["oficina"]); ?></td>
                <td><?php echo htmlspecialchars($row["motivo"]); ?></td>
                <td><a href="<?php echo $row["archivo"]; ?>" download>Descargar</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a href="index.php"><button>Volver</button></a>
    </div>
</body>
</html>
