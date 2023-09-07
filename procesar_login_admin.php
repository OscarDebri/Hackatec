<?php
// Inicia la sesión (asegúrate de que esta línea esté al principio del archivo)
session_start();

// Tus datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "citas";

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recibe los datos del formulario
$Username = $_POST['username'];
$Contraseña = $_POST['password'];

// Consulta SQL para verificar si el usuario es un administrador
$sql = "SELECT * FROM usuarios WHERE Username = '$Username' AND Contraseña = '$Contraseña' AND TipoUsuario = 'administrador'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // El usuario es un administrador, establece una variable de sesión para identificarlo
    $_SESSION['admin'] = true;
    header("Location: panel_admin.php"); // Redirige al panel de administrador
    exit();
} else {
    // El usuario no es un administrador, puedes redirigirlo a otra página de inicio de sesión o mostrar un mensaje de error
    header("Location: login_admin.php"); // Redirige a la página de inicio de sesión de administradores
    exit();
}

// Cierra la conexión a la base de datos
$conn->close();
?>
