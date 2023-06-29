<div class="container">
    <h2>Administracion de usuarios</h2>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut quo nesciunt deleniti recusandae, eaque similique quibusdam quidem odit saepe nemo nam voluptas! Ratione, sint. Magni magnam officiis deleniti culpa corrupti.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium tempore explicabo mollitia illo quis error ratione id, impedit nihil quisquam cumque sapiente provident atque magni! Et libero odit quibusdam consequuntur.
    </p>
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
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=CallFormEdit&id=" . $dato['IdUser'] . "'>Editar</a><br>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=Delete&id=" . $dato['IdUser'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>