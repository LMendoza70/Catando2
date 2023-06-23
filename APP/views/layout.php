<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catando ando Coffee Shop</title>
    <link rel="stylesheet" href="APP/views/styles.css">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir el encabezado de la página, como el logo, el menú de navegación, etc. -->
        <h1>Catando ando Coffee Shop</h1>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Productos</a></li>
                <li><a href="">Variedades</a></li>
                <li><a href="">Publicaciones</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Ingresar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Aquí puedes incluir los productos destacados, las categorías, ofertas, etc. -->
        <?php include_once($vista); ?>
    </main>

    <footer>
        <!-- Aquí puedes incluir el pie de página con enlaces adicionales, información de contacto, etc. -->
        <p>© 2020 Catando ando Coffee Shop</p>
    </footer>
</body>
</html>
