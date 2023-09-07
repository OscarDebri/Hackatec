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
$fechaNacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correoElectronico = $_POST['correo_electronico'];
$otrosDatos = $_POST['otros_datos'];
$username = $_POST['username'];
$contrasena = $_POST['contrasena'];
$tipoUsuario = $_POST['tipo_usuario'];

// Consulta SQL para insertar un nuevo usuario en la tabla "usuarios"
$sql = "INSERT INTO usuarios (Nombre, Apellido, FechaNacimiento, Genero, Direccion, Telefono, CorreoElectronico, OtrosDatos, Username, Contraseña, TipoUsuario) VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$direccion', '$telefono', '$correoElectronico', '$otrosDatos', '$username', '$contrasena', '$tipoUsuario')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado exitosamente.";
} else {
    echo "Error al agregar el usuario: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
