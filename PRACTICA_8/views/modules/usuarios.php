<?php
    //Array que almacena todos los datos traidos de la tabla
    $datoUsuario = array();//Hacer array para los datos
    $datos = new MvcController();//Llamar al controlador
    $datoUsuario = $datos->obtenerUsuarios();//Obtener los datos del usuario
?>

<!--Mostrar la tabla de los usuario mediante una tabla dinamica-->
<table cellpadding="5" border="3">
    <thead>
        <tr bgcolor="#D8F6CE">
            <th>Id</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Correo Electronico</th>
            <th>Modificar Usuario</th>
            <th>Eliminar Usuario</th> 
        </tr>
        
    </thead>
    
    <tbody>

        <!--Este ciclo es para recorrer la tabla de los datos e imprimirla -->
        <?php for($i=0; $i < count($datoUsuario); $i++ ) { ?>
        <tr bgcolor="#E6F8E0">
            <td><?php echo $datoUsuario[$i]['id'] ?></td>
            <td><?php echo $datoUsuario[$i]['usuario'] ?></td>
            <td><?php echo $datoUsuario[$i]['password'] ?></td>
            <td><?php echo $datoUsuario[$i]['email'] ?></td>
            <td><a href="index.php?action=editar&id=<?=$datoUsuario[$i]['id']?>">Modificar</a></td>
            <td><a href="index.php?action=eliminar&id=<?=$datoUsuario[$i]['id']?>">Eliminar</a></td>
        </tr>
        <?php } ?>

    </tbody>
</table>