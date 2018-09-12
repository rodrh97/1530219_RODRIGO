<?php
//Crea la conexión con una variable llamada conexión y llama a los parametros al puerto, el usuario de la base de datos, la contraseña de la base de datos y el nombre de la base de datos
    $connection = mysqli_connect('localhost', 'root', 'usbw','base_datos');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>REGISTROS</h1>
	<!-- Crea la tabla de los registros -->
	<table border="1" cellpadding="5" cellspacing="5">
            <tr>
            	<!-- Es la primera fila donde se especifica que dato es -->
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Genero</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
                $sql="SELECT * from datos ";//Aqui en una variable asignar la sentencia de Select para seleccionar los datos de la tabla
                $resultado=mysqli_query($connection,$sql);//Aqui se hace la consulta llamando los parametros de la conexión y la consulta
                //Aqui recorre la tabla para mostrar los datos mediante este ciclo while
                while ($mostrar=mysqli_fetch_array($resultado)) {
                    
            ?>
            <tr>
                <td><?php echo $mostrar['Id'];?></td><!-- Manda llamar el valor del Id -->
                <td><?php echo $mostrar['Nombre'];?></td><!-- Manda llamar el valor del Nombre -->
                <td><?php echo $mostrar['Apellido'];?></td><!-- Manda llamar el valor del Apellido -->
                <td><?php echo $mostrar['Genero'];?></td><!-- Manda llamar el valor del Genero -->
                <td><a href="modificar.php?Id=<?php echo $mostrar['Id'];?>">Modificar</a></td><!-- Manda llamar mediante el Id a la pagina de modificar -->
                <td><a href="eliminar.php?Id=<?php echo $mostrar['Id'];?>">Eliminar</a></td><!-- Manda llamar mediante el Id para eliminar el dato asignado -->
            </tr>
            <?php
             }

            ?>
        </table></center>
        <p><a href='Llenar_Formulario.html'>Regresar Formulario Formulario</a></p>
</body>
</html>