<?php
$Controlador = new NewController();
$datosAlumnos = array();
$datosAlumnos = $Controlador -> obtenerDatosAlumnos();
?>

<h3>Registro de alumnos</h3>
<hr>

<div class="card">
    <div class="card-header" style="background-color: #A9A9F5;"> <strong> Registro de alumnos </strong> </div>
    <div class="card-body" style="background-color: #CECEF6;">
        
        <table class="table table-striped" border="2" cellpadding="2">
            <thead>
                <tr>
                    
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Situacion</th>
                    <th>Correo</th>
                    <th>Tutor</th>
                    <th>Foto</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    
                    for($i=0; $i < count($datosAlumnos); $i++ ){
                        echo '<tr>';
                            echo '<td>'. $datosAlumnos[$i]['matricula'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['nombre'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['carrera'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['situacion'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['correo'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['tutor'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['foto'] .'</td>';
                            
                            echo '<td> <a href="index.php?action=editar_alumno&id='.$datosAlumnos[$i]['matricula'].'" type="button" class="btn btn-primary"> Modificar </a> </td>';
                            
                            echo '<td>  <a href="index.php?action=eliminar_alumno&id='.$datosAlumnos[$i]['matricula'].'" type="button"  class="btn btn-danger"> Eliminar  </a> </td>';
                        echo '<tr>';
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php

if(isset($_GET['action'])) {
    if( $_GET['action'] == "eliminar_alumno"){
        $Controlador -> eliminarAlumno();
    }
}
?>