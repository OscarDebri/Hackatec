<!DOCTYPE html>
<html>
<head>
    <title>Panel de Control del Administrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Encabezado del panel de control del administrador -->
    <header class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Panel de Control del Administrador
                </h1>
                <!-- Puedes agregar contenido adicional al encabezado si lo deseas -->
            </div>
        </div>
    </header>

    <!-- Contenido principal del panel -->
    <section class="section">
        <div class="container">
            <!-- Botones para agregar citas, médicos y usuarios -->
            <div class="buttons">
                <a class="button is-primary" href="agregar_cita.php">Agregar Cita</a>
                <a class="button is-primary" href="agregar_medico.php">Agregar Médico</a>
                <a class="button is-primary" href="agregar_usuario.php">Agregar Usuario</a>
            </div>

            <!-- Tabla de Citas Médicas -->
            <h2>Citas Médicas</h2>
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

            // Obtén todas las citas médicas
            $queryCitas = "SELECT * FROM citasmedicas";
            $resultCitas = $conn->query($queryCitas);

            if ($resultCitas->num_rows > 0) {
                echo '<table class="table is-bordered is-striped is-narrow is-hoverable">';
                echo '<thead><tr><th>ID Cita</th><th>ID Usuario</th><th>ID Médico</th><th>Fecha y Hora</th><th>Diagnóstico</th><th>Comentarios</th></tr></thead>';
                echo '<tbody>';
                while ($cita = $resultCitas->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $cita['ID_Cita'] . '</td>';
                    echo '<td>' . $cita['ID_Usuario'] . '</td>';
                    echo '<td>' . $cita['ID_Medico'] . '</td>';
                    echo '<td>' . $cita['FechaHoraCita'] . '</td>';
                    echo '<td>' . $cita['Diagnostico'] . '</td>';
                    echo '<td>' . $cita['Comentarios'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>No hay citas médicas registradas.</p>';
            }

            // Cierra la conexión a la base de datos
            $conn->close();
            ?>

            <!-- Tabla de Médicos -->
            <h2>Médicos</h2>
            <?php
            // Conecta a la base de datos (reemplaza con tus propios datos)
            $conn = new mysqli($servername, $username, $password, $database);

            // Verifica la conexión
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Obtén todos los médicos
            $queryMedicos = "SELECT * FROM medicos";
            $resultMedicos = $conn->query($queryMedicos);

            if ($resultMedicos->num_rows > 0) {
                echo '<table class="table is-bordered is-striped is-narrow is-hoverable">';
                echo '<thead><tr><th>ID Médico</th><th>Nombre</th><th>Apellido</th><th>Especialidad</th><th>Teléfono de Contacto</th><th>Correo Electrónico</th></tr></thead>';
                echo '<tbody>';
                while ($medico = $resultMedicos->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $medico['ID_Medico'] . '</td>';
                    echo '<td>' . $medico['Nombre'] . '</td>';
                    echo '<td>' . $medico['Apellido'] . '</td>';
                    echo '<td>' . $medico['Especialidad'] . '</td>';
                    echo '<td>' . $medico['TelefonoContacto'] . '</td>';
                    echo '<td>' . $medico['CorreoElectronico'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>No hay médicos registrados.</p>';
            }

            // Cierra la conexión a la base de datos
            $conn->close();
            ?>

            <!-- Tabla de Usuarios -->
            <h2>Usuarios</h2>
            <?php
            // Conecta a la base de datos (reemplaza con tus propios datos)
            $conn = new mysqli($servername, $username, $password, $database);

            // Verifica la conexión
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Obtén todos los usuarios
            $queryUsuarios = "SELECT * FROM usuarios";
            $resultUsuarios = $conn->query($queryUsuarios);

            if ($resultUsuarios->num_rows > 0) {
                echo '<table class="table is-bordered is-striped is-narrow is-hoverable">';
                echo '<thead><tr><th>ID Usuario</th><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>Género</th><th>Dirección</th><th>Teléfono</th><th>Correo Electrónico</th><th>Otros Datos</th><th>Username</th><th>Tipo de Usuario</th></tr></thead>';
                echo '<tbody>';
                while ($usuario = $resultUsuarios->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $usuario['ID_Usuario'] . '</td>';
                    echo '<td>' . $usuario['Nombre'] . '</td>';
                    echo '<td>' . $usuario['Apellido'] . '</td>';
                    echo '<td>' . $usuario['FechaNacimiento'] . '</td>';
                    echo '<td>' . $usuario['Genero'] . '</td>';
                    echo '<td>' . $usuario['Direccion'] . '</td>';
                    echo '<td>' . $usuario['Telefono'] . '</td>';
                    echo '<td>' . $usuario['CorreoElectronico'] . '</td>';
                    echo '<td>' . $usuario['OtrosDatos'] . '</td>';
                    echo '<td>' . $usuario['Username'] . '</td>';
                    echo '<td>' . $usuario['TipoUsuario'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>No hay usuarios registrados.</p>';
            }

            // Cierra la conexión a la base de datos
            $conn->close();
            ?>
        </div>
    </section>

    <!-- Pie de página del panel de control del administrador -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                © <?php echo date("Y"); ?> Sistema de Citas Médicas
            </p>
        </div>
    </footer>
</body>
</html>
