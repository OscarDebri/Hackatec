<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión como Paciente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Formulario de inicio de sesión para pacientes -->
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    <h1 class="title">Iniciar Sesión como Paciente</h1>
                    <form action="procesar_login_paciente.php" method="POST">
                        <div class="field">
                            <label class="label">Nombre de Usuario</label>
                            <div class="control">
                                <input class="input" type="text" name="username" placeholder="Nombre de Usuario" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Contraseña</label>
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-primary" type="submit">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
