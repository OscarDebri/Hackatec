<!DOCTYPE html>
<html>
<head>
    <title>Agregar Médico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Agregar Médico</h1>
            <form action="procesar_agregar_medico.php" method="POST">
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" name="nombre" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Apellido</label>
                    <div class="control">
                        <input class="input" type="text" name="apellido" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Especialidad</label>
                    <div class="control">
                        <input class="input" type="text" name="especialidad" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Teléfono de Contacto</label>
                    <div class="control">
                        <input class="input" type="text" name="telefono_contacto" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Correo Electrónico</label>
                    <div class="control">
                        <input class="input" type="email" name="correo_electronico" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Otros Datos</label>
                    <div class="control">
                        <textarea class="textarea" name="otros_datos"></textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Agregar Médico</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
