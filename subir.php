<?php
include "includes/config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $archivo = $_FILES["archivo"];
    $oficina = $_POST["oficina"];
    $motivo = $_POST["motivo"];

    if ($archivo["error"] == 0) {
        $directorio = "uploads/";
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }

        $rutaArchivo = $directorio . basename($archivo["name"]);
        move_uploaded_file($archivo["tmp_name"], $rutaArchivo);

        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO documentos (nombre, archivo, oficina, motivo) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $archivo["name"], $rutaArchivo, $oficina, $motivo);
            $stmt->execute();
            $stmt->close();
            echo "Archivo subido y datos guardados correctamente.";
        } else {
            echo "Error en la preparación de la consulta.";
        }
    } else {
        echo "Error al subir el archivo.";
    }
} else {
    echo "Método no permitido.";
}

$conn->close();
?>
