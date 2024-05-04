<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "apolo23", "dawp3");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$seccion = $_POST['seccion'];

// Insertar el producto en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, edad, seccion) VALUES ('$nombre', '$apellido', '$edad', '$seccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Alumno Agregado";
} else {
    echo "Error al agregar alumno " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
