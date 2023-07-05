<link rel="stylesheet" href="APP/views/stylesForm.css">
<div class="containerf">
  <h2>Nuevo Producto</h2>
  <form action="http://localhost/catando2/?clase=ProductsController&metodo=Add" method="post">
    <p class="formGroup">
      <label for="variedad">Variedad</label>  
      <select name="variedad" id="variedad">
        <?php
          foreach($varietals as $variedad){
            echo "<option value='".$variedad['id']."'>".$variedad['nombre']."</option>";
          }
        ?>
      </select>
    </p>
    <p class="formGroup">
      <label for="presentacion">Presentacion</label>  
      <select name="presentacion" id="presentacion">
        <?php
          foreach($presentations as $presentacion){
            echo "<option value='".$presentacion['id']."'>".$presentacion['descripcion']."</option>";
          }
        ?>
      </select>
    </p>
    <p class="formGroup">
      <label for="precio">Precio</label>
      <input type="number" name="precio" id="precio" placeholder="Precio" require>
    </p>
    <p class="formGroup">
      <input type="submit" value="Guardar">
    </p>
  </form>
</div>
