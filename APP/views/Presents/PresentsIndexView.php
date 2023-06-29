<div class="container">
    <h2>Administracion de presentaciones</h2>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut quo nesciunt deleniti recusandae, eaque similique quibusdam quidem odit saepe nemo nam voluptas! Ratione, sint. Magni magnam officiis deleniti culpa corrupti.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium tempore explicabo mollitia illo quis error ratione id, impedit nihil quisquam cumque sapiente provident atque magni! Et libero odit quibusdam consequuntur.
    </p>
    <p>
        <a href="http://localhost/catando2/?clase=PresentsController&metodo=CallFormRegister">Agregar una presentacion</a>
    </p>
    <!-- Aquí puedes incluir el listado de usuarios se llenara con la consulta de usuarios -->
    <table border="1">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Gramos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $dato) {
                echo "<tr>";
                echo "<td>" . $dato['descripcion'] . "</td>";
                echo "<td>" . $dato['gramos'] . "</td>";
                echo "<td>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=CallFormEdit&id=" . $dato['id'] . "'>Editar</a><br>";
                echo "<a href='http://localhost/catando2/?clase=UserController&metodo=Delete&id=" . $dato['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>