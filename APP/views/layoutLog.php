<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mi página de administración</title>
  <link rel="stylesheet" href="app/views/styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo">
    </div>
    <h1>Catando Ando Coffee Shop</h1>
  </header>

  <div class="container">
    <nav>
      <ul>
        <li><a href="http://localhost/catando2/">Inicio</a></li>
        <li><a href="http://localhost/catando2/?clase=ProductsController&metodo=index">Productos</a></li>
        <li><a href="http://localhost/catando2/?clase=PresentsController&metodo=index">Presentaciones</a></li>
        <li><a href="http://localhost/catando2/?clase=VarietalsController&metodo=index">Variedades</a></li>
        <li><a href="http://localhost/catando2/?clase=UserController&metodo=index">Usuarios</a></li>
      </ul>
    </nav>

    <section class="content">
      <!-- El contenido de cada sección se cargará aquí -->
      <?php include_once $vista ?>
    </section>
  </div>

  <footer>
    <p>Derechos reservados &copy; 2023</p>
  </footer>
</body>
</html>
