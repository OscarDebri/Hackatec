<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Agregar Usuario</h1>
            <form action="procesar_agregar_usuario.php" method="POST">
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
                    <label class="label">Fecha de Nacimiento</label>
                    <div class="control">
                        <input class="input" type="date" name="fecha_nacimiento" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Género</label>
                    <div class="control">
                        <input class="input" type="text" name="genero" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Dirección</label>
                    <div class="control">
                        <input class="input" type="text" name="direccion" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Teléfono</label>
                    <div class="control">
                        <input class="input" type="text" name="telefono" required>
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
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="username" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control">
                        <input class="input" type="password" name="contrasena" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Tipo de Usuario</label>
                    <div class="control">
                        <input class="input" type="text" name="tipo_usuario" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Agregar Usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
