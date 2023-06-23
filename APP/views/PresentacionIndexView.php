<div class="container">
    <h1>Administracion de Presentaciones</h1>
    <p>
        <a href="http://localhost/catando2/?clase=PresentacionController&metodo=CallFormAddPres">Agregar Presentacion</a>
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
                echo "<a href='http://localhost/catando2/?clase=PresentacionController&metodo=CallFormEdit&id=" . $dato['id'] . "'>Editar</a>   ";
                echo "<a href='http://localhost/catando2/?clase=PresentacionController&metodo=Delete&id=" . $dato['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>