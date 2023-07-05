<link rel="stylesheet" href="APP/views/stylesForm.css">
<div class="containerf">
  <h2>Nueva presentacion</h2>
  <form action="http://localhost/catando2/?clase=PresentsController&metodo=Add" method="post">
    <p class="formGroup">
      <label for="desc">Presentacion</label>
      <input type="text" name="desc" id="desc" placeholder="Descripcion" require>
    </p>
    <p class="formGroup">
      <label for="gramos">Gramos</label>
      <input type="number" name="gramos" id="gramos" placeholder="Gramos" require>
    </p>
    <p class="formGroup">
      <input type="submit" value="Guardar">
    </p>
  </form>
</div>
