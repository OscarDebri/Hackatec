<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$database = "citas";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$especialidad = $_POST['especialidad'];
$telefonoContacto = $_POST['telefono_contacto'];
$correoElectronico = $_POST['correo_electronico'];
$otrosDatos = $_POST['otros_datos'];

// Consulta SQL para insertar un nuevo médico en la tabla "medicos"
$sql = "INSERT INTO medicos (Nombre, Apellido, Especialidad, TelefonoContacto, CorreoElectronico, OtrosDatos) VALUES ('$nombre', '$apellido', '$especialidad', '$telefonoContacto', '$correoElectronico', '$otrosDatos')";

if ($conn->query($sql) === TRUE) {
    echo "Médico agregado exitosamente.";
} else {
    echo "Error al agregar el médico: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
