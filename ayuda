para poder ejecutar el programa debe de tener installado xamp y activar apache junto con my sql,descargar la carpeta y guardar en PS C:\xampp\htdocs\"nombre del proyecto que quieras crear"> 
para ver el funcionamiento se uso php my admin
la cual se creo una base de datos llamada oficina_tic y se creo la base de datos llamada documentos usando:
CREATE DATABASE IF NOT EXISTS oficina_tic;
USE oficina_tic;

CREATE TABLE IF NOT EXISTS documentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    archivo VARCHAR(255) NOT NULL,
    oficina VARCHAR(255) NOT NULL,
    motivo VARCHAR(255) NOT NULL,
    fecha_subida TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
