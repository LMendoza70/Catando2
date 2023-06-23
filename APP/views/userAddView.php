<div class="container">
    <h1>formulario</h1>
    <!-- agregamos el formulario para registrar un usuario -->
    <form action="http://localhost/catando2/?clase=UserController&metodo=Add" method="post">
        <p class="formGrup">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </p>
        <p class="formGrup">
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" name="apaterno" id="apaterno" placeholder="Apellido Paterno">
        </p>
        <p class="formGrup">
            <label for="amaterno">Apellido Materno</label>
            <input type="text" name="amaterno" id="amaterno" placeholder="Apellido Materno">
        </p>
        <p class="formGrup">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        </p>
        <p class="formGrup">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </p>
        <p class="formGrup">
            <label for="sexo">Sexo</label>  
            <select name="sexo" id="sexo">
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
        </p>
        <p class="formGrup">
            <label for="fchNac">Fecha de nacimiento</label>
            <input type="date" name="fchNac" id="fchNac">
        </p>
        <p class="formGrup">
            <input type="submit" value="Guardar">
        </p>
    </form>

</div>