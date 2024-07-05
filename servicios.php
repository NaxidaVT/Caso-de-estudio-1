<?php
$servicios = [
"Consultorías",
"Reuniones para propuestas",
"Asesorías en vivo"

];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naxida_VT - Servicios</title>
    <link rel="stylesheet" href="styles.css"> <!-- Verifica que la ruta aquí sea correcta -->
    <script defer src="script.js"></script>
</head>
<body>
    <!-- Encabezado con un logo -->
    <header>
        <img src="logo.jpg" alt="Logo">
        <h1>Servicios</h1>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
        <button id="changeColorButton">Cambiar Color de Fondo</button>
    </nav>

    <div class="container">
        <!-- Sección de servicios -->
        <section id="servicios">
            <h2>Servicios</h2>
            <p>Estamos dedicados a ofrecerte una amplia gama de servicios diseñados específicamente para enriquecer tu experiencia en nuestro canal de Twitch, Naxida_VT.</p>
            <ul>
               <?php
               foreach ($servicios as $s):
               ?>
               <li><?php echo $s ?></li>
               <?php endforeach?>
            </ul>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Naxida_VT. Todos los derechos son tuyos, pero los momentos que compartimos son nuestros.</p>
        <p>Fecha de hoy: <?php echo date("Y-m-d"); ?></p>
    </footer>
</body>
</html>
