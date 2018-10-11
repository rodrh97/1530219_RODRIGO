<?php

$Controlador = new NewController();

$datosAlumno = array();

$datosAlumno = $Controlador -> obtenerDatosAlumno();

?>

<h3>Editar usuario</h3>
<hr>


 <div class="card">

    <div class="card-header" style="background-color: #EFFBFB;"> <strong> Datos del Alumno </strong> </div>
    <div class="card-body" style="background-color: #E0F2F7;">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="matriculaAlumno">Matricula</label>
                <input type="text" class="form-control" name="matriculaAlumno" placeholder="Matricula del Alumno" required>
            </div>
            
            <div class="form-group">
                <label for="nombreAlumno">Nombre</label>
                <input type="text" class="form-control" name="nombreAlumno" placeholder="Nombre del Alumno" required>
            </div>

            <div class="form-group">
                <label for="carreraAlumno">Carrera</label>
                <select class="form-control" name="carreraAlumno" required>
                    <option value="ITI">ITI</option>
                    <option value="ISA">ISA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="situacionAlumno">Situacion Academica</label>
                <select class="form-control" name="situacionAlumno" required>
                    <option value="R">Regular</option>
                    <option value="E">Especial</option>
                </select>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correoAlumno" placeholder="matricula@upv.edu.mx" required>
            </div>

            
            <div class="form-group">
                <label for="tutor">Tutor</label>
                <input type="text" name="tutorAlumno" placeholder="Nombre del tutor" required>
            </div>


            <div class="form-group">
                <label for="fotoAlumno">Fotografia:</label> <br>
                <input type="file" class="form-control" name="fotoAlumno"  />
            </div>


            <input type="submit" class="btn btn-success" value="Guardar Datos" />

        </form>

    </div>
</div>

<?php

if(isset($_POST['nombreAlumno'])){
        
    $Controlador -> editarDatosAlumno();

}


?>