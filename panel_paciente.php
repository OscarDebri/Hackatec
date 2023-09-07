<!DOCTYPE html>
<html>
<head>
    <title>Panel del Paciente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Encabezado del panel del paciente -->
    <header class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Panel del Paciente
                </h1>
                <!-- Puedes agregar contenido adicional al encabezado si lo deseas -->
            </div>
        </div>
    </header>

    <!-- Contenido principal del panel -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-two-thirds">
                    <!-- Calendario de citas del paciente (puedes usar una biblioteca como FullCalendar) -->
                    <!-- Aquí debes insertar tu calendario de citas -->
                </div>
                <div class="column">
                    <!-- Datos del paciente -->
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

                    $idPaciente = 'ID_Usuario'; // ID del paciente actual
                    $queryPaciente = "SELECT * FROM usuarios WHERE ID_Usuario = $idPaciente";
                    $resultPaciente = $conn->query($queryPaciente);

                    if ($resultPaciente->num_rows > 0) {
                        $paciente = $resultPaciente->fetch_assoc();
                        echo '<h2>Datos del Paciente</h2>';
                        echo '<p>Nombre: ' . $paciente['Nombre'] . ' ' . $paciente['Apellido'] . '</p>';
                        echo '<p>Fecha de Nacimiento: ' . $paciente['FechaNacimiento'] . '</p>';
                        echo '<p>Género: ' . $paciente['Genero'] . '</p>';
                        echo '<p>Dirección: ' . $paciente['Direccion'] . '</p>';
                        echo '<p>Teléfono: ' . $paciente['Telefono'] . '</p>';
                        echo '<p>Correo Electrónico: ' . $paciente['CorreoElectronico'] . '</p>';
                        echo '<p>Otros Datos: ' . $paciente['OtrosDatos'] . '</p>';
                    }

                    // Obtén las citas médicas pendientes del paciente
                    $queryCitas = "SELECT * FROM citasmedicas WHERE ID_Usuario = $idPaciente";
                    $resultCitas = $conn->query($queryCitas);

                    if ($resultCitas->num_rows > 0) {
                        echo '<h2>Citas Médicas Pendientes</h2>';
                        echo '<table class="table is-bordered is-striped is-narrow is-hoverable">';
                        echo '<thead><tr><th>ID Cita</th><th>ID Médico</th><th>Fecha y Hora</th><th>Diagnóstico</th><th>Comentarios</th></tr></thead>';
                        echo '<tbody>';
                        while ($cita = $resultCitas->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $cita['ID_Cita'] . '</td>';
                            echo '<td>' . $cita['ID_Medico'] . '</td>';
                            echo '<td>' . $cita['FechaHoraCita'] . '</td>';
                            echo '<td>' . $cita['Diagnostico'] . '</td>';
                            echo '<td>' . $cita['Comentarios'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo '<p>No hay citas médicas pendientes.</p>';
                    }

                    // Cierra la conexión a la base de datos
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página del panel del paciente -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                © <?php echo date("Y"); ?> Sistema de Citas Médicas
            </p>
        </div>
    </footer>
</body>
</html>
