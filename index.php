<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Citas Médicas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
    <!-- Banner -->
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <img src= banner.jpg alt="logo" class="banner-image" width="350" height="600">
                <style>
    img {
        margin-top: -70px; /* Mover la imagen hacia abajo */
        margin-bottom: -40px; /* Mover la imagen hacia abajo */
        margin-left: 500px; /* Mover la imagen hacia la derecha */
    }
</style>
            </div>
        </div>
    </section>

    <!-- Contenido principal -->
    <section class="section">
        <div class="container">
            <h2 class="title">Inicio de Sesión</h2>
            <div class="columns">
                <div class="column is-one-third">
                    <!-- Enlace al inicio de sesión de pacientes -->
                    <a class="button is-primary" href="pacientes/login_paciente.php">Iniciar Sesión como Paciente</a>
                </div>
                <div class="column is-one-third">
                    <!-- Enlace al inicio de sesión de administradores -->
                    <a class="button is-primary" href="administradores/login_admin.php">Iniciar Sesión como Administrador</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                © <?php echo date("Y"); ?> Sistema de Citas Médicas
            </p>
        </div>
    </footer>
</body>
</html>

