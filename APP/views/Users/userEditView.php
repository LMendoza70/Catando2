<link rel="stylesheet" href="APP/views/stylesForm.css">
<div class="containerf">
  <h2>formulario</h2>
  <form action="http://localhost/catando2/?clase=UserController&metodo=Update" method="post" enctype="multipart/form-data">
    <p class="formGroup">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?= $datos['Nombre'] ?>" require>
    </p>
    <p class="formGroup">
      <label for="apaterno">Apellido Paterno</label>
      <input type="text" name="apaterno" id="apaterno" placeholder="Apellido Paterno" value="<?= $datos['ApPaterno'] ?>" require>
    </p>
    <p class="formGroup">
      <label for="amaterno">Apellido Materno</label>
      <input type="text" name="amaterno" id="amaterno" placeholder="Apellido Materno" value="<?= $datos['ApMaterno'] ?>" require>
    </p>
    <p class="formGroup">
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" id="usuario" placeholder="Usuario" value="<?= $datos['Usuario'] ?>" require>
    </p>
    <p class="formGroup">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password" value="<?= $datos['Password'] ?>" require>
    </p>
    <p class="formGroup">
      <label for="sexo">Sexo</label>
      <select name="sexo" id="sexo">
        <option value="1">Hombre</option>
        <option value="2">Mujer</option>
      </select>
    </p>
    <p class="formGroup">
      <label for="fchNac">Fecha de nacimiento</label>
      <input type="date" name="fchNac" id="fchNac" value="<?= $datos['FchNacimiento'] ?>" require>
    </p>
    <p>
      <label for="avatar">Avatar:</label>
      <input type="file" name="avatar" id="avatar" accept="image/*" />
    </p>
    <input type="hidden" name="id" value="<?= $datos['IdUser'] ?>">
    <input type="hidden" name="ava" value="<?= $datos['Avatar'] ?>">
    <p class="formGroup">
      <input type="submit" value="Guardar">
    </p>
  </form>
</div>