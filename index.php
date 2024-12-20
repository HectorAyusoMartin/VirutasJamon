
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Barça - Virtutas de Jamón Ibérico</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <header class="main-header">
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="products.php">Productos</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Bienvenidos a David Barça</h1>
        <p>El auténtico sabor premium, directo de la naturaleza.</p>
        <a href="products.php" class="cta-button">Descubre nuestros productos</a>
        <div class="scroll-indicator">
            <span class="scroll-text">Desplázate hacia abajo</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <section id="parallax" class="parallax-section">
        <div class="parallax-image"></div>
        <div class="overlay-content">
            <h2>Calidad sin comparación</h2>
            <p>Nuestros productos son el reflejo de la tradición y la excelencia.</p>
        </div>
    </section>

    <footer class="main-footer">
        <p>© 2024 David Barça. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
