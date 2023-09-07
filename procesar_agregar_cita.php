<?php
// Conecta a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$database = "citas";

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recibe los datos del formulario
$id_usuario = $_POST['id_usuario'];
$id_medico = $_POST['id_medico'];
$fecha_hora_cita = $_POST['fecha_hora_cita'];
$diagnostico = $_POST['diagnostico'];
$comentarios = $_POST['comentarios'];

// Consulta SQL para insertar la cita médica
$sql = "INSERT INTO citasmedicas (ID_Usuario, ID_Medico, FechaHoraCita, Diagnostico, Comentarios)
        VALUES ('$id_usuario', '$id_medico', '$fecha_hora_cita', '$diagnostico', '$comentarios')";

if ($conn->query($sql) === TRUE) {
    echo "Cita médica agregada con éxito.";
} else {
    echo "Error al agregar la cita médica: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
