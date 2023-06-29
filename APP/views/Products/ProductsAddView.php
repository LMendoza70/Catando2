<link rel="stylesheet" href="APP/views/stylesForm.css">
<div class="containerf">
  <h2>Nuevo Producto</h2>
  <form action="" method="post">
    <p class="formGroup">
      <label for="variedad">Variedad</label>  
      <select name="variedad" id="variedad">
        <option value="1">variedad 1</option>
        <option value="2">variedad 2</option>
      </select>
    </p>
    <p class="formGroup">
      <label for="presentacion">Presentacion</label>  
      <select name="presentacion" id="presentacion">
        <option value="1">presentacion 1</option>
        <option value="2">presentacion 2</option>
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
