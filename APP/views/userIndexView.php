<div class="container">
    <h1>Administracion de usuarios</h1>
    <p>
        <a href="http://localhost/catando2/?clase=UserController&metodo=CallFormRegister">Agregar usuario</a>
    </p>
    <!-- Aquí puedes incluir el listado de usuarios se llenara con la consulta de usuarios -->
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $dato) {
                echo "<tr>";
                echo "<td>" . $dato['Nombre'] . "</td>";
                echo "<td>" . $dato['ApPaterno'] . "</td>";
                echo "<td>" . $dato['ApMaterno'] . "</td>";
                echo "<td>" . $dato['Usuario'] . "</td>";
                echo "<td>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=CallFormEdit&id=" . $dato['IdUser'] . "'>Editar</a>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=Delete&id=" . $dato['IdUser'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            /*
            foreach ($datos ) {
                echo "<tr>";
                echo "<td>" . $dato['nombre'] . "</td>";
                echo "<td>" . $dato['apaterno'] . "</td>";
                echo "<td>" . $dato['amaterno'] . "</td>";
                echo "<td>" . $dato['usuario'] . "</td>";
                echo "<td>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=CallFormEdit&id=" . $value['id'] . "'>Editar</a>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=Delete&id=" . $value['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }  */  
            ?>
        </tbody>
    </table>
</div>