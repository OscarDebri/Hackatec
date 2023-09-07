<!DOCTYPE html>
<html>
<head>
    <title>Agregar Cita Médica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Encabezado del formulario -->
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Agregar Cita Médica
                </h1>
                <!-- Puedes agregar contenido adicional al encabezado si lo deseas -->
            </div>
        </div>
    </section>

    <!-- Contenido principal del formulario -->
    <section class="section">
        <div class="container">
            <form action="procesar_agregar_cita.php" method="POST">
                <div class="field">
                    <label class="label">ID de Usuario</label>
                    <div class="control">
                        <input class="input" type="text" name="id_usuario" placeholder="ID de Usuario" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">ID de Médico</label>
                    <div class="control">
                        <input class="input" type="text" name="id_medico" placeholder="ID de Médico" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Fecha y Hora de la Cita</label>
                    <div class="control">
                        <input class="input" type="datetime-local" name="fecha_hora_cita" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Diagnóstico</label>
                    <div class="control">
                        <textarea class="textarea" name="diagnostico" placeholder="Diagnóstico"></textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Comentarios</label>
                    <div class="control">
                        <textarea class="textarea" name="comentarios" placeholder="Comentarios"></textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Agregar Cita</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Pie de página del formulario -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                © <?php echo date("Y"); ?> Sistema de Citas Médicas
            </p>
        </div>
    </footer>
</body>
</html>
