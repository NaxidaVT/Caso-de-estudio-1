<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web - Contacto</title>
    <link rel="stylesheet" href="styles.css"> <!-- Verifica que la ruta aquí sea correcta -->
    <script defer src="script.js"></script>
</head>
<body>
    <!-- Encabezado con un logo -->
    <header>
        <img src="logo.jpg" alt="Logo">
        <h1>Contacto</h1>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
        <button id="changeColorButton">Cambiar Color de Fondo</button>

    </nav>

    <div class="container">
        <!-- Formulario de contacto -->
        <section id="contacto">
            <h2>Contacto</h2>
            <form id="contactForm" action="#" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required><br><br>
                <label for="mensaje">Mensaje:</label><br>
                <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Naxida_VT. Todos los derechos son tuyos, pero los momentos que compartimos son nuestros.</p>
        <p>Fecha de hoy: <?php echo date("Y-m-d"); ?></p>
    </footer>
</body>
</html>
