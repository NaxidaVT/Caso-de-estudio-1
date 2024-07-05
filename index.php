<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naxida_VT - Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <!-- Encabezado con un logo -->
    <header>
        <img src="logo.jpg" alt="Logo">
        <h1>Bienvenido a Naxida_VT</h1>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
    <button id="changeColorButton">Cambiar Color de Fondo</button>
    </nav>

    <div class="container">
        <!-- Párrafo de bienvenida -->
        <section id="bienvenida">
            <p>¡Bienvenido a Naxida_VT! Estamos aquí para ofrecerte los mejores servicios relacionados con nuestro canal de Twitch, Naxida_VT.</p>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Naxida_VT. Todos los derechos son tuyos, pero los momentos que compartimos son nuestros.</p>
        <p>Fecha de hoy: <?php echo date("Y-m-d"); ?></p>
    </footer>
</body>
</html>
